<?php
    
     /**
	 * Elgg Pubmed Key Publications view page
	 *
	 * Author Fautloos <m_welkers@hotmail.com>
	 * Copyright Fautloos 2009
	 */
	
	unset($xmlKeyPub);	
	unset($pmid1);
	unset($pmid2);
	unset($pmid3);
	unset($query);
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// This part is for fetching the variables, and creating a query.///////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//Some required params
	$pmid1 = $vars['entity']->pmid_1;
	$pmid2 = $vars['entity']->pmid_2;
	$pmid3 = $vars['entity']->pmid_3;
		 
	//Combine the input to form a search query
	if(!empty($pmid1)){
		$query = $pmid1 . '[uid]';
	}
	
	if(!empty($query) && !empty($pmid2)){
		$query .= ' or ' . $pmid2 . '[uid]';
	} elseif(!empty($pmid2)) {
		$query = $pmid2 . '[uid]';
	}
	
	if(!empty($query) && !empty($pmid3)){
		$query .= ' or ' . $pmid3 . '[uid]';
	} elseif(!empty($pmid3)){
		$query = $pmid3 . '[uid]';
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($query){
		//This will start a call to the NCBI website
		$params = array(
			'db' => 'pubmed',
			'retmode' => 'xml',
			'retmax' => 3,
			'usehistory' => 'y',
			'term' => $query,
		);
		
		$xmlKey = simplexml_load_file('http://eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi?' . http_build_query($params));
		
		$params = array(
			'db' => 'pubmed',
			'retmode' => 'xml',
			'query_key' => (string) $xmlKey->QueryKey,
			'WebEnv' => (string) $xmlKey->WebEnv,
			'retmax' => (int) $xmlKey->Count,
		);
		
		$urlKey = 'http://eutils.ncbi.nlm.nih.gov/entrez/eutils/efetch.fcgi?' . http_build_query($params);
		
		//Save the results in a local XML file (is not necessary)
		$keyxml = new ElggFile();
		$keyxml->owner_guid = page_owner();
		$keyxml->setFilename("keypub.xml");
		
		$keyxml->open("write");
		$keyxml->write(file_get_contents($urlKey));
		$keyxml->close();
		
		//Show an error if there is no dynamic XML file
		if(!$KeyArticleSet = simplexml_load_file($urlKey)){
			trigger_error('Error reading XML file',E_USER_ERROR);
		}
	}//Closes the call to the NCBI website and the XML data is stored in a local file

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// This part is for parsing the results and storing them in separate array's.///////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//Only continue if there is a result
	if($KeyArticleSet){
		//Empty the variable that contain all the data for the looping of the articles.
		unset($KeyArticleData);
		unset($AllKeyArticlesData);
				
		//Ok, First off, we want to know how many results there are in total
		$counter = 0;
		
		//Secondly, lets loop through the papers and store the results in array's
		foreach($KeyArticleSet->PubmedArticle as $Article){
			$counter++;
			//Before we even start we must first empty all variables!
			unset($PMID);
			unset($Title);
			unset($Journal);
			unset($Volume);
			unset($Issue);
			unset($PublishedYear);
			unset($Pages);		
			unset($Author);
			unset($AllAuthors);
			
			//Extract the basic data for each article
			$PMID			=	$Article->MedlineCitation->PMID;
			$Title			=	$Article->MedlineCitation->Article->ArticleTitle;
			$Journal		=	$Article->MedlineCitation->Article->Journal->Title;
			$Volume			=	$Article->MedlineCitation->Article->Journal->JournalIssue->Volume;
			$Issue			=	$Article->MedlineCitation->Article->Journal->JournalIssue->Issue;
			$PublishedYear	=	$Article->MedlineCitation->Article->Journal->JournalIssue->PubDate->Year;
			$Pages			=	$Article->MedlineCitation->Article->Pagination->MedlinePgn;
			
			//Because each article has multiple authors we will loop through them.
			foreach($Article->MedlineCitation->Article->AuthorList->Author as $Author){
				//Sometimes author field has a collective name descriptor (large cohorts) which I'm not interested in.
				//I am only interested in individual authors entered as Fore- and LastName
				if((!empty($Author->LastName)) && (!empty($Author->ForeName))){
					unset($FirstName);
					unset($LastName);
					
					$FirstName = $Author->ForeName;
					$LastName = $Author->LastName;
					
					$AllAuthors[] = $LastName . ', ' . $FirstName;	
				}
			}
			
			
			//Before we go to the next article I want to store all this article's data in a multi-dimensional array.
			$KeyArticleData=array(
				"PMID" => $PMID,
				"Title" => $Title,
				"Journal" => $Journal,
				"Volume" => $Volume,
				"Issue" => $Issue,
				"PublishedYear" => $PublishedYear,
				"Pages" => $Pages, 	
				"Authors" => $AllAuthors,
			);
			
			//Now we store that multi-dimensional array in another array. This way you can loop through each article and retrieve data from each individual article.
			$AllKeyArticlesData[] = $KeyArticleData;
			
		}//closes the foreach loop that loops through each article
		
	}//Closes the loop that goes through the PubmedArticleSet

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// This part is for displaying the messages when either the Pubmed name is not entered /////////////////////////
	// or when there are no results for the entered Pubmed name.                           /////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	// If the page owner did not enter a Pubmed name then we will display that.
	if(!$pmid1){    
		echo "<div class=\"contentWrapper\"><p>" . elgg_echo("pubmed:notset") . ".</p></div>";
	}
	
	//If the entered Pubmed name hasn't got any publications we will display that.
	if($pmid1 && $counter == 0){
		echo "<div class=\"contentWrapper\">";
		echo "<div id=\"pubmed_widget\">";
		echo "<ul id=\"pubmed_update_list\"></ul>";
		echo "<p class=\"visit_pubmed\">" . elgg_echo("pubmed:widget:keypublications:view:no_results") . "</p>";
		echo "</div></div>";
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// The next part is for retrieving the results from the $AllArticlesData variable and displaying ///////////////
	// them in separate div's in the page. /////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//First, we again check if the Pubmedname was entered, that there are results to display and that $AllArticlesData contains data and all collecting variables are empty.
	if(($pmid1) && $counter !== 0 && !empty($AllKeyArticlesData)){
		echo "<div class=\"contentWrapper\">";
		echo "<div id=\"pubmed_widget\">";
		//echo "<ul id=\"pubmed_update_list\"></ul>";
		
		$i = 0;
		while (($i < count($AllKeyArticlesData))){
			echo "<div class='pubmed_widget_item'>";
			
			// Icon
			echo "<span class='pubmed_widget_icon'></span>";
			
//			if($AllKeyArticlesData[$i]["PMID"]){
//				echo "<p class=\"visit_pubmed\">";
//				echo "<a href=\"http://www.ncbi.nlm.nih.gov/pubmed?term=" . $AllKeyArticlesData[$i]["PMID"] . "\"target='_blank'>" . $AllKeyArticlesData[$i]["Title"] . "</a>";
//				echo  "</p>";
//			}
			
			if($AllKeyArticlesData[$i]["Authors"]){
				foreach($AllKeyArticlesData[$i]["Authors"] as $DisplayAuthor){   
					echo "<i>" . $DisplayAuthor . "; </i>";
					$metaAuthors[] = $DisplayAuthor;
				} 
			}
			
			echo "<br />";
			
			if($AllKeyArticlesData[$i]["PMID"] && $AllKeyArticlesData[$i]["Title"]){
				//echo $AllKeyArticlesData[$i]["Title"] . "<br/>";
				echo "<a href=\"http://www.ncbi.nlm.nih.gov/pubmed?term=" . $AllKeyArticlesData[$i]["PMID"] . "\" target='_blank'>" . $AllKeyArticlesData[$i]["Title"] . "</a>";
				echo "<br />";							
			}
			
			if($AllKeyArticlesData[$i]["Journal"]){
				echo "<b>" . $AllKeyArticlesData[$i]["Journal"] . "</b> ";
			}
			
			if($AllKeyArticlesData[$i]["PublishedYear"]){
				echo $AllKeyArticlesData[$i]["PublishedYear"] . ";";							
			}
			
			if($AllKeyArticlesData[$i]["Volume"]){
				echo $AllKeyArticlesData[$i]["Volume"] . " ";							
			}
			
			if($AllKeyArticlesData[$i]["Issue"]){
				echo "(" . $AllKeyArticlesData[$i]["Issue"] . ")";
			}
			
			if($AllKeyArticlesData[$i]["Pages"]){
				echo ":" . $AllKeyArticlesData[$i]["Pages"] . "<br/>";							
			}
			
			$i++;
		}
	}
?>
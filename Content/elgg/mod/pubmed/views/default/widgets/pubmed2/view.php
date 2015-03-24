<?php
    
     /**
	 * Elgg Pubmed publications view page
	 *
	 * Author Fautloos <m_welkers@hotmail.com>
	 * Copyright Fautloos 2009
	 */

	unset($username);
	unset($term);
	unset($pubmed_num);
	unset($show_publications);
	unset($query);
	unset($xmlPubmed);	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// This part is for fetching the variables, creating a query and receiving and storing the results./////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
	//Some required params
	$username = $vars['entity']->pubmed_username;
	$term = $vars['entity']->pubmed_term;
	$pubmed_num = $vars['entity']->pubmed_num;
	$show_publications = $pubmed_num - 1;
	 
	//Combine the input to form a search query
	if($username){
		$query = $username . '[Author]';
	}

	if($query && $term){
		$query .= ' AND ("' . $term . '"[MeSH Terms] OR "' . $term . '"[All Fields])';
	}

	if($username){
		//This will start a call to the NCBI website
		$params = array(
			'db' => 'pubmed',
			'retmode' => 'xml',
			'retmax' => 1,
			'usehistory' => 'y',
			'term' => $query,
		);
		
		$xml = simplexml_load_file('http://eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi?' . http_build_query($params));
		
		$params = array(
			'db' => 'pubmed',
			'retmode' => 'xml',
			'query_key' => (string) $xml->QueryKey,
			'WebEnv' => (string) $xml->WebEnv,
			'retmax' => $pubmed_num, //(int) $xml->Count,
		 );
		 
		$url = 'http://eutils.ncbi.nlm.nih.gov/entrez/eutils/efetch.fcgi?' . http_build_query($params);
		
		//Save the results in a local XML file (is not necessary)
		$pubxml = new ElggFile();
		$pubxml->owner_guid = page_owner();
		$pubxml->setFilename("pubmed.xml");
		
		$pubxml->open("write");
		$pubxml->write(file_get_contents($url));
		$pubxml->close();
		
		//Show an error if there is no dynamic XML file
		if(!$PubmedArticleSet = simplexml_load_file($url)){
			trigger_error('Error reading XML file', E_USER_ERROR);
		}
	}//Closes the call to the NCBI website and the XML data is stored in a local file

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// This part is for parsing the results and storing them in separate array's.///////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//Only continue if there is a result
	if($PubmedArticleSet){
		//Empty the variable that contain all the data for the looping of the articles.
		unset($ArticleData);
		unset($AllArticlesData);
		
		//Ok, First off, we want to know how many results there are in total
		$counter = 0;
		
		//Secondly, lets loop through the papers and store the results in array's
		foreach($PubmedArticleSet->PubmedArticle as $Article){
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
			unset($Chemical);
			unset($ChemicalList);
			unset($MeshTerm);
			unset($MeshTermList1);
			unset($MeshTermQualifier);
			unset($MeshTermList2);
			unset($MeshTermsAll);
			unset($UniqueMeshTermsAll);
			
			//Extract the basic data for each article
			if(!empty($Article->MedlineCitation->PMID)){
				$PMID = $Article->MedlineCitation->PMID;
			}
			if(!empty($Article->MedlineCitation->Article->ArticleTitle)){
				$Title = $Article->MedlineCitation->Article->ArticleTitle;
			}
			if(!empty($Article->MedlineCitation->Article->Journal->Title)){
				$Journal = $Article->MedlineCitation->Article->Journal->Title;
			}
			if(!empty($Article->MedlineCitation->Article->Journal->JournalIssue->Volume)){
				$Volume = $Article->MedlineCitation->Article->Journal->JournalIssue->Volume;
			}
			if(!empty($Article->MedlineCitation->Article->Journal->JournalIssue->Issue)){
				$Issue = $Article->MedlineCitation->Article->Journal->JournalIssue->Issue;
			}
			if(!empty($Article->MedlineCitation->Article->Journal->JournalIssue->PubDate->Year)){
				$PublishedYear = $Article->MedlineCitation->Article->Journal->JournalIssue->PubDate->Year;
			}
			if(!empty($Article->MedlineCitation->Article->Pagination->MedlinePgn)){
				$Pages = $Article->MedlineCitation->Article->Pagination->MedlinePgn;
			}
			
			//Because each article has multiple authors we will loop through them.
			foreach($Article->MedlineCitation->Article->AuthorList->Author as $Author){
				//Sometimes author field has a collective name descriptor (large cohorts) which I'm not interested in.
				//I am only interested in individual authors entered as Fore- and LastName
				if((!empty($Author->LastName))and(!empty($Author->ForeName))){
					unset($FirstName);
					unset($LastName);
					
					$FirstName = $Author->ForeName;
					$LastName = $Author->LastName;
					$AllAuthors[] = $LastName . ', ' . $FirstName;	
				}
			}
			
			//Because not all articles have a chemical list we will only loop through it if it exists. 
			if($Article->MedlineCitation->ChemicalList){
				foreach($Article->MedlineCitation->ChemicalList->Chemical as $Chemical){   
					$ChemicalList[]=$Chemical->NameOfSubstance;
				}
			}
			
			//Because not all articles have a MESH term list we will only loop through it if it exists.
			if($Article->MedlineCitation->MeshHeadingList){
				foreach($Article->MedlineCitation->MeshHeadingList->MeshHeading as $MeshTerm){
					//Without a subqualifier
					if(!($MeshTerm->QualifierName)){
						$MeshTermList1[] = $MeshTerm->DescriptorName;
					}
					//With a subqualifier
					if($MeshTerm->QualifierName){
						//There might be several so loop through them and make the Mesh terms
						foreach($MeshTerm->QualifierName as $MeshTermQualifier){   
							$MeshTermList2[]= $MeshTerm->DescriptorName . '/' . $MeshTermQualifier;
						} 					
					}
				}
				
				$MeshTermsAll = array_merge($MeshTermList1,$MeshTermList2);
				$UniqueMeshTermsAll = array_unique($MeshTermsAll);
			}//closes the MESH-term loop
			
			
			//Before we go to the next article I want to store all this article's data in a multi-dimensional array.
			$ArticleData = array(
				"PMID" => $PMID,
				"Title" => $Title,
				"Journal" => $Journal,
				"Volume" => $Volume,
				"Issue" => $Issue,
				"PublishedYear" => $PublishedYear,
				"Pages" => $Pages, 	
				"Authors" => $AllAuthors,
				"Chemicals" => $ChemicalList,
				"MeshTerms" => $UniqueMeshTermsAll
			);
			//Now we store that multi-dimensional array in another array. This way you can loop through each article and retrieve data from each individual article.
			$AllArticlesData[] = $ArticleData;
		}//closes the foreach loop that loops through each article
	}//Closes the loop that goes through the PubmedArticleSet

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// This part is for displaying the messages when either the Pubmed name is not entered /////////////////////////
	// or when there are no results for the entered Pubmed name.                           /////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// If the page owner did not enter a Pubmed name then we will display that.
	if(!$username){   
		echo "<div class=\"contentWrapper\"><p>" . elgg_echo("pubmed:notset") . ".</p></div>";
	}
	
	//If the entered Pubmed name hasn't got any publications we will display that.
	if($username && $counter == 0){
		echo "<div class=\"contentWrapper\">";
		echo "<div id=\"pubmed_widget\">";
		echo "<ul id=\"pubmed_update_list\"></ul>";
		echo "<p class=\"visit_pubmed\">" . elgg_echo("pubmed:widget:pubmed:view:no_results") . "</p>";
		echo "</div></div>";
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// The next part is for retrieving the results from the $AllArticlesData variable and displaying ///////////////
	// them in separate div's in the page. /////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//First, we again check if the Pubmedname was entered, that there are results to display and that $AllArticlesData contains data and all collecting variables are empty.
	unset($metaAuthors);
	unset($metaChemicals);
	unset($metaMesh);
	unset($uniqueAuthors);
	unset($uniqueChemicals);
	unset($uniqueMeshTerms);

	if(($username) && $counter !== 0 && !empty($AllArticlesData)){
		echo "<div class=\"contentWrapper\">";
		echo "<div id=\"pubmed_widget\">";
		//echo "<ul id=\"pubmed_update_list\"></ul>";
		
		$i = 0;
		while (($i <= $pubmed_num - 1) && ($i <= count($AllArticlesData) - 1)){
			echo "<div class='pubmed_widget_item'>";
			
			// Icon
			echo "<span class='pubmed_widget_icon'></span>";
			
//			if($AllArticlesData[$i]["PMID"]){
//				echo "<p class=\"visit_pubmed\">";
//				echo "<a href=\"http://www.ncbi.nlm.nih.gov/pubmed?term=" . $AllArticlesData[$i]["PMID"] . "\" target='_blank'>" . $AllArticlesData[$i]["Title"] . "</a>";
//				echo "</p>";
//			}
			
			if($AllArticlesData[$i]["Authors"]){
				foreach($AllArticlesData[$i]["Authors"] as $DisplayAuthor){   
					echo "<i>". $DisplayAuthor . "; </i>";
					$metaAuthors[] = $DisplayAuthor;
				} 
			}
			
			echo "<br />";
			
			if($AllArticlesData[$i]["PMID"] && !empty($AllArticlesData[$i]["Title"])){
				//echo $AllArticlesData[$i]["Title"] . "<br/>";
				echo "<a href=\"http://www.ncbi.nlm.nih.gov/pubmed?term=" . $AllArticlesData[$i]["PMID"] . "\" target='_blank'>" . $AllArticlesData[$i]["Title"] . "</a>";
				echo "<br />";							
			}
			
			if(!empty($AllArticlesData[$i]["Journal"])){
				echo "<b>" . $AllArticlesData[$i]["Journal"] . "</b> ";
			}
			
			if(!empty($AllArticlesData[$i]["PublishedYear"])){
				echo $AllArticlesData[$i]["PublishedYear"] . ";";							
			}
			
			if(!empty($AllArticlesData[$i]["Volume"])){
				echo $AllArticlesData[$i]["Volume"] . " ";							
			}
			
			if(!empty($AllArticlesData[$i]["Issue"])){
				echo "(" . $AllArticlesData[$i]["Issue"] . ")";						
			}
			
			if(!empty($AllArticlesData[$i]["Pages"])){
				echo ":" . $AllArticlesData[$i]["Pages"] . "<br/>";							
			}
			
			foreach($AllArticlesData[$i]["Chemicals"] as $DisplayChemicals){   
				//echo "Chemical: ".$DisplayChemicals."<br/>";
				$metaChemicals[] = $DisplayChemicals;
			}
			
			foreach($AllArticlesData[$i]["MeshTerms"] as $DisplayMeshTerms){
				//echo "MeshTerm: ".$DisplayMeshTerms."<br/>";
				$metaMesh[] = $DisplayMeshTerms;
			}
			
			echo "</div>";
			
			$i++;
		}
	}

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// The last part is for storing the metadata of the displayed results as metadata for the user. ////////////////
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	//Determine the owner of the page
	$page_owner = page_owner_entity()->guid;
	//Store the data as metadata!
	$user = get_entity($page_owner);
	
	$uniqueAuthors = array_unique($metaAuthors);
	$uniqueChemicals = array_unique($metaChemicals);
	$uniqueMeshTerms = array_unique($metaMesh);
	
	$user->fellowauthors = $uniqueAuthors;
	$user->chemicals = $uniqueChemicals; 
	$user->meshterms = $uniqueMeshTerms;
?>
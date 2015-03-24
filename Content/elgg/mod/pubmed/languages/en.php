<?php

	$english = array(
	
		'item:object:meshterms' => 'Mesh Terms',
		'item:object:chemicals' => 'Chemicals',
		'item:object:fellowauthors' => 'Authors',
	
		/**
		 * Pubmed widget details
		 */
		'pubmed:widget:pubmed:title' => "Latest publications",
		'pubmed:widget:pubmed:description' => "This are your publications.",
		
		'pubmed:widget:pubmed:edit:disclaimer' => "This plugin performs a live search on Pubmed with the name you enter. Wrong publications? Try to limit the results by adding an additional search term.",
		'pubmed:widget:pubmed:edit:username' => "Pubmed name",
		'pubmed:widget:pubmed:edit:term' => "Additional search term",
		'pubmed:widget:pubmed:edit:number' => "How many articles do you want to show?",
		
		'pubmed:widget:pubmed:view:no_results' => "Sorry, no papers matching your query were found on Pubmed.",
		
		'pubmed:notset' => 'This pubmed widget is not yet set to go. To display your latest publications, click on - edit - and fill in your details',

		/**
		 * Keypublications widget details
		 */
		'pubmed:widget:keypublications:title' => "Key publications",
		'pubmed:widget:keypublications:description' => "This are your key publications.",
	
		'pubmed:widget:keypublications:edit:PMID1' => 'Enter your pubmed PMID #1 (eg. 20452521)',
		'pubmed:widget:keypublications:edit:PMID2' => 'Enter your pubmed PMID #2',
		'pubmed:widget:keypublications:edit:PMID3' => 'Enter your pubmed PMID #3',
		
		'pubmed:widget:keypublications:view:no_results' => "Sorry, I couldn't find any papers that matched your input.",
		
		 /**
	     * Pubmed widget river
	     **/
	        
        //generic terms to use
        'pubmed:river:created' => "%s added the pubmed widget.",
        'pubmed:river:updated' => "%s updated their pubmed widget.",
        'pubmed:river:delete' => "%s removed their pubmed widget.",

		//Remove metadata
		'pubmed:stats:title' => "Pubmed metadata manager",
		'pubmed:stats:clear' => "Clear your metadata from Pubmed",
		'pubmed:stats:warning' => "This will delete your metadata values from Pubmed.",
		'pubmed:stats:confirm' => "Are you sure you wish to delete your metadata (Meshterms, Substances and Fellow Authors)?",
		'pubmed:deleted' => "Your metadata has been deleted.",
		'pubmed:notdeleted' => "We were not able to delete all your metadata.",

	);
					
	add_translation("en", $english);
?>
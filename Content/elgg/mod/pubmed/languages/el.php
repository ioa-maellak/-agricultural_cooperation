<?php

	$greek = array(
	
		'item:object:meshterms' => 'Όροι Mesh',
		'item:object:chemicals' => 'Χημικά',
		'item:object:fellowauthors' => 'Συγγραφείς',
	
		/**
		 * Pubmed widget details
		 */
		'pubmed:widget:pubmed:title' => "Τελευταίες δημοσιεύσεις",
		'pubmed:widget:pubmed:description' => "Αυτές είναι οι δημοσιεύσεις σας.",
		
		'pubmed:widget:pubmed:edit:disclaimer' => "Αυτό το πρόσθετο εκτελεί μια αναζήτηση στο Pubmed με το όνομα που εισάγετε. Λάθος δημοσιεύσεις; Προσπαθείστε να περιορίσετε τα αποτελέσματα προσθέτοντας έναν επιπλέον όρο αναζήτησης.",
		'pubmed:widget:pubmed:edit:username' => "Όνομα στο Pubmed",
		'pubmed:widget:pubmed:edit:term' => "Επιπλέον όροι αναζήτησης",
		'pubmed:widget:pubmed:edit:number' => "Πόσα άρθρα θέλετε να εμφανίζονται;",
		
		'pubmed:widget:pubmed:view:no_results' => "Συγγνώμη, δε βρέθηκαν papers στο Pubmed που να ταιριάζουν στο ερώτημά σας.",
		
		'pubmed:notset' => 'Αυτό το widget του pubmed δεν είναι ακόμα έτοιμο. Για να εμφανίσετε τις τελευταίες δημοσιεύσεις, πατήστε στο -επεξεργασία- και συμπληρώστε τις λεπτομέρειες σας',

		/**
		 * Keypublications widget details
		 */
		'pubmed:widget:keypublications:title' => "Σημαντικές δημοσιεύσεις",
		'pubmed:widget:keypublications:description' => "Αυτές είναι οι σημαντικές σας δημοσιεύσεις.",
	
		'pubmed:widget:keypublications:edit:PMID1' => 'Εισάγετε την pubmed PMID #1 (eg. 20452521)',
		'pubmed:widget:keypublications:edit:PMID2' => 'Εισάγετε την pubmed PMID #2',
		'pubmed:widget:keypublications:edit:PMID3' => 'Εισάγετε την pubmed PMID #3',
		
		'pubmed:widget:keypublications:view:no_results' => "Συγγνώμη, δεν μπορέσαμε να βρούμε papers που να ταιριάζουν στην είσοδό σας.",
		
		 /**
	     * Pubmed widget river
	     **/
	        
        //generic terms to use
        'pubmed:river:created' => "Ο %s πρόσθεσε το pubmed widget.",
        'pubmed:river:updated' => "Ο %s ανανέωσε το pubmed widget τους.",
        'pubmed:river:delete' => "Ο %s αφαίρεσε το pubmed widget τους.",

		//Remove metadata
		'pubmed:stats:title' => "Διαχειριστής Pubmed μέτα-δεδομένων",
		'pubmed:stats:clear' => "Καθαρίστε τα μέτα-δεδομένα σας από το Pubmed",
		'pubmed:stats:warning' => "Αυτό θα διαγράψει τις τιμές των μετα-δεδομένων σας από το Pubmed.",
		'pubmed:stats:confirm' => "Είστε σίγουρος ότι θέλετε να διαγράψετε τα μετα-δεδομένα σας (όροι Mesht, Ουσίες και Συγγραφείς);",
		'pubmed:deleted' => "Τα μετα-δεδομένα σας έχουν διαγραφεί.",
		'pubmed:notdeleted' => "Δεν μπορέσαμε να διαγράψουμε όλα τα μετα-δεδομένα σας.",

	);
					
	add_translation("el", $greek);
?>
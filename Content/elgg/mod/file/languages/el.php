<?php
/**
 * Elgg file plugin language pack
 *
 * @package ElggFile
 */

$greek = array(

	/**
	 * Menu items and titles
	 */
	'file' => "Αρχεία",
	'file:user' => "Τα αρχεία του %s",
	'file:friends' => "Τα αρχεία των συνεργατών",
	'file:all' => "Όλα τα αρχεία της ιστοσελίδας",
	'file:edit' => "Επεξεργασία αρχείων",
	'file:more' => "Περισσότερα αρχεία",
	'file:list' => "εμφάνιση λίστας",
	'file:group' => "Αρχεία περιστατικού",
	'file:gallery' => "εμφάνιση συλλογής",
	'file:gallery_list' => "Εμφάνιση συλλογής ή λίστας",
	'file:num_files' => "Αριθμός αρχείων προς εμφάνιση",
	'file:user:gallery'=>'Εμφάνιση της συλλογής του %s',
	'file:upload' => "Ανεβάστε ένα αρχείο",
	'file:replace' => 'Αντικατάσταση περιεχομένου αρχείου (αφήστε κενό για να μην αλλαχθεί το αρχείο)',
	'file:list:title' => "Το %s του %s %s",
	'file:title:friends' => "Συνεργάτες'",

	'file:add' => 'Ανεβάστε ένα αρχείο',

	'file:file' => "Αρχείο",
	'file:title' => "Τίτλος",
	'file:desc' => "Περιγραφή",
	'file:tags' => "Λέξεις κλειδιά",

	'file:list:list' => 'Αλλαγή στην εμφάνιση λίστας',
	'file:list:gallery' => 'Αλλαγή στην εμφάνιση συλλογής',

	'file:types' => "Τύποι ανεβασμένων αρχείων",

	'file:type:' => 'Αρχεία',
	'file:type:all' => "Όλα τα αρχεία",
	'file:type:video' => "Βίντεο",
	'file:type:document' => "Έγγραφα",
	'file:type:audio' => "Ήχου",
	'file:type:image' => "Εικόνες",
	'file:type:general' => "Γενικά",

	'file:user:type:video' => "Τα βίντεο του %s",
	'file:user:type:document' => "Τα έγγραφα του %s",
	'file:user:type:audio' => "Τα αρχεία ήχου του %s",
	'file:user:type:image' => "Οι εικόνες του %s",
	'file:user:type:general' => "Τα γενικά αρχεία του %s",

	'file:friends:type:video' => "Τα βίντεο των συνεργατών σας",
	'file:friends:type:document' => "Τα έγγραφα των συνεργατών σας",
	'file:friends:type:audio' => "Τα αρχεία ήχου των συνεργατών σας",
	'file:friends:type:image' => "Οι εικόνες των συνεργατών σας",
	'file:friends:type:general' => "Τα γενικά αρχεία των συνεργατών σας",

	'file:widget' => "Widget αρχείων",
	'file:widget:description' => "Δείξτε τα τελευταία σας αρχεία",

	'groups:enablefiles' => 'Ενεργοποίηση αρχείων περιστατικού',

	'file:download' => "Κατεβάστε το",

	'file:delete:confirm' => "Είστε σίγουρος ότι θέλετε να διαγράψετε αυτό το αρχείο;",

	'file:tagcloud' => "Σύννεφο λέξεων κλειδιών",

	'file:display:number' => "Αριθμός αρχείων προς εμφάνιση",

	'river:create:object:file' => 'Ο %s ανέβασε το αρχείο %s',
	'river:comment:object:file' => 'Ο %s σχολίασε το αρχείο %s',

	'item:object:file' => 'Αρχεία',

	'file:newupload' => 'Ένα νέο αρχείο έχει ανέβει',
	'file:notification' =>
'Ο %s ανέβασε ένα καινούριο αρχείο:

%s
%s

Δείτε και σχολιάστε το νέο αρχείο:
%s
',

	/**
	 * Embed media
	 **/

		'file:embed' => "Ενσωματωμένα μέσα",
		'file:embedall' => "Όλα",

	/**
	 * Status messages
	 */

		'file:saved' => "Το αρχείο σας αποθηκεύτικε επιτυχώς.",
		'file:deleted' => "Το αρχείο σας διαγράφηκη επιτυχώς.",

	/**
	 * Error messages
	 */

		'file:none' => "Δεν υπάρχουν αρχεία.",
		'file:uploadfailed' => "Συγγνώμη, δεν μπορέσαμε να σώσουμε το αρχείο σας.",
		'file:downloadfailed' => "Συγγνώμη, αυτό το αρχείο δεν είναι διαθέσιμο αυτή τη χρονική στιγμή.",
		'file:deletefailed' => "Το αρχείο σας δεν μπόρεσε να διαγραφεί.",
		'file:noaccess' => "Δεν έχετε άδεια να αλλάξετε αυτό το αρχείο",
		'file:cannotload' => "Υπήρξε ένα σφάλμα κατά το ανέβασμα του αρχείου",
		'file:nofile' => "Πρέπει να επιλέξετε ένα αρχείο",
);

add_translation("el", $greek);
<?php
/**
 * Bookmarks English language file
 */

$greek = array(

	/**
	 * Menu items and titles
	 */
	'bookmarks' => "Σελιδοδείκτες",
	'bookmarks:add' => "Προσθήκη σελιδοδείκτη",
	'bookmarks:edit' => "Επεξεργασία σελιδοδείκτη",
	'bookmarks:owner' => "Οι σελιδοδείκτες του %s's",
	'bookmarks:friends' => "Οι σελιδοδείκτες των συνεργατών",
	'bookmarks:everyone' => "Όλοι οι σελιδοδείκτες του ιστότοπου",
	'bookmarks:this' => "Προσθέστε αυτή τη σελίδα στους σελιδοδείκτες",
	'bookmarks:this:group' => "Σελιδοδείκτης στο %s",
	'bookmarks:bookmarklet' => "Λάβετε βοηθητική εφαρμογή σελιδοδείκτη",
	'bookmarks:bookmarklet:group' => "Λάβετε βοηθητική εφαρμογή σελιδοδείκτη για το περιστατικό",
	'bookmarks:inbox' => "Εισερχόμενοι σελιδοδείκτες",
	'bookmarks:morebookmarks' => "Περισσότεροι σελιδοδείκτες",
	'bookmarks:more' => "Περισσότερα",
	'bookmarks:with' => "Μοιραστείτε με",
	'bookmarks:new' => "Ένας νέος σελιδοδείκτης",
	'bookmarks:address' => "Διεύθυνση του σελιδοδείκτη",
	'bookmarks:none' => 'Δεν υπάρχουν σελιδοδείκτες',

	'bookmarks:notification' =>
'Ο %s πρόσθεσε ένα νέο σελιδοδείκτη:

%s - %s
%s

Δείτε και σχολιάστε το νέο σελιδοδείκτη:
%s
',

	'bookmarks:delete:confirm' => "Είστε σίγουρος ότι θέλετε να διαγράψετε αυτή την πηγή;",

	'bookmarks:numbertodisplay' => 'Αριθμός σελιδοδεικτών προς εμφάνιση',

	'bookmarks:shared' => "Προστέθηκε στους σελιδοδείκτες",
	'bookmarks:visit' => "Επίσκεψη πηγής",
	'bookmarks:recent' => "Πρόσφατοι σελιδοδείκτες",

	'river:create:object:bookmarks' => 'Ο %s πρόσθεσε στους σελιδοδείκτες το %s',
	'river:comment:object:bookmarks' => 'Ο %s σχολίασε ένα σελιδοδείκτη %s',
	'bookmarks:river:annotate' => 'ένα σχόλιο σε αυτό το σελιδοδείκτη',
	'bookmarks:river:item' => 'ένα αντικείμενο',

	'item:object:bookmarks' => 'Σελιδοδείκτες',

	'bookmarks:group' => 'Σελιδοδείκτες περιστατικού',
	'bookmarks:enablebookmarks' => 'Ενεργοποίηση σελιδοδεικτών περιστατικού',
	'bookmarks:nogroup' => 'Αυτό το περιστατικό δεν έχει ακόμα σελιδοδείκτες',
	'bookmarks:more' => 'Περισσότεροι σελιδοδείκτες',

	'bookmarks:no_title' => 'Δεν υπάρχει τίτλος',

	/**
	 * Widget and bookmarklet
	 */
	'bookmarks:widget:description' => "Εμφάνιση των τελευταίων σας σελιδοδεικτών.",

	'bookmarks:bookmarklet:description' =>
			"Η βοηθητική εφαρμογή σελιδοδείκτη σας επιτρέπει να μοιράζεστε όποιες πηγές βρείτε στο διαδύκτυο με τους συνεργάτες σας ή απλά να τις προσθέσετε στους σελιδοδείκτες σας για προσωπική χρήση. Για να το χρησιμοποιήσετε, απλα τραβήξτε το παρακάτω κουμπί στην μπάρα συνδέσμων του φυλλομετρητή σας:",

	'bookmarks:bookmarklet:descriptionie' =>
			"Αν χρησιμοποιείτε Internet Explorer, θα πρέπει να κάνετε δεξί κλικ στο εικονίδιο σελιδοδεικτών, να επιλέξετε 'προσθήκη στα αγαπημένα' και μετά την μπάρα συνδέσμων.",

	'bookmarks:bookmarklet:description:conclusion' =>
			"Μετά μπορείτε να αποθηκεύετε κάθε σελίδα που επισκέπτεστε πατώντας κλικ σε αυτή οποιαδήποτε στιγμή.",

	/**
	 * Status messages
	 */

	'bookmarks:save:success' => "Το αντικείμενο σας προστέθηκε επιτυχώς στους σελιδοδείκτες.",
	'bookmarks:delete:success' => "Ο σελιδοδείκτης σας διαγράφηκε.",

	/**
	 * Error messages
	 */

	'bookmarks:save:failed' => "Ο σελιδοδείκτης σας δεν μπόρεσε να σωθεί. Σιγουρευτείτε ότι έχετε εισάγει τίτλο και διεύθυνση και ξαναπροσπαθήστε.",
	'bookmarks:save:invalid' => "Η διεύθυνση του σελιδοδείκτη δεν είναι έγκυρη και δεν μπόρεσε να αποθηκευτεί.",
	'bookmarks:delete:failed' => "Ο σελιδοδείκτης σας δεν μπόρεσε να διαγραφεί. Παρακαλώ δοκιμάστε ξανά.",
);

add_translation('el', $greek);
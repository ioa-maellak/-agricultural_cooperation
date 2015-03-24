<?php
/**
* Elgg send a message action page
* 
* @package ElggMessages
*/

$greek = array(
	/**
	* Menu items and titles
	*/

	'messages' => "Μηνύματα",
	'messages:unreadcount' => "%s μη διαβασμένα",
	'messages:back' => "πίσω στα μηνύματα",
	'messages:user' => "Τα εισερχόμενα του %s",
	'messages:posttitle' => "Τα μηνύματα του %s: %s",
	'messages:inbox' => "Εισερχόμενα",
	'messages:send' => "Αποστολή",
	'messages:sent' => "Απεσταλμένο",
	'messages:message' => "Μήνυμα",
	'messages:title' => "Θέμα",
	'messages:to' => "Προς",
	'messages:from' => "Από",
	'messages:fly' => "Αποστολή",
	'messages:replying' => "Μήνυμα απάντηση σε",
	'messages:inbox' => "Εισερχόμενα",
	'messages:sendmessage' => "Αποστολή μηνύματος",
	'messages:compose' => "Δημιουργία μηνύματος",
	'messages:add' => "Δημιουργία μηνύματος",
	'messages:sentmessages' => "Αποστολή μηνυμάτων",
	'messages:recent' => "Πρόσφατα μηνύματα",
	'messages:original' => "Αρχικό μήνυμα",
	'messages:yours' => "Το μήνυμά σας",
	'messages:answer' => "Απάντηση",
	'messages:toggle' => 'Εναλλαγή όλων',
	'messages:markread' => 'Σημείωσε ως διαβασμένο',
	'messages:recipient' => 'Επιλέξτε έναν παραλήπτη&hellip;',
	'messages:to_user' => 'Προς: %s',

	'messages:new' => 'Νέο μήνυμα',

	'notification:method:site' => 'Ιστότοπος',

	'messages:error' => 'Παρουσιάστηκε κάποιο πρόβλημα κατά την αποθήκευση του μηνύματός σας. Παρακαλώ δοκιμάστε ξανά.',

	'item:object:messages' => 'Μηνύματα',

	/**
	* Status messages
	*/

	'messages:posted' => "Το μήνυμά σας στάλθηκε επιτυχώς.",
	'messages:success:delete:single' => 'Το μήνυμα διαγράφηκε',
	'messages:success:delete' => 'Τα μηνύματα διαγράφηκαν',
	'messages:success:read' => 'Τα μηνύματα σημειώθηκαν ως διαβασμένα',
	'messages:error:messages_not_selected' => 'Δεν επιλέχθηκαν μηνύματα',
	'messages:error:delete:single' => 'Το μήνυμα δεν μπόρεσε να διαγραφεί',

	/**
	* Email messages
	*/

	'messages:email:subject' => 'Έχετε νεό μήνυμα!',
	'messages:email:body' => "Έχετε νέο μήνυμα από %s. Γράφει:


	%s


	Για να δείτε τα μηνύματά σας, πατήστε εδώ:

	%s

	Για να στείλετε ένα μήνυμα στον %s, πατήστε εδώ:

	%s

	Δεν μπορείτε να απαντήσετε σε αυτό το email.",

	/**
	* Error messages
	*/

	'messages:blank' => "Συγγνώμη, πρέπει να βάλετε κάτι στην περιοχή μηνύματος πριν να μπορούμε να το σώσουμε.",
	'messages:notfound' => "Συγγνώμη, δεν μπορέσαμε να βρούμε το συγκεκριμένο μήνυμα.",
	'messages:notdeleted' => "SΣυγγνώμη, δεν μπορέσαμε να διαγράψουμε αυτό το μήνυμα.",
	'messages:nopermission' => "Δεν έχετε άδεια να αλλάξετε αυτό το μήνυμα.",
	'messages:nomessages' => "Δεν υπάρχουν μηνύματα.",
	'messages:user:nonexist' => "Δεν μπορέσαμε να βρούμε τον παραλήπτη στη βάση δεδομένων των χρηστών.",
	'messages:user:blank' => "Δεν επιλέξατε παραλήπτη.",

	'messages:deleted_sender' => 'Διαγραφή χρήστη',

);
		
add_translation("el", $greek);
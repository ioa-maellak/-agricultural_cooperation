<?php
/**
 * Elgg log rotator language pack.
 *
 * @package ElggLogRotate
 */

$greek = array(
	'logrotate:period' => 'Πόσο συχνά πρέπει το αρχείο συμβάντων του συστήματος να αποθηκεύεται;',

	'logrotate:weekly' => 'Μια φορά την εβδομάδα',
	'logrotate:monthly' => 'Μια φορά το μήνα',
	'logrotate:yearly' => 'Μια φορά το χρόνο',

	'logrotate:logrotated' => "Το αρχείο συμβάντων εναλλάχθηκε\n",
	'logrotate:lognotrotated' => "Λάθος κατά την εναλλαγή του αρχείου συμβάντων\n",
	
	'logrotate:delete' => 'Διαγραφή αποθηκευμένων αρχείων συμβάντων πιο παλιά από',

	'logrotate:week' => 'βδομάδα',
	'logrotate:month' => 'μήνα',
	'logrotate:year' => 'χρόνο',
		
	'logrotate:logdeleted' => "Το αρχείο συμβάντων διαγράφηκε\n",
	'logrotate:lognotdeleted' => "Λάθος κατά τη διαγραφή αρχείου συμβάντων\n",
);

add_translation("el", $greek);

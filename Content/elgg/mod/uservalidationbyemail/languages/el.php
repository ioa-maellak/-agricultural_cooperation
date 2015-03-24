<?php
/**
 * Email user validation plugin language pack.
 *
 * @package Elgg.Core.Plugin
 * @subpackage ElggUserValidationByEmail
 */

$greek = array(
	'admin:users:unvalidated' => 'Μη επικυρωμένο',
	
	'email:validate:subject' => "%s παρακαλώ επιβεβαίωσε τη διεύθυνση email σου για %s!",
	'email:validate:body' => "%s,

Πριν να μπορέσετε να ξεκινήσετε να χρησιμοποιείται το %s, πρέπει να επιβεβαιώσετε τη διεύθυνση email σας.

Παρακαλώ επιβεβαιώστε τη διεύθυνση email σας πατώντας στον παρακάτω σύνδεσμο:

%s

Αν δεν μπορείτε να πατήσετε στον σύνδεσμο, αντιγράψτε και επικολήστε το στον φυλλομετρητή σας χειροκίνητα.

%s
%s
",
	'email:confirm:success' => "Έχετε επιβεβαιώσει τη διεύθυνση email σας!",
	'email:confirm:fail' => "Η διεύθυνση email σας δεν μπόρεσε να επαληθευτεί...",

	'uservalidationbyemail:registerok' => "Για να ενεργοποιήσετε το λογαριασμό σας, παρακαλώ επιβεβαιώστε τη διεύθυνση email σας πατώντας στον σύνδεσμο που μόλις σας στείλαμε.",
	'uservalidationbyemail:login:fail' => "Ο λογαριασμός σας δεν έχει επαληθευτεί οπότε η απόπειρα σύνδεσης απέτυχε. Έχει σταλεί καινούριο email επιβεβαίωσης.",

	'uservalidationbyemail:admin:no_unvalidated_users' => 'Δεν υπάρχουν μη επικυρωμένοι χρήστες.',

	'uservalidationbyemail:admin:unvalidated' => 'Μη επικυρωμένος',
	'uservalidationbyemail:admin:user_created' => 'Εγγεγραμμένος %s',
	'uservalidationbyemail:admin:resend_validation' => 'Επαναποστολή επιβεβαίωσης',
	'uservalidationbyemail:admin:validate' => 'Επιβεβαίωση',
	'uservalidationbyemail:admin:delete' => 'Διαγραφή',
	'uservalidationbyemail:confirm_validate_user' => 'Επιβεβαίωση %s;',
	'uservalidationbyemail:confirm_resend_validation' => 'Επαναποστολή email επιβεβαίωσης στον %s;',
	'uservalidationbyemail:confirm_delete' => 'Διαγραφή %s;',
	'uservalidationbyemail:confirm_validate_checked' => 'Επιβεβαίωση επιλεγμένων χρηστών;',
	'uservalidationbyemail:confirm_resend_validation_checked' => 'Επαναποστολή επιβεβαίωσης στους επιλεγμένους χρήστες;',
	'uservalidationbyemail:confirm_delete_checked' => 'Διαγραφή επιλεγμένων χρηστών;',
	'uservalidationbyemail:check_all' => 'Όλοι',

	'uservalidationbyemail:errors:unknown_users' => 'Άγνωστοι χρήστερς',
	'uservalidationbyemail:errors:could_not_validate_user' => 'Δεν μπόρεσε να γίνει επιβεβαίωση χρήστη.',
	'uservalidationbyemail:errors:could_not_validate_users' => 'Δεν μπόρεσαν να επιβεβαιωθούν όλοι οι επιλεγμένοι χρήστες.',
	'uservalidationbyemail:errors:could_not_delete_user' => 'Ο χρήστης δεν μπόρεσε να διαγραφεί.',
	'uservalidationbyemail:errors:could_not_delete_users' => 'Δεν μπόρεσαν να διαγραφούν όλοι οι επιλεγμένοι χρήστες.',
	'uservalidationbyemail:errors:could_not_resend_validation' => 'Η αίτηση επιβεβαίωσης δεν μπόρεσε να επανασταλεί.',
	'uservalidationbyemail:errors:could_not_resend_validations' => 'Δεν μπόρεσαν να επανασταλούν όλες οι αιτήσεις επιβεβαίωσης στους επιλεγμένους χρήστες.',

	'uservalidationbyemail:messages:validated_user' => 'Ο χρήστης επιβεβαιώθηκε.',
	'uservalidationbyemail:messages:validated_users' => 'Όλοι οι επιλεγμένοι χρήστες επιβεβαιώθηκαν.',
	'uservalidationbyemail:messages:deleted_user' => 'Ο χρήστης διαγράφηκε.',
	'uservalidationbyemail:messages:deleted_users' => 'Όλοι οι επιλεγμένοι χρήστες διαγράφηκαν.',
	'uservalidationbyemail:messages:resent_validation' => 'Η αίτηση επιβεβαίωσης επαναστάλθηκε.',
	'uservalidationbyemail:messages:resent_validations' => 'Αιτήματα επιβεβαίωσης επαναστάλθηκαν σε όλους τους επιλεγμένους χρήστες.'

);

add_translation("el", $greek);
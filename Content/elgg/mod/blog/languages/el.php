<?php
/**
 * Blog Greek language file.
 *
 */

$greek = array(
	'blog' => 'Blogs',
	'blog:blogs' => 'Blogs',
	'blog:revisions' => 'Διορθώσεις',
	'blog:archives' => 'Αρχείο',
	'blog:blog' => 'Blog',
	'item:object:blog' => 'Blogs',

	'blog:title:user_blogs' => 'Τα blogs του %s',
	'blog:title:all_blogs' => 'Όλα τα blogs της σελίδας',
	'blog:title:friends' => 'Τα blogs των συνεργατών',

	'blog:group' => 'Blog περιστατκού',
	'blog:enableblog' => 'Ενεργοποίηση blog περιστατικού',
	'blog:write' => 'Γράψτε μια ανάρτηση στο blog',

	// Editing
	'blog:add' => 'Προσθέστε μια ανάρτηση σε blog',
	'blog:edit' => 'Επεξεργαστείτε μια ανάρτηση σε blog',
	'blog:excerpt' => 'Απόσπασμα',
	'blog:body' => 'Σώμα',
	'blog:save_status' => 'Αποθηκεύτηκε τελευταία φορά: ',
	'blog:never' => 'Ποτέ',

	// Statuses
	'blog:status' => 'Κατάσταση',
	'blog:status:draft' => 'Πρόχειρο',
	'blog:status:published' => 'Εκδόθηκε',
	'blog:status:unsaved_draft' => 'Μη αποθηκευμένο Πρόχειρο',

	'blog:revision' => 'Διόρθωση',
	'blog:auto_saved_revision' => 'Αυτόματη αποθήκευση διόρθωσης',

	// messages
	'blog:message:saved' => 'Η ανάρτηση στο blog αποθηκεύτηκε.',
	'blog:error:cannot_save' => 'Η ανάρτηση στο blog δεν μπορεί να αποθηκευτεί.',
	'blog:error:cannot_write_to_container' => 'Δεν έχετε το προνόμοιο αποθήκευσης blog σε αυτό το περιστατικό.',
	'blog:messages:warning:draft' => 'Υπάρχει ένα μη αποθηκευμένο πρόχειρο αυτής της ανάρτησης!',
	'blog:edit_revision_notice' => '(Παλιά έκδοση)',
	'blog:message:deleted_post' => 'Η ανάρτηση στο blog διαγράφηκε.',
	'blog:error:cannot_delete_post' => 'Η ανάρτηση στο blog δεν μπορεί να διαγραφεί.',
	'blog:none' => 'Δεν υπάρχουν αναρτήσεις στο blog',
	'blog:error:missing:title' => 'Παρακαλώ εισάγετε τίτλο για το blog!',
	'blog:error:missing:description' => 'Παρακαλώ εισάγετε το κύριο μέρος του blog σας!',
	'blog:error:cannot_edit_post' => 'Αυτή η αναάρτηση ενδέχεται να μην υπάρχει ή να μην έχετε το προνόμοιο να την επεξεργαστείτε.',
	'blog:error:revision_not_found' => 'Η διόρθωση δεν βρέθηκε.',

	// river
	'river:create:object:blog' => 'Ο %s δημοσίευσε μιά ανάρτηςη στο blog %s',
	'river:comment:object:blog' => 'Ο %s σχολίασε  μιά ανάρτηςη στο blog %s',

	// notifications
	'blog:newpost' => 'Υπάρχει νέα ανάρτηση στο blog',
	'blog:notification' =>
'
Ο %s έκανε μια νέα ανάρτηση στο blog.

%s
%s

Δείτε και σχολιάστε στη νέα ανάρτηση:
%s
',

	// widget
	'blog:widget:description' => 'Εμφανίστε τις τελευταίες σας αναρτήσεις στο blog',
	'blog:moreblogs' => 'Περισσότερες αναρτήσεις στο blog',
	'blog:numbertodisplay' => 'Αριθμός αναρτήσεων που θα εμφανίζεται',
	'blog:noblogs' => 'Δεν υπάρχουν αναρτήσεις στο blog'
);

add_translation('el', $greek);

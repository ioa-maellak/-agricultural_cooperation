<?php
/**
 * Elgg groups plugin language pack
 *
 * @package Elgg$uplural
 */
$languagecode = get_current_language();
$singularvar = $languagecode . 'singular';
$pluralvar = $languagecode . 'plural';

$singular = elgg_get_plugin_setting($singularvar, 'rename_groups');
$plural = elgg_get_plugin_setting($pluralvar, 'rename_groups');

// set defaults if setting can't be found
if(empty($singular)){ $singular = elgg_echo('groups:group'); }
if(empty($plural)){ $plural = elgg_echo('groups'); }

// get first letter of each, and register variables for starting with uppercase and lowercase first letter
// $usingle = uppercase singluar eg. $usingle
// $lsingle = lowercase singluar eg. group
// $uplural = uppercase plural eg. $usingles
// $lplural = lowercase plural eg. groups

$lsingle = strtolower($singular);
$lplural = strtolower($plural);

//create our uppercase singular
$first_letter = strtoupper($singular[0]);
$rest_of_word = substr($singular, 1);

$usingle = $first_letter . $rest_of_word;

//create our uppercase plural
$first_letter = strtoupper($plural[0]);
$rest_of_word = substr($plural, 1);

$uplural = $first_letter . $rest_of_word;
 
 
$greek = array(

	/**
	 * Menu items and titles
	 */
	'groups' => "Περιστατικά",
	'groups:owned' => "Τα περιστατικά μου",
	'groups:yours' => "Περιστατικά που συμμετέχω",
	'groups:user' => "Τα περιστατικά που συμμετέχει ο %s",
	'groups:all' => "Όλα τα περιστατικά",
	'groups:add' => "Δημιουργία ενός νέου περιστατικού",
	'groups:edit' => "Επεξεργασία περιστατικού",
	'groups:delete' => 'Διαγραφή περιστατικού',
	'groups:membershiprequests' => 'Διαχείρηση αιτημάτων συμμετοχής',
	'groups:invitations' => 'Προσκλησεις στο περιστατικό',

	'groups:icon' => 'Εικονίδιο περιστατικού (αφήστε κενό για να μην αλλαχθεί)',
	'groups:name' => 'Όνομα περιστατικού',
	'groups:username' => 'Σύντομο όνομα περιστατικού (εμφανίζεται σε URLs, μόνο αρθιμοί και γράμματα αγγλικά)',
	'groups:description' => 'Περιγραφή',
	'groups:briefdescription' => 'Σύντομη περιγραφή',
	'groups:interests' => 'Λέξεις κλειδιά',
	'groups:website' => 'Ιστότοπος',
	'groups:members' => 'Μέλη περιστατικού',
	'groups:members:title' => 'Μέλη του %s',
	'groups:members:more' => "Εμφάνιση όλων των μελών",
	'groups:membership' => "$usingle άδειες συμμετοχής",
	'groups:access' => "Πρόσβαση στις άδειες",
	'groups:owner' => "Ιδιοκτήτης",
	'groups:widget:num_display' => 'Αριθμός $lplural προς εμφάνιση',
	'groups:widget:membership' => 'Συμμετοχή στο περιστατικό',
	'groups:widgets:description' => 'Εμφάνιση των περιστατικών στα οποία είστε μέλος, στο προφίλ σας',
	'$lplural:noaccess' => 'Καμία πρόσβαση στο περιστατικό',
	'groups:permissions:error' => 'Δεν έχετε την άδεια γι αυτό',
	'groups:ingroup' => 'μέσα στο περιστατικό',
	'groups:cantedit' => 'Δεν μπορείτε να επεξεργαστέιτε αυτό το περιστατικό',
	'groups:saved' => 'Το περιστατικό αποθηκεύτηκε',
	'groups:featured' => 'Προβεβλημένο περιστατικό',
	'groups:makeunfeatured' => 'Ανάκληση προβολής',
	'groups:makefeatured' => 'Προβολή',
	'groups:featuredon' => 'Το %s είναι τώρα προβεβλημένο περιστατικό',
	'groups:unfeatured' => 'Το %s έχει αφαιρεθεί από τα προβεβλημένα περιστατικά',
	'groups:featured_error' => 'Άκυρο περιστατικό',
	'groups:joinrequest' => 'Αίτημα συμμετοχής',
	'groups:join' => 'Γίνετε μέλος σε περιστατικό',
	'groups:leave' => 'Αποχωρήστε από περιστατικό',
	'groups:invite' => 'Πρόσκληση συνεργατών',
	'groups:invite:title' => 'Πρόσκλήση συνεργατών σε αυτό το περιστατικό',
	'groups:inviteto' => "Πρόσκληση συνεργατών στο '%s'",
	'groups:nofriends' => "Δεν έχετε άλλους συνεργάτες που δεν έχουν προσκληθεί σε αυτο το περιστατικό.",
	'groups:nofriendsatall' => 'Δεν έχετε συνεργάτες για να καλέσετε!',
	'groups:viagroups' => "μέσω περιστατικών",
	'groups:group' => "Περιστατικό",
	'groups:search:tags' => "λέξη κλειδί",
	'groups:search:title' => "Αναζήτηση για περιστατικά με λέξη κλειδί '%s'",
	'groups:search:none' => "Δεν βρέθηκαν περιστατικά που να ταιριάζουν",
	'groups:search_in_group' => "Αναζήτηση στο περιστατικό",
	'groups:acl' => "Περιστατικό: %s",

	'groups:activity' => "Δραστηριότητα περιστατικού",
	'groups:enableactivity' => 'Ενεργοποίηση δραστηριότητας περιστατικού',
	'groups:activity:none' => "Δεν υπάρχει δραστηριότητα στο περιστατικό, ακόμα",

	'groups:notfound' => "Το περιστατικό δε βρέθηκε",
	'groups:notfound:details' => "Το περιστατικό που ζητήθηκε είτε δεν υπάρχει είτε δεν το έχετε αποδεχτεί",

	'groups:requests:none' => 'Δεν υπάρχουν τρέχουσες αιτήσεις για συμμετοχή.',

	'groups:invitations:none' => 'Δεν υπάρχουν τρέχουσες προσκλήσεις.',

	'item:object:groupforumtopic' => "Θέματα συζήτησης",

	'groupforumtopic:new' => "Προσθήκη ανάρτησης στη συζήτηση",

	'groups:count' => "Το περιστατικό δημιουργήθηκε",
	'groups:open' => "ανοιχτό περιστατικό",
	'groups:closed' => "κλειστό περιστατικό",
	'groups:member' => "μέλη",
	'groups:searchtag' => "Αναζήτηση για περιστατικά βάση λέξης κλειδί",

	'groups:more' => 'Περισσότερα περιστατικά',
	'groups:none' => 'Κανένα περιστατικό',


	/*
	 * Access
	 */
	'groups:access:private' => 'Κλειστό - Χρήστες πρέπει να προσκληθούν',
	'groups:access:public' => 'Ανοιχτό - Κάθε χρήστης μπορεί να συμμετέχει',
	'groups:access:group' => 'Περιστατικό ανοιχτό μόνο για μέλη',
	'groups:closedgroup' => 'Αυτό το περιστατικό είναι κλειστό όσον αφορά τη συμμετοχή.',
	'groups:closedgroup:request' => 'Για να ζητήσετε να προστεθείτε, πατήστε τον σύνδεσμο "αίτηση συμμετοχής" στο μενού.',
	'groups:visibility' => 'Ποιος μπορεί να δει αυτό το περιστατικό;',

	/*
	$usingle tools
	*/
	'groups:enableforum' => 'Ενεργοποίηση συζήτησης περιστατικού',
	'groups:yes' => 'ναι',
	'groups:no' => 'όχι',
	'groups:lastupdated' => 'Τελευταία ανανεώθηκε %s από %s',
	'groups:lastcomment' => 'Τελευταίο σχόλιο %s από %s',

	/*
	$usingle discussion
	*/
	'discussion' => 'Συζήτηση',
	'discussion:add' => 'Προσθήκη θέματος συζήτησης',
	'discussion:latest' => 'Τελευταία συζήτηση',
	'discussion:group' => 'Συζήτηση στο περιστατικό',
	'discussion:none' => 'Καμία συζήτηση',
	'discussion:reply:title' => 'Απάντηση μέσω %s',

	'discussion:topic:created' => 'Το θέμα συζήτησης δημιουργήθηκε.',
	'discussion:topic:updated' => 'Το θέμα συζήτησης ανανεώθηκε.',
	'discussion:topic:deleted' => 'Το θέμα συζήτησης διαγράφηκε.',

	'discussion:topic:notfound' => 'Το θέμα συζήτησης δε βρέθηκε',
	'discussion:error:notsaved' => 'Αυτό το θέμα δεν μπόρεσε να αποθηκευτεί',
	'discussion:error:missing' => 'Και ο τίτλος και το μήνυμα είναι απαιτούμενα πεδία',
	'discussion:error:permissions' => 'Δεν έχετε άδεια να πραγματοποιήσετε αυτή την ενέργεια',
	'discussion:error:notdeleted' => 'Το θέμα συζήτησης δεν μπόρεσε να διαγραφεί',

	'discussion:reply:deleted' => 'Η απάντηση στα πλαίσια της συζήτησης έχει διαγραφεί.',
	'discussion:reply:error:notdeleted' => 'Η απάντηση στα πλαίσια της συζήτησης δεν μπόρεσε να διαγραφεί',

	'reply:this' => 'Απάντηση σε αυτό',

	'group:replies' => 'Απαντήσεις',
	'groups:forum:created' => 'Δημιουργήθηκε %s με %d σχόλια',
	'groups:forum:created:single' => 'Δημιουργήθηκε %s με %d απαντήση',
	'groups:forum' => 'Συζήτηση',
	'groups:addtopic' => 'Προσθήκη θέματος',
	'groups:forumlatest' => 'Τελευταία συζήτηση',
	'groups:latestdiscussion' => 'Τελευταία συζήτηση',
	'groups:newest' => 'Νεότερα',
	'groups:popular' => 'Δημοφιλέστερα',
	'groupspost:success' => 'Η απάντησή σας αναρτήθηκε επιτυχώς',
	'groups:alldiscussion' => 'Τελευταία συζήτηση',
	'groups:edittopic' => 'Επεξεργασία θέματος',
	'groups:topicmessage' => 'Μήνυμα θέματος',
	'groups:topicstatus' => 'Κατάσταση θέματος',
	'groups:reply' => 'Ανάρτηση ενός σχολίου',
	'groups:topic' => 'Θέμα',
	'groups:posts' => 'Αναρτήσεις',
	'groups:lastperson' => 'Τελευταίο άτομο',
	'groups:when' => 'Όταν',
	'grouptopic:notcreated' => 'Δεν έχει δημιουργηθεί κανένα θέμα.',
	'groups:topicopen' => 'Ανοιχτό',
	'groups:topicclosed' => 'Κλειστό',
	'groups:topicresolved' => 'Επιλυμμένο',
	'grouptopic:created' => 'Το θέμα σας δημιουργήθηκε.',
	'groupstopic:deleted' => 'Το θέμα διαγράφηκε.',
	'groups:topicsticky' => 'Κολώδες',
	'groups:topicisclosed' => 'Αυτή η συζήτηση είναι κλειστή.',
	'groups:topiccloseddesc' => 'Αυτή η συζήτηση είναι κλειστή και δε δέχεται νέα σχόλια.',
	'grouptopic:error' => 'Το θέμα σας στο περιστατικό δεν μπόρεσε να δημιουργηθεί. Παρακαλώ δοκιμάστε ξανά ή επικοινωνήστε με ένα διαχειριστή του συστήματος.',
	'groups:forumpost:edited' => "Έχετε επεξεργαστεί επιιτυχώς την ανάρτηση στο φόρουμ.",
	'groups:forumpost:error' => "Υπήρξε ένα πρόβλημα κατά την επεξεργασία της ανάρτησης στο φόρουμ.",


	'groups:privategroup' => 'Αυτό το περιστατικό είναι κλειστό. Γίνεται έτηση για συμμετοχή.',
	'groups:notitle' => 'Το περιστατικό πρέπει να έχει τίτλο',
	'groups:cantjoin' => 'Δεν γίνεται να συμμετέχετε στο περιστατικό',
	'groups:cantleave' => 'Δεν μπορέσατε να φύγετε από το περιστατικό',
	'groups:removeuser' => 'Αφαίρεση από το περιστατικό',
	'groups:cantremove' => 'Δεν γίνεται να αφαιρεθεί ο χρήστης από το περιστατικό',
	'groups:removed' => 'Ο %s αφαιρέθηκε επιτυχώς από το περιστατικό',
	'groups:addedtogroup' => 'Ο χρήστης προστέθηκε επιτυχώς στο περιστατικό',
	'groups:joinrequestnotmade' => 'Η αίτηση για συμμετοχή δεν μπόρεσε να γίνει για το περιστατικό',
	'groups:joinrequestmade' => 'Έγινε η αίτηση για συμμετοχή στο περιστατικό',
	'groups:joined' => 'Η συμμετοχή σας στο περιστατικό έγινε επιτυχώς!',
	'groups:left' => 'Η αποχώρηση από το περιστατικό έγινε επιτυχώς',
	'groups:notowner' => 'Συγγνώμη, δεν είστε ο ιδιοκτήτης αυτού του περιστατικού',
	'groups:notmember' => 'Συγγνώμη, δεν είστε μέλος αυτού του περιστατικού',
	'groups:alreadymember' => 'Είστε ήδη μέλος αυτού του περιστατικού!',
	'groups:userinvited' => 'Ο χρήστης δεν έχει προσκληθεί.',
	'groups:usernotinvited' => 'Ο χρήστης δεν μπόρεσε να προσκληθεί.',
	'groups:useralreadyinvited' => 'Ο χρήστης έχει ήδη προσκληθεί',
	'groups:invite:subject' => "%s έχετε προσκληθεί για να συμμετέχετε στο %s!",
	'groups:updated' => "Τελευταία απάντηση από %s %s",
	'groups:started' => "Ξεκίνησε από %s",
	'groups:joinrequest:remove:check' => 'Είστε σίγουρος ότι θέλετε να αφαιρέσετε αυτή την αίτηση για συμμετοχή;',
	'groups:invite:remove:check' => 'Είστε σίγουρος ότι θέλετε να αφαιρέσετε αυτή την πρόσκληση;',
	'groups:invite:body' => "Γεια σου %s,

Ο %s σας προσκάλεσε να συμμετέχετε στο περιστατικό '%s'. Πατήστε παρακάτω για να δείτε τις προσκλήσεις σας:

%s",

	'groups:welcome:subject' => "Καλωσήλθατε στο περιστατικό %s!",
	'groups:welcome:body' => "Γεια σου %s!

Είστε πλέον μέλος του περιστατικού'%s'! Πατήστε παρακάτω για να ξεκινήσετε να αναρτάτε!

%s",

	'groups:request:subject' => "Ο %s έχει αιτηθεί να συμμετέχει στο %s",
	'groups:request:body' => "Γεια σου %s,

ο %s έχει αιτηθεί να συμμετέχει στο περιστατικό '%s'. Πατήστε παρακάτω για να δείτε το προφίλ τους:

%s

Η πατήστε παρακάτω για να δείτε την αίτηση συμμετοχής στο περιστατικό':

%s",

	/*
		Forum river items
	*/

	'river:create:group:default' => 'Ο %s δημιούργησε το περιστατικό %s',
	'river:join:group:default' => 'Ο %s έγινε μέλος του περιστατικού %s',
	'river:create:object:groupforumtopic' => 'Ο %s πρόσθεσε ένα νέο θέμα συζήτησης %s',
	'river:reply:object:groupforumtopic' => 'Ο %s απάντησε στο θέμα συζήτησης %s',
	
	'groups:nowidgets' => 'Δεν έχει οριστεί κανένα widget για αυτό το περιστατικό.',


	'groups:widgets:members:title' => 'Μέλη του περιστατικού',
	'groups:widgets:members:description' => 'Λίστα μελών ενός περιστατικού.',
	'groups:widgets:members:label:displaynum' => 'Εμφανίζει τα μέλη ενός περιστατικού.',
	'groups:widgets:members:label:pleaseedit' => 'Παρακαλώ ρυθμίστε αυτό το widget.',

	'groups:widgets:entities:title' => "Αντικείμενα στο περιστατικό",
	'groups:widgets:entities:description' => "Εμφανίζει τα αντικείμενα που είναι αποθηκευμένα σε αυτό το περιστατικό",
	'groups:widgets:entities:label:displaynum' => 'Λίστα αντικειμένων ενός περιστατικού.',
	'groups:widgets:entities:label:pleaseedit' => 'Παρακαλώ ρυθμίστε αυτό το widget.',

	'groups:forumtopic:edited' => 'Η επεξεργασία του θέματος του φόρουμ ήταν επιτυχής.',

	'groups:allowhiddengroups' => 'Θέλετε να επιτρέπετε ιδιωτικά (αόρατα) περιστατικά;',

	/**
	 * Action messages
	 */
	'group:deleted' => 'Το περιστατικό και τα περιεχόμενά του διαγράφηκαν',
	'group:notdeleted' => 'Το περιστατικό δεν μπόρεσε να διαγραφεί',

	'group:notfound' => 'Το περιστατικό δεν μπόρεσε να βρεθεί',
	'grouppost:deleted' => 'Η ανάρτηση στο περιστατικό διαγράφηκε επιτυχώς',
	'grouppost:notdeleted' => 'Η ανάρτηση στο περιστατικό δεν μπόρεσε να διαγραφεί',
	'groupstopic:deleted' => 'Το θέμα διαγράφηκε',
	'groupstopic:notdeleted' => 'Το θέμα δε διαγράφηκε',
	'grouptopic:blank' => 'Δεν υπάρχει κανένα θέμα',
	'grouptopic:notfound' => 'Το θέμα δεν βρέθηκε',
	'grouppost:nopost' => 'Άδεια ανάρτηση',
	'groups:deletewarning' => "Είστε σίγουρος ότι θέλετε να διαγράψετε αυτό το περιστατικό; Δεν υπάρχει αναίρεση!",

	'groups:invitekilled' => 'Η πρόσκληση έχει διαγραφεί.',
	'groups:joinrequestkilled' => 'Το αίτημα συμμετοχής έχει διαγραφεί.',

	// ecml
	'groups:ecml:discussion' => 'Συζητήσεις στο περιστατικό',
	'groups:ecml:groupprofile' => 'Προφίλ στο περιστατικό',

/*
	 * 	Blog plugin
	 */
	'groups:enableblog' => 'Ενεργοποίηση ιστολογίου στο περιστατικό',
	'blog:enableblog' => 'Ενεργοποίηση ιστολογίου στο περιστατικό',
	'blog:group' => 'Ιστολόγιο περιστατικού',
	 'blog:nogroup' => 'Αυτό το περιστατικού δεν έχει αναρτήσεις ιστολογίου ακόμα',

	/*
	** bookmarks plugin
	*/
	'bookmarks:bookmarklet:group' => "Λάβετε σελιδοδείκτες του περιστατικού",
	'bookmarks:group' => $usingle . ' σελιδοδείκτες',
	'bookmarks:enablebookmarks' => 'Ενεργοποίηση σελιδοδεικτών του περιστατικού',
	'groups:enablebookmarks' => 'Ενεργοποίηση σελιδοδεικτών του περιστατικού',
	'bookmarks:nogroup' => 'Αυτό το περιστατικό δεν έχει ακόμα κανένα σελιδοδείκτη',

	/*
	 * 	Custom Index plugin
	 */
	'custom:groups' => "Τελευταία περιστατικά",
	'custom:nogroups' => "Δεν υπάρχει κανένα περιστατικό ακόμα",

	/*
	** event_calendar plugin
	*/
	'event_calendar:group' => "Ημερολόγιο περιστατικού",
	'event_calendar:settings:group_profile_display:title' => "Εμφάνιση προφίλ ημερολογίου περιστατικού (αν τα ημερολόγια κοινότητας είναι ενεργοποιημένα)",
	'event_calendar:settings:autogroup:title' => "Αυτόματη προσθήκη γεγονότων για το περιστατικό στα προσωπικά ημερολόγια όλων των μελών.",
	'event_calendar:settings:group_calendar:title' => "Ημερολόγια περιστατικού",
	'event_calendar:settings:group_calendar:admin' => "ναι, μόνο διαχειριστές και ιδιοκτήτες του περιστατικού μπορούν να αναρτούν συμβάντα",
	'event_calendar:settings:group_calendar:members' => "ναι, κάθε μέλος του περιστατικού μπορεί να αναρτά ένα συμβάν",
	'event_calendar:settings:group_default:title' => "Νέα περιστατικά πρέπει να έχουν ένα ημερολόγιο κοινότητας ως προεπιλογή (αν ημερολόγια για το περιστατικό είναι ενεργοποιημένα)",
	'event_calendar:settings:group_default:no' => "όχι (αλλά διαχειριστές ή ιδιοκτήτες του περιστατικού μπορούν να ενεργοποιήσουν ένα ημερολόγιο περιστατικού αν το επιθυμούν)",
	'event_calendar:settings:group_default:yes' => "ναι (αλλά διαχειριστές ή ιδιοκτήτες του περιστατικού μπορούν να απενεργοποιήσουν ένα ημερολόγιο περιστατικού αν το επιθυμούν)",
	'event_calendar:settings:group_always_display:title' => "Αν το ημερολόγιο του περιστατικού είναι ενεργοποιημένο, εμφάνισέ το πάντα (ακόμα κι αν είναι άδειο)",
	'event_calendar:enable_event_calendar' => "Ενεργοποίηση του ημερολογίου συμβάντων του περιστατικού",
	'event_calendar:add_to_group:remove_group_title' => "Αφαίρεση αυτού του συμβάντος από το περιστατικό",
	'event_calendar:add_to_group:remove_group_button' => "Αφαίρεση από το περιστατικό",
	'event_calendar:remove_from_group:success' => "Το συμβάν αφαιρέθηκε από το ημερολόγιο του περιστατικού",
	'event_calendar:add_to_group:add_group_title' => "Προσθήκη αυτού του συμβάντος στο περιστατικό",
	'event_calendar:add_to_group:add_group_button' => "Προσθήκη στο περιστατικό",
	'event_calendar:add_to_group:success' => "Το συμβάν προστέθηκε στο ημερολόγιο του περιστατικού",
	'event_calendar:settings:add_to_group_calendar:title' => "Να επιτρέπεται οι διαχειριστές του περιστατικού να προσθέτουν κάθε υπάρχον περιστατικό σε ένα ημερολόγιο περιστατικού",

	/*
	** file plugin
	*/
	'file:group' => "Αρχεία περιστατικού",
	'file:nogroup' => 'Αυτό το περιστατικό δεν έχει ακόμα κανένα αρχείο',

	/*
	** group_contact_list plugin
	*/
	'groupclist:title' => 'Λίστα επαφών περιστατικού',
	'groupclist:title_users' => 'Λίστα επαφών περιστατικού: επιλέξτε χρήστες της κοινώτητας',
	'groupclist:totalpages' => 'Συνολικός αριθμός περιστατικών:',
	'groupclist:delete:yes' => 'Το περιστατικό διαγράφηκε',
	'groupclist:delete:no' => 'Σφάλμα: Το περιστατικό δε διαγράφηκε',
	'groupclist:addmember:yes' => 'Όλοι οι επιλεγμένοι χρήστες είναι τώρα μέλη του περιστατικού',
	'groupclist:addmember:no' => 'Σφάλμα κατά την προσθήκη χρήστη στο περιστατικό',
	
	/*
	 * Group Custom Layout plugin
	 */
	'group_custom_layout' => "Προσωπική διαρρύθμιση περιστατικού",
	'item:object:group_widget' => "Widget περιστατικού",
	'item:object:custom_layout' => "Προσωπική διαρρύθμιση περιστατικού",
	'group_custom_layout:edit' => "Επεξεργασία διαρρύθμισης του περιστατικού",
	'group_custom_layout:edit:title' => "Επεξεργασία διαρρύθμισης του περιστατικού",
	'group_custom_layout:edit:reset:confirm' => "Είστε σίγουρος ότι θέλετε να επαναφέρετε στις αρχικές ρυθμίσεις την προσωπική διαρρύθμιση του περιστατικού;",
	'group_custom_layout:action:reset:error:no_custom' => "Αυτό το περιστατικό δεν έχει προσωπική διαρρύθμιση για να αφαιρεθεί",
	'group_custom_layout:action:save:error:add_to_group' => "Σφάλμα κατά την προσθήκη προσωπικής διαρρύθμισης στο περιστατικό",
	'group_custom_layout:action:save:error:no_widget' => "Δεν υπάρχει Widget περιστατικού με id: %s",
	'group_custom_layout:action:save:error:widget_save' => "Σφάλμα κατά την αποθήκευση του Widget του περιστατικού: %s",


	/*
	** notifications plugin
	*/
	'notifications:subscriptions:changesettings:groups' => 'Ειδοποιήσεις περιστατικού',
	'notifications:subscriptions:groups:description' => 'Για να λαμβάνετε ειδοποιήσεις όταν προστείθεται καινούριο περιεχόμενο σε ένα περιστατικό στο οποίο είστε μέλος, βρείτε το παρακάτω και επιλέξτε τη μέθοδο ειδοποίησης που θα θέλατε να χρησιμοποιήσετε.',

	/*
	** pages plugin
	*/
	'pages:group' => 'Σελίδες περιστατικού',
	'pages:groupprofile' => 'Σελίδες περιστατικού',
	'pages:nogroup' => 'Αυτό το περιστατικό δεν έχει ακόμα καμία σελίδα',

	/*
	 * Polls plugin
	 */
	'polls:group_polls' => "Δημοσκοπήσεις περιστατικού",
	'polls:settings:group:title' => "Δημοσκοπήσεις περιστατικού",
	'polls:settings:group_profile_display:title' => "Αν δημοσκοπήσεις του περιστατικού είναι ενεργές, που να εμφανίζεται το περιεχόμενο των δημοσκοπήσεων στα προφίλ του περιστατικού;",
	'polls:settings:group_access:title' => "Αν δημοσκοπήσεις του περιστατικού είναι ενεργές, ποιος μπορεί να δημιουργήσει δημοσκοπήσεις;",
	'polls:settings:group_access:admins' => "Ιδιοκτήτης και διαχειριστές του περιστατικού μόνο",
	'polls:settings:group_access:members' => "κάθε μέλος του περιστατικού",
	'poll_individual_group:widget:description' => "Εμφάνιση των τελευταίων δημοσκοπήσεων γι αυτό το περιστατικό.",

	/*
	 * 	Tidypics plugin
	 */
	'album:group' => "Αλμπουμ περιστατικού",
	'tidypics:enablephotos' => 'Ενεργοποίηση των άλμπουμ φωτογραφιών του περιστατικού',
	'tidypics:nophotosingroup' => 'Αυτό το περιστατικό δεν έχει καμία φωτογραφία ακόμα',
	'tidypics:settings:grp_perm_override' => "Να παρέχεται στα μέλη του περιστατικού πλήρης πρόσβαση στα άλμπουμ του περιστατικού",
	'tidypics:settings:quota' => "Χρήστης περιστατικού: Όριο (MB) - 0 σημαίνει κανένα",
	'tidypics:settings:heading:groups' => "Ρθυμίσεις περιστατικού",
	'album:river:group' => "στο περιστατικό",

	/*
	** vazco_groupmailer plugin
	*/
	'vazco_groupmailer:send' => 'Αποστολή e-mail περιστατικού',
	'vazco_groupmailer:send:menu' => 'Αποστολή e-mail περιστατικού',
	'vazco_groupmailer:nogroup' => 'Κανένα περιστατικό δεν επιλέχθηκε',
	'vazco_groupmailer:norights' => 'Δεν έχετε δικαιώματα να στείλετε μαζικό e-mail σε αυτό το περιστατικό',
	'vazco_groupmailer:description' => 'Αυτή η φόρμα σας επιτρέπει να στείλετε e-mails σε όλα τα μέλη του περιστατικού.<br/>
<br/>Μπορείτε να χρησιμοποιήσετε τα ακόλουθα ειδικά σημάδια:<br/>
{$message_receiver} - ο παραλήπτης του μηνύματος',
	'phpmailer:template:settings' => 'Ορίστε πρότυπο για τα μηνήματα που στέλνονται στο περιστατικό. Μπορείτε να χρησιμοποιήσετε τα ακόλουθα σημάδια:<br/><br/>
{$message_body} - το περιεχόμενο του μηνύματος<br/>
{$message_title} - ο τίτλος του μηνύματος<br/>
{$message_sender} - το όνομα του αποστολέα του μηνύματος<br/>
{$message_receiver} - το όνομα του παραλήπτη του μηνύματος',

	/*
	** vazco_mainpage plugin
	*/
	'custom:groups' => 'Τελευταία περιστατικά',
	'custom:featuredgroups' => 'Προβεβλημένα περιστατικά',
	'custom:groupicons' => 'Τελευταία περιστατικά (εικονίδια)',
	'custom:groups:desc' => 'Εμφάνιση τελευταίων περιστατικών',
	'custom:featuredgroups:desc' => 'Εμφάνιση προβεβλημένων περιστατικών',
	'custom:groupicons:desc' => 'Εμφανίζει τα τελευταία περιστατικά ως εικονίδια. Εμφανίζει μόνο κοινώτητες που έχουν εικονίδια.',

	//
	//	rename_groups language mappings
	//
	'rename_groups:language' => "Γλώσσα",
	'rename_groups:missing:language:file' => "Το αρχείο γλώσσας φαίνεται να λείπει.  Ελέγξτε ότι υπάρχει και ότι ο κατάλογος γλωσσών παρέχει πρόσβαση για ανάγνωση.",
	'rename_groups:plural' => "Πληθυντικός",
	'rename_groups:settings' => "Μετονομασία Ομάδων για κάθε γλώσσα",
	'rename_groups:singular' => "Ενικός",
	
	//pages 1.8.3
	'pages:group' => "Σελίδες περιστατικού",
	'groups:enablepages' => 'Ενεργοποίηση σελίδων περιστατικού',
	'pages:nogroup' => 'Αυτό το περιστατικό δεν έχει ακόμα καμία σελίδα',
	
	// blog 1.8.3
	'blog:group' => 'Ιστολόγιο περιστατικού',
	'blog:enableblog' => 'Ενεργοποίηση ιστολογίου περιστατικού',
	'blog:error:cannot_write_to_container' => 'Μη επαρκής πρόσβαση για την αποθήκευση του ιστολογίου στο περιστατικό.',
	
);

add_translation("el", $greek);
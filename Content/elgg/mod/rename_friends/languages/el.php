<?php


$languagecode = get_current_language();
$singularvar = $languagecode . 'singular';
$pluralvar = $languagecode . 'plural';

$singular = elgg_get_plugin_setting($singularvar, 'rename_friends');
$plural = elgg_get_plugin_setting($pluralvar, 'rename_friends');

// set defaults if setting can't be found
if(empty($singular)){ $singular = elgg_echo('friend'); }
if(empty($plural)){ $plural = elgg_echo('friends'); }

// get first letter of each, and register variables for starting with uppercase and lowercase first letter
// $usingle = uppercase singluar eg. Friend
// $lsingle = lowercase singluar eg. friend
// $uplural = uppercase plural eg. Friends
// $lplural = lowercase plural eg. friends

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



// get variables for groups 
$singular = '';
$plural = '';
if(elgg_is_active_plugin('rename_groups')){
  $singular = elgg_get_plugin_setting($singularvar, 'rename_groups');
  $plural = elgg_get_plugin_setting($pluralvar, 'rename_groups');
}

  // set defaults if setting can't be found
  if(empty($singular)){ $singular = elgg_echo('groups:group'); }
  if(empty($plural)){ $plural = elgg_echo('groups'); }

  // get first letter of each, and register variables for starting with uppercase and lowercase first letter
  // $usingle = uppercase singluar eg. Group
  // $lsingle = lowercase singluar eg. group
  // $uplural = uppercase plural eg. Groups
  // $lplural = lowercase plural eg. groups

  $glsingle = strtolower($singular);
  $glplural = strtolower($plural);

  //create our uppercase singular
  $first_letter = strtoupper($singular[0]);
  $rest_of_word = substr($singular, 1);

  $gusingle = $first_letter . $rest_of_word;

  //create our uppercase plural
  $first_letter = strtoupper($plural[0]);
  $rest_of_word = substr($plural, 1);

  $guplural = $first_letter . $rest_of_word;
 
$greek = array(
	//
	//	rename_friends language mappings
	//
	'rename_friends:language' => "Γλώσσα",
	'rename_friends:missing:language:file' => "Το αρχείο γλώσσας φαίνεται να λείπει. Ελέγξτε ότι υπάρχει και ότι ο φάκελος γλωσσών επιτρέπει πρόσβαση για ανάγνωση.",
	'rename_friends:plural' => "Πληθυντικός",
	'rename_friends:settings' => "Μετονομασία Φίλων για κάθε γλώσσα",
	'rename_friends:singular' => "Ενικός",


    /*
     * 	Default Notification Settings
     */
	'notifications_tools:friends_notifications' => "Επιλέξτε την αρχική μέθοδο ειδοποιήσεων για {$lplural} (Αυτό θα ισχύσει όταν δημιουργηθεί ένας καινούριος χρήστης)",
    'notifications_tools:friends_batch_method' => "Επιλέξτε την μέθοδο ειδοποιήσεων για {$lplural} (Αυτό θα επηρεάσει όλους τους χρήστες του ιστότοπου)",

    /*
     * Elgg Core
     */

	'access:friends:label' => $uplural,
	'friends' => $uplural,
	'friends:yours' => "Οι {$lplural} σας",
	'friends:owned' => "Οι {$lplural} του %s",
	'friend:add' => "Προσθήκη {$lsingle}",
	'friend:remove' => "Αφαίρεση {$lsingle}",
	'friends:add:successful' => "Έχετε προσθέσει επιτυχώς τον %s ως {$lsingle}.",
	'friends:add:failure' => "Δεν μπορέσαμε να προσθέσουμε τον %s ως {$lsingle}. Παρακαλώ δοκιμάστε ξανά.",
	'friends:remove:successful' => "Έχετε επιτυχώς αφαιρέσει τον %s από τους {$lplural} σας.",
	'friends:remove:failure' => "Δεν μπορέσαμε να αφαιρέσουμε τον %s από τους {$lplural} σας. Παρακαλώ δοκιμάστε ξανά.",
	'friends:none' => "Αυτός ο χρήστης δεν έχει προσθέσει κανέναν ως {$lsingle} ακόμα.",
	'friends:none:you' => "Δεν έχετε κανένα {$lplural} ακόμα.",
	'friends:none:found' => "Δεν βρέθηκαν {$lplural}.",
	'friends:of:none' => "Κανείς δεν έχει προσθέσει αυτό το χρήστη ως {$lsingle} ακόμα.",
	'friends:of:none:you' => "Κανείς δεν σας έχει προσθέσει ως {$lsingle} ακόμα.",
	'friends:of:owned' => "Χρήστες που έχουν κάνει τον %s {$lsingle}",
	'friends:of' => "{$uplural} από",
	'friends:collections' => "{$usingle} συλλογές",
	'friends:collections:add' => "Νέα συλλογή από {$lplural}",
	'friends:addfriends' => "Επιλογή {$lplural}",
	'friends:collectionfriends' => "{$uplural} στη συλλογήn",
	'river:friend:user:default' => "Ο %s είναι τώρα {$lsingle} με τον %s",
	'river:widgets:friends' => "{$uplural} δραστηριότητα",
	'userpicker:only_friends' => "Μόνο {$lplural}",
	'river:friends' => "{$uplural} Δρατηριότητα",
	'friends:widget:description' => "Εμφανίζει κάποιους από τους {$lplural} σας.",
	'friends:num_display' => "Αριθμός {$lplural} προς εμφάνιση",
	'friend:newfriend:subject' => "Ο %s σας έχει κάνει {$lsingle}!",
	'friend:newfriend:body' => "Ο %s σας έχει κάνει {$lsingle}!

Για να δείτε το προφίλ του, πατήστε εδώ:

%s

Δεν μπορείτε να απαντήσετε σε αυτό το email.",

    /*
     * 	Extendafriend
     */

	'extendafriend:edit:friend' => "Επεξεργασία {$usingle}",
	'extendafriend:updated' => "{$usingle} συλλογές πρόσβασης έχουν ανανεωθεί",


    /*
     * 	Friend Request
     */

	'friend_request' => "{$usingle} Αίτηση",
	'friend_request:menu' => "{$usingle} Αιτήσεις",
	'friend_request:title' => "{$usingle} Αιτήσεις για: %s",
	'friend_request:new' => "New {$lsingle} αίτηση",
	'friend_request:friend:add:pending' => "{$usingle} αίτηση εκρεμμεί",
	'friend_request:newfriend:subject' => "Ο %s θέλει να γίνει {$lsingle} σας!",
	'friend_request:newfriend:body' => "Ο %s θέλει να γίνει {$lsingle} σας! Περιμένει όμως να εγκρίνετε το αίτημα...οπότε συνδεθείτε τώρα ώστε να μπορείτε να εγκρίνετε το αίτημα!

Μπορείτε να δείτε τα εκρεμμή αιτήματα {$lsingle} σας στο (Βεβαιωθείτε ότι είστε συνδεδεμένος στην ιστοσελίδα πριν πατήσετε τον παρακάτω σύνδεσμο, αλλιώς θα μεταφερθείτε στη σελίδα σύνδεσης.):

%s

(Δεν μπορείτε να απαντήσετε σε αυτό το email.)",
		
	// Actions
	// Add request
	'friend_request:add:successful' => "Έχετε αιτηθεί να γίνεται {$lplural} με τον %s. Πρέπει να εγκρίνουν το αίτημά σας πριν αρχίσουν να εμφανίζονται στη λίστα {$lplural} σας.",
	'friend_request:add:exists' => "Έχετε ήδη αιτηθεί να γίνετε {$lplural} με τον %s.",
		
	// Approve request
	'friend_request:approve:successful' => "Ο %s είναι τώρα {$lsingle}",
	'friend_request:approve:fail' => "Σφάλμα κατά την δημιουργία {$lsingle} σχέσης με τον %s",
	
	// Decline request
	'friend_request:decline:subject' => "Ο %s έχει αρνηθεί την αίτησή σας για {$lsingle}",
	'friend_request:decline:message' => "Αγαπητέ %s,

Ο %s έχει αρνηθεί την αίτησή σας να γίνει {$lsingle}.",
	'friend_request:decline:success' => "{$usingle} αίτημα απορρίφθηκε επιτυχώς",
	'friend_request:decline:fail' => "Σφάλμα κατά την απόρριψη αιτήματος {$usingle}, παρακαλώ δοκιμάστε ξανά",
		
	// Revoke request
	'friend_request:revoke:success' => "{$usingle} αίτημα αποσύρθηκε επιτυχώς",
	'friend_request:revoke:fail' => "Σφάλμα κατά την απόσυρση αιτήματος {$usingle}, παρακαλώ δοκιμάστε ξανά",
	
	// Views
	// Received
	'friend_request:received:title' => "Λάβατε αιτήματα {$usingle}",
	
	// Sent
	'friend_request:sent:title' => "Αποστολή αιτημάτων {$usingle}",



    /*
     * 	HypeEvents
     */

    'hj:events:friendevents' => "{$uplural} Εκδηλώσεις",

    /*
     * 	Invite Friends
     */
	
	'friends:invite' => "Πρόσκληση {$lplural}",
	'invitefriends:introduction' => "Για να προσκαλέσετε τους {$lplural} σας να συμμετέχει σε αυτό το δίκτυο, εισάγετε της διευθύνσεις email τους παρακάτω (μία ανά γραμμή):",
	'invitefriends:success' => "Οι {$lplural} σας προσκαλέστηκαν.",
	'invitefriends:email' => "
Έχετε προσκληθεί να συμμετέχετε στο %s από τον %s. Συμπεριέλαβαν το ακόλουθο μήνυμα:

%s

Για να συμμετέχετε, πατήστε τον ακόλουθο σύνδεσμο:

%s

Θα τους προσθέσετε αυτόματα ως {$lsingle} όταν δημιουργήσετε τον λογαριασμό σας.",


/*
 * 	Rename Groups
 */

'groups:invite' => "Πρόσκληση {$lplural}",
'groups:invite:title' => "Πρόσκληση {$lplural} στο {$glsingle}",
'groups:inviteto' => "Πρόσκληση {$lplural} σε '%s'",
'groups:nofriends' => "Δεν έχετε άλλους {$lplural} που δεν έχουν προσκληθεί στο {$glsingle}.",
'groups:nofriendsatall' => "Δεν έχετε {$lplural} να προσκαλέσετε!",


/*
 * 	River Addon
 */
'river_addon:label:friends' => "Θέλετε να εμφανίζετε {$lplural} στην πλαϊνή μπάρα;",
'river_addon:label:num' => "Αριθμός {$lplural} προς εμφάνιση",
'river_addon:option:default' => "Όλοι, Δικοί μου, {$uplural}",
'river_addon:option:friend'	=> "{$uplural}, Δικοί μου, Όλοι",
'river_addon:option:mine' => "Δικοί μου, {$uplural}, Όλοι",

);

add_translation("el", $greek);
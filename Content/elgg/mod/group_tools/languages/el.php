<?php 

	$greek = array(
	
		// general
		'group_tools:decline' => "Απόρριψη",
		'group_tools:revoke' => "Ανάκληση",
		'group_tools:add_users' => "Προσθήκη χρηστών",
		'group_tools:in' => "μέα",
		'group_tools:remove' => "Αφαίρεση",
		'group_tools:clear_selection' => "Καθαρισμός επιλογής",
		'group_tools:all_members' => "Όλα τα μέλη",
		'group_tools:explain' => "Επεξήγηση",
		
		'group_tools:default:access:group' => "Μόνο μέλη του περιστατικού",
		
		'group_tools:joinrequest:already' => "Αίτηση ανάκλησης ιδιότητας μέλους",
		'group_tools:joinrequest:already:tooltip' => "Έχετε ήδη αιτηθεί να συμμετέχεται σε αυτό το περιστατικό, πατήστε εδώ για να ανακαλέσετε την αίτηση",
		
		// menu
		'group_tools:menu:mail' => "Στείλτε email στα μέλη Members",
		'group_tools:menu:invitations' => "Διαχείρηση προσκλήσεων",
		
		// plugin settings
		'group_tools:settings:invite:title' => "Επιλογές πρόσκλησης στο περιστατικό",
		'group_tools:settings:management:title' => "Γενικές επιλογές περιστατικού",
		'group_tools:settings:default_access:title' => "Αρχική πρόσβαση στο περιστατικό",
	
		'group_tools:settings:admin_create' => "Περιορισμός της δημιουργίας περιστατικών σε διαχειριστές του ιστότοπου",
		'group_tools:settings:admin_create:description' => "Θέτοντας αυτή την επιλογή στο 'Ναι' θα κάνει τη δημιουργία νέων περιστατικών αδύνατη για κανονικά μέλη του ιστότοπού σας.",
		
		'group_tools:settings:admin_transfer' => "Να επιτρέπεται η αλλαγή του ιδιοκτήτη του περιστατικού",
		'group_tools:settings:admin_transfer:admin' => "Διαχειριστής του ιστότοπου μόνο",
		'group_tools:settings:admin_transfer:owner' => "Ιδιοκτήτες περιστατικού και διαχειριστές του ιστότοπου",
		
		'group_tools:settings:multiple_admin' => "Να επιτρέπεται να υπάρχοθν πολλαπλοί διαχειριστές περιστατικού",
		
		'group_tools:settings:invite' => "Να επιτρέπεται σε όλους τους χρήστες να προσκαλούνται (όχι μόνο φίλους)",
		'group_tools:settings:invite_email' => "Να επιτρέπεται όλοι οι χρήστες να προσκαλούνται μέσω διεύθυνσης e-mail",
		'group_tools:settings:invite_csv' => "Να επιτρέπεται όλοι οι χρήστες να προσκαλούνται μέσω CSV-file",
	
		'group_tools:settings:mail' => "Να επιτρέπεται η αλληλογραφία περιστατικού (επιτρέπει στους διαχειριστές του περιστατικού να στέλνουν ένα μήνημα σε όλα τα μέλη)",
		
		'group_tools:settings:listing' => "Αρχική καρτέλα με λίστα των περιστατικών",
		
		'group_tools:settings:default_access' => "Ποια πρέπει να είναι η αρχική πρόσβαση για περιεχόμενο στα περιστατικά αυτού του ιστότοπου",
		'group_tools:settings:default_access:disclaimer' => "<b>ΠΡΟΕΙΔΟΠΟΙΗΣΗ:</b> αυτό δε θα δουλέψει αν δεν έχετε <a href='https://github.com/Elgg/Elgg/pull/253' target='_blank'>https://github.com/Elgg/Elgg/pull/253</a> εφαρμοσμένο στην εγκατάστασή του συστήματος σας.",
		
		'group_tools:settings:search_index' => "Να επιτρέπεται κλειστά περιστατικά να βρίσκονται από μηχανές αναζήτησης",
		'group_tools:settings:auto_notification' => "Αυτόματη ενεργοποίηση ειδοποιήσεων περιστατικού κατά την συμμετοχή στο περιστατικό",
		'group_tools:settings:auto_join' => "Αυτόματη συμμετοχή σε περιστατικά",
		'group_tools:settings:auto_join:description' => "Νέοι χρήστες θα συμμετέχουν αυτόματα στα παρακάτω περιστατικά",
		
		// group invite message
		'group_tools:groups:invite:body' => "Γεια σου %s,

Ο %s σας προσκάλεσε να συμμετέχεται το περιστατικό '%s'. 
%s

Πατήστε παρακάτω για να δείτε τις προσκλήσεις σας:
%s",
	
		// group add message
		'group_tools:groups:invite:add:subject' => "Έχεται προστεθεί στο περιστατικό %s",
		'group_tools:groups:invite:add:body' => "Γεια σου %s,
	
Ο %s σας πρόσθεσε στο περιστατικό %s.
%s

Για να δείτε το περιστατικό πατήστε σε αυτό το σύνδεσμο
%s",
		// group invite by email
		'group_tools:groups:invite:email:subject' => "Έχετε προσκληθέι για το περιστατικό %s",
		'group_tools:groups:invite:email:body' => "Γεια,

Ο %s σας προσκάλεσε να συμμετέχετε στο περιστατικό %s στο %s.
%s

Αν δεν έχετε λογαρισμό στο %s παρακαλώ εγγραφείτε εδώ
%s

Αν έχετε ήδη λογαριασμό ή αφού εγγραφείτε, παρακαλώ πατήστε τον ακόλουθο σύνδεσμο για να αποδεχτείτε την πρόσκληση
%s

Μπορείτε να πάτε επίσης στο Όλα τα περιστατικά του ιστότοπου -> Προσκλήσεις σε περιστατικό και να εισάγετε τον ακόλουθο κωδικό:
%s",
		// group transfer notification
		'group_tools:notify:transfer:subject' => "Η διαχείρηση του περιστατικού %s έχει ανατεθεί σε σας",
		'group_tools:notify:transfer:message' => "Γεια σου %s,
		
Ο %s σας έχει ορίσει ως το νέο διαχειριστή του περιστατικού %s. 

Για να επισκεφτείτε το περιστατικό παρακαλώ πατήστε στον παρακάτω σύνδεσμο:
%s",
		
		// group edit tabbed
		'group_tools:group:edit:profile' => "Προφίλ περιστατικού / εργαλεία",
		'group_tools:group:edit:other' => "Άλλες επιλογές",

		// admin transfer - form
		'group_tools:admin_transfer:title' => "Μεταφορά της ιδιοκτησίας αυτού του περιστατικού",
		'group_tools:admin_transfer:transfer' => "Μεταφορά ιδιοκτησίας περιστατικού σε",
		'group_tools:admin_transfer:myself' => "Εαυτός μου",
		'group_tools:admin_transfer:submit' => "Μεταφορά",
		'group_tools:admin_transfer:no_users' => "Δεν υπάρχουν μέλη η συνεργάτες για να τους μεταφέρετε την ιδιοκτησία.",
		'group_tools:admin_transfer:confirm' => "Ειστε σίγουρος ότι θέλετε να μεταφέρετε την ιδιοκτησία;",
		
		// auto join form
		'group_tools:auto_join:title' => "Επιλογές αυτόματης συμμετοχής",
		'group_tools:auto_join:add' => "%sΠροσθήκη αυτού του περιστατικού%s στα περιστατικά αυτόματης συμμετοχής. Αυτό θα σημαίνει ότι νέοι χρήστες αυτόματα προσθέτονται στο περιστατικό κατά την εγγραφή.",
		'group_tools:auto_join:remove' => "%sΑφαίρεση αυτού του περιστατικού%s από τα περιστατικά αυτόματης συμμετοχής. Αυτό θα σημαίνει ότι νέοι χρήστες δε θα προσθέτονταθ αυτόματα σε αυτό το περιστατικό κατά την εγγραφή.",
		'group_tools:auto_join:fix' => "Για να κάνετε όλα τα μέλη του site μέλη αυτού του περιστατικού, παρακαλώ %sπατήστε εδώ%s.",
		
		// group admins
		'group_tools:multiple_admin:group_admins' => "Διαχειριστές περιστατικού",
		'group_tools:multiple_admin:profile_actions:remove' => "Αφαίρεση διαχειριστή περιστατικού",
		'group_tools:multiple_admin:profile_actions:add' => "Προσθήκη διαχειριστή περιστατικού",
	
		'group_tools:multiple_admin:group_tool_option' => "Να επιτρέπεται οι διαχειριστές του περιστατικού να αναθέτουν νέους διαχειριστές περιστατικού",

		// cleanup options
		'group_tools:cleanup:title' => "Καθαρισμός πλαϊνής μπάρας περιστατικού",
		'group_tools:cleanup:description' => "Καθαρισμός της πλαϊνής μπάρας του περιστατικού. Αυτό δεν θα έχει επίδραση στους διαχειριστές του περιστατικού.",
		'group_tools:cleanup:owner_block' => "Περιορισμός του block του ιδιοκτήτη",
		'group_tools:cleanup:owner_block:explain' => "Το block του ιδιοκτήτη μπορεί να βρεθεί στην κορυφή της πλαϊνής μπάρας, κάποιοι επιπλέον σύνδεσμοι μπορούν να αναρτηθούνε σε αυτή την περιοχή (παράδειγμα: σύνδεσμοι RSS).",
		'group_tools:cleanup:actions' => "Θέλετε να επιτρέπετε σε χρήστες να συμμετέχουν σε αυτό το περιστατικό",
		'group_tools:cleanup:actions:explain' => "Βάσει των ρυθμίσεών σας για το περιστατικό, χρήστες μπορούν να συμμετέχουνν στο περιστατικό άμεσα ή να ζητήσουν να γίνουν μέλη.",
		'group_tools:cleanup:menu' => "Απόκρυψη αντικειμένων πλαϊνού μενού",
		'group_tools:cleanup:menu:explain' => "Απόκρυψη των συνδέσμων του μενού για τα διαφορετικά εργαλεία του περιστατικού. Οι χρήστες θα μπορούν να έχουν πρόσβαση στα εργαλεία του περιστατικού μόνο χρησιμοποιόντας τα widgets του περιστατικού.",
		'group_tools:cleanup:members' => "Απόκρυψη των μελών του περιστατικού",
		'group_tools:cleanup:members:explain' => "Στη σελίδα προφίλ του περιστατικού μπορεί να βρεθεί μια λίστα των μελών του περιστατικού στο επισημασμένο κομμάτι. Μπορείτε να επιλέξετε να κρύψετε αυτή τη λίστα.",
		'group_tools:cleanup:search' => "Απόκρυψη αναζήτησης στο περιστατικό",
		'group_tools:cleanup:search:explain' => "Στην σελίδα του προφίλ του περιστατικού υπάρχει μια περιοχή αναζήτησης. Μπορείτε να επιλέξετε να την κρύψετε.",
		'group_tools:cleanup:featured' => "Εμφάνιση των προβεβλημένων περιστατικών στην πλαϊνή μπάρα",
		'group_tools:cleanup:featured:explain' => "Μπορείτε να επιλέξετε να δείξετε μια λίστα από προβεβλημένα περιστατικά στην επισημασμένη περιοχή στη σελίδα προφίλ του περιστατικού",
		'group_tools:cleanup:featured_sorting' => "Πώς να ταξινομηθούν τα προβεβλημένα περιστατικά",
		'group_tools:cleanup:featured_sorting:time_created' => "Νεότερα πρώτα",
		'group_tools:cleanup:featured_sorting:alphabetical' => "Αλφαβητικά",

		// group default access
		'group_tools:default_access:title' => "Αρχική πρόσβαση στο περιστατικό",
		'group_tools:default_access:description' => "Εδώ μπορείς να ελέγξεις ποια θα έπρεπε να είναι η αρχική πρόσβαση στο περιεχόμενο στο περιστατικό σας.",
		
		// group notification
		'group_tools:notifications:title' => "Ειδοποιήσεις περιστατικού",
		'group_tools:notifications:description' => "Αυτό το περιστατικό έχει %s μέλη, από αυτά %s έχουν ενεργοποιημένες τις ειδοποιήσεις για δραστηριότητα σε αυτό το περιστατικό. Παρακάτω μπορείτε να αλλάξετε αυτή τη ρύθμιση για όλα τα μέλη του περιστατικού.",
		'group_tools:notifications:disclaimer' => "Με μεγάλα περιστατικά αυτό μπορεί να πάρει λίγο καιρό.",
		'group_tools:notifications:enable' => "Ενεργοποίηση ειδοποιήσεων για όλους",
		'group_tools:notifications:disable' => "Απενεργοποίηση ειδοποιήσεων για όλους",
		
		// group profile widgets
		'group_tools:profile_widgets:title' => "Εμφάνιση widgets του προφίλ του περιστατικού σε μη-μέλη",
		'group_tools:profile_widgets:description' => "Αυτό είναι κλειστό περιστατικό. Αρχικά δεν εμφανίζεται κανένα widget σε μη-μέλη. Εδώ μπορείτε εάν το επιθυμείτε να αλλάξετε αυτή τη ρύθμιση.",
		'group_tools:profile_widgets:option' => "Να επιτρέπεται σε μη-μέλη να βλέπουν τα widgets στην σελίδα προφίλ του περιστατικού:",
		
		// group mail
		'group_tools:mail:message:from' => "Από το περιστατικό",
		
		'group_tools:mail:title' => "Αποστολή email στα μέλη του περιστατικού",
		'group_tools:mail:form:recipients' => "Αριθμός αποδεκτών",
		'group_tools:mail:form:members:selection' => "Επιλογή μεμονομένων μελών",
		
		'group_tools:mail:form:title' => "Θέμα",
		'group_tools:mail:form:description' => "Κύριο μέρος",
	
		'group_tools:mail:form:js:members' => "Παρακαλώ επιλέξτε τουλάχιστον ένα μέλος για να στείλετε αυτό το μήνυμα",
		'group_tools:mail:form:js:description' => "Παρακαλώ εισάγετε ένα μήνυμα",
		
		// group invite
		'group_tools:groups:invite:title' => "Προσκαλέστε χρήστες σε αυτό το περιστατικό",
		'group_tools:groups:invite' => "Πρόσκηλη χρηστών",
		
		'group_tools:group:invite:friends:select_all' => "Επιλογή όλων των συνεργατών",
		'group_tools:group:invite:friends:deselect_all' => "Μη επιλογή όλων των συνεργατών",
		
		'group_tools:group:invite:users' => "Εύρεση χρήστη(ων)",
		'group_tools:group:invite:users:description' => "Εισάγετε ένα όνομα ή όνομα χρήστη ενός μέλους του ιστότοπου και επιλέξτε τον από την λίστα",
		'group_tools:group:invite:users:all' => "Προσκαλέστε όλα τα μέλη του ιστότοπου στο περιστατικό",
		
		'group_tools:group:invite:email' => "Χρήση διευθύνσεων e-mail",
		'group_tools:group:invite:email:description' => "Εισάγετε μια έγκυρη διεύθυνση e-mail και επιλέξτε τη από την λίστα",
		
		'group_tools:group:invite:csv' => "Χρήση ανεβάσματος CSV",
		'group_tools:group:invite:csv:description' => "Μπορείτε να ανεβάσετε ένα αρχείο CSV με τους χρήστες που θέλετε να καλέσετε.<br />Η μορφοποίηση πρέπει να είναι: όνομα; διεύθυνση e-mail. Δεν πρέπει να υπάρχει γραμμή κεφαλίδας.",
		
		'group_tools:group:invite:text' => "Προσωπική σημείωση (προεραιτικό)",
		'group_tools:group:invite:add:confirm' => "Είστε σίγουρος ότι θέλετε να προσθέσετε αυτούς τους χρήστες άμεσα;",
		
		'group_tools:group:invite:resend' => "Ξαναστείλε προσκλήσεις σε χρήστες που έχουν ήδη προσκληθεί",

		'group_tools:groups:invitation:code:title' => "Προσκλήσεις περιστατικού μέσω e-mail",
		'group_tools:groups:invitation:code:description' => "Αν έχετε λάβει μια πρόσκληση, μέσω email για να συμμετέχετε σε ένα περιστατικό, μπορείτε να εισάγετε τον κωδικό της πρόσκληση εδώ για να αποδεχτείτε την πρόσκληση. Αν πατήσετε στον σύνδεσμο στο e-mail πρόσκλησης, ο κωδικός θα εισαχθεί για σας.",
	
		// group membership requests
		'group_tools:groups:membershipreq:requests' => "Αιτήσεις συμμετοχής",
		'group_tools:groups:membershipreq:invitations' => "Εκκρεμείς προσκλήσεις",
		'group_tools:groups:membershipreq:invitations:none' => "Δεν υπάρχουν εκκρεμείς προσκλήσεις",
		'group_tools:groups:membershipreq:invitations:revoke:confirm' => "Ειστε σίγουρος ότι θέλετε να ανακαλέσετε αυτή την πρόσκληση;",
	
		// group invitations
		'group_tools:group:invitations:request' => "Εκκρεμείς αιτήσεις για συμμετοχή",
		'group_tools:group:invitations:request:revoke:confirm' => "Ειστε σίγουρος ότι θέλετε να ανακαλέσετε την αίτησή σας για συμμετοχή;",
		'group_tools:group:invitations:request:non_found' => "Δεν υπάρχουν εκκρεμείς αιτήσεις για συμμετοχή αυτή τη στιγμή",
	
		// group listing
		'group_tools:groups:sorting:alphabetical' => "Αλφαβητικά",
		'group_tools:groups:sorting:open' => "Ανοιχτό",
		'group_tools:groups:sorting:closed' => "Κλειστό",
	
		// actions
		'group_tools:action:error:input' => "Μη αποδεχτή είσοδος για να πραγματοποιηθεί αυτή η δράση",
		'group_tools:action:error:entities' => "Τα δεδομένα GUIDs δεν οδήγησαν στις σωστές οντότητες",
		'group_tools:action:error:entity' => "Το δεδομένο GUID δεν οδήγησε στις σωστές οντότητες",
		'group_tools:action:error:edit' => "Δεν έχετε πρόσβαση στη δεδομένη οντότητα",
		'group_tools:action:error:save' => "Υπήρξε ένα σφάλμα κατά την αποθήκευση των ρυθμίσεων",
		'group_tools:action:success' => "Οι ρυθμίσεις αποθηκεύτηκαν επιτυχώς",
	
		// admin transfer - action
		'group_tools:action:admin_transfer:error:access' => "Δεν έχετε την άδεια να μεταφέρετε την ιδιοκτησία αυτού του περιστατικού",
		'group_tools:action:admin_transfer:error:self' => "Δεν μπορείτε να μεταφέρετε την ιδιοκτησία στον εαυτό σας, είστε ήδη ο ιδιοκτήτης",
		'group_tools:action:admin_transfer:error:save' => "Ένα άγνωστο σφάλμα σηνέβει ενώ αποθηκευόταν το περιστατικό, παρακαλώ δοκιμάστε ξανά",
		'group_tools:action:admin_transfer:success' => "Η ιδιοκτησία του περιστατικού μεταφέρθηκε επιτυχώς στον %s",
		
		// group admins - action
		'group_tools:action:toggle_admin:error:group' => "Η δοσμένη εισόδος δεν έχει ως αποτέλεσμα ένα περιστατικό ή δεν μπορείτε να επεξεργαστείτε αυτό το περιστατικό ή ο χρήστης δεν είναι μέλος",
		'group_tools:action:toggle_admin:error:remove' => "Συνέβη ένα άγνωστο λάθος κατά την αφαίρεση του χρήστη ως διαχειριστή του περιστατικού",
		'group_tools:action:toggle_admin:error:add' => "Συνέβη ένα άγνωστο λάθος κατά την προσθήκη του χρήστη ως διαχειριστή του περιστατικού",
		'group_tools:action:toggle_admin:success:remove' => "Ο χρήστης αφαιρέθηκε επιτυχώς από τους διαχειριστές του περιστατικού",
		'group_tools:action:toggle_admin:success:add' => "Ο χρήστης προστέθηκε επιτυχώς στους διαχειριστές του περιστατικού",
		
		// group mail - action
		'group_tools:action:mail:success' => "Το μήνυμα στάλθηκε επιτυχώς",
	
		// group - invite - action
		'group_tools:action:invite:error:invite'=> "Δεν προσκλήθηκε κανένας χρήστης (%s έχουν ήδη προσκληθεί, %s είναι ήδη μέλη)",
		'group_tools:action:invite:error:add'=> "Δεν προσκλήθηκε κανένας χρήστης (%s έχουν ήδη προσκληθεί, %s είναι ήδη μέλη)",
		'group_tools:action:invite:success:invite'=> "%s χρήστες προσκλήθηκαν επιτυχώς (%s έχουν ήδη προσκληθεί, %s είναι ήδη μέλη)",
		'group_tools:action:invite:success:add'=> "%s χρήστες προστέθηκαν επιτυχώς (%s έχουν ήδη προσκληθεί, %s είναι ήδη μέλη)",
		
		// group - invite - accept e-mail
		'group_tools:action:groups:email_invitation:error:input' => "Παρακαλώ εισάγετε έναν κωδικό πρόσκλησης",
		'group_tools:action:groups:email_invitation:error:code' => "Ο εισαγμένος κωρικός πρόσκλησης δεν είναι πια έγκυρος",
		'group_tools:action:groups:email_invitation:error:join' => "Ένα άγνωστο σφάλμα συνέβη κατά την εγγραφή στο περιστατικό %s, ίσως είστε ήδη μέλος",
		'group_tools:action:groups:email_invitation:success' => "Έχετε εγγραφεί στο περιστατικό επιτυχώς",
		
		// group toggle auto join
		'group_tools:action:toggle_auto_join:error:save' => "Ένα σφάλμα συνέωβη κατά την αποθήκευση των νέων ρυθμίσεων",
		'group_tools:action:toggle_auto_join:success' => "Οι νέες ρυθμίσεις αποθηκεύτηκαν επιτυχώς",
		
		// group fix auto_join
		'group_tools:action:fix_auto_join:success' => "Συμμετοχή στο περιστατικό επιδιορθώθηκε: %s νέα μέλη, %s ήταν ήδη μέλη και %s αποτυχίες",
		
		// group cleanup
		'group_tools:actions:cleanup:success' => "Οι ρυμίσεις καθαρίσματος αποθηκεύτηκαν επιτυχώς",
		
		// group default access
		'group_tools:actions:default_access:success' => "Η αρχική πρόσβαση για το περιστατικό αποθηκεύτηκε επιτυχώς",
		
		// group notifications
		'group_tools:action:notifications:error:toggle' => "Άκυρη επιλογή εναλλαγής",
		'group_tools:action:notifications:success:disable' => "Οι ειδοποιήσεις απενεργοποιήθηκαν επιτυχώς για όλα τα μέλη",
		'group_tools:action:notifications:success:enable' => "Οι ειδοποιήσεις ενεργοποιήθηκαν επιτυχώς για όλα τα μέλη",
	
		// Widgets
		// Group River Widget
		'widgets:group_river_widget:title' => "Δραστηριότητα περιστατικού",
	    'widgets:group_river_widget:description' => "Εμφάνιση της δραστηριότητας ενός περιστατικού σε ένα widget",

	    'widgets:group_river_widget:edit:num_display' => "Αριθμός δραστηριοτήτων",
		'widgets:group_river_widget:edit:group' => "Επιλέξτε ένα περιστατικό",
		'widgets:group_river_widget:edit:no_groups' => "Πρέπει να είστε μέλος τουλάχιστον ενός περιστατικού για να χρεησιμοποιήσετε αυτό το widget",

		'widgets:group_river_widget:view:not_configured' => "Αυτό το widget δεν έχει ρυθμιστεί ακόμα",

		'widgets:group_river_widget:view:more' => "Δραστηριότητα στο '%s' περιστατικό",
		'widgets:group_river_widget:view:noactivity' => "Δεν μπορέσαμε να βρούμε καμία δραστηριότητα.",
		
		// Group Members
		'widgets:group_members:title' => "Μέλη περιστατικού",
  		'widgets:group_members:description' => "Εμφάνιση των μελών αυτού του περιστατικού",

  		'widgets:group_members:edit:num_display' => "Πόσα μέλη να εμφανίζονται",
  		'widgets:group_members:view:no_members' => "Δεν βρέθηκαν μέλη του περιστατικού",
  		
  		// Group Invitations
		'widgets:group_invitations:title' => "Προσκλήσεις στο περιστατικό",
	  	'widgets:group_invitations:description' => "Εμφάνιση των εκρεμμών προσκλήσεων σε περιστατικό για τον τρέχοντα χρήστη",
	  	
	  	// Discussion
		"widgets:discussion:settings:group_only" => "Εμφάνιση μόνο συζητήσεων από περιστατικά στα οποία είστε μέλος",
  		'widgets:discussion:more' => "Εμφάνιση περισσότερων συζητήσεων",
  		"widgets:discussion:description" => "Εμφανίζει τις τελευταίες συζητήσεις",
  		
		// Forum topic widget
		'widgets:group_forum_topics:description' => "Εμφάνιση των τελευταίων συζητήσεων",
		
		// index_groups
		'widgets:index_groups:description' => "Εμφάνιση των τελευταίων περιστατικών στην κοινότητά σας",
		'widgets:index_groups:show_members' => "Εμφάνιση αριθμού μελών",
		'widgets:index_groups:featured' => "Εμφάνιση μόνο προβεβλημένων περιστατικών",
		
		'widgets:index_group:filter:field' => "Φιλτράρισμα των περιστατικών βάση του πεδίου περιστατικών",
		'widgets:index_group:filter:value' => "με τιμή",
		'widgets:index_group:filter:no_filter' => "Χωρίς φίλτρο",
		
		// Featured Groups
		'widgets:featured_groups:description' => "Εμφάνιση μιας τυχαίας λίστας απο προβεβλημένα περιστατικά",
	  	'widgets:featured_groups:edit:show_random_group' => "Εμφάνιση ενός τυχαίου μη-προβεβλημένου περιστατικού",
	  	
		// group_news widget
		"widgets:group_news:title" => "Νέα περιστατικού", 
		"widgets:group_news:description" => "Εμφανίζει τα τελευταία 5 blogs από διάφορα περιστατικά", 
		"widgets:group_news:no_projects" => "Δεν έχει ρυθμιστεί κανένα περιστατικό", 
		"widgets:group_news:no_news" => "Δεν υπάρχουν blogs γι αυτό το περιστατικό", 
		"widgets:group_news:settings:project" => "Περιστατικό", 
		"widgets:group_news:settings:no_project" => "Επιλέξτε ένα περιστατικό",
		"widgets:group_news:settings:blog_count" => "Μέγιστος αριθμός από blogs",
		"widgets:group_news:settings:group_icon_size" => "Μέγεθος εικονιδίου περιστατικού",
		"widgets:group_news:settings:group_icon_size:small" => "Μικρό",
		"widgets:group_news:settings:group_icon_size:medium" => "Μεσαίο",
		
	);
	
	add_translation("el", $greek);
  	
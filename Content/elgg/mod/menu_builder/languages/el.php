<?php

	$greek = array(
	
		/**
		 * Menu items and titles
		 */
	
		'menu_builder' => "Κατασκευαστής μενού",
		'LOGGED_OUT' => "Αποσυνδεδεμένοι χρήστες",
		
		
		//AlexF: Additions
		'menu:cases' => "Περιστατικά",
		'menu:calendar' => "Ημερολόγιο",
		'menu:members' => "Μέλη",
		'menu:lams' => "Εκπαιδευτικά σενάρια",
		'menu:chat' => "Συζήτηση",
		
		// item
		'item:object:menu_builder_menu_item' => "Αντικείμενο του Menu Builder",
	
		// views
		// edit
		'menu_builder:edit_mode:off' => "Λειτουργία εμφάνισης",
		'menu_builder:edit_mode:on' => "Λειτουργία επεξεργασίας",
		'menu_builder:edit_mode:add' => "Κάντε κλικ για να προσθέσετε ένα νέο αντικείμενο στο μενού",
	
		'menu_builder:toggle_context' => "Εναλλαγή πλαισίου",
		'menu_builder:toggle_context:normal_user' => "Εμφάνιση του μενού ως χρήστης μη-διαχειριστής",
		'menu_builder:toggle_context:logged_out' => "Εμφάνιση του μενού για αποσυνδεδεμένους χρήστες",
		'menu_builder:toggle_context:all' => "Εμφάνιση όλων των αντικειμένων του μενού",
		'menu_builder:toggle_context:default' => "Εμφάνιση του μενού ως διαχειριστής",
				
		// add
		'menu_builder:add:title' => "Προσθήκη νέου αντικειμένου στο μενού",
		'menu_builder:add:form:title' => "Τίτλος",
		'menu_builder:add:form:url' => "URL",
		'menu_builder:add:form:parent' => "Πρόγονος του αντικειμένου του μενού",
		'menu_builder:add:form:parent:toplevel' => "Αντικείμενο του μενού του υψηλότερου επιπέδου",
		'menu_builder:add:form:access' => "Ποιος μπορεί να δεί αυτό το αντικείμενο του μενού;",
		'menu_builder:add:access:admin_only' => "Μόνο για διαχειριστές",
	
		// actions
		'menu_builder:actions:edit:error:input' => "Λάθος είσοδος για τη δημιουργία/επεξεργασία ενός αντικειμένου του μενού",
		'menu_builder:actions:edit:error:entity' => "Το παρεχόμενο GUID δεν μπόρεσε να βρεθεί",
		'menu_builder:actions:edit:error:subtype' => "Το παρεχόμενο GUID δεν είναι αντικείμενο του μενού",
		'menu_builder:actions:edit:error:create' => "Συνέβη ένα σφάλμα κατά τη δημιουργία του αντικειμένου του μενού, παρακαλώ δοκιμάστε ξανά",
		'menu_builder:actions:edit:error:parent' => "Δεν μπορείτε να μετακινείσετε αυτό το αντικείμενο του μενου γιατί έχει ύπο-μενού. Παρακαλώ μετακινείστε τα αντικείμενα του ύπο-μενού πρώτα.",
		'menu_builder:actions:edit:error:save' => "Ένα άγνωστο σφάλμα συνέβει κατά την αποθήκευση του αντικειμένου του μενού, παρακαλώ δοκιμάστε ξανά",
		'menu_builder:actions:edit:success' => "Το αντικείμενο του μενού δημιουργήθηκε/επεξεργάστηκε επιτυχώς",
	
		'menu_builder:actions:delete:success' => "Το αντικείμενο του μενού διαγράφηκε επιτυχώς",
	);
					
	add_translation("el",$greek);

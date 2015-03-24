<?php
/**
 * Core English Language
 *
 * @package Elgg.Core
 * @subpackage Languages.English
 */

$greek = array(
/**
 * Sites
 */

	'item:site' => 'Ιστότοπος',

/**
 * Sessions
 */

	'login' => "Εισαγωγή",
	'loginok' => "Έχετε συνδεθεί.",
	'loginerror' => "Η σύνδεση απέτυχε. Παρακαλώ ελέγξτε τα διαπιστευτήριά σας και προσπαθήστε ξανά.",
	'login:empty' => "Απαιτούνται όνομα/email και κωδικός.",
	'login:baduser' => "Ο λογαριασμός δεν μπόρεσε να φορτωθεί.",
	'auth:nopams' => "Εσωτερικό λάθος. Δεν υπάρχει μέθοδος πιστοποίησης χρήστη εγκατεστημένη.",

	'logout' => "Αποσύνδεση",
	'logoutok' => "Έχετε αποσυνδεθεί.",
	'logouterror' => "Δεν μπορείσαμε να σας αποσυνδέσομε. Παρακαλώ προσπαθείστε ξανά.",

	'loggedinrequired' => "Πρέπει να είστε συνδεδεμένος για να δείτε αυτή τη σελίδα.",
	'adminrequired' => "Πρέπει να είστε διαχειριστής για να δείτε αυτή τη σελίδα.",
	'membershiprequired' => "Πρέπει να είστε μέλος αυτού του περιστατικού για να δείτε αυτή τη σελίδα.",


/**
 * Errors
 */
	'exception:title' => "Ανεπανόρθωτο Σφάλμα.",
	'exception:contact_admin' => 'Συνέβει ένα ανεπανόρθωτο σφάλμα και έχει καταχωρηθεί. Επικοινωνήστε με τον διαχειρηστή της σελίδας στέλνοντας τις παρακάτω πληροφορίες:',

	'actionundefined' => "Η ζητούμενη δράση (%s) δεν έχει οριστεί στο σύστημα.",
	'actionnotfound' => "Το αρχείο δράσης για %s δε βρέθηκε.",
	'actionloggedout' => "Συγγνώμη, δεν μπορείτε να κάνετε αυτή τη δράση όταν είστε αποσυνδεδεμένος.",
	'actionunauthorized' => 'Δεν έχετε εξουσιοδότηση για να πράξετε αυτή τη δράση',

	'InstallationException:SiteNotInstalled' => 'Δεν μπορούμε να διαχειριστούμε το αίτημα σας. Αυτή η σελίδα'
		. ' δεν είναι ρυθμισμένη ή η βάση δεδομένων έχει πέσει.',
	'InstallationException:MissingLibrary' => 'Το %s δεν μπόρεσε να φορτωθεί',
	'InstallationException:CannotLoadSettings' => 'Το σύστημα δεν μπόρεσε να φορτώσει το αρχείο ρυθμίσεωςν. Είτε δεν υπάρχει είτε υπάρχει πρόβλημα άδειας χρήσης του αρχείου.',

	'SecurityException:Codeblock' => "Η πρόσβαση για εκτέλεση προνομιακού κομματιού κώδικα απορρίφθηκε",
	'DatabaseException:WrongCredentials' => "Το σύστημα δεν μπόρεσε να συνδεθεί στη βάση δεδομένων χρησιμοποιώντας τα δοσμένα πιστοποιητικά. Ελέγξτε το αρχείο ρυθμίσεων.",
	'DatabaseException:NoConnect' => "Το σύστημα δεν μπόρεσε να επιλέξει τη βάση δεδομένων '%s', παρακαλώ ελέγξτε ότι η βάση δεδομένων έχει δημιουργηθεί και ότι έχετε πρόσβαση σε αυτή.",
	'SecurityException:FunctionDenied' => "Η πρόσβαση στην προνομιακή συνάρτηση '%s' απορρίφθηκε.",
	'DatabaseException:DBSetupIssues' => "Παρουσιάστηκε ένας αριθμός προβλημάτων: ",
	'DatabaseException:ScriptNotFound' => "Το σύστημα δεν μπόρεσε να βρει το ζητούμενο σενάριο βάσης δεδομένων στο %s.",
	'DatabaseException:InvalidQuery' => "Άκυρο ερώτημα",
	'DatabaseException:InvalidDBLink' => "Η σύνδεση στη βάση δεδομένων χάθηκε.",

	'IOException:FailedToLoadGUID' => "Η φόρτωση νέου %s από το GUID:%d απέτυχε",
	'InvalidParameterException:NonElggObject' => "Περνάτε ένα non-ElggObject σε ένα ElggObject κατασκευαστή!",
	'InvalidParameterException:UnrecognisedValue' => "Μη αναγνωρισμένη τιμή πέρασε στον κατασκευαστή.",

	'InvalidClassException:NotValidElggStar' => "Το GUID:%d δεν είναι δόκιμο %s",

	'PluginException:MisconfiguredPlugin' => "Το %s (guid: %s) είναι ένα κακώς ρυθμισμένο πρόσθετο. Απενεργοποιήθηκε.",
	'PluginException:CannotStart' => 'Το %s (guid: %s) δεν μπόρεσε να ξεκινήσει και έχει απενεργοποιηθεί.  Λόγος: %s',
	'PluginException:InvalidID' => "Το %s είναι ένα άκυρο ID πρόσθετου.",
	'PluginException:InvalidPath' => "Το %s είναι ένα άκυρο μονοπάτι πρόσθετου.",
	'PluginException:InvalidManifest' => 'Άκυρο αρχείο μανιφέστου για το πρόσθετο %s',
	'PluginException:InvalidPlugin' => 'Το %s δεν είναι δόκιμο πρόσθετο.',
	'PluginException:InvalidPlugin:Details' => 'Το %s δεν είναι δόκιμο πρόσθετο: %s',
	'PluginException:NullInstantiated' => 'Το ElggPlugin δεν μπορεί να δημιουργήσει στιγμιότυπο με null είσοδο. Πρέπει να περάσετε ένα GUID, ένα ID πρόσθετου ή ένα πλήρες μονοπάτι.',

	'ElggPlugin:MissingID' => 'Λείπει το ID του πρόσθετου (guid %s)',
	'ElggPlugin:NoPluginPackagePackage' => 'Λείπει το ElggPluginPackage για το ID του πρόσθετου %s (guid %s)',

	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Το απαιτούμενο αρχείο "%s" λείπει.',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Το μανιφέστο του περιέχει ένα άκυρο τύπο εξάρτησης "%s".',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Το μανιφέστο του περιέχει ένα άκυρο τύπο παροχής "%s".',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Υπάρχει μία άκυρη εξάρτηση %s "%s" στο πρόσθετο %s. Τα πρόσθετα δεν μπορούν να συγκρούονται ή να απαιτούν κάτι που αυτά παρέχουν!',

	'ElggPlugin:Exception:CannotIncludeFile' => 'Το %s δεν μπορεί να συμπεριληφθεί για το πρόσθετο %s (guid: %s) στο %s.',
	'ElggPlugin:Exception:CannotRegisterViews' => 'Δεν μπορεί να ανοιχτεί ο φάκελος εμφάνισης για το πρόσθετο %s (guid: %s) στο %s.',
	'ElggPlugin:Exception:CannotRegisterLanguages' => 'Δεν μπορούν να καταχωρηθούν γλώσσες για το πρόσθετο %s (guid: %s) στο %s.',
	'ElggPlugin:Exception:NoID' => 'Δεν υπάρχει ID για το plugin guid %s!',

	'PluginException:ParserError' => 'Λάθος κατά την ανάλυση του μανιφέστου με API έκδοση %s στο πρόσθετο %s.',
	'PluginException:NoAvailableParser' => 'Δεν μπορεί να εντοπιστεί αναλυτής για το μανιφέστο με API έκδοση %s στο πρόσθετο %s.',
	'PluginException:ParserErrorMissingRequiredAttribute' => "Λείπει απαιτούμενο '%s' χαρακτηριστικό στο μανιφέστο για το πρόσθετο %s.",

	'ElggPlugin:Dependencies:Requires' => 'Απαιτεί',
	'ElggPlugin:Dependencies:Suggests' => 'Προιτείνει',
	'ElggPlugin:Dependencies:Conflicts' => 'Συγκρούσεις',
	'ElggPlugin:Dependencies:Conflicted' => 'Συγκρουόμενα',
	'ElggPlugin:Dependencies:Provides' => 'Παρέχει',
	'ElggPlugin:Dependencies:Priority' => 'Προτεραιότητα',

	'ElggPlugin:Dependencies:Elgg' => 'Έκδοση συστήματος',
	'ElggPlugin:Dependencies:PhpExtension' => 'PHP προέκταση: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'PHP ini ρυθμίσεις: %s',
	'ElggPlugin:Dependencies:Plugin' => 'Πρόσθετο: %s',
	'ElggPlugin:Dependencies:Priority:After' => 'Μετά από %s',
	'ElggPlugin:Dependencies:Priority:Before' => 'Πριν από %s',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => 'Το %s δεν είναι εγκατεστημένο',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Λείπει',

	'ElggPlugin:InvalidAndDeactivated' => 'Το %s είναι ένα άκυρο πρόσθετο και έχει απενεργοποιηθεί.',

	'InvalidParameterException:NonElggUser' => "Πέρασμα ενός non-ElggUser σε ένα ElggUser κατασκευαστή!",

	'InvalidParameterException:NonElggSite' => "Πέρασμα ενός non-ElggSite σε ένα ElggSite κατασκευαστή!",

	'InvalidParameterException:NonElggGroup' => "Πέρασμα ενός non-ElggGroup σε ένα ElggGroup κατασκευαστή!",

	'IOException:UnableToSaveNew' => "Απέτυχε η αποθήκευση του νέου %s",

	'InvalidParameterException:GUIDNotForExport' => "Το GUID δεν καθορίστηκε κατά την εισαγωγή, αυτό δε θα έπρεπε να συμβεί ποτέ.",
	'InvalidParameterException:NonArrayReturnValue' => "Η συνάρτηση σειριοποίησης της οντότητας πέρασε μια παράμετρο επιστροφής που δεν ήταν πίνακας",

	'ConfigurationException:NoCachePath' => "Το μονοπάτι της κρυφής μνήμης δεν έχει οριστεί σε τίποτα!",
	'IOException:NotDirectory' => "Το %s δεν είναι φάκελος.",

	'IOException:BaseEntitySaveFailed' => "Η πληροφορίες της βασικής οντότητας του νέου αντικειμένου δεν μπόρεσαν να αποθηκευτούν!",
	'InvalidParameterException:UnexpectedODDClass' => "Η συνάρτηση import() πέρασε μια απρόσμενη ODD κλάση",
	'InvalidParameterException:EntityTypeNotSet' => "Το είδος της οντότητας πρέπει να οριστεί.",

	'ClassException:ClassnameNotClass' => "Το %s δεν είναι %s.",
	'ClassNotFoundException:MissingClass' => "Η κλάση '%s' δεν βρέθηκε, λείπει πρόσθετο;",
	'InstallationException:TypeNotSupported' => "Ο τύπος %s δεν υποστηρίζεται. Αυτό υποδυκνείει ένα λάθος στην εγκατάστασή σας, το πιο πιθανό είναι να προκαλείται από μια αναβάθμιση που δεν ολοκληρώθηκε.",

	'ImportException:ImportFailed' => "Το στοιχείο %d δεν μπόρεσε να εισαχθεί",
	'ImportException:ProblemSaving' => "Υπήρξε ένα πρόβλημα κατά την αποθήκευση του %s",
	'ImportException:NoGUID' => "Δημιουργήθηκε νέα οντότητα αλλά δεν έχει GUID, αυτό δε θα έπρεπε να συμβεί.",

	'ImportException:GUIDNotFound' => "Η οντότητα '%d' δεν βρέθηκε.",
	'ImportException:ProblemUpdatingMeta' => "Υπήρχε ένα πρόβλημα κατά την αναβάθμιση του '%s' στην οντότητα '%d'",

	'ExportException:NoSuchEntity' => "Δεν υπάρχει τέτοιο GUID οντότητας:%d",

	'ImportException:NoODDElements' => "Δεν βρέθηκαν OpenDD στοιχεία στα δεδομένα εισόδου, η εισαγωγή απέτυχε.",
	'ImportException:NotAllImported' => "Δεν εισήχθησαν όλα τα στοιχεία.",

	'InvalidParameterException:UnrecognisedFileMode' => "Μη αναγνωρισμένη λειτουργία αρχείου '%s'",
	'InvalidParameterException:MissingOwner' => "Ο ιδιοκτήτηξς του αρχείου %s (guid αρχείου:%d) (guid ιδιοκτήτη: %d) λείπει!",
	'IOException:CouldNotMake' => "Το %s δεν μπόρεσε να δημιουργηθεί",
	'IOException:MissingFileName' => "Πρέπει να ορίσετε ένα όνομα πριν το άνοιγμα ενός αρχείου.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "Η κλάση filestore %s για το αρχείο %u δεν μπόρεσε να φορτωθεί",
	'NotificationException:NoNotificationMethod' => "Δεν καθορίστηκε μέθοδος ειδοποίησης.",
	'NotificationException:NoHandlerFound' => "Δε βρέθηκε εξυπηρετητής για το '%s' ή δεν γινόταν να καλεστεί.",
	'NotificationException:ErrorNotifyingGuid' => "Υπήρξε ένα σφάλμα κατά την ειδοποίηση του %d",
	'NotificationException:NoEmailAddress' => "Η διεύθυνση email για το GUID:%d δεν μπόρεσε να ανακτηθεί",
	'NotificationException:MissingParameter' => "Λείπει μια απαιτούμενη παράμετρος, '%s'",

	'DatabaseException:WhereSetNonQuery' => "Το Where σύνολο περιέχει μη WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "Λείπουν πεδία σε ένα ερώτημα τύπου select",
	'DatabaseException:UnspecifiedQueryType' => "Μη αναγνωρισμένο ή μη δηλωμένο είδος ερωτήματος.",
	'DatabaseException:NoTablesSpecified' => "Δεν ορίστηκαν πίνακες για το ερώτημα.",
	'DatabaseException:NoACL' => "Δεν παράχθηκε έλεγχος πρόσβασης στο ερώτημα",

	'InvalidParameterException:NoEntityFound' => "Δεν βρέθηκε οντόντητα, είτε δεν υπάρχει ή δεν έχετε πρόσβαση σε αυτή.",

	'InvalidParameterException:GUIDNotFound' => "Το GUID:%s δεν μπόρεσε να βρεθεί ή δεν μπορείτε να το προσπελάσετε.",
	'InvalidParameterException:IdNotExistForGUID' => "Συγγνώμη, το '%s' δεν υπάρχει για το guid:%d",
	'InvalidParameterException:CanNotExportType' => "Συγγνώμη, δεν ξέρω πώς να εξάγω το '%s'",
	'InvalidParameterException:NoDataFound' => "Δεν βρέθηκαν δεδομένα.",
	'InvalidParameterException:DoesNotBelong' => "Δεν ανήκει στην οντότητα.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "Δεν ανήκει στην οντότητα ή δεν αναφέρεται σε οντότητα.",
	'InvalidParameterException:MissingParameter' => "Λείπουν παράμετροι, πρέπει να παρέχετε ένα GUID.",
	'InvalidParameterException:LibraryNotRegistered' => 'Το %s δεν είναι καταχωρημένη βιβλιοθήκη',
	'InvalidParameterException:LibraryNotFound' => 'Η βιβλιοθήκη %s δεν μπόρεσε να φορτωθέι από %s',

	'APIException:ApiResultUnknown' => "Το αποτέλεσμα API έχει άγνωστο τύπο, αυτό δε θα έπρεπε να συμβαίνει ποτέ.",
	'ConfigurationException:NoSiteID' => "Δεν έχει οριστεί ID ιστοσελίδας.",
	'SecurityException:APIAccessDenied' => "Συγγνώμη, η πρόσβαση στο API έχει απενεργοποιηθεί από τον διαχειριστή.",
	'SecurityException:NoAuthMethods' => "Δεν βρέθηκε μέθοδος πιστοποίησης που να μπορεί να πιστοποιήσει αυτό το αίτημα API.",
	'SecurityException:ForwardFailedToRedirect' => 'Η διοχεύτευση δεν μπόρεσε να εκδοθεί επειδή οι κεφαλίδες έχουν ήδη σταλεί. Η εκτέλεση σταματάει για λόγους ασφάλειας. Αναζητήστε στο http://docs.elgg.org/ για περισσότερες πλήροφορίες.',
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Δεν έχει οριστεί μέθοδος ή συνάρτηση στην κλήση στην expose_method()",
	'InvalidParameterException:APIParametersArrayStructure' => "Η δομή μητρέιων παραμέτρων δεν είναι σωστή για την κλήση να εκτεθεί η μέθοδος '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Άγνωστη http μέθοδος %s για την μέθοδο api '%s'",
	'APIException:MissingParameterInMethod' => "Η παράμετρος %s λείπει στη μέθοδο %s",
	'APIException:ParameterNotArray' => "Το %s δεν φαίνεται να είναι πίνακας.",
	'APIException:UnrecognisedTypeCast' => "Μη αναγνωρισμένος τύπος για την ανάθεση %s για τη μεταβλητή '%s' στη μέθοδο '%s'",
	'APIException:InvalidParameter' => "Βρέθηκαν άκυρες παράμετροι για το '%s' στη μέθοδο '%s'.",
	'APIException:FunctionParseError' => "Το %s(%s) παρουσίασε λάθος κατά την ανάλυση.",
	'APIException:FunctionNoReturn' => "Το %s(%s) δεν επέστρεψε καμία τιμή.",
	'APIException:APIAuthenticationFailed' => "Η κλήση της μεθόδου απέτυχε κατά την πιστοποίηση του API",
	'APIException:UserAuthenticationFailed' => "Η κλήση της μεθόδου απέτυχε κατά την πιστοποίηση του χρήστη",
	'SecurityException:AuthTokenExpired' => "Το σύμβολο πιστοποίησης λείπει ή είναι άκυρο ή έχει λήξει.",
	'CallException:InvalidCallMethod' => "Το %s πρέπει να κληθεί χρησιμοποιώντας '%s'",
	'APIException:MethodCallNotImplemented' => "Η κλήση της μεθόρου '%s' δεν έχει υλοποιηθεί.",
	'APIException:FunctionDoesNotExist' => "Η συνάρτηση για τη μέθοδο '%s' δεν μπορεί να κληθεί",
	'APIException:AlgorithmNotSupported' => "Ο αλγόριθμος '%s' δεν υποστηρίζεται ή έχει απενεργοποιηθεί.",
	'ConfigurationException:CacheDirNotSet' => "Ο κατάλογος cache 'cache_path' δεν έχει οριστεί.",
	'APIException:NotGetOrPost' => "Η μέθοδος της αίτησης πρέπει να είναι GET ή POST",
	'APIException:MissingAPIKey' => "Λείπει το κλειδί του API",
	'APIException:BadAPIKey' => "Κακό κλειδί του API",
	'APIException:MissingHmac' => "Λείπει η κεφαλίδα X-Elgg-hmac",
	'APIException:MissingHmacAlgo' => "Λείπει η κεφαλίδα X-Elgg-hmac-algo",
	'APIException:MissingTime' => "Λείπει η κεφαλίδα X-Elgg-time",
	'APIException:MissingNonce' => "Λείπει η κεφαλίδα X-Elgg-nonce",
	'APIException:TemporalDrift' => "Ο X-Elgg-time είναι πολύ μακριά στο παρελθόν ή στο μέλον. Η χρονική περίοδος απέτυχε.",
	'APIException:NoQueryString' => "Δεν υπάρχουν δεδομένα στο αλφαρηθμητικό του ερωτήματος",
	'APIException:MissingPOSTHash' => "Λείπει η κεφαλίδα X-Elgg-posthash",
	'APIException:MissingPOSTAlgo' => "Λείπει η κεφαλίδα X-Elgg-posthash_algo",
	'APIException:MissingContentType' => "Ο τύπος περιεχομένου για τα δεδομένα της ανάρτησης λείπει",
	'SecurityException:InvalidPostHash' => "Ο κατακερματισμός δεδομένων POST είναι άκυρος - Αναμενόνταν %s αλλά λήφθηκε %s.",
	'SecurityException:DupePacket' => "Η υπογραφή του πακέτου έχει ήδη ειδωθεί.",
	'SecurityException:InvalidAPIKey' => "Το κλειδί API είναι άκυρο ή λείπει.",
	'NotImplementedException:CallMethodNotImplemented' => "Η μέθοδος κλήσης '%s' δεν υποστηρίζεται αυτή την περίοδο.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "Η μέθοδος κλήσης XML-RPC '%s' δεν έχει υλοποιηθεί.",
	'InvalidParameterException:UnexpectedReturnFormat' => "Η κλήση στη μέθοδο '%s' επέστρεψε ένα αναπάντεχο αποτέλεσμα.",
	'CallException:NotRPCCall' => "Η κλήση δε φαίνεται να είναι δόκιμη XML-RPC κλήση",

	'PluginException:NoPluginName' => "Το όνομα του πρόσθετου δεν μπόρεσε να βρεθεί",

	'SecurityException:authenticationfailed' => "Ο χρήστης δεν μπόρεσε να πιστοποιηθεί",

	'CronException:unknownperiod' => 'Το %s δεν είναι αναγνωρισμένη περίοδος.',

	'SecurityException:deletedisablecurrentsite' => 'Δεν μπορείτε να σβήσετε η να απενεργοποιήσετε τον ιστότοπο που βλέπετε αυτή τη στιγμή!',

	'RegistrationException:EmptyPassword' => 'Τα πεδία κωδικού δεν μπορούν να είναι άδεια',
	'RegistrationException:PasswordMismatch' => 'Οι κωδικοί πρέπει να ταιριάζουν',
	'LoginException:BannedUser' => 'Σας έχουν εξορίσει από αυτόν τον ιστότοπο και δεν μπορείτε να συνδεθείτε',
	'LoginException:UsernameFailure' => 'Δεν μπορέσαμε να σας συνδέσουμε. Παρακαλώ ελέγξτε το όνομα χρήστη/email και κωδικό σας.',
	'LoginException:PasswordFailure' => 'Δεν μπορέσαμε να σας συνδέσουμε. Παρακαλώ ελέγξτε το όνομα χρήστη/email και κωδικό σας.',
	'LoginException:AccountLocked' => 'Ο λογαριασμός σας έχει κλειδωθεί λόγω πάρα πολλών αποτυχημένων προσπαθειών σύνδεσης.',
	'LoginException:ChangePasswordFailure' => 'Ο έλεγχος τρέχοντος κωδικού απέτυχε.',
	'LoginException:Unknown' => 'Δεν μπορέσαμε να σας συνδέσουμε λόγω ενός άγνωστου σφάλματος.',

	'deprecatedfunction' => 'Προειδοποίηση: Αυτός ο κώδικας χρησιμοποιεί την υπό απόσυρση συνάρτηση \'%s\' και δεν είναι συμβατός με αυτή την έκδοση του Elgg',

	'pageownerunavailable' => 'Προειδοποίηση: Δεν υπάρχει πρόσβαση στον ιδιοκτήτη της σελίδας %d !',
	'viewfailure' => 'Υπήρξε μια εσωτερική αποτυχία στη θέα %s',
	'changebookmark' => 'Παρακαλώ αλλάξτε το σελιδοδείκτη σας γι αυτή τη σελίδα',
	'noaccess' => 'Πρέπει να συνδεθείτε για να δείτε αυτό το περιεχόμενο ή το περιεχόμενο έχει αφαιρεθεί ή δεν έχετα πρόσβαση να το δείτε.',
	'error:missing_data' => 'Έλειπαν κάποια δεδομένα από το έτημά σας',

	'error:default' => 'Ουψ...κάτι πήγε στραβά.',
	'error:404' => 'Συγγνώμη. Δεν μπορέσαμε να βρούμε τη σελίδα που αιτηθήκατε.',

/**
 * API
 */
	'system.api.list' => "Λίστα με όλα τις διαθέσιμες κλήσεις API του συστήματος.",
	'auth.gettoken' => "Αυτή η κλήση API αφήνει τους χρήστες να αποκτήσουν ένα διακριτικό πιστοποίησης χρήστη που μπορεί να χρησιμοποιηθεί για πιστοποίηση μελλοντικών κλήσεων API. Περάστε το ως παράμετρο auth_token",

/**
 * User details
 */

	'name' => "Εμφάνισε όνομα",
	'email' => "Διεύθυνση Email",
	'username' => "Όνομα χρήστη",
	'loginusername' => "Όνομα χρήστη ή email",
	'password' => "Κωδικός",
	'passwordagain' => "Κωδικός (ξανά για επαλήθευση)",
	'admin_option' => "Θέλετε να κάνετε αυτόν τον χρήστη διαχειριστή?",

/**
 * Access
 */

	'PRIVATE' => "Ιδιωτικό",
	'LOGGED_IN' => "Συνδεδεμένοι χρήστες",
	'PUBLIC' => "Δημόσιο",
	'access:friends:label' => "Συνεργάτες",
	'access' => "Πρόσβαση",
	'access:limited:label' => "Περιορισμένη",
	'access:help' => "Το επίπεδο πρόσβασης",

/**
 * Dashboard and widgets
 */

	'dashboard' => "Πίνακας",
	'dashboard:nowidgets' => "Ο πίνακας σας σας δίνει τη δυνατότητα να ακολουθείτε τις δραστηριότητες και το περιεχόμενο που σας ενδιαφέρουν στη σελίδα.",

	'widgets:add' => 'Προσθήκη widgets',
	'widgets:add:description' => "Πατήστε σε οποιοδήποτε κουμπί των widget παρακάτω για να το προσθέσετε στη σελίδα.",
	'widgets:position:fixed' => '(Σταθερή θέση στη σελίδα)',
	'widget:unavailable' => 'Έχετε ήδη προσθέσει αυτό το widget',
	'widget:numbertodisplay' => 'Αριθμός αντικειμένων για εμφάνιση',

	'widget:delete' => 'Αφαίρεση %s',
	'widget:edit' => 'Προσαρμόστε αυτό το widget',

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'widgets:save:success' => "Το widget αποθηκεύτηκε επιτυχώς.",
	'widgets:save:failure' => "Δεν μπορέσαμε να αποθηκεύσουμε το widget σας.",
	'widgets:add:success' => "Το widget προστέθηκε επιτυχώς.",
	'widgets:add:failure' => "Δεν μπορέσαμε να προσθέσοθμε το widget σας.",
	'widgets:move:failure' => "Δεν μπορέσαμε να αποθηκεύσουμε τη νέα θέση του widget.",
	'widgets:remove:failure' => "Δεν μπορέσαμε να αφαιρέσουμε αυτό το widget",

/**
 * Groups
 */

	'group' => "Περιστατικό",
	'item:group' => "Περιστατικά",

/**
 * Users
 */

	'user' => "Χρήστης",
	'item:user' => "Χρήστες",

/**
 * Friends
 */

	'friends' => "Συνεργάτες",
	'friends:yours' => "Οι συνεργάτες σου",
	'friends:owned' => "Οι συνεργάτες του %s",
	'friend:add' => "Προσθέστε έναν συνεργάτη",
	'friend:remove' => "Αφαιρέστε συνεργάτη",

	'friends:add:successful' => "Έχετε προσθέσει επιτυχώς τον %s ως συνεργάτη.",
	'friends:add:failure' => "Δεν μπορέσατε να προσθέσουμε τον %s ως συνεργάτη.",

	'friends:remove:successful' => "Έχετα επιτυχώς αφαιρέσει τον %s από τους συνεργάτες σας.",
	'friends:remove:failure' => "Δεν μπορέσαμε να αφαιρέσουμε τον %s από τους συνεργάτες σας.",

	'friends:none' => "Δεν υπάρχουν ακόμα συνεργάτες.",
	'friends:none:you' => "Δεν έχετε ακόμα κανένα συνεργάτηYou don't have any friends yet.",

	'friends:none:found' => "Δε βρέθηκαν συνεργάτες.",

	'friends:of:none' => "Κανείς δεν έχει προσθέσει αυτό το χρήστη ως συνεργάτη ακόμα.",
	'friends:of:none:you' => "Κανείς δεν σας έχει προσθέσει ως συνεργάτη ακόμα!",

	'friends:of:owned' => "Μέλη που έχουν κάνει τον %s συνεργάτη",

	'friends:of' => "Συνεργάτες του",
	'friends:collections' => "Συλλογή συνεργατών",
	'collections:add' => "Νέα συλλογή",
	'friends:collections:add' => "Νέα συλλογή συνεργατών",
	'friends:addfriends' => "Επιλέξτε φίλους",
	'friends:collectionname' => "Όνομα συλλογής",
	'friends:collectionfriends' => "Συνεργάτες στη συλλογή",
	'friends:collectionedit' => "Επεξεργαστείτε αυτή τη συλλογή",
	'friends:nocollections' => "Δεν έχετε καμία συλλογή ακόμα.",
	'friends:collectiondeleted' => "Η συλλογή σας έχει διαγραφεί.",
	'friends:collectiondeletefailed' => "Δεν καταφέραμε να διαγράψουμε τη συλλογή. Είτε δεν έχετε πρόσβαση είτε παρουσιάστηκε κάποιο άλλο πρόβλημα.",
	'friends:collectionadded' => "Η συλλογή σας δημιουργήθηκε επιτυχώς",
	'friends:nocollectionname' => "Πρέπει να δώσετε στη συλλογή σας όνομα πριν μπορέσει να δημιουργηθεί.",
	'friends:collections:members' => "Μέλη συλλογής",
	'friends:collections:edit' => "Επεξεργασία συλλογήςEdit collection",
	'friends:collections:edited' => "Αποθηκευμένη συλλογή",
	'friends:collection:edit_failed' => 'Η συλλογή δεν μπόρεσε να αποθηκευτεί.',

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

	'avatar' => 'Άβαταρ',
	'avatar:create' => 'Δημιουργήστε το αβατάρ σας',
	'avatar:edit' => 'Επεξεργασία άβαταρ',
	'avatar:preview' => 'Προεπισκόπηση',
	'avatar:upload' => 'Ανεβάστε ένα νέο άβαταρ',
	'avatar:current' => 'Τρέχων άβαταρ',
	'avatar:remove' => 'Αφαιρέστε τον αβατάρ σας και θέστε την προεπιλογή εικονιδίου',
	'avatar:crop:title' => 'Εργαλίο επεξεργασίας άβαταρ',
	'avatar:upload:instructions' => "Ο άβαταρ σας εμφανίζεται σε όλες τις σελίδες. Μπορείτε να τον αλλάξετε όσο συχνά θέλετε. (Υποστηριζόμενοι τύποι αρχείων: GIF, JPG or PNG)",
	'avatar:create:instructions' => 'Πατήστε και τραβήξτε ένα τετράγωνο παρακάτω για να δείξετε πώς θέλετε να κοπεί το άβαταρ σας. Μια προεπισκόπηση θα εμφανιστή στο κουτί στα δεξιά. Όταν είστε ικανοποιημένος με την προεπισκόπηση, πατήστε \'Δημιουργήστε το άβαταρ σας \'. Η κομμένη έκδοση θα χρησιμοποιείται σε όλο τον ιστότοπο ως το άβαταρ σας.',
	'avatar:upload:success' => 'Το αβατάρ φορτώθηκε επιτυχώς',
	'avatar:upload:fail' => 'Η φόρτωση του άβαταρ απέτυχε',
	'avatar:resize:fail' => 'Η αλλαγή διαστάσεων του άβαταρ απέτυχε',
	'avatar:crop:success' => 'Το κόψιμο του άβαταρ ήταν επιτυχής',
	'avatar:crop:fail' => 'Το κόψιμο του άβαταρ απέτυχε',
	'avatar:remove:success' => 'Η αφαίρεση του άβαταρ ήταν επιτυχής',
	'avatar:remove:fail' => 'Η αφαίρεση του άβαταρ απέτυχε',

	'profile:edit' => 'Επεξεργασία προφίλ',
	'profile:aboutme' => "Για εμένα",
	'profile:description' => "Για εμένα",
	'profile:briefdescription' => "Σύντομη περιγραφή",
	'profile:location' => "Τοποθεσία",
	'profile:skills' => "Ικανότητες",
	'profile:interests' => "Ενδιαφέροντα",
	'profile:contactemail' => "Email επικοινωνίας",
	'profile:phone' => "Τηλεφωνο",
	'profile:mobile' => "Κινητό",
	'profile:website' => "Ιστοσελίδα",
	'profile:twitter' => "Όνομα χρήστη στο Twitter",
	'profile:saved' => "Το προφίλ σας αποθηκεύτηκε επιτυχώς.",

	'profile:field:text' => 'Σύντομο κείμενο',
	'profile:field:longtext' => 'Περιοχή εκτενούς κειμένου',
	'profile:field:tags' => 'Λέξεις κλειδιά',
	'profile:field:url' => 'Διεύυνση στο διαδίκτυο',
	'profile:field:email' => 'Διεύθυνση email',
	'profile:field:location' => 'Τοποθεσία',
	'profile:field:date' => 'Ημερομηνία',

	'admin:appearance:profile_fields' => 'Επεξεργαστείτε τα πεδία του προφίλ',
	'profile:edit:default' => 'Επεξεργαστείτε τα πεδία του προφίλ',
	'profile:label' => "Ετικέτα του προφίλ",
	'profile:type' => "Είδος του προφίλ",
	'profile:editdefault:delete:fail' => 'Η αφαίρεση του αρχικού αντικειμένου του πεδίου του προφίλ απέτυχε',
	'profile:editdefault:delete:success' => 'Το πεδίο του προφίλ διαγράφηκε',
	'profile:defaultprofile:reset' => 'Τα πεδία του προφίλ επέστρεψαν στις προεπιλογές του συστήματος',
	'profile:resetdefault' => 'Επαναφορά των πεδίων του προφίλ στις προεπιλογές του συστήματος',
	'profile:resetdefault:confirm' => 'Είστε σίγουρος ότι θέλετε να διαγράψετε τα προσωπικά σας πεδία προφίλ;',
	'profile:explainchangefields' => "Μπορείτε να αντικαταστήσετε τα υπάρχοντα πεδία προφίλ με τα δικά σας χρησιμοποιώντας την παρακάτω φόρμα. \n\n Δώστε στα νέα πεδία του προφίλ μια ετικέτα, για παράδειγμα, 'Αγαπημένη ομάδα' και στη συνέχεια επιλέξτε το είδος του πεδίου (πχ. κείμενο, url, λέξεις κλειδιά) και πατήστε το κουμπί 'Προσθήκη'. Για να αλλάξετε τη σειρά των πεδίων τραβήξτε τη λαβή δίπλα στην ετικέτα του πεδίου. Για να επεξεργαστείτε μια ετικέτα πεδίου - πατήστε στο κείμενο της ετικέτας για να το κάνετε επεξεργάσιμο. \n\n Οποιαδήποτε στιγμή μπορείτε να επιστρέψετε στην αρχική διαρύθμιση του προφίλ, αλλά θα χάσετε όποια πληροφορία έχετε ήδη εισάγει στα προσωπικά πεδία στις σελίδες του προφίλ.",
	'profile:editdefault:success' => 'Νέο πεδίο προστέθηκε στο προφίλ',
	'profile:editdefault:fail' => 'Το αρχικό προφίλ δεν μπόρεσε να αποθηκευτεί',
	'profile:field_too_long' => 'Οι πληροφορίες του προφίλ σας δεν μπορούν να αποθηκευτούν γιατί το τμήμα "%s" είναι πολύ μεγάλο.',
	'profile:noaccess' => "Δεν έχετε άδεια να επεξεργαστείτε αυτό το προφίλ.",


/**
 * Feeds
 */
	'feed:rss' => 'Το RSS feed για τη σελίδα',
/**
 * Links
 */
	'link:view' => 'εμφάνιση συνδέσμου',
	'link:view:all' => 'Εμφάνιση όλων',


/**
 * River
 */
	'river' => "Ποτάμι",
	'river:friend:user:default' => "Ο %s είναι τώρα φίλος με τον %s",
	'river:update:user:avatar' => 'Ο %s έχει νέα φωτογραφία',
	'river:update:user:profile' => 'Ο %s έχει ανανεώσει το προφίλ του',
	'river:noaccess' => 'Δεν έχετε πρόσβαση να δείτε αυτό το αντικείμενο.',
	'river:posted:generic' => 'Το %s αναρτήθηκε',
	'riveritem:single:user' => 'ένας χρήστης',
	'riveritem:plural:user' => 'κάποιοι χρήστες',
	'river:ingroup' => 'στο περιστατικό %s',
	'river:none' => 'Καμία δραστηριότητα',
	'river:update' => 'Ανανέωση για %s',
	'river:delete:success' => 'Το αντικείμενο του ποταμιού έχει διαγραφεί',
	'river:delete:fail' => 'Το αντικείμενο του ποταμιού δεν μπόρεσε να διαγραφεί',

	'river:widget:title' => "Δραστηριότητα",
	'river:widget:description' => "Εμφάνιση τελευταίας δραστηριότητας",
	'river:widget:type' => "Είδος δραστηριότητας",
	'river:widgets:friends' => 'Δραστηριότητα φίλων',
	'river:widgets:all' => 'Όλη η δραστηριότητα του ιστότοπου',

/**
 * Notifications
 */
	'notifications:usersettings' => "Ρυθμίσεις ειδοποιήσεων",
	'notifications:methods' => "Επιλέξτε τη μέθοδο ειδοποιήσεων.",
	'notification:method:email' => 'Email',

	'notifications:usersettings:save:ok' => "Οι ρυθμίσεις ειδοποιήσεών σας αποθηκεύτηκαν επιτυχώς.",
	'notifications:usersettings:save:fail' => "Υπήρξε ένα πρόβλημα κατά την αποθήκευση των ρυθμήσεων ειδοποιήσεων σας.",

	'user.notification.get' => 'Επιστροφή των ρυθμίσεων ειδοποιήσεων για ένα δεδομένο χρήστη.',
	'user.notification.set' => 'Ορίστε τις ρυθμίσεις ειδοποιήσεων για ένα δεδομένο χρήστη.',
/**
 * Search
 */

	'search' => "Αναζήτηση",
	'searchtitle' => "Αναζήτηση: %s",
	'users:searchtitle' => "Αναζήτηση για χρήστες: %s",
	'groups:searchtitle' => "Αναζήτηση για περιστατικά: %s",
	'advancedsearchtitle' => "%s με αποτελέσματα που ταιριάζουν με %s",
	'notfound' => "Δε βρέθηκαν αποτελέσματα.",
	'next' => "Επόμενο",
	'previous' => "Προηγούμενο",

	'viewtype:change' => "Αλλαγή τύπου λίστας",
	'viewtype:list' => "Εμφλανιση λίστας",
	'viewtype:gallery' => "Γκαλερί",

	'tag:search:startblurb' => "Αντικείμενα με λέξεις κλειδιά που ταιριάζουν με '%s':",

	'user:search:startblurb' => "Χρήστες που ταιρίαζουν με '%s':",
	'user:search:finishblurb' => "Για να δείτε περισσότερα πατήστε εδώ.",

	'group:search:startblurb' => "Περιστατικά που ταιριάζουν με '%s':",
	'group:search:finishblurb' => "Για να δείτε περισσότερα πατήστε εδώ.",
	'search:go' => 'Αναζήτηση',
	'userpicker:only_friends' => 'Μόνο συνεργάτες',

/**
 * Account
 */

	'account' => "Λογαριασμός",
	'settings' => "Ρυθμίσεις",
	'tools' => "Εργαλεία",
	'settings:edit' => 'Επεξεργασία ρυθμίσεων',

	'register' => "Εγγραφή",
	'registerok' => "Έχετε εγγραφεί επιτυχώς για το %s.",
	'registerbad' => "Η εγγραφή σας απέτυχε λόγω ενός άγνωστου λάθους.",
	'registerdisabled' => "Η εγγραφή έχει απενεργοποιηθεί από τον διαχειριστή του συστήματος",
	'register:fields' => 'Όλα τα πεδία είναι απαραίτητα',

	'registration:notemail' => 'Η διεύθυνση email που δώσατε δε φαίνεται να είναι μια δόκιμη διεύθυνση email.',
	'registration:userexists' => 'Αυτό το όνομα χρήστη υπάρχει ήδη',
	'registration:usernametooshort' => 'Το όνομα χρήστη σας πρέπει να είναι το λιγότερο %u χαρακτήρες.',
	'registration:usernametoolong' => 'Το όνομα χρήστη σας είναι πολύ μεγάλο. Μπορεί να έχει το πολύ %u χαρακτήρες.',
	'registration:passwordtooshort' => 'Ο κωδικός σας πρέπει να είναι το λιγότερο %u χαρακτήρες.',
	'registration:dupeemail' => 'Αυτή η διεύθυνση email έχει ήδη καταχωρηθεί.',
	'registration:invalidchars' => 'Συγγνώμη, το όνομα χρήστη σας περιέχει τον χαρακτήρα %s που είναι μη αποδεκτός. Οι ακόλουθοι χαρακτήρες είναι μη αποδεχτοί: %s',
	'registration:emailnotvalid' => 'Συγγνώμη, η διεύθυνση email που εισάγατε δεν είναι αποδεχτή σε αυτό το σύστημα',
	'registration:passwordnotvalid' => 'Συγγνώμη, ο κωδικός που εισάγατε δεν είναι αποδεχτός σε αυτό το σύστημα',
	'registration:usernamenotvalid' => 'Συγγνώμη, το όνομα χρήστη που εισάγατε δεν είναι αποδεχτό σε αυτό το σύστημα',

	'adduser' => "Προσθήκη χρήστη",
	'adduser:ok' => "Έχετε προσθέσει ένα νέο χρήστη επιτυχώς.",
	'adduser:bad' => "Ο νέος χρήστης δεν μπόρεσε να δημιουργηθεί.",

	'user:set:name' => "Ρυθμίσεις ονόματος λογαριασμού",
	'user:name:label' => "Το όνομά μου, που εμφανίζεται",
	'user:name:success' => "Το όνομά σας στο σύστημα άλλαξε επιτυχώς.",
	'user:name:fail' => "Το όνομά σας στο σύστημα δεν μπόρεσε να αλλάξει. Παρακαλώ σιγουρευτείτε ότι το όνομά σας δεν είναι πολύ μεγάλο και ξαναπροσπαθήστε.",

	'user:set:password' => "Κωδικός λογαριασμού",
	'user:current_password:label' => 'Τρέχων κωδικός',
	'user:password:label' => "Ο νέος σας κωδικός",
	'user:password2:label' => "Ο νέος σας κωδικός ξανά",
	'user:password:success' => "Ο κωδικός άλλαξε",
	'user:password:fail' => "Ο κωδικός σας στο σύστημα δεν μπόρεσε να αλλάξει.",
	'user:password:fail:notsame' => "Οι δύο κωδικοί δεν είναι ίδιοι!",
	'user:password:fail:tooshort' => "Ο κωδικός είναι πολύ σύντομος!",
	'user:password:fail:incorrect_current_password' => 'Ο τρέχων κωδικός που εισάχθηκε δεν είναι σωστός.',
	'user:resetpassword:unknown_user' => 'Μη αποδεχτός χρήστης.',
	'user:resetpassword:reset_password_confirm' => 'Η ανανέωση του κωδικό θα σας στείλει ένα νέο κωδικό στο καταχωρημένο email σας.',

	'user:set:language' => "Ρυθμίσεις γλώσσας",
	'user:language:label' => "Η γλώσσα σας",
	'user:language:success' => "Οι ρυθμίσεις της γλώσσας έχουν ενημερωθεί.",
	'user:language:fail' => "Οι ρυθμίσεις γλώσσας σας δεν μπόρεσαν να σωθούν.",

	'user:username:notfound' => 'Το όνομα χρήστη %s δε βρέθηκε.',

	'user:password:lost' => 'Χαμένος κωδικός',
	'user:password:resetreq:success' => 'Η αίτηση για νέο κωδικό ήταν επιτυχής, στάλθηκε email',
	'user:password:resetreq:fail' => 'Δεν μπόρεσε να ζητηθεί καινούριος κωδικός.',

	'user:password:text' => 'Για να αιτηθείτε καινούριο κωδικό, εισάγετε το όνομα χρήστη η τη διεύθυνση email σας παρακάτω και πατήστε το κουμπί Αίτηση.',

	'user:persistent' => 'Να με θυμάσαι',

	'walled_garden:welcome' => 'Καλωσήλθατε στο',

/**
 * Administration
 */
	'menu:page:header:administer' => 'Διαχείρηση',
	'menu:page:header:configure' => 'Ρυθμίσεις',
	'menu:page:header:develop' => 'Ανάπτηξη',
	'menu:page:header:default' => 'Λοιπά',

	'admin:view_site' => 'Δείτε τον ιστότοπο',
	'admin:loggedin' => 'Συνδεδεμένος ως %s',
	'admin:menu' => 'Μενού',

	'admin:configuration:success' => "Οι ρυθμίσεις σας αποθηκεύτηκαν.",
	'admin:configuration:fail' => "Οι ρθυμίσεις σας δεν μπόρεσαν να αποθηκευτούν.",
	'admin:configuration:dataroot:relative_path' => 'Δεν μπορείτε να θέσετε το "%s" ως dataroot γιατί δεν είναι απόλυτο μονοπατί.',

	'admin:unknown_section' => 'Άκυρο τμήμα διαχειρηστή.',

	'admin' => "Διαχείρηση",
	'admin:description' => "Το πεδίο του διαχειριστή επιτρέπει τον έλεγχο όλων των πλευρών του συστήματος, από διαχείρηση των χρηστών μέχρι το πώς συμπεριφέρονται τα πρόσθετα. Επίλέξτε μια επιλογή για να ξεκινήσετε.",

	'admin:statistics' => "Στατιστικά",
	'admin:statistics:overview' => 'Περίληψη',
	'admin:statistics:server' => 'Πληροφορίες εξυπηρετητή',

	'admin:appearance' => 'Εμφάνιση',
	'admin:administer_utilities' => 'Παροχές',
	'admin:develop_utilities' => 'Παροχές',

	'admin:users' => "Χρήστες",
	'admin:users:online' => 'Αυτή τη στιγμή συνδεδεμένοι',
	'admin:users:newest' => 'Νεότερος',
	'admin:users:admins' => 'Διαχειριστές',
	'admin:users:add' => 'Προσθέστε νέο χρήστη',
	'admin:users:description' => "Αυτό το πεδίο διαχειριστή σας επιτρέπει να ελέγχετε τις ρυθμίσεις χρηστών στον ιστότοπό σας. Επιλέξτε μια από τις παρακάτω επιλογές για να ξεκινήσετε.",
	'admin:users:adduser:label' => "Πατήστε εδώ για να προσθέσετε ένα νέο χρήστη...",
	'admin:users:opt:linktext' => "Ρυθμίστε τους χρήστες...",
	'admin:users:opt:description' => "Ρυθμίστε τους χρήστες και πληροφορίες λογαριασμών. ",
	'admin:users:find' => 'Βρες',

	'admin:settings' => 'Ρυθμίσεις',
	'admin:settings:basic' => 'Βασικές ρυθμίσεις',
	'admin:settings:advanced' => 'Προχωρημένες ρυθμίσεις',
	'admin:site:description' => "Αυτό το πεδίο διαχειριστή σας επιτρέπει να ελέγχετε γενικές σελίδες του ιστοτόπου σας. Επιλέξτε μια από τις παρακάτω επιλογές για να ξεκινήσετε.",
	'admin:site:opt:linktext' => "Ρυθμίστε τον ιστότοπο...",
	'admin:site:access:warning' => "Η αλλαγή των ρυθμίσεων πρόσβασης επηρεάζει μόνο τις προσβάσεις σε περιεχόμενο που θα δημιουργηθεί στο μέλλον.",

	'admin:dashboard' => 'Ταμπλό',
	'admin:widget:online_users' => 'Συνδεδεμένοι χρήστες',
	'admin:widget:online_users:help' => 'Λίστα με τους χρήστες που βρίσκονται αυτή τη στιγμή στον ιστότοπο',
	'admin:widget:new_users' => 'Νέοι χρήστες',
	'admin:widget:new_users:help' => 'Λίστα με τους νεότερους χρήστες',
	'admin:widget:content_stats' => 'Στατιστικά δεδομένα περιεχομένου',
	'admin:widget:content_stats:help' => 'Παρακολουθήστε το περιεχόμενο που δημιουργείται από τους χρήστες σας',
	'widget:content_stats:type' => 'Είδος περιεχομένου',
	'widget:content_stats:number' => 'Νούμερο',

	'admin:widget:admin_welcome' => 'Καλώς ήλθατε',
	'admin:widget:admin_welcome:help' => "Μια σύντομη εισαγωγή στην περιοχή του διαχειριστή του Elgg",
	'admin:widget:admin_welcome:intro' =>
'Καλωσήλθατε στο σύστημα! Αυτή τη στιγμή βλέπετε τον πίνακα ελέγχου του διαχειριστή. Είναι χρήσιμο για να παρακολουθείτε τι συμβαίνει στον ιστότοπο.',

	'admin:widget:admin_welcome:admin_overview' =>
"Η περιήγηση για την περιοχή του διαχειριστή γίνεται από το μενού στα δεξιά. Είναι οργανωμένο"
. " σε τρία τμήματα:
	<dl>
		<dt>Διαχείριση</dt><dd>Καθημερινές δουλειές όπως παρακολούθηση αναφερμένου περιεχομένου, έλεγχος για το ποίος είναι συνδεδεμένος και εμφάνιση στατιστικών.</dd>
		<dt>Ρυθμίσεις</dt><dd>Περιστασιακές δουλειές όπως ορισμός του ονόματος του ιστότοπου ή ενεργοποίηση ενός πρόσθετου.</dd>
		<dt>Ανάπτηξη</dt><dd>Για προγραμματιστές που χτίζουν πρόσθετα ή σχεδιάζουν εμφανισιακά θέματα. (Απαιτεί ένα πρόσθετο ανάπτυξης.)</dd>
	</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />Σιγουρευτείτε ότι ελέγχετε τους διαθέσιμους πόρους μέσω των συνδέσμων στο υποσέλιδο και σας ευχαριστούμε που χρησιμοποιείτε το Elgg!',

	'admin:widget:control_panel' => 'Πίνακας ελέγχου',
	'admin:widget:control_panel:help' => "Παρέχει εύκολη πρόσβαση σε απλές ρυθμίσεις",

	'admin:cache:flush' => 'Καθαρισμός των caches',
	'admin:cache:flushed' => "Οι caches του ιστότοπου έχουν καθαριστεί",

	'admin:footer:faq' => 'FAQ Διαχειριστή',
	'admin:footer:manual' => 'Βιβλίο οδηγειών διαχειριστή',
	'admin:footer:community_forums' => 'Φόρα κοινώτητας Elgg',
	'admin:footer:blog' => 'Elgg Blog',

	'admin:plugins:category:all' => 'Όλα τα πρόσθετα',
	'admin:plugins:category:active' => 'Ενεργά πρόσθετα',
	'admin:plugins:category:inactive' => 'Ανενεργά πρόσθετα',
	'admin:plugins:category:admin' => 'Διαχειριστής',
	'admin:plugins:category:bundled' => 'Ομαδοποιημένα',
	'admin:plugins:category:nonbundled' => 'Μη-ομαδοποιημένα',
	'admin:plugins:category:content' => 'Περιεχόμενο',
	'admin:plugins:category:development' => 'Ανάπτυξη',
	'admin:plugins:category:enhancement' => 'Βελτιώσεις',
	'admin:plugins:category:api' => 'Υπηρεσία/API',
	'admin:plugins:category:communication' => 'Επικοινωνία',
	'admin:plugins:category:security' => 'Ασφάλεια και Spam',
	'admin:plugins:category:social' => 'Κοινονικά',
	'admin:plugins:category:multimedia' => 'Πολυμέσα',
	'admin:plugins:category:theme' => 'Οπτικά θέματα',
	'admin:plugins:category:widget' => 'Widgets',
	'admin:plugins:category:utility' => 'Εργαλεία',

	'admin:plugins:sort:priority' => 'Προτεραιότητα',
	'admin:plugins:sort:alpha' => 'Αλφαβητικά',
	'admin:plugins:sort:date' => 'Νεότερο',

	'admin:plugins:markdown:unknown_plugin' => 'Άγνωστο πρόσθετο.',
	'admin:plugins:markdown:unknown_file' => 'Άγνωστο αρχείο.',


	'admin:notices:could_not_delete' => 'Η ειδοποίηση δεν μπόρεσε να διαγραφεί.',
	'item:object:admin_notice' => 'Ειδοποίηση διαχειριστή',

	'admin:options' => 'Επιλογές διαχειριστή',


/**
 * Plugins
 */
	'plugins:disabled' => 'Πρόσθετα δεν φορτώνονται επειρή υπάρχει ένα αρχείο με όνομα "disabled" στον κατάλογο του πρόσθετου.',
	'plugins:settings:save:ok' => "Οι ρυθμίσεις για το πρόσθετο %s αποθηκεύτηκαν επιτυχώς.",
	'plugins:settings:save:fail' => "Υπήρξε κάποιο πρόβλημα κατά την αποθήκευση των ρυθμίσεων για το πρόσθετο %s.",
	'plugins:usersettings:save:ok' => "Οι ρυθμίσεις χρήστη για το πρόσθετο %s αποθηκεύτηκαν επιτυχώς.",
	'plugins:usersettings:save:fail' => "Υπήρξε κάποιο πρόβλημα κατά την αποθήκευση των ρυθμίσεων χρήστη για το πρόσθετο %s.",
	'item:object:plugin' => 'Πρόσθετα',

	'admin:plugins' => "Πρόσθετα",
	'admin:plugins:activate_all' => 'Ενεργοποίηση όλων',
	'admin:plugins:deactivate_all' => 'Απενεργοποίηση όλων',
	'admin:plugins:activate' => 'Ενεργοποίηση',
	'admin:plugins:deactivate' => 'Απενεργοποίηση',
	'admin:plugins:description' => "Αυτός ο πίνακας του διαχειριστή επιτρέπει τον έλεγχο και την ρύθμιση των εργαλέιων που είναι εγκατεστημένα στον ιστότοπό σας.",
	'admin:plugins:opt:linktext' => "Ρ΄θυμιση εργαλείων...",
	'admin:plugins:opt:description' => "Ρύθμιση των εργαλέιων που είναι εγκατεστημένα σε αυτόν τον ιστότοπο. ",
	'admin:plugins:label:author' => "Συγγραφέας",
	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:categories' => 'Κατηγορίες',
	'admin:plugins:label:licence' => "Άδεια",
	'admin:plugins:label:website' => "Διεύθυνση",
	'admin:plugins:label:repository' => "Κώδικας",
	'admin:plugins:label:bugtracker' => "Αναφορά προβλήματος",
	'admin:plugins:label:donate' => "Προσφορά",
	'admin:plugins:label:moreinfo' => 'περισσότερες πλήροφορίες',
	'admin:plugins:label:version' => 'Έκδοση',
	'admin:plugins:label:location' => 'Τοποθεσία',
	'admin:plugins:label:dependencies' => 'Εξαρτήσεις',

	'admin:plugins:warning:elgg_version_unknown' => 'Αυτό το πρόσθετο χρησιμοποιεί ένα παλιότερο αρχείο μανιφέστο και δεν ορίζει μια συμβατή έκδοση Elgg. Κατά πάσα πιθανότητα δε θα δουλέψει!',
	'admin:plugins:warning:unmet_dependencies' => 'Αυτό το πρόσθετο έχει μη ενεργοποιημένες εξαρτήσεις και δεν μπορεί να ενεργοποιηθεί. Ελέγξτε τις εξαρτήσεις κάτω από το περισσότερες πληροφορίες.',
	'admin:plugins:warning:invalid' => 'Αυτό το πρόσθετο είναι άκυρο: %s',
	'admin:plugins:warning:invalid:check_docs' => 'Ελέγξτε <a href="http://docs.elgg.org/Invalid_Plugin">η τεκμηρίωση του Elgg</a> για πληροφορίες για εντοπισμό σφαλμάτων.',
	'admin:plugins:cannot_activate' => 'δε γίνεται να ενεργοποιηθεί',

	'admin:plugins:set_priority:yes' => "Αναμεταθετημένο %s.",
	'admin:plugins:set_priority:no' => "Δεν μπόρεσε να γίνει αντιμετάθεση %s.",
	'admin:plugins:set_priority:no_with_msg' => "Δεν μπόρεσε να γίνει η αντιμετάθεση %s. Σφάλμα: %s",
	'admin:plugins:deactivate:yes' => "Το %s απενεργοποιήθηκε.",
	'admin:plugins:deactivate:no' => "Δεν μπόρεσε να γίνει η απενεργοποίηση του %s.",
	'admin:plugins:deactivate:no_with_msg' => "Δεν μπόρεσε να γίνει η απενεργοποίηση του %s. Σφάλμα: %s",
	'admin:plugins:activate:yes' => "Το %s ενεργοποιήθηκε.",
	'admin:plugins:activate:no' => "Δεν μπόρεσε να γίνει η ενεργοποίηση του %s.",
	'admin:plugins:activate:no_with_msg' => "Δεν μπόρεσε να γίνει η ενεργοποίηση του %s. Σφάλμα: %s",
	'admin:plugins:categories:all' => 'Όλες οι κατηγορίες',
	'admin:plugins:plugin_website' => 'Πρόσθετο ιστότοπου',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Έκδοση %s',
	'admin:plugin_settings' => 'Ρθυμίσεις πρόσθετου',
	'admin:plugins:warning:unmet_dependencies_active' => 'Αυτό το πρόσθετο είναι ενεργό αλλά έχει εξαρτήσεις που δεν έχουν βρεθεί. Μπορεί να συναντήσετε προβλήματα. Δείτε το "περισσότερες πληροφορίες" παρακάτω για λεπτομέρειες.',

	'admin:plugins:dependencies:type' => 'Τύπος',
	'admin:plugins:dependencies:name' => 'Όνομα',
	'admin:plugins:dependencies:expected_value' => 'Αναμενόμενη Τιμή',
	'admin:plugins:dependencies:local_value' => 'Πραγματική τιμή',
	'admin:plugins:dependencies:comment' => 'Σχόλιο',

	'admin:statistics:description' => "Αυτή είναι μια επισκόπηση των στατιστικών στην ιστοσελίδα σας. Αν θέλετε πιο λεπτομερή στατιστικά, μια επαγκελματική δυνατότητα διαχειριστή είναι διαθέσιμη.",
	'admin:statistics:opt:description' => "Δείτε στατιστικές πληροφορίες για χρήστες και αντικείμενα στον ιστότοπό σας.",
	'admin:statistics:opt:linktext' => "Εμφάνιση στατιστικών...",
	'admin:statistics:label:basic' => "Βασικά στατιστικά του ιστότοπου",
	'admin:statistics:label:numentities' => "Οντότητες στον ιστότοπο",
	'admin:statistics:label:numusers' => "Αριθμός χρηστών",
	'admin:statistics:label:numonline' => "Αριθμός χρηστών συνδεδεμένοι",
	'admin:statistics:label:onlineusers' => "Συνεδεδμένοι χρήστες αυτή τη στιγμή",
	'admin:statistics:label:admins'=>"Διαχειριστές",
	'admin:statistics:label:version' => "Έκδοση Elgg",
	'admin:statistics:label:version:release' => "Έκδοση",
	'admin:statistics:label:version:version' => "Έκδοση",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => 'Web Εξυπηρετητής',
	'admin:server:label:server' => 'Εξυπηρετητής',
	'admin:server:label:log_location' => 'Τοποθεσία Log',
	'admin:server:label:php_version' => 'PHP εκδοση',
	'admin:server:label:php_ini' => 'Τοποθεσία PHP ini αρχείου',
	'admin:server:label:php_log' => 'PHP Log',
	'admin:server:label:mem_avail' => 'Μνήμη διαθέσιμη',
	'admin:server:label:mem_used' => 'Μνήμη κατελειμμένη',
	'admin:server:error_log' => "Οι καταγραφές σφαλμάτων του Web εξυπηρετητή",
	'admin:server:label:post_max_size' => 'POST μέγιστο μέγεθος',
	'admin:server:label:upload_max_filesize' => 'Ανέβασμα μέγιστο μέγεθος',
	'admin:server:warning:post_max_too_small' => '(Σημείωση: το post_max_size πρέπει να είναι μεγαλύτερο από αυτή την τιμή για να υπόστηρίζει ανέβασμα αρχείων αυτού του μεγέθους)',

	'admin:user:label:search' => "Εύρεση χρηστών:",
	'admin:user:label:searchbutton' => "Αναζήτηση",

	'admin:user:ban:no' => "Δεν γίνεται να απαγορευτεί ο χρήστης",
	'admin:user:ban:yes' => "Έγινε άρση απαγόρευσης του χρήστη.",
	'admin:user:self:ban:no' => "Δεν μπορείτε να απογορεύσετε τον ευατό σας",
	'admin:user:unban:no' => "Δεν γίνεται να αρθεί η απαγόρευση του χρήστη",
	'admin:user:unban:yes' => "Έγινε άρση απαγόρευσης του χρήστη.",
	'admin:user:delete:no' => "Δε γίνεται να διαγραφεί ο χρήστης",
	'admin:user:delete:yes' => "Ο χρήστης %s διαγράφηκε",
	'admin:user:self:delete:no' => "Δεν μπορείτε να διαγράψετε τον εαυτό σας",

	'admin:user:resetpassword:yes' => "Ο κωδικός ανανεώθηκε, ο χρήστης ενημερώθηκε.",
	'admin:user:resetpassword:no' => "Ο κωδικός δεν μπόρεσε να ανανεωθεί.",

	'admin:user:makeadmin:yes' => "Ο χρήστης είναι τώρα διαχειριστής.",
	'admin:user:makeadmin:no' => "Δεν μπορέσαμε να κάνουμε αυτόν τον χρήστη διαχειριστή.",

	'admin:user:removeadmin:yes' => "Ο χρήστης δεν είναι πια διαχειριστής.",
	'admin:user:removeadmin:no' => "Δεν μπορέσαμε να αφαιρέσουμε προνόμοια διαχειριστή από αυτό το χρήστη.",
	'admin:user:self:removeadmin:no' => "Δεν μπορείτε να αφαιρέσετε τα δικά σας προνόμοια διαχειριστή.",

	'admin:appearance:menu_items' => 'Αντικείμενα του μενού',
	'admin:menu_items:configure' => 'Ρύθμιση των αντικειμένων του κεντρικού μενού',
	'admin:menu_items:description' => 'Επιλέξτε ποια αντικείμενα του μενού θέλετε να εμφανίσετε ως προβεβλημένους συνδέσμους.  Μη χρησιμοποιημένα αντικείμενα θα προστεθούν ως "Περισσότερα" στο τέλος της λίστας.',
	'admin:menu_items:hide_toolbar_entries' => 'Αφαίρεση συνδέσμων από το μενού της γραμμής εργαλείων;',
	'admin:menu_items:saved' => 'Τα αντικείμενα του μενού αποθηκεύτηκαν.',
	'admin:add_menu_item' => 'Προσθήκη ενός προσαρμοσμένου αντικειμένου μενού',
	'admin:add_menu_item:description' => 'Συμπληρώστε το όνομα που θα εμφανίζεται και τη διεύθυνση για να προσθέσετε προσαρμοσμένα αντικείμενα στο μενού πλοήγησής σας.',

	'admin:appearance:default_widgets' => 'Αρχικά Widgets',
	'admin:default_widgets:unknown_type' => 'Άγνωστος τύπος widget',
	'admin:default_widgets:instructions' => 'Προσθήκη, αφαίρεση, θέση και ρύθμιση αρχικών widgets για τη σελίδα επιλεγμένων widgets.'
		. '  Αυτές οι αλλαγές θα επηρεάσουν μόνο νέους χρήστες του ιστότοπου.',

/**
 * User settings
 */
	'usersettings:description' => "Ο πίνακας ρυθμίσεων χρηστών επιτρέπει τον έλεγχο όλων των προσωπικών σας ρυθμίσεων, από διαχείρηση χρηστών έως και το πώς συμπεριφέρονται τα πρόσθετα. Επιλέξτε κάτι για να ξεκινήσετε.",

	'usersettings:statistics' => "Τα στατιστικά σας",
	'usersettings:statistics:opt:description' => "Εμφανίζει στατιστικές πληροφορίες για χρήστες και αντικείμενα στον ιστότοπό σας.",
	'usersettings:statistics:opt:linktext' => "Στατιστικά λογαριασμού",

	'usersettings:user' => "Οι ρυθμίσεις σας",
	'usersettings:user:opt:description' => "Αυτό σας επιτρέπει να ελέγχετε τις ρυθμίσεις χρηστών.",
	'usersettings:user:opt:linktext' => "Αλλαγή των ρυθμίσεών σας",

	'usersettings:plugins' => "Εργαλεία",
	'usersettings:plugins:opt:description' => "Επιλογή ρυθμίσεων (αν υπάρχουν) για τα ενεργά εργαλεία σας.",
	'usersettings:plugins:opt:linktext' => "Ρύθμιση των εργαλείων σας",

	'usersettings:plugins:description' => "Αυτός ο πίνακας σας επιτρέπει να ελέγξετε και να επιλέξετε τις προσωπικές ρυθμίσεις για τα εργαλεία που είναι εγκατεστημένα από τον διαχειριστή του συστήματος.",
	'usersettings:statistics:label:numentities' => "Το περιεχόμενό σας",

	'usersettings:statistics:yourdetails' => "Οι λεπτομέρειες σας",
	'usersettings:statistics:label:name' => "Πλήρες όνομα",
	'usersettings:statistics:label:email' => "Email",
	'usersettings:statistics:label:membersince' => "Μέλος από",
	'usersettings:statistics:label:lastlogin' => "Τελευταία φορά συνδεδεμένος",

/**
 * Activity river
 */
	'river:all' => 'Όλη η δραστηριότητα του ιστοτόπου',
	'river:mine' => 'Η δραστηριότητα μου',
	'river:friends' => 'Δραστηριότητα συνεργατών',
	'river:select' => 'Δείξτε %s',
	'river:comments:more' => '+%u περισσότερο',
	'river:generic_comment' => 'σχολιάστηκε στο %s %s',

	'friends:widget:description' => "Εμφανίζει κάποιους από τους συνεργάτες σου.",
	'friends:num_display' => "Αριθμός συνεργατών για εμφάνιση",
	'friends:icon_size' => "Μέγεθος εικονιδίου",
	'friends:tiny' => "μικροσκοπικό",
	'friends:small' => "μικρό",

/**
 * Generic action words
 */

	'save' => "Αποθήκευση",
	'reset' => 'Επαναφορά',
	'publish' => "Δημοσίευση",
	'cancel' => "Άκυρο",
	'saving' => "Αποθηκεύεται ...",
	'update' => "Ενημέρωση",
	'preview' => "Προεπισκόπηση",
	'edit' => "Επεξεργασία",
	'delete' => "Διαγραφή",
	'accept' => "Αποδοχή",
	'load' => "Φόρτωμα",
	'upload' => "Ανέβασμα",
	'ban' => "Εξοστρακισμός",
	'unban' => "Άρση εξοστρακισμού",
	'banned' => "Εξοστρακισμένος",
	'enable' => "Ενεργοποίησε",
	'disable' => "Απενεργοποίησε",
	'request' => "Αίτημα",
	'complete' => "Ολοκληρωμένο",
	'open' => 'Άνοιγμα',
	'close' => 'Κλείσιμο',
	'reply' => "Απάντηση",
	'more' => 'Περισσότερα',
	'comments' => 'Σχόλια',
	'import' => 'Εισαγωγή',
	'export' => 'Εξαγωγή',
	'untitled' => 'Άτιτλο',
	'help' => 'Βοήθεια',
	'send' => 'Στείλε',
	'post' => 'Ανάρτησε',
	'submit' => 'Υπέβαλε',
	'comment' => 'Σχόλιο',
	'upgrade' => 'Αναβάθμιση',
	'sort' => 'Ταχξινόμηση',
	'filter' => 'Φίλτρο',
	'new' => 'Νέο',
	'add' => 'Προσθήκη',
	'create' => 'Δημιούργησε',
	'remove' => 'Αφαίρεσε',
	'revert' => 'Επανέφερε',

	'site' => 'Σελίδα',
	'activity' => 'Δραστηριότητα',
	'members' => 'Μέλη',

	'up' => 'Πάνω',
	'down' => 'Κάτω',
	'top' => 'Κορυφή',
	'bottom' => 'Πάτος',
	'back' => 'Πίσω',

	'invite' => "Πρόσκληση",

	'resetpassword' => "Επαναφορά κωδικού",
	'makeadmin' => "Κάνε διαχειρηστή",
	'removeadmin' => "Αφαίρεσε διαχειρηστή",

	'option:yes' => "Ναι",
	'option:no' => "Όχι",

	'unknown' => 'Άγνωστο',

	'active' => 'Ενεργό',
	'total' => 'Συνολικό',

	'learnmore' => "Πατήστε εδώ για να μάθετε περισσότερα.",

	'content' => "περιεχόμενο",
	'content:latest' => 'Τελευταία δραστηριότητα',
	'content:latest:blurb' => 'Εναλλακτικά, πατήστε εδώ για να δείτε το τελευταίο περιεχόμενο από όλον τον ιστότοπο.',

	'link:text' => 'εμφάνηση συνδέσμου',
/**
 * Generic questions
 */

	'question:areyousure' => 'Είστε σίγουρος?',

/**
 * Generic data words
 */

	'title' => "Τίτλος",
	'description' => "Περιγραφή",
	'tags' => "Ετικέτες",
	'spotlight' => "Προβολέας",
	'all' => "Όλα",
	'mine' => "Δικό μου",

	'by' => 'από',
	'none' => 'κανένα',

	'annotations' => "Υπομνήματα",
	'relationships' => "Σχέσεις",
	'metadata' => "Μέτα-δεδομένα",
	'tagcloud' => "Σύννεφο ετικετών",
	'tagcloud:allsitetags' => "Όλες οι ετικέτες του ιστότοπου",

	'on' => 'Ανοιχτό',
	'off' => 'Κλειστό',

/**
 * Entity actions
 */
	'edit:this' => 'Επεξεργαστείτε αυτό',
	'delete:this' => 'Διαγράψτε αυτό',
	'comment:this' => 'Σχολιάστε σε αυτό',

/**
 * Input / output strings
 */

	'deleteconfirm' => "Είστε σίγουρος ότι θέλετε να διαγράψετε αυτό το αντικείμενο;",
	'deleteconfirm:plural' => "Είστε σίγουρος ότι θέλετε να διαγράψετε αυτά τα αντικείμενα;",
	'fileexists' => "Ένα αρχείο έχει ήδη φορτωθεί. Για να το αντικαταστήσετε, επιλέξτε παρακάτω:",

/**
 * User add
 */

	'useradd:subject' => 'Λογαριασμός χρήστη δημιουργήθηκε',
	'useradd:body' => '
%s,

Ένας λογαριασμός χρήστη δημιουργήθηκε για εσάς στο %s. Για να συνδεθείτε, επισκεφτείτε:

%s

Και συνδεθείτε με τα εξής διαπιστευτήρια:

Όνομα χρήστη: %s
Λωδικός: %s

Αφού έχετε συνδεθεί, σας προτείνουμε να αλλάξετε τον κωδικό σας.
',

/**
 * System messages
 **/

	'systemmessages:dismiss' => "πατήστε για να κλείσετε",


/**
 * Import / export
 */
	'importsuccess' => "Η εισαγωγή δεδομένων ήταν επιτυχής",
	'importfail' => "Η OpenDD εισαγωγή δεδομένων απέτυχε.",

/**
 * Time
 */

	'friendlytime:justnow' => "μόλις τώρα",
	'friendlytime:minutes' => "πριν από %s λεπτά",
	'friendlytime:minutes:singular' => "πριν από ένα λεπτό",
	'friendlytime:hours' => "Πριν από %s ώρες",
	'friendlytime:hours:singular' => "πριν από μία ώρα",
	'friendlytime:days' => "Πριν %s μέρες",
	'friendlytime:days:singular' => "χθες",
	'friendlytime:date_format' => 'j F Y @ g:ia',

	'date:month:01' => 'Ιανουάριος %s',
	'date:month:02' => 'Φεβρουάριος %s',
	'date:month:03' => 'Μάρτης %s',
	'date:month:04' => 'Απρίλιος %s',
	'date:month:05' => 'Μάιος %s',
	'date:month:06' => 'Ιούνιος %s',
	'date:month:07' => 'Ιούλιος %s',
	'date:month:08' => 'Αύγουστος %s',
	'date:month:09' => 'Σεπτέμβρης %s',
	'date:month:10' => 'Οκτώβρης %s',
	'date:month:11' => 'Νοέμβρης %s',
	'date:month:12' => 'Δεκέμβρης %s',


/**
 * System settings
 */

	'installation:sitename' => "Το όνομα του ιστότοπού σας:",
	'installation:sitedescription' => "Σύντομη περιγραφή του ιστότοπού σας (προεραιτικό)):",
	'installation:wwwroot' => "Η διεύθυνση του ιστότοπου:",
	'installation:path' => "Το πλήρες μονοπάτι της εγκατάστασης του Elgg:",
	'installation:dataroot' => "Το πλήρες μονοπάτι του κατάλογου δεδομένων:",
	'installation:dataroot:warning' => "Πρέπει να δημιουργήσετε αυτόν τον κατάλογο χειροκίνητα. Πρέπει να βρίσκεται σε διαφορετικό κατάλογο από την εγκατάστασή σας του Elgg.",
	'installation:sitepermissions' => "Οι αρχικές άδειες πρόσβασης:",
	'installation:language' => "Η προεπιλεγμένη γλώσσα για τον ιστότοπό σας:",
	'installation:debug' => "Η λειτουργία αποσφαλμάτωσης παρέχει επιπλέον πληροφορίες που μπορούν να χρησιμοποιηθούν για να διαγνωστούν σφάλματα. Μπορεί, όμως, να βαρύνει σημαντικά το σύστημα οπότε πρέπει να χρησιμοποιείται μόνο όταν έχετε προβλήματα:",
	'installation:debug:none' => 'Απενεργοποίηση λειτουργίας αποσφαλμάτωσης (προτείνεται)',
	'installation:debug:error' => 'Εμφάνιση μόνο σημαντικών σφαλμάτων',
	'installation:debug:warning' => 'Εμφάνιση σφαλμάτων και προειδοποιήσεων',
	'installation:debug:notice' => 'Καταγραφή όλων των σφαλμάτων, προειδοποιήσεων και ειδοποιήσεων',

	// Walled Garden support
	'installation:registration:description' => 'Η εγγραφή χρηστών είναι ενεργοποιημένη αρχικά. Απενεργοποιήστε την αν δε θέλετε νέοι χρήστες να μπορούν να εγγραφούν μόνοι τους.',
	'installation:registration:label' => 'Να επιτρέπεται σε νέους χρήστες να εγγραφούν',
	'installation:walled_garden:description' => 'Ενεργοποιήση της δυνατότητας του ιστότοπου να λειτουργεί ως ιδιοτικό δίκτυο. Αυτό δε θα επιτρέπει σε μη-συνδεδεμένους χρήστες να βλέπουν σελίδες του ιστότοπου πέρα από αυτές που έχουν συγκεκριμένα σημειωθεί ως δημόσιες.',
	'installation:walled_garden:label' => 'Περιορισμός των σελίδων σε συνδεδεμένους χρήστες',

	'installation:httpslogin' => "Ενεργοποιήστε αυτό ώστε οι συνδέσεις των χρηστών να γίνονται μέσω HTTPS. Θα πρέπει να έχετε το https ενεργοποιημένο στον server σας για να λειτουργήσει.",
	'installation:httpslogin:label' => "Ενεργοποίηση συνδέσεων HTTPS",
	'installation:view' => "Εισάγετε την εμφάνιση που θα χρησιμοποιείται ως προεπιλεγμένη για τον ιστότοπό σας ή αφήστε το κενό για την αρχική εμφάνιση (αν έχετε αμφιβολία, αφήστε το αρχικό):",

	'installation:siteemail' => "Η διεύθυνση email του ιστότοπου (χρησιμοποιείτει όταν στέλνονται μηνύματα συστήματος):",

	'installation:disableapi' => "Το Elgg παρέχει API για χτίσιμο web services ώστε απομακρυσμένες εφαρμογές να μπορούν να αλληλεπιδρούν με τον ιστότοπό σας.",
	'installation:disableapi:label' => "Ενέργοποίηση του web services API του Elgg ",

	'installation:allow_user_default_access:description' => "Αν επιλεχθεί, θα επιτραπεί σε μεμονομένους χρήστες να θέσουν το δικό τους προεπιλεγμένο επίπεδο πρόσβασης που μπορεί να παρακάμψει το προεπιλεγμένο επίπεδο πρόσβασης του συστήματος.",
	'installation:allow_user_default_access:label' => "Να επιτρέπεται αρχική πρόσβαση στους χρήστες",

	'installation:simplecache:description' => "Η απλή cache αυξάνει την απόδοση περνώντας στην cache στατικό περιεχόμενο, συμπεριλαμβανομένων κάποιων αρχείων CSS και JavaScript. Φυσιολογικά θα θέλετε να έχετε αυτή την επιλογή ενεργοποιημένη.",
	'installation:simplecache:label' => "Χρήση απλής cache (προτείνεται)",

	'installation:systemcache:description' => "Η cache του συστήματος μειώνει το χρόνο φόρτωσης της μηχανής του Elgg κάνοντας caching δεδομένα σε αρχεία.",
	'installation:systemcache:label' => "Χρήση cache συστήματος (προτείνεται)",

	'upgrading' => 'Αναβαθμίζει...',
	'upgrade:db' => 'Η βάση δεδομένων σας αναβαθμίστηκε.',
	'upgrade:core' => 'Η εγκατάσταση σας του Elgg αναβαθμίστηκε.',
	'upgrade:unlock' => 'Ξεκλείδωμα αναβάθμισης',
	'upgrade:unlock:confirm' => "Η βάση δεδομένων είναι κλειδωμένη για μια άλλη αναβάθμιση. Το τρέξιμο ταυτόχρονων αναβαθμίσεων είναι επικύνδινο. Θα πρέπει να συνεχίσετε μόνο αν ξέρετε ότι δεν τρέχει κάποια άλλη αναβάθμιση. Ξεκλείδωμα;",
	'upgrade:locked' => "Δεν είναι δυνατή η αναβάθμιση. Τρέχει μια άλλη αναβάθμιση. Για να καθαρίσετε το κλείδωμα αναβάθμισης, επισκευτείτε το τμήμα του διαχειριστή.",
	'upgrade:unlock:success' => "Η αναβάθμιση ξεκλειδώθηκε επιτυχώς.",
	'upgrade:unable_to_upgrade' => 'Δεν είναι δυνατή η αναβάθμιση.',
	'upgrade:unable_to_upgrade_info' =>
		'Αυτή η εγκατάσταση δεν μπορεί να αναβαθμιστεί γιατί βρέθηκαν παλιά αρχεία
		στους βασικούς φακέλους εμφάνισης του Elgg. Αυτά τα αρχεία είναι υπό απόσυρση και πρέπει να
		αφαιρεθούν ώστε το Elgg να λειτουργήσει σωστά. Αν έχετα κάνει αλλαγές στον πυρήνα του Elgg, 
		μπορείτε απλά να διαγράψετε τον κατάλογο εμφάνισης και να τον αντικαταστήσετε με αυτόν από
		το τελευταίο πακέτο του Elgg που μπορείτε να κατεβάσετε από <a href="http://elgg.org">elgg.org</a>.<br /><br />

		Αν χρειάζεστε οδηγείες, παρακαλώ επισκευτείτε το <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Οδηγείες για αναβάθμιση του Elgg</a>.  Αν χρειάζεστε βοήθεια, παρακαλώ αναρτήστε στο
		<a href="http://community.elgg.org/pg/groups/discussion/">Φόρα υποστήριξης της κοινότητας</a>.',

	'update:twitter_api:deactivated' => 'Το API του Twitter (προηγουμένως Υπηρεσία του Twitter) απενεργοποιήθηκε κατά τη διάρκεια της αναβάθμισης. Παρακαλώ ενεργοποιήστε την χειροκίνητα αν χρειάζεται.',
	'update:oauth_api:deactivated' => 'Το API του OAuth (προηγουμένως βιβλιοθήκη του OAuth) απενεργοποιήθηκε κατά τη διάρκεια της αναβάθμισης.  Παρακαλώ ενεργοποιήστε την χειροκίνητα αν χρειάζεται.',

	'deprecated:function' => 'Το %s() τέθηκε προς απόσυρση από %s()',

/**
 * Welcome
 */

	'welcome' => "Καλωσήρθατε",
	'welcome:user' => 'Καλωσήρθατε %s',

/**
 * Emails
 */
	'email:settings' => "Ρυθμίσεις Email",
	'email:address:label' => "Η email διεύθυνσή σας",

	'email:save:success' => "Νέα διεύθυνση email αποθηκεύτηκε.",
	'email:save:fail' => "Η νέα σας διεύθυνση email δεν μπόρεσε να σωθεί.",

	'friend:newfriend:subject' => "Ο %s σας έκανε συνεργάτη του!",
	'friend:newfriend:body' => "%s Ο %s σας έκανε συνεργάτη του!!

Για να δείτε το προφίλ τους πατήστε εδώ:

%s

Δεν μπορείτε να απαντήσετε σε αυτό το email.",



	'email:resetpassword:subject' => "Επαναφρά κωδικού!",
	'email:resetpassword:body' => "Γεια σου %s,

Ο κωρδικός σου έχει αλλάξει σε: %s",


	'email:resetreq:subject' => "Αίτηση για νέο κωδικό.",
	'email:resetreq:body' => "Γεια σου %s,

Κάποιος (από την διεύθυνση IP %s) έχει αιτηθεί νέο κωδικό για το λογαριασμό του.

Αν εσείς το ζητήσατε, πατήστε στον παρακάτω σύνδεσμο. Αλλιώς αγνοήστε αυτό το email.

%s
",

/**
 * user default access
 */

	'default_access:settings' => "Το προεπιλεγμένο επίπεδο πρόσβασής σας",
	'default_access:label' => "Αρχική πρόσβαση",
	'user:default_access:success' => "Η νέα σας αρχική πρόσβαση αποθηκεύτηκε.",
	'user:default_access:failure' => "Η νέα σας αρχική πρόσβαση δεν μπόρεσε να αποθηκευτεί.",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"Λείπουν τα δεδομένα εισόδου",

/**
 * Comments
 */

	'comments:count' => "Τα σχόλια του %s",

	'river:comment:object:default' => 'Ο %s σχολίασε στο %s',

	'generic_comments:add' => "Αφήστε ένα σχόλιοt",
	'generic_comments:post' => "Αναρτήστε ένα σχόλιο",
	'generic_comments:text' => "Σχόλιο",
	'generic_comments:latest' => "Τελευταία σχόλια",
	'generic_comment:posted' => "Το σχόλιό σας αναρτήθηκε επιτυχώς.",
	'generic_comment:deleted' => "Το σχόλιο διαγράφηκε επιτυχώς.",
	'generic_comment:blank' => "Συγγνώμη, πρέπει να γράψετε κάτι στο σχόλιο σας για να μπορέσουμε να το σώσουμε.",
	'generic_comment:notfound' => "Συγγνώμη, δεν μπορέσαμε να βρούμε το καθορισμένο αντικείμενο.",
	'generic_comment:notdeleted' => "Συγγνώμη, δεν μπορέσαμε να διαγράψουμε αυτό το σχόλιο.",
	'generic_comment:failure' => "Ένα αναπάντεχο λάθος συνέβει ενώ προσθέταμε το σχόλιο σας.",
	'generic_comment:none' => 'Δεν υπάρχουν σχόλια',
	'generic_comment:title' => 'Σχόλιο από %s',
	'generic_comment:on' => 'Ο %s για το %s',

	'generic_comment:email:subject' => 'Έχετε νέο σχόλιο!',
	'generic_comment:email:body' => "Έχετε ένα νέο σχόλιο στο αντικείμενό σας \"%s\" από %s. Διαβάζει:


%s


Για να απαντήσετε ή για να δείτε το αρχικό αντικείμενο, πατήστε εδώ:

%s

Για να δείτε το προφίλ του %s, πατήστε εδώ:

%s

Δεν μπορείτε να απαντήσετε σε αυτό το email.",

/**
 * Entities
 */
	'byline' => 'Από %s',
	'entity:default:strapline' => 'Δημιουργήθηκε %s από %s',
	'entity:default:missingsupport:popup' => 'Αυτή η οντότητα δεν μπορεί αν εμφανιστεί σωστά. Αυτό μπορεί να οφείλεται επειδή χρειάζεται υποστήριξη από ένα πρόσθετο που δεν είναι πια εγκατεστημένο.',

	'entity:delete:success' => 'Η οντότητα %s δεν έχει διαγραφεί',
	'entity:delete:fail' => 'Η οντότητα %s δεν μπόρεσε να διαγραφεί',


/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields' => 'Από τη φόρμα λείπει το __token ή τα __ts παιδεία',
	'actiongatekeeper:tokeninvalid' => "Η σελίδα που χρησιμοποιούσατε έχει λήξει. Παρακαλώ δοκιμάστε ξανά.",
	'actiongatekeeper:timeerror' => 'Η σελίδα που χρησιμοποιούσατε έχει λήξει. Παρακαλώ ανανεώστε τη σελίδα και δοκιμάστε ξανά.',
	'actiongatekeeper:pluginprevents' => 'Μια προέκταση έχει εμποδίσει αυτή τη φόρμα από το να υποβληθεί.',
	'actiongatekeeper:uploadexceeded' => 'Το μέγεθος του αρχείου/των αρχείων που έχουν ανέβει ξεπερνάει το όριο που έχει οριστεί από τον διαχειριστή του ιστότοπού σας',


/**
 * Word blacklists
 */
	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

/**
 * Tag labels
 */

	'tag_names:tags' => 'Ετικέτες',
	'tags:site_cloud' => 'Σύννεφο ετικετών του ιστότοπου',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => 'Αποτυχία επικοινωνίας με τον %s. Μπορεί να έχετε προβλήματα αποθήκευσης περιεχομένου. Παρακαλώ ανανεώστε αυτή τη σελίδα.',
	'js:security:token_refreshed' => 'Σύνδεση με το %s αποκαστάθηκε!',

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "Arabic",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"co" => "Corsican",
	"cs" => "Czech",
	"cy" => "Welsh",
	"da" => "Danish",
	"de" => "German",
	"dz" => "Bhutani",
	"el" => "Ελληνικά",
	"en" => "Αγγλικά",
	"eo" => "Esperanto",
	"es" => "Spanish",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "Finnish",
	"fj" => "Fiji",
	"fo" => "Faeroese",
	"fr" => "French",
	"fy" => "Frisian",
	"ga" => "Irish",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "Indonesian",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "Japanese",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "Korean",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "Lithuanian",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "Mongolian",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "Shqip",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "Portuguese",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romanian",
	"ru" => "Russian",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "Slovak",
	"sl" => "Slovenian",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Αλβανικά",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "Swedish",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamese",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "Chinese",
	"zu" => "Zulu",
);

add_translation("el",$greek);

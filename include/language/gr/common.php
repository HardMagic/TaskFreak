<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'en_EN.UTF-8', 'el_GR.utf8', 'el_GR.utf8', 'el_GR', 'el');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Υπάρχουν κάποια λάθη στην φόρμα. Οι πληροφορίες δεν αποθηκεύτηκαν!',
  'field_compulsory'	=>	'Αυτο το πεδίο είναι υποχρεωτικό'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "λάθος κωδικός",
  "user_pass_limit1" => "ο κωδικός πρέπει να έχει ενδιάμεσα ",
  "user_pass_limit2" => " και ",
  "user_pass_limit3" => " χαρακτήρες",
  "user_pass_empty" => "ο κωδικός δεν μπορεί να είναι κενό",
  "user_pass_invalid" => "Λάθος κωδικός",
  "user_name_limit1" => "Το ονομα χρήστη πρέπει να έχει αναμεσα ",
  "user_name_limit2" => " και ",
  "user_name_limit3" => " χαρακτήρες",
  "user_name_exists" => "Το ονομα χρήστη ήδη υπάρχει",
  "user_name_empty" => "Παρακαλούμε συμπληρώστε το ονομα χρήστη",
  "user_name_invalid" => "Το ονομα χρήστη δεν μπορεί να περιέχει ειδικούς χαρακτήρες ή κενά",
  "user_name_not_found" => "το ονομα χρήστη δεν βρέθηκε",
  "user_disabled" => "Ο λογαριασμός απενεργοποιήθηκε",
  "user_forbidden" => "Δεν έχετε δυνατότητα πρόσβασης",
  "user_email_empty" => "Παρακαλούμε, δώστε το e-mail σας",
  "user_email_format" => "Παρακαλούμε δώστε ένα έγγυρο email",
  "user_email_invalid" => "Το Email δεν βρέθηκε",
  "user_password_invalid" => "Λάθος κωδικός",
  "email_empty" => "Παρακαλούμε, δώστε το e-mail σας",
  "email_exists" => "ένας λογαριασμός με αυτο το e-mail ήδη υπάρχει",
  "email_invalid" => "παρακαλούμε δώστε ένα έγγυρο email",
  "document_wrong_type" => "λάθος τύπος αρχείου",
  "document_empty" => "παρακαλούμε επιλέξτε ένα αρχείο",
  "common_name_empty" => "παρακαλούμε συμπληρώστε ένα όνομα",
  "common_title_empty" => "παρακαλούμε συμπληρώστε έναν τίτλο",
  "common_theme_empty" => "παρακαλούμε επιλέξτε ένα θέμα",
  "common_description_empty" => "παρακαλούμε δώστε περιγραφή",
  "common_message_empty" => "παρακαλούμε συμπληρώστε ένα μήνυμα",
  "common_date_empty" => "παρακαλούμε επιλέξτε μία ημερομηνία",
  "common_date_invalid" => "το τέλος της ημερομηνίας δεν είναι έγγυρο",
  "common_city_empty" => "παρακαλούμε επιλέξτε πόλη",
  "common_info_empty" => "παρακαλούμε συμπληρώστε στοιχεία επικοινωνίας",
  "common_url_empty" => "παρακαλούμε συμπληρώστε το e-mail",
  "common_file_empty" => "παρακαλούμε επιλέξτε ένα αρχείο κάνοντας κλικ το 'Browse..' ",
  "login_email" => "Το e-mail Σας",
  "login_password" => "Κωδικός",
  "login_error0" => "Απαιτείται επικύρωση",
  "login_error1" => "Απαιτείται κωδικός",
  "login_error2" => "Η πρόσβαση απαγορευεται (κλειδωμένη περιοχή)",
  "login_error3" => "Λανθασμένος κωδικός ή όνομα χρήστη",
  "login_last_date" => 'Τελευταία ημερομηνία εισόδου',
  "login_last_address"  => 'Τελευταία διευθυνση εισόδου',
  "post_user" => "χρήστης",
  "post_category" => "κατηγορία",
  "post_title" => "τίτλος",
  "post_documents" => "φωτογραφίες",
  "post_date" => "δημοσιευτηκε σε",
  "post_by" => "απο",
  "doc_file_name" => "ονομα αρχείου",
  "doc_file_size" => "μέγεθος αρχείου",
  "doc_file_type" => "τύπος αρχείου",
  "doc_remove" => "αφαίρεση",
  "doc_update" => "ανανέωση αρχείων",
  "post_description" => "περιγραφή",
  "button_create" => "Δημιουργία",
  "button_update" => "Ανανέωση",
  "button_delete" => "Διαγραφή",
  "button_login" => "Είσοδος",
  "profile_update_success" => "Ο λογαριασμός ανανεώθηκε με επιτυχία",
  "url" => "ιστοσελίδα&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'σήμερα',
	'tomorrow'			=> 'αύριο',
	'days'				=> 'ημέρες',
	'day'				=> 'ημέρα',
	'weeks'				=> 'εβδομάδες',
	'week'				=> 'εβδομάδα',
	'months'			=> 'μήνες',
	'month'				=> 'μήνα',
	'years'				=> 'χρόνια',
	'year'				=> 'χρονο',
	'january'			=> 'Ιανουάριος',
	'february'			=> 'Φεβρουάριος',
	'march'				=> 'Μάρτιος',
	'april'				=> 'Απρόλιος',
	'may'				=> 'Μάιος',
	'june'				=> 'Ιούνιος',
	'july'				=> 'Ιούλιος',
	'august'			=> 'Αύγουστος',
	'september'			=> 'Σεπτέβριος',
	'october'			=> 'Οκτώβριος',
	'november'			=> 'Νοέμβριος',
	'december'			=> 'Δεκέμβριος',
	'jan'				=> 'Ιαν',
	'feb'				=> 'Φεβ',
	'mar'				=> 'Μαρ',
	'apr'				=> 'Απρ',
	'may'				=> 'Μάϊ',
	'jun'				=> 'Ιουν',
	'jul'				=> 'Ιούλ',
	'aug'				=> 'Αυγ',
	'sep'				=> 'Σεπ',
	'oct'				=> 'Οκτ',
	'nov'				=> 'Νοέ',
	'dec'				=> 'Δεκ',
	'monday'			=> 'Δευτέρα',
	'tuesday'			=> 'Τρίτη',
	'wednesday'			=> 'Τετάρτη',
	'thursday'			=> 'Πέμπτη',
	'friday'			=> 'Παρασκευή',
	'saturday'			=> 'Σάββατο',
	'sunday'			=> 'Κυριακή',
	'mon'				=> 'Δευ',
	'tue'				=> 'Τρι',
	'wed'				=> 'Τετ',
	'thu'				=> 'Πεμ',
	'fri'				=> 'Παρ',
	'sat'				=> 'Σαβ',
	'sun'				=> 'Κυρ'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'ΜΕΣΑ',
	'direction_out'		=> 'ΕΞΩ',
	'recipient_from'	=> 'Από',
	'recipient_to'		=> 'Σε',
	'check_recipient'	=> 'Παρακαλούμε συμπληρώστε το e-mail του παραλήπτη',
	'check_subject'		=> 'Παρακαλούμε συμπληρώστε το θέμα',
	'check_injection'	=> 'Email header injection attempt detected',
	'check_active'		=> 'Ο συναγερμός e-mail δεν είναι ενεργός'
);

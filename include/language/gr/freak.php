<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'en'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Ergas;ia',
    'print_list'        => 'Εκδοση προς εκτύπωση',
	'new_todo'			=> 'Νέο Todo',
	'view'				=> 'Επισκόπηση',
	'all_projects'		=> 'Ολες οι εργασίες',
	'future_tasks'		=> 'Μελλοντικές εργασίες',
	'past_tasks'		=> 'Προηγούμενες εργασίες',
    'my_tasks'          => 'Οι εργασίες μου',
	'all_tasks'			=> 'Ολες οι εργασίες',
	'all_contexts'		=> 'Ολα τα περιεχόμενα',
	'all_users' 		=> 'Ολοι οι χρήστες',
	'reload'			=> 'Ανανέωση',
	'manage'			=> 'Διαχείρηση',
	'projects'			=> 'Εργασίες',
	'users' 			=> 'Χρήστες',
    'preferences'       => 'Το προφίλ μου',
    'settings'          => 'Ρυθμίσεις συστήματος',
	'login'				=> 'Είσοδος',
	'logout'			=> 'Εξοδος',
	'warning'			=> 'Προειδοποίηση',
	'warning_install'	=> 'Ο φάκελος Install υπάρχει ακόμα, διαγράψτε τον για ασφάλεια'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Προταιρεότητα',
	'context'			=> 'Περιεχόμενο',
	'deadline'			=> 'Προθεσμία',
	'project'			=> 'Εργασία',
	'tasks'				=> 'Καθήκοντα',
	'title'				=> 'Τίτλος',
	'description'		=> 'Περιγραφή',
    'user'              => 'Χρήστης',
    'visibility'        => 'Ορατότητα',
    'private'           => 'ιδιωτικό',
    'internal'          => 'εσωτερικό',
    'public'            => 'δημόσιο',
	'status'			=> 'Κατάσταση',
	'create'			=> 'Δημιουργία',
	'save'				=> 'Αποθήκευση',
	'cancel'			=> 'Ακυρο',
	'reset'				=> 'Καθαρισμός φόρμας',
    'close'             => 'κλείσιμο',
    'edit'              => 'τροποποίηση',
    'delete'            => 'διαγραφή',
	'new'				=> 'Νεο',
	'project_new'		=> 'νέα εργασία?',
	'project_list'		=> 'παράθεση λίστας',
	'compulsory_legend' => 'Τα πεδία με <span class="compulsory">κόκκινο</span> είναι υποχρεωτικά.',
	'list_comments'		=> 'Σχόλια.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'περιγραφή',
	'description_none'	=> 'χωρίς περιγραφή',
	'tab_comments'		=> 'σχόλια',
	'comments_by'		=> 'απο',
	'comments_none'		=> 'δεν υπάρχουν σχόλια ακόμα',
	'comments_no_access'	=> 'τα σχόλια είναι απόρρητα',
	'comments_new'		=> 'συμπληρώστε το πρώτο σχόλιο',
	'comments_reply'	=> 'απαντηση',
	'comments_edit'		=> 'τροποποίηση',
	'comments_delete'	=> 'διαγραφή',
	'comments_delete_confirm'	=> 'είστε σίγουρος για την διαγραφή?',
	'tab_history'		=> 'ιστορικό',
    'history_date'      => 'ημερομηνία',
    'history_user'      => 'χρήστης',
    'history_what'      => 'ενέργεια'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'μέρα',
	'days'				=> 'μέρες',
	'help'				=> 'π.χ. σήμερα, αύριο, 12 Απρ'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Εργασία',
    'projects'          => 'Εργασίες',
    'name'              => 'Ονομα',
    'description'       => 'Περιγραφή',
    'position'          => 'Θέση',
    'members'           => 'Μέλη',
    'members_legend'    => 'Μέλλη της εργασίας',
	'status'            => 'Κατάσταση',
    'action'            => 'Ενέργεια',
    'project_history'   => 'Παράθεση κατάστασης, αλλαγή ιστορικού',
    'remove_confirm'    => 'είστε σίγουρος για την διαγραφή απο την εργασία?',
    'user_add_legend'   => 'Προσθήκη ενός χρήστη σε αυτην την εργασία',
    'user_add_button'   => 'Προσθήκη χρήστη στην εργασία',
	'user_no_project'   => 'Δεν ανήκει σε κάποια εργασία',
	'user_added_ok'		=> 'Το μέλος προστέθηκε στην εργασία με επιτυχία',
	'user_added_err'	=> 'Το μέλος ήδη ανήκει σε εργασία ή δεν είναι διαθέσιμο',
	'user_removed_ok'	=> 'Το μέλος διαγράφτηκε απο την εργασία!',
	'user_removed_err'	=> 'Το μέλος δεν μπορεί να διαγραφεί ή έχει ήδη διαγραφεί',
	'user_position_ok'	=> 'Η θέση του μέλους ανανεώθηκε με επιτυχία',
	'project_info'		=> 'Πληροφορίες εργασίας',
	'history_date'      => 'ημερομηνία',
    'history_user'      => 'χρήστης',
	'history_what'      => 'δράση',
	'action_save_ok'	=> 'Οι πληροφορίες της εργασίας ανανεώθηκαν!',
	'action_added_ok'	=> 'Η εργασία δημιουργήθηκε!',
	'action_status_ok'	=> 'Η κατάσταση της εργασίας ανανεώθηκε!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Προσωπικές πληροφορίες',
    'user'              => 'Χρήστης',
    'name'              => 'Ονομα',
    'title'             => 'Τίτλος',
    'first_name'        => 'Ονομα',
    'middle_name'       => 'Μεσαίο Ονομα',
    'last_name'         => 'Επίθετο',
    'address'           => 'Διευθυνση',
    'location'          => 'Τοποθεσία',
    'city'              => 'Πόλη',
    'state'             => 'Νομός',
    'country'           => 'Χώρα',
    'email'             => 'Email',
    'position'          => 'Επίπεδο',
	'last_login'        => 'Τελευταία είσοδος',
	'last_login_from'	=> 'Από',
	'logout_goodbye'	=> 'Αποσυνδεθήκατε με επιτυχία. Αντίο σας.',
	'logout_login'		=> 'Κάντε κλικ εδώ για να συνδεθείτε',
    'action'            => 'Δράση',
    'delete_confirm'    => 'είστε σίγουρος για την διαγραφή του χρήστη?',
    'enable_confirm'    => 'είστε σίγουρος για την ενεργοποίηση του χρήστη?',
    'disable_confirm'   => 'είστε σίγουρος για την απενεργοποίηση του χρήστη?',
    'account'           => 'Διαπιστευτήρια λογαριασμού',
    'account_legend'    => 'Παρακαλούμε επιλέξτε ονομα χρήστη και κωδικό για είσοδο στο σύστημα!',
    'username'          => 'Ονομα χρήστη',
    'password'          => 'Κωδικός',
    'password_confirm'  => '(επιβεβαίωση)',
    'auto_login'        => 'θυμήσου με σε αυτον τον υπολογιστη',
    'password_legend'   => 'Συμπληρώστε κωδικό εισόδου (και επιβεβαιώστε) μονο αν θέλετε να αλλάξετε τον ήδη υπάρχων κωδικό σας.',
	'enabled_label'     => 'Ο λογαριασμός ενεργοποιήθηκε',
	'login_signup'		=> 'Δεν είστε μέλος? Ζητήστε λογαριασμό εδω!',
	'account_created'	=> 'Δημιουργήθηκε στις ',
	'account_disabled'	=> 'Ο λογαριασμός είναι απενεργοποιημένος!',
	'state_us_only'		=> 'Για κατοικους Αμερικής μονο'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Δημιουργία',
	'add_account'		=> 'Διαγραφή',
    'update'            => 'Αποθήκευση αλλαγών',
    'cancel'            => 'Ακύρωση αλλαγών',
    'reset'             => 'Καθαρισμός φόρμας',
    'back'              => 'Πίσω στην λίστα'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Τα δεδομένα δεν βρέθηκαν ή, η πρόσβαση απορίφτηκε',
    'denied'                    => 'Απόριψη πρόσβασης!',
    'project_delete'            => 'Διαγραφή εργασίας',
    'project_delete_confirm'    => 'Είστε σίγουρος για την διαγραφή της εργασίας και όλων των ενεργειών της?',
    'project_delete_ok'         => 'Η εργασία διαγράφτηκε',
    'project_delete_no'         => 'Η εργασία δεν μπορεί να διαγραφεί!',
    'task_edit'				    => 'Τροποποίηση αυτης της ενέργειας',
    'task_delete'			    => 'Διαγραφή αυτής της ενέργειας',
    'task_delete_confirm'	    => 'Είστε σίγουρος για την διαγραφή της ενεργειας?',
	'error_no_title'		    => 'παρακαλούμε συμπληρώστε τον τίτλο!',
	'done_deleted'			    => 'η ενέργεια διαγράφτηκε!',
	'done_status'			    => 'η κατάσταση ενεργειών ανανεώθηκε',
	'done_updated'			    => 'η ενέργεια ανανεώθηκε!',
	'done_added'			    => 'η ενέργεια δημιουργήθηκε!',
	'done_comment_added'		=> 'το σχόλιο προστέθηκε!',
	'done_comment_updated'		=> 'το σχόλιο ανανεώθηκε!',
	'done_comment_deleted'		=> 'το σχόλιο διαγράφτηκε!',
	'operation_failed'			=> 'αποτυχία λειτουργίας!',
	'purge_all'				    => 'εκκαθάριση (διαγραφή παλιών ενεργειών) απο όλες τις εργασίες',
	'purge_all_confirm'		    => 'είστε σίγουρος για την διαγραφή παλιών ενεργειών απο όλες τις εργασίες?',
	'delete_all'			    => 'Διαγραφή όλων των εργασιών (όλες τις ενέργειες)',
	'delete_all_confirm'	    => 'είστε σίγουρος για την διαγραγή όλων των ενεργειών απο όλες τις εργασίες?',
	'purge_one'				    => 'εκκαθάριση (διαγραφή παλιών ενεργειών)',
	'purge_one_confirm'		    => 'είστε σίγουρος για την διαγραφή όλων των παλιών ενεργειών απο αυτην την εργασία?',
	'delete_one'			    => 'διαγραφή ολόκληρης της εργασίας',
	'delete_one_confirm'	    => 'είστε σίγουρος για την διαγραφή αυτής της εργασίας?',
	'no_task_found'			    => 'καμία ενέργεια δεν ταιριάζει με τα κριτίρια σας',
	'no_project_found'		    => 'η εργασία δεν βρέθηκε',
	'create_task'			    => 'Κάντε κλικ εδω για να προσπαθήσετε να δημιουργήσετε μία',
	'no_project_found_1'	    => "Δεν μπορώ να βρώ την εργασία!!!",
	'no_project_found_2'	    => 'Πρέπει πρώτα να δημιούργήσετε την ενέργεια',
	'close_window'			    => 'κλείσιμο αυτού του παραθύρου',
    'session_expired'           => 'Η περίοδος εισόδου σας έληξε',
    'clock_start'				=> 'έναρξη χρονομετρητη',
    'clock_stop'				=> 'σταμάτημα χρονομετρητη',
    'clock_change'				=> 'τροποποίηση χρονομετρητη',
	'information_saved'			=> 'Οι πληροφορίες αποθηκεύτηκαν με επιτυχία',
	'confirm_status_close'		=> 'Είστε σίγουρος οτι θέλετε να κλείσετε αυτην την ενέργεια?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Δεν υπάρχουν ενέργειες για σήμερα',
    'error_login'   => 'Αποτυχία εξουσιοδότησης'
);

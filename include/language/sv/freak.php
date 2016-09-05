<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user  - Swedish language, sunday version...                          *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Marcus Persson <marcus (at) gazebo.se>                            *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'en'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Uppgifter',
    'print_list'        => 'Utskrifts version',
	'new_todo'			=> 'Ny Uppgift',
	'view'				=> 'Granska',
	'all_projects'		=> 'Alla Projekt',
	'future_tasks'		=> 'Framtida Uppgifter',
	'past_tasks'		=> 'Förflutna Uppgifter',
    'my_tasks'          => 'Mina Uppgifter',
	'all_tasks'			=> 'Alla Uppgifter',
	'all_contexts'		=> 'All Kontext',
	'all_users' 		=> 'Alla Användare',
	'reload'			=> 'Uppdatera',
	'manage'			=> 'Hantera',
	'projects'			=> 'Projekt',
	'users' 			=> 'Användare',
    'preferences'       => 'Min Profil',
    'settings'          => 'System Inställningar',
	'login'				=> 'Logga in',
	'logout'			=> 'Logga ut',
	'warning'			=> 'Varning',
	'warning_install'	=> 'Installations folder existerar forfarande. Du bör radera denna folder av säkerhets skäl.'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioritet',
	'context'			=> 'Kontext',
	'deadline'			=> 'Deadline',
	'project'			=> 'Projekt',
	'tasks'				=> 'Uppgifter',
	'title'				=> 'Titel',
	'description'		=> 'Beskrivning',
    'user'              => 'Användare',
    'visibility'        => 'Synlighet',
    'private'           => 'privat',
    'internal'          => 'intern',
    'public'            => 'allmän',
	'status'			=> 'Status',
	'create'			=> 'Skapa',
	'save'				=> 'Spara',
	'cancel'			=> 'Ångra',
	'reset'				=> 'Återställ formulär',
    'close'             => 'stäng',
    'edit'              => 'Editera',
    'delete'            => 'Radera',
	'new'				=> 'Nytt',
	'project_new'		=> 'Nytt projekt',
	'project_list'		=> 'Visa lista',
	'compulsory_legend' => 'Fält i <span class="compulsory">rött</span> är obligatoriska',
	'list_comments'		=> 'Kommentarer',
    'time'				=> 'Total Tid',
    'time_delete'		=> 'Radera alla tidsrapporter för denna uppgift',
    'time_clock'		=> 'Tids Klocka',
	'time_change'		=> '&Auml;ndra tid till',
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'beskrivning',
	'description_none'	=> 'ingen beskrivning',
	'tab_comments'		=> 'kommentarer',
	'comments_by'		=> 'av',
	'comments_none'		=> 'ingen kommentar gjord än',
	'comments_no_access'	=> 'kommentaren är konfidentiell',
	'comments_new'		=> 'posta första kommentar',
	'comments_reply'	=> 'besvara',
	'comments_edit'		=> 'editera',
	'comments_delete'	=> 'radera',
	'comments_delete_confirm'	=> 'vill du radera kommentar?',
	'tab_history'		=> 'historia',
    'history_date'      => 'datum',
    'history_user'      => 'användare',
    'history_what'      => 'handling',
   	'tab_time'			=> 'tid',
   	'time_user'			=> 'användare',
   	'time_days'			=> 'tid i dagar',
   	'time_hours'		=> 'tid i timmar'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'dag',
	'days'				=> 'dagar',
	'help'				=> 'ex. torsdag, imorgon, 12 apr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekt',
    'projects'          => 'projekten',
    'name'              => 'Namn',
    'description'       => 'Beskrivning',
    'position'          => 'Plasering',
    'members'           => 'Medlemmar',
    'members_legend'    => 'Projekt medlemmar',
	'status'            => 'Status',
    'action'            => 'Händelse',
    'project_history'   => 'Granska historiska förändringar i status',
    'remove_confirm'    => 'verkligen raderas från detta projekt',
    'user_add_legend'   => 'Lägg till användare till detta projekt',
    'user_add_button'   => 'Lägg till användare till projekt',
	'user_no_project'   => 'Tillhör inte något projekt',
	'user_added_ok'		=> 'Medlemmen har läggts till i projektet',
	'user_added_err'	=> 'Medlemmen tillhör redan ett projekt eller är inte tillgänglig',
	'user_removed_ok'	=> 'Medlem är borttagen från projektet',
	'user_removed_err'	=> 'Medlemen kan inte tas bort eller har redan blivit borttagen',
	'user_position_ok'	=> 'Medlemens plasering har uppdaterats',
	'project_info'		=> 'Projekt information',
	'history_date'      => 'datum',
    'history_user'      => 'användare',
	'history_what'      => 'händelse',
	'action_save_ok'	=> 'Projekt detaljer är uppdatarade!',
	'action_added_ok'	=> 'Projektet har skapats!',
	'action_status_ok'	=> 'Projektets status har uppdateras'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Personlig information',
    'user'              => 'Användare',
    'name'              => 'Namn',
    'title'             => 'Titel',
    'first_name'        => 'Förnamn',
    'middle_name'       => 'Mellan namn',
    'last_name'         => 'Efternamn',
    'address'           => 'Adress',
    'location'          => 'Plasering',
    'city'              => 'STad',
    'state'             => 'Stat',
    'country'           => 'Land',
    'email'             => 'E-post',
    'position'          => 'Nivå',
	'last_login'        => 'Senast inloggad',
	'last_login_from'	=> 'Från',
	'logout_goodbye'	=> 'Du har nu loggats ut!',
	'logout_login'		=> 'Klicka här för att logga in',
    'action'            => 'Händelse',
    'delete_confirm'    => 'vill du verkligen radera denna användare?',
    'enable_confirm'    => 'vill du verkligen aktivera denna användare?',
    'disable_confirm'   => 'vill du verkligen inaktivera denna användare?',
    'account'           => 'Konto uppgifter',
    'account_legend'    => 'Var god och välj ett användarnamn och lösenord för att få tillgång till TaskFreak!',
    'username'          => 'Användarnamn',
    'password'          => 'Lösenord',
    'password_confirm'  => '(bekräfta)',
    'auto_login'        => 'kom ihåg mig från denna dator',
    'password_legend'   => 'Fyll i lösenord (och bekräfta) endast om du vill ändra på det',
	'enabled_label'     => 'Kontot är inaktiverat',
	'login_signup'		=> '&Auml;r ej medlem? Förfråga om ett konto här',
	'account_created'	=> 'Skapad',
	'account_disabled'	=> 'Kontot är inaktiverat',
	'state_us_only'		=> 'endats för US medlemar',
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Skapa',
	'add_account'		=> 'Posta',
    'update'            => 'Spara ändringar',
    'cancel'            => 'Ångra ändringar',
    'reset'             => 'Återställ formulär',
    'back'              => 'Tillbaka till listning',
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Data hittades ej eller ingen behörighet',
    'denied'                    => 'Saknar behörighet',
    'project_delete'            => 'Radera projekt',
    'project_delete_confirm'    => 'Verkligen radera detta projekt med alla dess uppgifter',
    'project_delete_ok'         => 'Projektet är borttaget',
    'project_delete_no'         => 'Projektet kan inte raderas',
    'task_edit'				    => 'Editera denna uppgift',
    'task_delete'			    => 'Radera denna uppgift',
    'task_delete_confirm'	    => 'Vill du verkligen radera denna uppgift',
	'error_no_title'		    => 'Var god och fyll i en titel!',
	'done_deleted'			    => 'uppgift raderad',
	'done_status'			    => 'uppgiftens status är uppdaterad',
	'done_updated'			    => 'uppgift är uppdaterad',
	'done_added'			    => 'uppgift skapad',
	'done_comment_added'		=> 'kommentaren är tillagd',
	'done_comment_updated'		=> 'kommentaren är uppdaterad',
	'done_comment_deleted'		=> 'kommentaren är raderad',
	'operation_failed'			=> 'operation misslyckad!',
	'purge_all'				    => 'rensa upp (äldre uppgifter) för alla projekt',
	'purge_all_confirm'		    => 'vill du verkligen radera äldre uppgifter från alla projekt',
	'delete_all'			    => 'radera alla projekt (och alla uppgfiter)',
	'delete_all_confirm'	    => 'vill du radera alla uppgifter från alla projekt?',
	'purge_one'				    => 'rensa upp (radera äldre uppgifter)',
	'purge_one_confirm'		    => 'vill du radera äldre uppgifter från detta projekt?',
	'delete_one'			    => 'radera hela detta projekt',
	'delete_one_confirm'	    => 'vill du verkligen radera detta projekt',
	'no_task_found'			    => 'ingen uppgift sämmer in på dina kriterium',
	'no_project_found'		    => 'inga projket hittades',
	'create_task'			    => 'Klicka här för att försöka skapa ett',
	'no_project_found_1'	    => "Dang! Kan inte hitta ett projekt!!!",
	'no_project_found_2'	    => 'Du behöver troligen skapa en uppgift förts, så du vet',
	'close_window'			    => 'stäng detta fönster',
    'session_expired'           => 'sektionen har förfallit',
	'information_saved'			=> 'Informationen har sparats!',
    'clock_start'				=> 'tids klockan har startats',
    'clock_stop'				=> 'tids klockan har stoppats',
    'clock_change'				=> 'tids klockan har uppdateras',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Ingen uppgift för dagen',
    'error_login'   => 'Autentisering misslyckades'
);

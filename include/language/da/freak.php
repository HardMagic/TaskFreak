<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.4.2                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'en'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Opgave',
    'print_list'        => 'Print version',
	'new_todo'			=> 'Ny opgave',
	'view'				=> 'Vis',
	'all_projects'		=> 'Alle Projekter',
	'future_tasks'		=> 'Fremtidige Opgaver',
	'past_tasks'		=> 'Forrige Opgaver',
    'my_tasks'          => 'Mine Opgaver',
	'all_tasks'			=> 'Alle Opgaver',
	'all_contexts'		=> 'Alle Contexts',
	'all_users' 		=> 'Alle brugere',
	'reload'			=> 'Opdater',
	'manage'			=> 'Administrer',
	'projects'			=> 'Projekter',
	'users' 			=> 'Brugere',
    'preferences'       => 'Min Profil',
    'settings'          => 'System indstillinger',
	'login'				=> 'Logind',
	'logout'			=> 'Logud'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioritet',
	'context'			=> 'Context',
	'deadline'			=> 'Deadline',
	'project'			=> 'Projekt',
	'tasks'				=> 'Opgaver',
	'title'				=> 'Titel',
	'description'		=> 'Beskrivelse',
    'user'              => 'Bruger',
    'visibility'        => 'Visibility',
    'private'           => 'privat',
    'internal'          => 'international',
    'public'            => 'offentlig',
	'status'			=> 'Status',
	'save'				=> 'Gem',
	'cancel'			=> 'Annuller',
    'close'             => 'luk',
    'edit'              => 'rediger',
    'delete'            => 'slet',
	'new'				=> 'Ny',
	'project_new'		=> 'nyt projekt?',
	'project_list'		=> 'vis liste',
    'compulsory_legend' => 'Felter med <span class="compulsory">rød</span> er obligatoriske.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'beskrivelse',
	'description_none'	=> 'ingen beskrivelse',
	'tab_comments'		=> 'kommentarer',
	'comments_by'		=> 'af',
	'comments_none'		=> 'ingen kommentarer skrevet endnu',
	'comments_no_access'	=> 'kommentarer er hemmelige',
	'comments_new'		=> 'skriv første kommentar',
	'comments_reply'	=> 'svar',
	'comments_edit'		=> 'rediger',
	'comments_delete'	=> 'slet',
	'comments_delete_confirm'	=> 'vil du virkelig slette kommentaren?',
	'tab_history'		=> 'historie',
    'history_date'      => 'dato',
    'history_user'      => 'bruger',
    'history_what'      => 'aktion'
);

// date support
$GLOBALS['langDate'] = array (
	'today'				=> 'idag',
	'tomorrow'			=> 'i morgen',
	'day'				=> 'dag',
	'week'				=> 'uge',
	'month'				=> 'måned',
	'year'				=> 'år',
);

$GLOBALS['langDateDay'] = array (
    'monday'            => 'mandag',
    'tuesday'           => 'tirsdag',
    'wednesday'         => 'onsdag',
    'thursday'          => 'torsdag',
    'friday'            => 'fredag',
    'saturday'          => 'lørdag',
    'sunday'            => 'søndag'
);

$GLOBALS['langDateMore'] = array (
	'days'				=> 'dage',
	'help'				=> 'eg. idag, i morgen, 12 apr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekt',
    'projects'          => 'Projekter',
    'name'              => 'Navn',
    'description'       => 'Beskrivelse',
    'position'          => 'Position',
    'members'           => 'Medlemmer',
    'members_legend'    => 'Projekt medlemmer',
	'status'            => 'Status',
    'action'            => 'Aktion',
    'project_history'   => 'Vis status change history',
    'remove_confirm'    => 'vil du virkelig fjerne fra projekt?',
    'user_add_legend'   => 'Tilføj en bruger til dette projekt',
    'user_add_button'   => 'Tilføj en bruger til projekt',
    'user_no_project'   => 'Bruger tilhører intet projekt'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Personlig information',
    'user'              => 'Bruger',
    'name'              => 'Navn',
    'title'             => 'Titel',
    'first_name'        => 'Fornavn',
    'middle_name'       => 'Mellemnavn',
    'last_name'         => 'Efternavn',
    'address'           => 'Adresse',
    'location'          => 'Lokation',
    'city'              => 'By',
    'state'             => 'Stat',
    'country'           => 'Land',
    'email'             => 'Email',
    'position'          => 'Level',
    'last_login'        => 'Sidste login',
    'action'            => 'Aktion',
    'delete_confirm'    => 'vil du virkelig slette denne bruger?',
    'enable_confirm'    => 'vil du virkelig oprette denne bruger?',
    'disable_confirm'   => 'vil du virkelig slå denne bruger fra?',
    'account'           => 'Konto credentials',
    'account_legend'    => 'Vælg venligst et brugernavn og et password for at logge på TaskFreak!',
    'username'          => 'Brugernavn',
    'password'          => 'Password',
    'password_confirm'  => '(bekræft)',
    'auto_login'        => 'husk mig på denne computer',
    'password_legend'   => 'Skriv et password (og bekræft) kun vis du vil ændre det.',
	'enabled_label'     => 'Kontoen er oprettet',
	'login_signup'		=> 'Ikke medlem? Få en konto her'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Opret',
	'add_account'		=> 'Tilmeld',
    'update'            => 'Gem ændringer',
    'cancel'            => 'Annuller ændringer',
    'reset'             => 'Reset formular',
    'back'              => 'Tilbage til liste'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Data ikke fundet eller adgang nægtet',
    'denied'                    => 'Adgang nægtet!',
    'project_delete'            => 'Slet projekt',
    'project_delete_confirm'    => 'Vil du virkelig slette dette projekt og dets opgaver?',
    'project_delete_ok'         => 'Projekt slettet',
    'project_delete_no'         => 'Projektet kan ikke slettes!',
    'task_edit'				    => 'Rediger denne opgave',
    'task_delete'			    => 'Slet denne opgave',
    'task_delete_confirm'	    => 'Vil du virkelig slette denne opgave?',
	'error_no_title'		    => 'skriv venligst en titel!',
	'done_deleted'			    => 'opgave slettet!',
	'done_status'			    => 'opgave status opdateret',
	'done_updated'			    => 'opgave opdateret!',
	'done_added'			    => 'opgave oprettet!',
	'done_comment_added'		=> 'kommentar tilføjet!',
	'done_comment_updated'		=> 'kommentar opdateret!',
	'done_comment_deleted'		=> 'kommentar slettet!',
	'operation_failed'			=> 'operation fejlet!',
	'purge_all'				    => 'purge (slet gamle opgaver) for alle projekter',
	'purge_all_confirm'		    => 'vil du virkelig slette gamle opgaver fra alle projekter?',
	'delete_all'			    => 'slet alle projekter (alle opgaver)',
	'delete_all_confirm'	    => 'vil du virkelig slette alle opgaver fra alle projekter?',
	'purge_one'				    => 'purge (slet gamle opgaver)',
	'purge_one_confirm'		    => 'vil du virkelig slette gamle opgaver fra dette projekt?',
	'delete_one'			    => 'slet hele projektet',
	'delete_one_confirm'	    => 'vil du virkelig slette dette projekt?',
	'no_task_found'			    => 'ingen opgave matcher dine kriterier',
	'no_project_found'		    => 'ingen projekt fundet',
	'create_task'			    => 'Klik her for at lave et forsøg på at lave en',
	'no_project_found_1'	    => 'Dang! Kan ikke finde et projekt!!!',
	'no_project_found_2'	    => 'Du skal måske oprette en opgave først, ikke også',
	'close_window'			    => 'luk dette vindue',
    'session_expired'           => 'Session er udløbet',
    'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'information_saved'			=> 'Information successfully saved',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Ingen opgaver for idag',
    'error_login'   => 'Autentikation fejlet'
);

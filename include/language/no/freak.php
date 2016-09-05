<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Norwegian translation by Håvard Kristoffersen, www.theta-design.no	     *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'en'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Oppgave',
    'print_list'        => 'utskriftversjon',
	'new_todo'			=> 'Ny Todo',
	'view'				=> 'Vis',
	'all_projects'		=> 'Alle prosjekter',
	'future_tasks'		=> 'Fremtidige oppgaver',
	'past_tasks'		=> 'Tidligere oppgaver',
    'my_tasks'          => 'Mine oppgaver',
	'all_tasks'			=> 'Alle oppgaver',
	'all_contexts'		=> 'All Contexts',
	'all_users' 		=> 'Alle brukere',
	'reload'			=> 'Last på nytt',
	'manage'			=> 'Behandle',
	'projects'			=> 'Prosjekter',
	'users' 			=> 'Brukere',
    'preferences'       => 'Min profil',
    'settings'          => 'System instillinger',
	'login'				=> 'Logg inn',
	'logout'			=> 'Logg ut',
	'warning'			=> 'Advarsel',
	'warning_install'	=> 'Innstallasjonsmappen finnes fortsatt. Du bør av sikkerhetsmessige årsaker slette denne'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioritet',
	'context'			=> 'Innhold',
	'deadline'			=> 'Deadline',
	'project'			=> 'Prosjekt',
	'tasks'				=> 'Oppgaver',
	'title'				=> 'Tittel',
	'description'		=> 'Beskrivelse',
    'user'              => 'Bruker',
    'visibility'        => 'Synlighet',
    'private'           => 'privat',
    'internal'          => 'internt',
    'public'            => 'åpent',
	'status'			=> 'Status',
	'create'			=> 'Opprett',
	'save'				=> 'Lagre',
	'cancel'			=> 'Avbryt',
	'reset'				=> 'Nullstill skjema',
    'close'             => 'steng',
    'edit'              => 'endre',
    'delete'            => 'slett',
	'new'				=> 'Ny',
	'project_new'		=> 'nytt prosjekt?',
	'project_list'		=> 'vis liste',
	'compulsory_legend' => 'Felt merket med <span class="compulsory">rødt</span> er obligatoriske.',
	'list_comments'		=> 'Kom.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'beskrivelse',
	'description_none'	=> 'ingen beskrivelse',
	'tab_comments'		=> 'kommentarer',
	'comments_by'		=> 'av',
	'comments_none'		=> 'ingen kommentarer enda',
	'comments_no_access'	=> 'kommentarer er konfidensielle',
	'comments_new'		=> 'skriv første kommentar',
	'comments_reply'	=> 'svar',
	'comments_edit'		=> 'endre',
	'comments_delete'	=> 'slett',
	'comments_delete_confirm'	=> 'sikker på at du vil slette kommentar?',
	'tab_history'		=> 'historie',
    'history_date'      => 'dato',
    'history_user'      => 'bruker',
    'history_what'      => 'handling'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'dag',
	'days'				=> 'dager',
	'help'				=> 'feks. idag, i morgen, 12. apr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Prosjekt',
    'projects'          => 'Prosjekter',
    'name'              => 'Navn',
    'description'       => 'Beskrivelse',
    'position'          => 'Posisjon',
    'members'           => 'Medlemmer',
    'members_legend'    => 'Prosjektmedlemmer',
	'status'            => 'Status',
    'action'            => 'Handlinger',
    'project_history'   => 'Vis historiske endringer i status',
    'remove_confirm'    => 'sikker på at du vil fjerne fra prosjektet?',
    'user_add_legend'   => 'Legg til en bruker på dette prosjektet',
    'user_add_button'   => 'Legg til bruker på dette prosjektet',
	'user_no_project'   => 'Er ikke tilknyttet noe prosjekt',
	'user_added_ok'		=> 'Medlem ble lagt til prosjekt',
	'user_added_err'	=> 'Medlem hører allerede til prosjektet eller er ikke tilgjengelig',
	'user_removed_ok'	=> 'Medlem fjernet fra prosjekt!',
	'user_removed_err'	=> 'Medlemmet kan ikke fjernes eller er allerede fjernet',
	'user_position_ok'	=> 'Medlemsposisjon oppdatert',
	'project_info'		=> 'Prosjektinfo',
	'history_date'      => 'dato',
    'history_user'      => 'bruker',
	'history_what'      => 'handling',
	'action_save_ok'	=> 'Prosjektdetaljer oppdatert!',
	'action_added_ok'	=> 'Prosjekt opprettet!',
	'action_status_ok'	=> 'Prosjekt status oppdatert!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Personlig informasjon',
    'user'              => 'Bruker',
    'name'              => 'Navn',
    'title'             => 'Tittel',
    'first_name'        => 'Fornavn',
    'middle_name'       => 'Mellomnavn',
    'last_name'         => 'Etternavn',
    'address'           => 'Adresse',
    'location'          => 'Sted',
    'city'              => 'By',
    'state'             => 'Stat',
    'country'           => 'Land',
    'email'             => 'E-mail',
    'position'          => 'Nivå',
	'last_login'        => 'Siste innlogget',
	'last_login_from'	=> 'Fra',
	'logout_goodbye'	=> 'Du er nå logget ut!',
	'logout_login'		=> 'Klikk her for å logge inn',
    'action'            => 'Handling',
    'delete_confirm'    => 'sikker på at du vil slette bruker?',
    'enable_confirm'    => 'sikker på at du vil aktivere bruker?',
    'disable_confirm'   => 'sikker på at du vil deaktivere bruker?',
    'account'           => 'Account credentials',
    'account_legend'    => 'Vennligst velg et brukernavn og passord for å få tilgang til TaskFreak!',
    'username'          => 'Brukernavn',
    'password'          => 'Passord',
    'password_confirm'  => '(bekreft)',
    'auto_login'        => 'husk meg på denne maskinen',
    'password_legend'   => 'Skriv passord (og bekreftelse) KUN hvis du ønsker å endre det!',
	'enabled_label'     => 'Kontoen er aktivert',
	'login_signup'		=> 'Ikke medlem? Be om en konto her',
	'account_created'	=> 'Opprettet den',
	'account_disabled'	=> 'Kontoen er deaktivert!',
	'state_us_only'		=> 'Kun for US medlemmer'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Opprett',
	'add_account'		=> 'Legg til',
    'update'            => 'Lagre endringer',
    'cancel'            => 'Avbryt endringer',
    'reset'             => 'Nullstill skjema',
    'back'              => 'Tilbake til listen'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Data ikke funnet eller begrenset tilgang',
    'denied'                    => 'Begrenset tilgang!',
    'project_delete'            => 'Slett prosjekt',
    'project_delete_confirm'    => 'Sikker på at du vil slette prosjektet og tilhørende oppgaver?',
    'project_delete_ok'         => 'Prosjekt slettet',
    'project_delete_no'         => 'Prosjekt kan ikke slettes!',
    'task_edit'				    => 'Endre denne oppgaven',
    'task_delete'			    => 'Slett denne oppgaven',
    'task_delete_confirm'	    => 'Sikker på at du vil slette denne oppgaven?',
	'error_no_title'		    => 'skriv inn tittel!',
	'done_deleted'			    => 'oppgave slettet!',
	'done_status'			    => 'oppgavestatus oppdatert',
	'done_updated'			    => 'oppgave oppdatert!',
	'done_added'			    => 'oppgave opprettet!',
	'done_comment_added'		=> 'kommentar lagt til!',
	'done_comment_updated'		=> 'kommentar oppdatert!',
	'done_comment_deleted'		=> 'kommentar slettet!',
	'operation_failed'			=> 'handlingen feilet!',
	'purge_all'				    => 'tøm (slett gamle oppgaver) for alle prosjekter',
	'purge_all_confirm'		    => 'Sikker på at du vil slette gamle oppgaver fra alle prosjekter?',
	'delete_all'			    => 'slett alle prosjekter (alle oppgaver)',
	'delete_all_confirm'	    => 'Sikker på at du vil slette alle oppgaver fra alle prosjektene?',
	'purge_one'				    => 'tøm (slett gamle oppgaver)',
	'purge_one_confirm'		    => 'Sikker på at du vil slette gamle oppgaver fra dette prosjektet?',
	'delete_one'			    => 'slett hele prosjektet',
	'delete_one_confirm'	    => 'sikker på at du vil slette dette prosjektet?',
	'no_task_found'			    => 'ingen oppgaver som passer til kriteriene',
	'no_project_found'		    => 'ingen prosjekter funnet',
	'create_task'			    => 'Klikk her for å opprette en ny',
	'no_project_found_1'	    => "Kan ikke finne prosjekt!",
	'no_project_found_2'	    => 'Du må nok opprette en oppgave først',
	'close_window'			    => 'lukk dette vinduet',
    'session_expired'           => 'Sesjonen er utgått',
	'information_saved'			=> 'Informasjonen ble lagret',
	'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Ingen oppgaver idag',
    'error_login'   => 'Autentifisering feilet'
);

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
	'jscalendar'	=> 'nl'
);

// top menu / navigatie
$GLOBALS['langMenu'] = array (
	'task'				=> 'Taak',
    'print_list'        => 'Print versie',
	'new_todo'			=> 'Nieuwe Todo',
	'view'				=> 'Bekijken',
	'all_projects'		=> 'Alle Projecten',
	'future_tasks'		=> 'Toekomstige Taken',
	'past_tasks'		=> 'Taken uit Verleden',
    'my_tasks'          => 'Mijn Taken',
	'all_tasks'			=> 'Alle Taken',
	'all_contexts'		=> 'Alle Contexten',
	'all_users' 		=> 'Alle Gebruikers',
	'reload'			=> 'Herladen',
	'manage'			=> 'Beheren',
	'projects'			=> 'Projecten',
	'users' 			=> 'Gebruikers',
    'preferences'       => 'Mijn Profiel',
    'settings'          => 'Systeem Instellingen',
	'login'				=> 'Inloggen',
	'logout'			=> 'Uitloggen',
	'warning'			=> 'Warning',
	'warning_install'	=> 'Installatiemap bestaat nog, verwijder deze uit veiligheidsoverwegingen'
);

// labels van velden en kolommen
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioriteit',
	'context'			=> 'Context',
	'deadline'			=> 'Deadline',
	'project'			=> 'Project',
	'tasks'				=> 'Taken',
	'title'				=> 'Titel',
	'description'		        => 'Beschrijving',
    'user'              => 'Gebruiker',
    'visibility'        => 'Zichtbaarheid',
    'private'           => 'Prive',
    'internal'          => 'Intern',
    'public'            => 'Openbaar',
	'status'			=> 'Status',
	'create'			=> 'Aanmaken',
	'save'				=> 'Opslaan',
	'cancel'			=> 'Annuleren',
	'reset'				=> 'Opnieuw',
    'close'             => 'Sluiten',
    'edit'              => 'Bewerken',
    'delete'            => 'Verwijderen',
	'new'				=> 'Nieuw',
	'project_new'		=> 'Nieuw Project?',
	'project_list'		=> 'Toon Lijst',
	'compulsory_legend' => 'Velden in <span class="compulsory">rood</span> zijn verplicht.',
	'list_comments'		=> 'Com.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'Beschrijving',
	'description_none'	=> 'Geen Beschrijving',
	'tab_comments'		=> 'Bijdragen',
	'comments_by'		=> 'door',
	'comments_none'		=> 'Nog geen bijdragen geplaatst',
	'comments_no_access'	=> 'Bijdragen zijn vertrouwelijk',
	'comments_new'		=> 'Plaats eerste bijdrage',
	'comments_reply'	=> 'Reageren',
	'comments_edit'		=> 'Bewerken',
	'comments_delete'	=> 'Verwijderen',
	'comments_delete_confirm'	=> 'Bijdrage werkelijk verwijderen?',
	'tab_history'		=> 'Geschiedenis',
    'history_date'      => 'Datum',
    'history_user'      => 'Gebruiker',
    'history_what'      => 'Actie'
);

// datum ondersteuning
$GLOBALS['langDateMore'] = array (
	'day'				=> 'Dag',
	'days'				=> 'Dagen',
	'help'				=> 'bv. vandaag, morgen, 12 apr'
);

// project gerelateerd
$GLOBALS['langProject'] = array(
    'project'           => 'Project',
    'projects'          => 'Projecten',
    'name'              => 'Naam',
    'description'       => 'Beschrijving',
    'position'          => 'Positie',
    'members'           => 'Leden',
    'members_legend'    => 'Projectleden',
    'status'            => 'Status',
    'action'            => 'Actie',
    'project_history'   => 'Bekijk statusveranderingen historie',
    'remove_confirm'    => 'Werkelijk van het project verwijderen?',
    'user_add_legend'   => 'Voeg een gebruiker aan dit project toe',
    'user_add_button'   => 'Voeg gebruiker aan project toe',
	'user_no_project'   => 'Behoort niet tot een project',
	'user_added_ok'		=> 'Lid succesvol toegevoegd aan project',
	'user_added_err'	=> 'Lid staat al bij project of is niet beschikbaar',
	'user_removed_ok'	=> 'Lid kan niet van project worden verwijderd!',
	'user_removed_err'	=> 'Lid kan niet worden verwijderd, of is al verwijderd',
	'user_position_ok'	=> 'Lidplaats(en) succesvol bijgewerkt',
	'project_info'		=> 'Project info',
	'history_date'      => 'Datum',
    'history_user'      => 'Gebruiker',
	'history_what'      => 'Actie',
	'action_save_ok'	=> 'Project details bijgewerkt!',
	'action_added_ok'	=> 'Project aangemaakt!',
	'action_status_ok'	=> 'Project status bijgewerkt!'
);

// project gerelateerd
$GLOBALS['langUser'] = array(
    'information'       => 'Persoonlijke Informatie',
    'user'              => 'Gebruiker',
    'name'              => 'Naam',
    'title'             => 'Titel',
    'first_name'        => 'Voornaam',
    'middle_name'       => 'Tussenvoegsel',
    'last_name'         => 'Achternaam',
    'address'           => 'Adres',
    'location'          => 'Lokatie',
    'city'              => 'Plaats',
    'state'             => 'Staat',
    'country'           => 'Land',
    'email'             => 'Emailadres',
    'position'          => 'Niveau',
    'last_login'        => 'Laatste inlogmoment',
	'last_login_from'	=> 'Van',
	'logout_goodbye'	=> 'U bent nu uitgelogd. Tot kijk.',
	'logout_login'		=> 'Klik hier om in te loggen',
    'action'            => 'Actie',
    'delete_confirm'    => 'Deze gebruiker werkelijk verwijderen?',
    'enable_confirm'    => 'Deze gebruiker werkelijk activeren?',
    'disable_confirm'   => 'Deze gebruiker werkelijk deactiveren?',
    'account'           => 'Account gegevens',
    'account_legend'    => 'Kies alstublieft een gebruikersnaam en wachtwoord, om toegang tot TaskFreak! te verkrijgen',
    'username'          => 'Gebruikersnaam',
    'password'          => 'Wachtwoord',
    'password_confirm'  => '(Bevestig)',
    'auto_login'        => 'Onthoud mij op deze computer',
    'password_legend'   => 'Geef alleen een wachtwoord op (en bevestig), als u dit wilt wijzigen.',
    'enabled_label'     => 'Account is geactiveerd',
	'login_signup'		=> 'Nog geen lid? Vraag hier een account aan',
	'account_created'	=> 'Aangemaakt op',
	'account_disabled'	=> 'Account is uitgeschakeld!',
	'state_us_only'		=> 'alleen voor leden uit VS'
);

// knoppen
$GLOBALS['langButton'] = array(
    'add'               => 'Aanmaken',
	'add_account'		=> 'Verzenden',
    'update'            => 'Wijzigingen opslaan',
    'cancel'            => 'Wijzigingen annuleren',
    'reset'             => 'Opnieuw',
    'back'              => 'Terug naar lijst'
);


// foutmeldingen en informatieberichten
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Gegevens niet gevonden, of toegang geweigerd',
    'denied'                    => 'Toegang geweigerd!',
    'project_delete'            => 'Verwijder project',
    'project_delete_confirm'    => 'Dit project en haar taken werkelijk verwijderen?',
    'project_delete_ok'         => 'Project verwijderd',
    'project_delete_no'         => 'Project kan niet worden verwijderd!',
    'task_edit'				    => 'Bewerk deze taak',
    'task_delete'			    => 'Verwijder deze taak',
    'task_delete_confirm'	    => 'Deze taak werkelijk verwijderen?',
	'error_no_title'		    => 'Geef alstublieft een titel op!',
	'done_deleted'			    => 'Taak verwijderd!',
	'done_status'			    => 'Status van taak bijgewerkt',
	'done_updated'			    => 'Taak bijgewerkt!',
	'done_added'			    => 'Taak aangemaakt!',
	'done_comment_added'		=> 'Bijdrage geplaatst!',
	'done_comment_updated'		=> 'Bijdrage bijgewerkt!',
	'done_comment_deleted'		=> 'Bijdrage verwijderd!',
	'operation_failed'			=> 'Bewerking mislukt!',
	'purge_all'				    => 'Opschonen (verwijder oude taken) bij alle projecten',
	'purge_all_confirm'		    => 'Werkelijk oude taken bij alle projecten verwijderen?',
	'delete_all'			    => 'Verwijder alle projecten (alle taken)',
	'delete_all_confirm'	    => 'Werkelijk alle taken van alle projecten verwijderen?',
	'purge_one'				    => 'Opschonen (verwijder oude taken)',
	'purge_one_confirm'		    => 'Werkelijk oude taken bij dit project verwijderen?',
	'delete_one'			    => 'Verwijder het gehele project',
	'delete_one_confirm'	    => 'Werkelijk dit project verwijderen?',
	'no_task_found'			    => 'Geen taak gevonden die aan uw criteria voldoet',
	'no_project_found'		    => 'Geen project gevonden',
	'create_task'			    => 'Klik hier om te proberen er een aan te maken',
	'no_project_found_1'	    => "Allemamachies! Kan geen project vinden!!!",
	'no_project_found_2'	    => 'Misschien helpt het als u eerst een taak aanmaakt. Misschien.',
	'close_window'			    => 'Sluit dit venster',
    'session_expired'           => 'Sessie is verlopen',
	'information_saved'			=> 'Informatie succesvol opgeslagen',
	'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Geen taken voor vandaag',
    'error_login'   => 'Inloggen mislukt'
);


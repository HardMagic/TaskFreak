<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Tobias Frasch <frasch@starsolutions.de>                     *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'de'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Aufgaben',
	'print_list'		=> 'Druckansicht',
	'new_todo'			=> 'Neue Aufgabe',
	'view'				=> 'Anzeige',
	'all_projects'		=> 'Alle Projekte',
	'future_tasks'		=> 'Kommende Aufgaben',
	'past_tasks'		=> 'Abgeschlossene Aufgaben',
	'my_tasks'			=> 'Meine Aufgaben',
	'all_tasks'		    => 'Alle Aufgaben',
	'all_contexts'		=> 'Alle Kategorien',
	'all_users' 		=> 'Alle Benutzer',
	'reload'			=> 'Neu laden',
	'manage'			=> 'Verwalten',
	'projects'			=> 'Projekte',
	'users' 			=> 'Benutzer',
	'preferences'		=> 'Mein Profil',
	'settings'			=> 'Systemeinstellungen',
	'login'				=> 'Anmelden',
	'logout'			=> 'Abmelden',
	'warning'			=> 'Warnung',
	'warning_install'	=> 'Der Installationsordner existiert noch. Sie sollten ihn aus Sicherheitsgr&uuml;nden l&ouml;schen'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Priorit&auml;t',
	'context'			=> 'Kategorie',
	'deadline'			=> 'Deadline',
	'project'			=> 'Projekt',
	'tasks'		    	=> 'Aufgaben',
	'title'			    => 'Titel',
	'description'		=> 'Beschreibung',
	'user'				=> 'Benutzer',
	'visibility'		=> 'Sichtbarkeit',
	'private'			=> 'Privat',
	'internal'			=> 'Intern',
	'public'			=> '&Ouml;ffentlich',
	'status'			=> 'Status',
	'create'			=> 'Verursachen',
	'save'				=> 'Speichern',
	'cancel'			=> 'Abbrechen',
	'reset'	    		=> 'Formular zur&uuml;cksetzen',
	'close'				=> 'Schlie&szlig;en',
	'edit'				=> '&Auml;ndern',
	'delete'			=> 'L&ouml;schen',
	'new'				=> 'Neu',
	'project_new'		=> 'Neues Projekt?',
	'project_list'		=> 'Liste zeigen',
	'compulsory_legend'	=> 'Felder in <span class="compulsory">roter Farbe</span> sind Pflichtfelder.',
	'list_comments'	    => 'Komm.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'			=> 'Beschreibung',
	'description_none'			=> 'keine Beschreibung vorhanden',
	'tab_comments'				=> 'Kommentare',
	'comments_by'				=> 'von',
	'comments_none'			    => 'kein Kommentar vorhanden',
	'comments_no_access'		=> 'Kommentare sind vertraulich',
	'comments_new'				=> 'ersten Kommentar schreiben',
	'comments_reply'			=> 'antworten',
	'comments_edit'			    => '&auml;ndern',
	'comments_delete'			=> 'l&ouml;schen',
	'comments_delete_confirm'	=> 'Kommentar wirklich l&ouml;schen?',
	'tab_history'				=> 'Verlauf',
	'history_date'      		=> 'Datum',
	'history_user'      		=> 'Benutzer',
	'history_what'      		=> 'Aktion'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'Tag',
	'days'				=> 'Tage',
	'help'				=> 'z.B. morgen, 12. April'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekt',
    'projects'          => 'Projekte',
    'name'              => 'Name',
    'description'       => 'Beschreibung',
    'position'          => 'Rang',
    'members'           => 'Mitglieder',
    'members_legend'    => 'Projektmitglieder',
    'status'            => 'Status',
    'action'            => 'Aktion',
    'project_history'   => 'Zeige Aufgabenhistorie',
    'remove_confirm'    => 'Wirklich vom Projekt entfernen?',
    'user_add_legend'   => 'Einen Benutzer zu diesem Projekt hinzuf&uuml;gen',
    'user_add_button'   => 'Benutzer zu Projekt hinzuf&uuml;gen',
	'user_no_project'   => 'Geh&ouml;rt zu keinem Projekt',
	'user_added_ok'		=> 'Benutzer erfolgreich zum Projekt hinzugef&uuml:gt.',
	'user_added_err'	=> 'Der Benutzer ist entweder schon Mitglied oder er ist nicht verfügbar.',
	'user_removed_ok'	=> 'Benutzer aus Projekt entfernt.',
	'user_removed_err'	=> 'Benutzer kann nicht entfernt werden oder wurde bereits entfernt.',
	'user_position_ok'	=> 'Benutzer-Rang erfolgreich aktualisiert.',
	'project_info'		=> 'Projektinfo',
	'history_date'      => 'Datum',
    'history_user'      => 'Benutzer',
    'history_what'      => 'Aktion',
	'action_save_ok'	=> 'Projektdetails aktualisiert!',
	'action_added_ok'	=> 'Projekt erstellt!',
	'action_status_ok'	=> 'Projektstatus aktualisiert!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Pers&ouml;nliche Informationen',
    'user'              => 'Benutzer',
    'name'              => 'Name',
    'title'             => 'Titel',
    'first_name'        => 'Vorname',
    'middle_name'       => '2. Vorname',
    'last_name'         => 'Nachname',
    'address'           => 'Adresse',
    'location'          => 'Herkunft',
    'city'              => 'Stadt',
    'state'             => 'Bundesland',
    'country'           => 'Land',
    'email'             => 'E-Mail',
    'position'          => 'Rang',
	'last_login'        => 'Letzter Login',
	'last_login_from'	=> 'Von IP',
	'logout_goodbye'	=> 'Sie wurden abgemeldet. Auf wiedersehen.',
	'logout_login'		=> 'Hier zum Anmelden klicken',
    'action'            => 'Aktion',
    'delete_confirm'    => 'Diesen Benutzer wirklich l&ouml;schen?',
    'enable_confirm'    => 'Diesen Benutzer wirklich aktivieren?',
    'disable_confirm'   => 'Diesen Benutzer wirklich deaktivieren?',
    'account'           => 'Benutzerdaten',
    'account_legend'    => 'Bitte setzen Sie einen Benutzernamen und ein Passwort f&uuml;r den Zugang zu Task Freak!',
    'username'          => 'Benutzername',
    'password'          => 'Passwort',
    'password_confirm'  => '(Wiederholung)',
    'auto_login'        => 'Auf diesem Computer eingeloggt bleiben.',
    'password_legend'   => 'Geben Sie nur ein Passwort (mit Wiederholung) ein wenn sie es &auml;ndern wollen.',
    'enabled_label'     => 'Zugang ist aktiviert.',
	'login_signup'		=> 'Kein Mitglied? Beantragen Sie Ihren Zugang hier',
	'account_created'	=> 'Erstellt am',
	'account_disabled'	=> 'Benutzerkonto ist deaktiviert!',
	'state_us_only'	=> 'nur für US-Bürger'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Erstellen',
	'add_account'		=> 'Abschicken',
    'update'            => '&Auml;nderungen speichern',
    'cancel'            => '&Auml;nderungen verwerfen',
    'reset'             => 'Formular zur&uuml;cksetzen',
    'back'              => 'Zur&uuml;ck zur Liste'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'		=> 'Daten wurden nicht gefunden oder der Zugriff verweitert',
    'denied'					=> 'Zugriff verweigert!',
    'project_delete'			=> 'Projekt l&ouml;schen',
    'project_delete_confirm'	=> 'Wirklich dieses Projekt mit allen Aufgaben l&ouml;schen?',
    'project_delete_ok'			=> 'Projekt gel&ouml;scht',
    'project_delete_no'			=> 'Projekt kann nicht gel&ouml;scht werden!',
    'task_edit'					=> '&Auml;ndere Aufgabe',
    'task_delete'			    => 'L&ouml;sche Aufgabe',
    'task_delete_confirm' 		=> 'Diese Aufgabe wirklich l&ouml;schen?',
	'error_no_title'		  	=> 'Bitte geben Sie einen Titel ein!',
	'done_deleted'			  	=> 'Aufgabe gel&ouml;scht!',
	'done_status'			    => 'Aufgabenstatus ge&auml;ndert',
	'done_updated'			  	=> 'Aufgabe geandert!',
	'done_added'			    => 'Aufgabe erstellt!',
	'done_comment_added'		=> 'Kommentar hinzugef&uuml;gt!',
	'done_comment_updated'		=> 'Kommentar ge&auml;ndert!',
	'done_comment_deleted'		=> 'Kommentar gel&ouml;scht!',
	'operation_failed'			=> 'Operation fehlgeschlagen!',
	'purge_all'				    => 'Alte Aufgaben aller Projekte l&ouml;schen',
	'purge_all_confirm'		    => 'Die alten Aufgaben aller Projekte wirklich l&ouml;schen?',
	'delete_all'			    => 'Alle Projekte mit allen Aufgaben l&ouml;schen',
	'delete_all_confirm'	    => 'Wirklich alle Projekte mit allen Aufgaben l&ouml;schen?',
	'purge_one'				    => 'Alte Aufgaben l&ouml;schen',
	'purge_one_confirm'		    => 'Die alten Aufgaben von diesem Projekt wirklich l&ouml;schen?',
	'delete_one'			   	=> 'das ganze Projekt l&ouml;schen',
	'delete_one_confirm'	    => 'Dieses Projekt wirklich l&ouml;schen?',
	'no_task_found'				=> 'keine Aufgabe entspricht ihren Kriterien',
	'no_project_found'		    => 'kein Projekt gefunden',
	'create_task'			    => 'Klicken Sie hier um eines zu erstellen',
	'no_project_found_1'	    => 'Mist! Es konnte Projekt gefunden werden.',
	'no_project_found_2'	    => 'Wahrscheinlich m&uuml;ssen Sie eine erste Aufgabe erstellen...',
	'close_window'			    => 'diese Fenster schliessen',
	'session_expired'			=> 'Sitzung abgelaufen',
	'clock_start'				=> 'Timer starten',
    'clock_stop'				=> 'Timer stoppen',
    'clock_change'				=> 'Timer bearbeiten',
	'information_saved'			=> 'Eingaben erfolgreich gespeichert',
	'confirm_status_close'		=> 'Diese Aufgabe wirklich schließen?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Keine Aufgaben für heute',
    'error_login'   => 'Authentifizierung fehlgeschlagen'
);
?>

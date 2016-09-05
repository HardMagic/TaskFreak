<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array (
	'jscalendar'	=> 'it'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Task',
    'print_list'        => 'Versione stampabile',
	'new_todo'			=> 'Nuovo TODO',
	'view'				=> 'Vedi',
	'all_projects'		=> 'Tutti i Progetti',
	'future_tasks'		=> 'Task Futuri',
	'past_tasks'		=> 'Task Passati',
    'my_tasks'          => 'I miei Task',
	'all_tasks'			=> 'Tutti i Task',
	'all_contexts'		=> 'Tutti i Contesti',
	'all_users' 		=> 'Tutti gli Utenti',
	'reload'			=> 'Ricarica',
	'manage'			=> 'Gestisci',
	'projects'			=> 'Progetti',
	'users' 			=> 'Utenti',
    'preferences'       => 'Il Mio Profilo',
    'settings'          => 'Preferenze di sistema',
	'login'				=> 'Login',
	'logout'			=> 'Logout',
	'warning'			=> 'Warning',
	'warning_install'	=> 'La directory di installazione esiste ancora, é necessario cancellarla per motivi di sicurezza'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Priorita\'',
	'context'			=> 'Contesto',
	'deadline'			=> 'Data Termine',
	'project'			=> 'Progetto',
	'tasks'				=> 'Tasks',
	'title'				=> 'Titolo',
	'description'		=> 'Descrizione',
	'user'              => 'Utente',
	'visibility'		=> 'Visibilita\'', //-TODO-
    'private'           => 'Privato',
    'internal'          => 'Interno',
    'public'            => 'Pubblico',
	'status'			=> 'Stato',
	'create'			=> 'Crea',
	'save'				=> 'Salva',
	'cancel'			=> 'Annulla',
	'reset'				=> 'Resetta i campi',
	'close'             => 'Chiudi',
    'edit'              => 'Modifica',
    'delete'            => 'Elimina',
	'new'				=> 'Nuovo',
	'project_new'		=> 'Nuovo Progetto?',
	'project_list'		=> 'Mostra la lista',
	'compulsory_legend' => 'I campi in <span class="compulsory">rosso</span> sono obbligatori.',
	'list_comments'		=> 'Com.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'Descrizione',
	'description_none'	=> 'Nessuna descrizione',
	'tab_comments'		=> 'Commenti',
	'comments_by'		=> 'da',
	'comments_none'		=> 'Nessun commento presente',
	'comments_no_access'	=> 'I commenti sono riservati',
	'comments_new'		=> 'Scrivi il primo commento',
	'comments_reply'	=> 'Rispondi',
	'comments_edit'		=> 'Modifica',
	'comments_delete'	=> 'Elimina',
	'comments_delete_confirm'	=> 'Vuoi davvero cancellare il commento?',
	'tab_history'		=> 'Cronologia',
    'history_date'      => 'Data',
    'history_user'      => 'Utente',
    'history_what'      => 'Azione'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'giorno',
	'days'				=> 'giorni',
	'help'				=> 'ad es. oggi, domani, 12 apr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Progetto',
    'projects'          => 'Progetti',
    'name'              => 'Nome',
    'description'       => 'Descrizione',
    'position'          => 'Posizione',
    'members'           => 'Membri',
    'members_legend'    => 'Membri del Progetto',
    'status'            => 'Stato',
    'action'            => 'Azione',
    'project_history'   => 'Visualizza la cronologia degli stati',
    'remove_confirm'    => 'Confermi la rimozione dal progetto?',
    'user_add_legend'   => 'Aggiungi un utente a questo progetto',
    'user_add_button'   => 'Aggiungi un utente al progetto',
	'user_no_project'   => 'Non e\' assegnato a nessun progetto',
	'user_added_ok'		=> 'Utente aggiunto al progetto',
	'user_added_err'	=> 'L\'Utente appartiene già al progetto o non é disponibile',
	'user_removed_ok'	=> 'Utente rimosso dal progetto!',
	'user_removed_err'	=> 'L\'utente non può essere rimosso dal progetto o é già stato rimosso',
	'user_position_ok'	=> 'La posizione dell\'utente é stata aggiornata',
	'project_info'		=> 'Informazioni sul progetto',
	'history_date'      => 'data',
    'history_user'      => 'utente',
	'history_what'      => 'azione',
	'action_save_ok'	=> 'I dettagli del progetto sono stati aggiornati!',
	'action_added_ok'	=> 'Il progetto é stato creato!',
	'action_status_ok'	=> 'Lo stato del progetto è stato aggiornato!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Informazioni personali',
    'user'              => 'Utente',
    'name'              => 'Nome',
    'title'             => 'Titolo',
    'first_name'        => 'Nome',
    'middle_name'       => 'Secondo nome',
    'last_name'         => 'Cognome',
    'address'           => 'Indirizzo',
    'location'          => 'Ubicazione',
    'city'              => 'Citta\'',
    'state'             => 'Provincia',
    'country'           => 'Nazione',
    'email'             => 'Email',
    'position'          => 'Livello',
	'last_login'        => 'Ultimo accesso',
	'last_login_from'	=> 'Da',
	'logout_goodbye'	=> 'Ora non sei più loggato. Arrivederci!',
	'logout_login'		=> 'Clicca qui per effettuare il login',
    'action'            => 'Azione',
    'delete_confirm'    => 'Confermi la cancellazione di questo utente?',
    'enable_confirm'    => 'Confermi l\'abilitazione di questo utente?',
    'disable_confirm'   => 'Confermi la disabilitazione di questo utente?',
    'account'           => 'Credenziali di accesso',
    'account_legend'    => 'Scegli un username ed una password per accedere al Sistema!',
    'username'          => 'Username',
    'password'          => 'Password',
    'password_confirm'  => '(conferma)',
    'auto_login'        => 'Ricorda i miei dati di accesso su questo computer',
    'password_legend'   => 'Inserisci una password (e confermala) solo se vuoi cambiarla.',
    'enabled_label'     => 'Account attivo',
	'login_signup'		=> 'Non sei ancora registrato? Richiedi un account qui',
	'account_created'	=> 'Creato il',
	'account_disabled'	=> 'L\'account é disabilitato!',
	'state_us_only'		=> 'solo per gli utenti americani'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Crea',
	'add_account'		=> 'Invia',
    'update'            => 'Salva le modifiche',
    'cancel'            => 'Anulla le modifiche',
    'reset'             => 'Resetta i campi',
    'back'              => 'Torna alla lista'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Dato non trovato o Accesso negato',
    'denied'                    => 'Accesso negato!',
    'project_delete'            => 'Cancella il progetto',
    'project_delete_confirm'    => 'Confermi la cancellazione del progetto e di tutti i suoi tasks?',
    'project_delete_ok'         => 'Progetto cancellato',
    'project_delete_no'         => 'Questo progetto non può essere cancellato!',
    'task_edit'				    => 'Modifica questo task',
    'task_delete'			    => 'Cancella questo task',
    'task_delete_confirm'	    => 'Confermi la cancellazione di questo task?',
	'error_no_title'		    => 'Inserisci un titolo!',
	'done_deleted'			    => 'Task cancellato!',
	'done_status'			    => 'Stato del task aggiornato!',
	'done_updated'			    => 'Task aggiornato!',
	'done_added'			    => 'Task creato!',
	'done_comment_added'		=> 'Nuovo commento!',
	'done_comment_updated'		=> 'Commento aggiornato!',
	'done_comment_deleted'		=> 'Comment cancellato!',
	'operation_failed'			=> 'Operazione fallita!',
	'purge_all'				    => 'Elimina i vecchi task per tutti i progetti',
	'purge_all_confirm'		    => 'Confermi l\'eliminazione dei vecchi task per tutti i progetti?',
	'delete_all'			    => 'Elimina tutti i progetti (e tutti i loro tasks)',
	'delete_all_confirm'	    => 'Confermi l\'eliminazione di tutti i task e di tutti i progetti?',
	'purge_one'				    => 'Elimina (cancella i vecchi task)',
	'purge_one_confirm'		    => 'Confermi l\'eliminazione dei vecchi task di questo progetto?',
	'delete_one'			    => 'Elimina tutto il progetto',
	'delete_one_confirm'	    => 'Confermi l\'eliminazione di questo progetto?',
	'no_task_found'			    => 'Nessun task corrisponde ai criteri selezionati',
	'no_project_found'		    => 'Non ci sono progetti attivi',
	'create_task'			    => 'Clicca qui per creare un nuovo Task',
	'no_project_found_1'	    => "Non riesco a trovare un progetto!!!",
	'no_project_found_2'	    => 'Probabilmente devi creare prima un Task, lo sai?',
	'close_window'			    => 'Chiudi questa finestra',
    'session_expired'           => 'La sessione e\' scaduta!',
	'information_saved'			=> 'Le informazioni sono state salvate',
	'clock_start'				=> 'Avvia timer',
    'clock_stop'				=> 'Ferma timer',
    'clock_change'				=> 'Modifica timer',
	'confirm_status_close'		=> 'Vuoi davvero chiudere questo task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Nessun Task per oggi',
    'error_login'   => 'Autenticazione fallita'
);

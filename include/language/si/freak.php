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
	'task'				=> 'Opravilo',
    'print_list'        => 'Pripravi za tiskanje',
	'new_todo'			=> 'Novo opravilo',
	'view'				=> 'Pogled',
	'all_projects'		=> 'Vsi projekti',
	'future_tasks'		=> 'Prihodnja opravila',
	'past_tasks'		=> 'Končana opravila',
    'my_tasks'          => 'Moja opravila',
	'all_tasks'			=> 'Vsa opravila',
	'all_contexts'		=> 'Vsi konteksti',
	'all_users' 		=> 'Vsi uporabniki',
	'reload'			=> 'Naloži znova',
	'manage'			=> 'Upravljaj',
	'projects'			=> 'Projekti',
	'users' 			=> 'Uporabniki',
    'preferences'       => 'Moj profil',
    'settings'          => 'Sistemske nastavitve',
	'login'				=> 'Prijava',
	'logout'			=> 'Odjava',
	'warning'			=> 'Opozorilo',
	'warning_install'	=> 'Install direktorij še vedno obstaja, zardi varnostnih razlogov ga izbrišite'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioriteta',
	'context'			=> 'Kontekst',
	'deadline'			=> 'Končni rok',
	'project'			=> 'Projekt',
	'tasks'				=> 'Opravila',
	'title'				=> 'Naziv',
	'description'		=> 'Opis',
    'user'              => 'Uporabnik',
    'visibility'        => 'Vidnost',
    'private'           => 'privatno',
    'internal'          => 'interno',
    'public'            => 'javno',
	'status'			=> 'Status',
	'create'			=> 'Ustvari',
	'save'				=> 'Shrani',
	'cancel'			=> 'Prekliči',
	'reset'				=> 'Ponastavi obrazec',
    'close'             => 'zapri',
    'edit'              => 'uredi',
    'delete'            => 'izbriši',
	'new'				=> 'Nov',
	'project_new'		=> 'nov projekt?',
	'project_list'		=> 'prikaži seznam',
	'compulsory_legend' => 'Polja označena z <span class="compulsory">rdečo</span> so obvezna.',
	'list_comments'		=> 'Kom.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'opis',
	'description_none'	=> 'brez opisa',
	'tab_comments'		=> 'komentarji',
	'comments_by'		=> 'od',
	'comments_none'		=> 'ni še oddanih komentarjev',
	'comments_no_access'	=> 'komentarji so zaupni',
	'comments_new'		=> 'objavi prvi komentar',
	'comments_reply'	=> 'odgovri',
	'comments_edit'		=> 'uredi',
	'comments_delete'	=> 'izbriši',
	'comments_delete_confirm'	=> 'resnično izbrišem komentar?',
	'tab_history'		=> 'zgodovina',
    'history_date'      => 'datum',
    'history_user'      => 'uporabnik',
    'history_what'      => 'dejanje'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'dan',
	'days'				=> 'dni',
	'help'				=> 'npr. danes, jutri, 12 apr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekt',
    'projects'          => 'Projekti',
    'name'              => 'Ime',
    'description'       => 'Opis',
    'position'          => 'Lega',
    'members'           => 'Člani',
    'members_legend'    => 'Projektni člani',
	'status'            => 'Status',
    'action'            => 'Dejanje',
    'project_history'   => 'Preglej zgodovino spremembe statusa',
    'remove_confirm'    => 'resnično odstranim iz projekta?',
    'user_add_legend'   => 'Dodaj uporabnika k temu projektu',
    'user_add_button'   => 'Dodaj uporabnika k projektu',
	'user_no_project'   => 'Ne pripada nobenemu projektu',
	'user_added_ok'		=> 'Član uspešno dodan k projektu',
	'user_added_err'	=> 'Član že pripada projektu ali pa ni dosegljiv',
	'user_removed_ok'	=> 'Član odstranjen iz projekta!',
	'user_removed_err'	=> 'Član ne more biti odstranjen ali pa je že odstranjen iz projekta',
	'user_position_ok'	=> 'Lega člana(ov) uspešno posodobljena',
	'project_info'		=> 'Informacije o projektu',
	'history_date'      => 'datum',
    'history_user'      => 'uporabnik',
	'history_what'      => 'dejanje',
	'action_save_ok'	=> 'Projektne podrobnosti so posodobljene!',
	'action_added_ok'	=> 'Projekt je kreiran!',
	'action_status_ok'	=> 'Projektni status je posodbljen!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Osebni podatki',
    'user'              => 'Uporabnik',
    'name'              => 'Ime',
    'title'             => 'Naziv',
    'first_name'        => 'Ime',
    'middle_name'       => 'Drugo ime',
    'last_name'         => 'Priimek',
    'address'           => 'Naslov',
    'location'          => 'Lokacija',
    'city'              => 'Mesto',
    'state'             => 'Dežela',
    'country'           => 'Država',
    'email'             => 'E-pošta',
    'position'          => 'Nivo',
	'last_login'        => 'Zadnja prijava',
	'last_login_from'	=> 'od',
	'logout_goodbye'	=> 'Sedaj ste odjavljeni. Nasvidenje.',
	'logout_login'		=> 'Kliknite tukaj za prijavo',
    'action'            => 'Dejanje',
    'delete_confirm'    => 'resnično izbrišem tega uporabnika?',
    'enable_confirm'    => 'resnično omogočim tega uporabnika?',
    'disable_confirm'   => 'resnično onemogočim tega uporabnika?',
    'account'           => 'Poverilnice računa',
    'account_legend'    => 'Prosim izberi uporabniško ime in geslo za dostop do TaskFreak!',
    'username'          => 'Uprabniško ime',
    'password'          => 'Geslo',
    'password_confirm'  => '(potrdi)',
    'auto_login'        => 'zapomni se me na tem računalniku',
    'password_legend'   => 'Vnesi geslo (in potrdi samo če ga želiš spremeniti.',
	'enabled_label'     => 'Račun je veljaven',
	'login_signup'		=> 'Niste član? Zahtevajte račun tukaj',
	'account_created'	=> 'Ustvarjen',
	'account_disabled'	=> 'Račun je onemogočen!',
	'state_us_only'		=> 'samo za člane iz ZDA'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Ustvari',
	'add_account'		=> 'Pošlji',
    'update'            => 'Shrani spremembe',
    'cancel'            => 'Prekliči spremembe',
    'reset'             => 'Ponastavi obrazec',
    'back'              => 'Nazaj na seznam'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Podatki niso najdeni ali pa je onemogočen dostop',
    'denied'                    => 'Onemgočen dostop!',
    'project_delete'            => 'Izbriši projekt',
    'project_delete_confirm'    => 'Resnično izbrišem projekt in opravke?',
    'project_delete_ok'         => 'Projekt izbrisan',
    'project_delete_no'         => 'Projekt ne more biti izbrisan!',
    'task_edit'				    => 'Uredi opravek',
    'task_delete'			    => 'Izbriši opravek',
    'task_delete_confirm'	    => 'Resnično izbrišem opravek?',
	'error_no_title'		    => 'prosim vnesi naziv!',
	'done_deleted'			    => 'opravek izbrisan!',
	'done_status'			    => 'status opravka posodbljen!',
	'done_updated'			    => 'opravek posodobljen!',
	'done_added'			    => 'opravek ustvarjen!',
	'done_comment_added'		=> 'komentar dodan!',
	'done_comment_updated'		=> 'komentar posodobljen!',
	'done_comment_deleted'		=> 'komentar izbrisan!',
	'operation_failed'			=> 'operacija neuspešna!',
	'purge_all'				    => 'počisti (izbriši stare opravke) vse projekte',
	'purge_all_confirm'		    => 'resnično izbrišem stare opravke iz vseh projektov?',
	'delete_all'			    => 'izbriši vse projekte (vse opravke)',
	'delete_all_confirm'	    => 'resnično izbrišem vse opravke iz vseh projektov?',
	'purge_one'				    => 'počisti (izbriši stare opravke)',
	'purge_one_confirm'		    => 'resnično izbrišem vse opravke iz projekta?',
	'delete_one'			    => 'izbrišem celoten projekt',
	'delete_one_confirm'	    => 'resnično izbrišem projekt?',
	'no_task_found'			    => 'noben opravek ne odgovarja vašim kriterijem',
	'no_project_found'		    => 'noben projekt ni najden',
	'create_task'			    => 'Klikni tukaj za ustvarjanje opravka',
	'no_project_found_1'	    => "Porka motorka! Ne najdem projekta!!!",
	'no_project_found_2'	    => 'Najprej moraš ustvariti opravek',
	'close_window'			    => 'zapri okno',
    'session_expired'           => 'Seja je potekla',
    'clock_start'				=> 'zaženi časomerilec',
    'clock_stop'				=> 'ustavi časomerilec',
    'clock_change'				=> 'spremeni časomerilec',
	'information_saved'			=> 'Informacija uspešno shranjena',
	'confirm_status_close'		=> 'Resnično zaprem opravek?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Ni opravkov za danes',
    'error_login'   => 'Overovitev neuspešna'
);

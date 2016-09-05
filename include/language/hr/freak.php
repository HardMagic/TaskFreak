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
	'task'				=> 'Zadatak',
    'print_list'        => 'Za print',
	'new_todo'			=> 'Novi zadatak',
	'view'				=> 'Pregled',
	'all_projects'		=> 'Projetkti',
	'future_tasks'		=> 'Naglašeni zadatci',
	'past_tasks'		=> 'Prošli zadatci',
    'my_tasks'          => 'Moji Zadatci',
	'all_tasks'			=> 'Svi zadatci',
	'all_contexts'		=> 'Sve opcije',
	'all_users' 		=> 'Svi korisnici',
	'reload'			=> 'Osviježi',
	'manage'			=> 'Odradi',
	'projects'			=> 'Projekti',
	'users' 			=> 'Korisnici',
    'preferences'       => 'Moj profil',
    'settings'          => 'Sistemske postavke',
	'login'				=> 'Ulaz',
	'logout'			=> 'Izlaz',
	'warning'			=> 'Upozorenje!',
	'warning_install'	=> 'Instalacijska mapa postoji maknite ju'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioritet',
	'context'			=> 'Opcija',
	'deadline'			=> 'Rok',
	'project'			=> 'Projekt',
	'tasks'				=> 'Zadatak',
	'title'				=> 'Naslov',
	'description'		=> 'Opis',
    'user'              => 'Korisnik',
    'visibility'        => 'Vidljivost',
    'private'           => 'privatno',
    'internal'          => 'interno',
    'public'            => 'javno',
	'status'			=> 'Status',
	'create'			=> 'Napravi',
	'save'				=> 'Spremi',
	'cancel'			=> 'Prekid',
	'reset'				=> 'Resetiraj',
    'close'             => 'zatvori',
    'edit'              => 'izmjeni',
    'delete'            => 'obriši',
	'new'				=> 'novo',
	'project_new'		=> 'novi projekt?',
	'project_list'		=> 'pokaži listu',
	'compulsory_legend' => 'Polja u <span class="compulsory">Crvenom</span> su obvezna.',
	'list_comments'		=> 'Komentar'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'opis',
	'description_none'	=> 'bez opisa',
	'tab_comments'		=> 'kementar',
	'comments_by'		=> 'sa',
	'comments_none'		=> 'nema komentara',
	'comments_no_access'	=> 'komentari su povrijerljivi',
	'comments_new'		=> 'dadaj prvi komentar',
	'comments_reply'	=> 'novi komentar',
	'comments_edit'		=> 'izmjeni',
	'comments_delete'	=> 'izbriši',
	'comments_delete_confirm'	=> 'stvarno obrisati komentar?',
	'tab_history'		=> 'povijest',
    'history_date'      => 'datum',
    'history_user'      => 'korisnik',
    'history_what'      => 'akcija'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'dan',
	'days'				=> 'dana',
	'help'				=> 'primjer, danas u 12 sati'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekt',
    'projects'          => 'Projekti',
    'name'              => 'Ime',
    'description'       => 'Opis',
    'position'          => 'Pozicija',
    'members'           => 'Clanovi',
    'members_legend'    => 'clanovi projekta',
	'status'            => 'Status',
    'action'            => 'Akcija',
    'project_history'   => 'Pogledati status povijesti',
    'remove_confirm'    => 'zaista želite maknuti iz projekata?',
    'user_add_legend'   => 'dodati korisnika projektu',
    'user_add_button'   => 'Dodaj korisnika',
	'user_no_project'   => 'Pripada projektu',
	'user_added_ok'		=> 'Korisnik uspješno dodan projektu',
	'user_added_err'	=> 'Korisnik vec dodan projektu ili je nedostupan',
	'user_removed_ok'	=> 'Korisnik uspješno izbrisan iz projekta!',
	'user_removed_err'	=> 'Korisnik vec izbrisan iz projekta ili je nedostupan!',
	'user_position_ok'	=> 'Korisnicka pozicija izmjenjena',
	'project_info'		=> 'O projektu',
	'history_date'      => 'datum',
    'history_user'      => 'korisnik',
	'history_what'      => 'akcija',
	'action_save_ok'	=> 'Upješno izmjenjen projekat!',
	'action_added_ok'	=> 'Projekt kreiran',
	'action_status_ok'	=> 'Projkt izmjenjena statusa!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Osobne informacije',
    'user'              => 'Korisnik',
    'name'              => 'Ime',
    'title'             => 'Titula',
    'first_name'        => 'Ime',
    'middle_name'       => 'Drugo ime',
    'last_name'         => 'Prezime',
    'address'           => 'Adresa',
    'location'          => 'Lokacija',
    'city'              => 'Grad',
    'state'             => 'Pokraina',
    'country'           => 'Država',
    'email'             => 'Email',
    'position'          => 'Razina',
	'last_login'        => 'Zadnji ulaz',
	'last_login_from'	=> 'od',
	'logout_goodbye'	=> 'Uspješno ste odjavljeni!',
	'logout_login'		=> 'Ulaz',
    'action'            => 'Akcija',
    'delete_confirm'    => 'Izbrisati korisnika?',
    'enable_confirm'    => 'izmijeniti korisnika?',
    'disable_confirm'   => 'onemoguciti korisnika?',
    'account'           => 'Postavke racuna',
    'account_legend'    => 'Odaberite korisnicko ime i lozinka!',
    'username'          => 'korisnicko ime',
    'password'          => 'Lozinka',
    'password_confirm'  => '(potvrdi)',
    'auto_login'        => 'zapamti me na ovom racunalu',
    'password_legend'   => 'Unesi lozinku (i potvrdi) ako je želite promijeniti.',
	'enabled_label'     => 'Racun omogucen',
	'login_signup'		=> 'Niste clan prijavite se ovdje ',
	'account_created'	=> 'Kreiran ',
	'account_disabled'	=> 'Racun onemogucen!',
	'state_us_only'		=> 'US države'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Dodaj',
	'add_account'		=> 'Potvrda',
    'update'            => 'Spremi',
    'cancel'            => 'Poništi',
    'reset'             => 'Reset ',
    'back'              => 'Natrag na listu'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Podatci nisu nadeni ili su nedostupni',
    'denied'                    => 'Zabranjeno!',
    'project_delete'            => 'Izbriši projekt',
    'project_delete_confirm'    => 'Zaista obrisati projekt?',
    'project_delete_ok'         => 'Projekt izbrisan',
    'project_delete_no'         => 'Project nemože biti izbrisan!',
    'task_edit'				    => 'Izmijeni zadatak',
    'task_delete'			    => 'Izbriši zadatak',
    'task_delete_confirm'	    => 'Zaista izbrisati?',
	'error_no_title'		    => 'unesi naslov!',
	'done_deleted'			    => 'zadatak izbrisan!',
	'done_status'			    => 'zadatak izmjenjena statusa',
	'done_updated'			    => 'zadatak izmjenjen!',
	'done_added'			    => 'zadatak nadopunjen!',
	'done_comment_added'		=> 'komentar dodan!',
	'done_comment_updated'		=> 'komentar nadodan!',
	'done_comment_deleted'		=> 'komentar izbrisan!',
	'operation_failed'			=> 'operacija zaustavljena!',
	'purge_all'				    => 'izbriši zadatke za tekuce projekte',
	'purge_all_confirm'		    => 'zaista izbrisat zadatke za tekuce projekte',
	'delete_all'			    => 'izbriši sve projekte',
	'delete_all_confirm'	    => 'izbriši sve zadatke iz svih projekata',
	'purge_one'				    => 'izbriši stare zadatke ',
	'purge_one_confirm'		    => 'izbriši stare zadatke?',
	'delete_one'			    => 'izbriši projekte?',
	'delete_one_confirm'	    => 'izbriši projekt?',
	'no_task_found'			    => 'nema zadatka s tim kriterijem',
	'no_project_found'		    => 'nema projekata',
	'create_task'			    => 'kreiraj novi?',
	'no_project_found_1'	    => "Nemogu naci projekat",
	'no_project_found_2'	    => 'kreiraj najprije zadatak',
	'close_window'			    => 'zatvori prozor',
    'session_expired'           => 'Sesija je istekla',
    'clock_start'				=> 'pokreni timer',
    'clock_stop'				=> 'zaustavi timer',
    'clock_change'				=> 'modificiraj timer',
	'information_saved'			=> 'Informacija spremljena',
	'confirm_status_close'		=> 'Zatvoriti zadatak?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Nema zadataka za danas',
    'error_login'   => 'Autorizacija neuspjela'
);

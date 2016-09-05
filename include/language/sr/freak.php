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
	'task'				=> 'Zadaci',
    'print_list'        => 'Verzija za stampu',
	'new_todo'			=> 'Novi zadatak',
	'view'				=> 'Prikazi',
	'all_projects'		=> 'Svi projekti',
	'future_tasks'		=> 'Buduci zadaci',
	'past_tasks'		=> 'Zavrseni zadaci',
    'my_tasks'          => 'Moji zadaci',
	'all_tasks'			=> 'Svi zadaci',
	'all_contexts'		=> 'Sve oblasti',
	'all_users' 		=> 'Svi korisnici',
	'reload'			=> 'Osvezi',
	'manage'			=> 'Organizuj',
	'projects'			=> 'Projekte',
	'users' 			=> 'Korisnike',
    'preferences'       => 'Moj profil',
    'settings'          => 'Podesavanje sistema',
	'login'				=> 'Prijava',
	'logout'			=> 'Odjava',
	'warning'			=> 'Upozorenje',
	'warning_install'	=> 'Instalacioni dikrektorijum jos uvek postoji, trebali bi da ga obrisete iz sigurnosnih razloga'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioritet',
	'context'			=> 'Oblast',
	'deadline'			=> 'Krajnji rok',
	'project'			=> 'Projekat',
	'tasks'				=> 'Zadataka',
	'title'				=> 'Naslov',
	'description'		=> 'Opis',
    'user'              => 'Korisnik',
    'visibility'        => 'Vidljivost',
    'private'           => 'privatno',
    'internal'          => 'interno',
    'public'            => 'javno',
	'status'			=> 'Status',
	'create'			=> 'Kreiraj',
	'save'				=> 'Snimi',
	'cancel'			=> 'Ponisti',
	'reset'				=> 'Resetuj formular',
    'close'             => 'Zatvori',
    'edit'              => 'Izmeni',
    'delete'            => 'Obrisi',
	'new'				=> 'Novi',
	'project_new'		=> 'novi projekat?',
	'project_list'		=> 'prikazi listu',
	'compulsory_legend' => 'Polja u <span class="compulsory">crvenoj boji</span> su obavezna.',
	'list_comments'		=> 'Kom.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'opis',
	'description_none'	=> 'nema opisa',
	'tab_comments'		=> 'komentari',
	'comments_by'		=> 'od',
	'comments_none'		=> 'jos uvek nema komentara',
	'comments_no_access'	=> 'komentari su poverljivi',
	'comments_new'		=> 'posalji prvi komentar',
	'comments_reply'	=> 'odgovori',
	'comments_edit'		=> 'izmeni',
	'comments_delete'	=> 'obrisi',
	'comments_delete_confirm'	=> 'zaista obrisati komentar?',
	'tab_history'		=> 'istorija',
    'history_date'      => 'datum',
    'history_user'      => 'korisnik',
    'history_what'      => 'akcija'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'dan',
	'days'				=> 'dana',
	'help'				=> 'npr. danas, sutra, 12 apr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekat',
    'projects'          => 'Projekata',
    'name'              => 'Ime',
    'description'       => 'Opis',
    'position'          => 'Zvanje',
    'members'           => 'Clanova',
    'members_legend'    => 'Clanova projekta',
	'status'            => 'Status',
    'action'            => 'Akcija',
    'project_history'   => 'Pregled istorije izmena statusa',
    'remove_confirm'    => 'zaista izbrisati iz projekta?',
    'user_add_legend'   => 'Dodaj korisnika u ovaj projekat',
    'user_add_button'   => 'Dodaj korisnika u projekat',
	'user_no_project'   => 'Ne pripada ni jednom projektu',
	'user_added_ok'		=> 'Korisnik uspesno dodat u projekat',
	'user_added_err'	=> 'Korisnik vec pripada projektu ili nije dostupan',
	'user_removed_ok'	=> 'Korisnik izbacen iz projekta!',
	'user_removed_err'	=> 'Korisnik ne moze biti izbacen ili je vec izbacen',
	'user_position_ok'	=> 'Zvanje korisnika usposno osvezeno',
	'project_info'		=> 'Informacije o projektu',
	'history_date'      => 'datum',
    'history_user'      => 'korisnik',
	'history_what'      => 'akcija',
	'action_save_ok'	=> 'Podaci o projektu osvezeni!',
	'action_added_ok'	=> 'Projekat kreiran!',
	'action_status_ok'	=> 'Status projekta osvezen!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Licne informacije',
    'user'              => 'Korisnik',
    'name'              => 'Ime',
    'title'             => 'Zvanje',
    'first_name'        => 'Ime',
    'middle_name'       => 'Srednje ime',
    'last_name'         => 'Prezime',
    'address'           => 'Adresa',
    'location'          => 'Lokacija',
    'city'              => 'Grad',
    'state'             => 'US drzava',
    'country'           => 'Drzava',
    'email'             => 'Email',
    'position'          => 'Nivo',
	'last_login'        => 'Poslednje logovanje',
	'last_login_from'	=> 'Iz',
	'logout_goodbye'	=> 'Sada ste odjavljeni. Dovidjenja.',
	'logout_login'		=> 'Kliknite ovde za prijavu',
    'action'            => 'Akcija',
    'delete_confirm'    => 'zaista obrisati ovog korisnika?',
    'enable_confirm'    => 'zaista aktivirati ovog korisnika?',
    'disable_confirm'   => 'zaista deaktivirati ovog korisnika?',
    'account'           => 'Opcije naloga',
    'account_legend'    => 'Molim vas izaberite korisnicko ime i sifru kako biste dobili pristup za TaskFreak!',
    'username'          => 'Korisnicko ime',
    'password'          => 'Sifra',
    'password_confirm'  => '(poverljivo)',
    'auto_login'        => 'zapamti me na ovom kompjuteru',
    'password_legend'   => 'Unesite sifru (i potvrdite) samo ako zelite da je promenite.',
	'enabled_label'     => 'Nalog je aktiviran',
	'login_signup'		=> 'Niste clan? Zatrazite nalog ovde',
	'account_created'	=> 'Kreiran dana',
	'account_disabled'	=> 'Nalog je deaktiviran!',
	'state_us_only'		=> 'samo za stanovnike US-a'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Kreiraj',
	'add_account'		=> 'Posalji',
    'update'            => 'Snimi izmene',
    'cancel'            => 'Odlozi izmene',
    'reset'             => 'Resetuj izmene',
    'back'              => 'Nazad u listu'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Podaci nisu pronadjeni ili pristup odbijen',
    'denied'                    => 'Pristup odbijen!',
    'project_delete'            => 'Obrisi projekat',
    'project_delete_confirm'    => 'Zaista obrisati ovaj projekat i zadatke?',
    'project_delete_ok'         => 'Projekat obrisan',
    'project_delete_no'         => 'Projekat nemoze biti obrisan!',
    'task_edit'				    => 'Izmeni ovaj zadatak',
    'task_delete'			    => 'Obrisi ovaj zadatak',
    'task_delete_confirm'	    => 'Zaista zelite da obrisete ovaj zadatak?',
	'error_no_title'		    => 'molim vas unesite naslov!',
	'done_deleted'			    => 'zadatak obrisan!',
	'done_status'			    => 'status zadatka osvezen',
	'done_updated'			    => 'zadatak osvezen!',
	'done_added'			    => 'zadatak kreiran!',
	'done_comment_added'		=> 'komentar dodat!',
	'done_comment_updated'		=> 'komentar osvezen!',
	'done_comment_deleted'		=> 'komentar obrisan!',
	'operation_failed'			=> 'operacija neuspela!',
	'purge_all'				    => 'procisti (obrisi stare zadatke) za sve projekte',
	'purge_all_confirm'		    => 'zaista obrisati stare zadatke za sve projekte?',
	'delete_all'			    => 'obrisi sve projekte (sve zadatke)',
	'delete_all_confirm'	    => 'zaista zelite da obrisete sve zadatke iz svih projekata?',
	'purge_one'				    => 'procisti (obrisi stare zadatke)',
	'purge_one_confirm'		    => 'zaista obrisati sve zadatke iz ovog projekta?',
	'delete_one'			    => 'obrisi ceo projekat',
	'delete_one_confirm'	    => 'zaista obrisati ceo projekat?',
	'no_task_found'			    => 'ni jedan zadatak se ne poklapa sa vasim kriterijumima',
	'no_project_found'		    => 'ni jedan projekat nije pronadjen',
	'create_task'			    => 'Kliknite ovde kako biste pokusali da kreirate jedan',
	'no_project_found_1'	    => "Ah! Ne mogu da pronadjem projekat!!!",
	'no_project_found_2'	    => 'Verovatno prvo trebate da kreirate zadatak, znate',
	'close_window'			    => 'zatvori ovaj prozor',
    'session_expired'           => 'Sesija je istekla',
	'information_saved'			=> 'Informacija uspesno snimljena',
	'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Nema zadataka za danas',
    'error_login'   => 'Autentikacija nesupesna'
);

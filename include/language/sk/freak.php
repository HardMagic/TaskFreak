<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation: Jan Michalicka <webdev@jimi.sk>                               *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'sk-utf8'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Úloha',
    'print_list'        => 'Verzia pre tlač',
	'new_todo'			=> 'Nová úloha',
	'view'				=> 'Náhľad',
	'all_projects'		=> 'Všetky projekty',
	'future_tasks'		=> 'Vybaviť',
	'past_tasks'		=> 'Vybavené',
    'my_tasks'          => 'Moje úlohy',
	'all_tasks'			=> 'Všetky úlohy',
	'all_contexts'		=> 'Všetky typy',
	'all_users' 		=> 'Všetci užívatelia',
	'reload'			=> 'Obnoviť',
	'manage'			=> 'Upraviť',
	'projects'			=> 'Projekty',
	'users' 			=> 'Užívatelia',
    'preferences'       => 'Môj profil',
    'settings'          => 'Systémové nastavenia',
	'login'				=> 'Prihlásiť',
	'logout'			=> 'Odhlásiť',
	'warning'			=> 'Upozornenie',
	'warning_install'	=> 'Inštalačný adresár stále existuje, z bezpečnostných dôvodov odporúčame vymazať'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Priorita',
	'context'			=> 'Typ',
	'deadline'			=> 'Vybaviť do',
	'project'			=> 'Projekt',
	'tasks'				=> 'Úlohy',
	'title'				=> 'Názov',
	'description'		=> 'Popis',
    'user'              => 'Užívateľ',
    'visibility'        => 'Viditeľnosť',
    'private'           => 'súkromné',
    'internal'          => 'vnútorné',
    'public'            => 'verejné',
	'status'			=> 'Stav',
	'create'			=> 'Vytvoriť',
	'save'				=> 'Uložiť',
	'cancel'			=> 'Stornovať',
	'reset'				=> 'Obnoviť formulár',
    'close'             => 'zavrieť',
    'edit'              => 'upraviť',
    'delete'            => 'vymazať',
	'new'				=> 'Nový',
	'project_new'		=> 'nový projekt?',
	'project_list'		=> 'ukázať zoznam',
	'compulsory_legend' => '<span class="compulsory">Červené</span> položky sú povinné.',
	'list_comments'		=> 'Kom.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'popis',
	'description_none'	=> 'bez popisu',
	'tab_comments'		=> 'komentáre',
	'comments_by'		=> 'užívateľom',
	'comments_none'		=> 'zatiaľ bez komentárov',
	'comments_no_access'	=> 'komentáre sú dôverné',
	'comments_new'		=> 'vlož prvý komentár',
	'comments_reply'	=> 'odpovedať',
	'comments_edit'		=> 'upraviť',
	'comments_delete'	=> 'vymazať',
	'comments_delete_confirm'	=> 'skutočne vymazať komentár?',
	'tab_history'		=> 'história',
    'history_date'      => 'dátum',
    'history_user'      => 'užívateľ',
    'history_what'      => 'akcia'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'deň',
	'days'				=> 'dni',
	'help'				=> 'napr. dnes, zajtra, 12. apríla'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekt',
    'projects'          => 'Projekty',
    'name'              => 'Názov',
    'description'       => 'Popis',
    'position'          => 'Pozícia',
    'members'           => 'Členovia',
    'members_legend'    => 'Členovia projektu',
	'status'            => 'Stav',
    'action'            => 'Akcia',
    'project_history'   => 'Zobraziť históriu zmien',
    'remove_confirm'    => 'skutočne odstrániť projekt?',
    'user_add_legend'   => 'Pridať užívateľa do projektu',
    'user_add_button'   => 'Pridať užívateľa do projektu',
	'user_no_project'   => 'Nepatrí do žiadneho projektu',
	'user_added_ok'		=> 'Člen úspešne pridaný',
	'user_added_err'	=> 'Člen už patrí do projektu alebo je nedostupný',
	'user_removed_ok'	=> 'Člen odobraný z projektu!',
	'user_removed_err'	=> 'Člen nemôže byť odobraný alebo už bol odobraný z projektu',
	'user_position_ok'	=> 'Pozícia člena úspešne upravená',
	'project_info'		=> 'Info o projekte',
	'history_date'      => 'dátum',
    'history_user'      => 'užívateľ',
	'history_what'      => 'akcia',
	'action_save_ok'	=> 'Údaje o prejekte boli zmenené!',
	'action_added_ok'	=> 'Projekt bol vytvorený!',
	'action_status_ok'	=> 'Stav projektu bol upravený!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Osobné informácie',
    'user'              => 'Užívateľ',
    'name'              => 'Meno',
    'title'             => 'Oslovenie',
    'first_name'        => 'Krstné meno',
    'middle_name'       => 'Stredné meno',
    'last_name'         => 'Priezvisko',
    'address'           => 'Adresa',
    'location'          => 'Miesto',
    'city'              => 'Mesto',
    'state'             => 'Štát',
    'country'           => 'Krajina',
    'email'             => 'Email',
    'position'          => 'Úroveň',
	'last_login'        => 'Posledné prihlásenie',
	'last_login_from'	=> 'Z',
	'logout_goodbye'	=> 'Odhlásenie bolo úspešné. Dovidenia',
	'logout_login'		=> 'Klikni sem pre prihlásenie',
    'action'            => 'Akcia',
    'delete_confirm'    => 'skutočne vymazať tohoto užívateľa?',
    'enable_confirm'    => 'skutočne povoliť tohoto užívateľa?',
    'disable_confirm'   => 'skutočne zakázať tohoto užívateľa?',
    'account'           => 'Prístupové práva',
    'account_legend'    => 'Prosím vyberte užívateľské meno a heslo pre prístup!',
    'username'          => 'Užívateľské meno',
    'password'          => 'Heslo',
    'password_confirm'  => '(potvrdenie)',
    'auto_login'        => 'zapamätaj na počítaci',
    'password_legend'   => 'Vložte heslo a potvrdenie, iba ak ho chcete zmeniť.',
	'enabled_label'     => 'Konto je povolené',
	'login_signup'		=> 'Nie si člen? Požiadaj o konto tu',
	'account_created'	=> 'Vytvorené',
	'account_disabled'	=> 'Konto je zablokované!',
	'state_us_only'		=> 'iba pre príslušníkov z USA'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Vytvoriť',
	'add_account'		=> 'Odoslať',
    'update'            => 'Uložiť zmeny',
    'cancel'            => 'Zrušiť zmeny',
    'reset'             => 'Obnoviť formulár',
    'back'              => 'Naspäť na zoznam'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Dáta nenajdené alebo prístup zamietnutý',
    'denied'                    => 'Prístup zamietnutý!',
    'project_delete'            => 'Vymazať projekt',
    'project_delete_confirm'    => 'Skutočne vymazať tento projekt a jeho úlohy?',
    'project_delete_ok'         => 'Projekt vymazaný',
    'project_delete_no'         => 'Projekt nemôže byť zmazaný!',
    'task_edit'				    => 'Upraviť túto úlohu',
    'task_delete'			    => 'Vymazať túto úlohu',
    'task_delete_confirm'	    => 'Skutočne vymazať túto úlohu?',
	'error_no_title'		    => 'prosím vložte oslovenie!',
	'done_deleted'			    => 'úloha zmazaná!',
	'done_status'			    => 'stav úlohy upravený',
	'done_updated'			    => 'úloha upravená!',
	'done_added'			    => 'úloha vytvorená!',
	'done_comment_added'		=> 'komentár pridaný!',
	'done_comment_updated'		=> 'komentár upravený!',
	'done_comment_deleted'		=> 'komentár zmazaný!',
	'operation_failed'			=> 'operácia zlyhala!',
	'purge_all'				    => 'Vymazať všetky staré úlohy z projektov',
	'purge_all_confirm'		    => 'Skutočne zmazať staré úlohy zo všetkých projektov?',
	'delete_all'			    => 'vymazať všetky projekty a všetky úlohy',
	'delete_all_confirm'	    => 'skutočne vymazať všetky úlohy a všetky projekty?',
	'purge_one'				    => 'vymazať staré úlohy',
	'purge_one_confirm'		    => 'skutočne zmazať staré úlohy z tohoto projektu?',
	'delete_one'			    => 'vymzať celý projekt',
	'delete_one_confirm'	    => 'skutočne zmazať tento projekt?',
	'no_task_found'			    => 'žiadne úlohy spĺňajúce kritériá',
	'no_project_found'		    => 'žiadny projekt sa nenašiel',
	'create_task'			    => 'Klikni sem na vytvorenie novej úlohy',
	'no_project_found_1'	    => "Nemôžem nájsť žiadny projekt!!!",
	'no_project_found_2'	    => 'Pravdepodobne potrebuješ vytvoriť úlohu',
	'close_window'			    => 'zavrieť toto okno',
    'session_expired'           => 'Prihlásenie vyexpirovalo',
    'clock_start'				=> 'spustiť stopky',
    'clock_stop'				=> 'zastaviť stopky',
    'clock_change'				=> 'upraviť stopky',
	'information_saved'			=> 'Informácie úspešne uložené',
	'confirm_status_close'		=> 'Skutočne uzavrieť túto úlohu?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Dnes nemáš žiadne úlohy',
    'error_login'   => 'Prihlásenie zlyhalo'
);

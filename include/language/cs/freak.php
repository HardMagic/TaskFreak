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
	'jscalendar'	=> 'cs-win'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Úkol',
    'print_list'        => 'Verze pro tisk',
	'new_todo'			=> 'Nový úkol',
	'view'				=> 'Zobrazit',
	'all_projects'		=> 'Všechny projekty',
	'future_tasks'		=> 'Aktuální úlohy',
	'past_tasks'		=> 'Splněné úlohy',
    'my_tasks'          => 'Moje úlohy',
	'all_tasks'			=> 'Všechny úlohy',
	'all_contexts'		=> 'Vše',
	'all_users' 		=> 'Všichni',
	'reload'			=> 'Obnovit',
	'manage'			=> 'Spravovat',
	'projects'			=> 'Projekty',
	'users' 			=> 'Uživatele',
    'preferences'       => 'Muj profil',
    'settings'          => 'Nastavení',
	'login'				=> 'Přihlásit',
	'logout'			=> 'Odhlásit'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Priorita',
	'context'			=> 'Context',
	'deadline'			=> 'Termín',
	'project'			=> 'Projekt',
	'tasks'				=> 'Úloha',
	'title'				=> 'Název',
	'description'		=> 'Popis',
    'user'              => 'Uživatel',
    'visibility'        => 'Viditelnost',
    'private'           => 'private',
    'internal'          => 'internal',
    'public'            => 'public',
	'status'			=> 'Status',
	'save'				=> 'Uložit',
	'cancel'			=> 'Zrušit',
    'close'             => 'Zavřít',
    'edit'              => 'upravit',
    'delete'            => 'smazat',
	'new'				=> 'Nový',
	'project_new'		=> 'novy projekt?',
	'project_list'		=> 'zobrazit seznam',
    'compulsory_legend' => 'Položky označeny <span class="compulsory">červeně</span> jsou povinné.',
    'time'				=> 'Celkový čas',
    'time_reset'		=> 'Resetovat čas na 00:00:00'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'popis',
	'description_none'	=> 'prazdný',
	'tab_comments'		=> 'komentář',
	'comments_by'		=> 'od',
	'comments_none'		=> 'nebyl vložen žádný komentář',
	'comments_no_access'	=> 'nemáte právo číst komentáře',
	'comments_new'		=> 'vložit první',
	'comments_reply'	=> 'odpovědět',
	'comments_edit'		=> 'upravit',
	'comments_delete'	=> 'smazat',
	'comments_delete_confirm'	=> 'opravdu si přejete odstranit komentář?',
	'tab_history'		=> 'historie',
    'history_date'      => 'datum',
    'history_user'      => 'uživatel',
    'history_what'      => 'akce'
);

// date support
$GLOBALS['langDate'] = array (
	'today'				=> 'dnes',
	'tomorrow'			=> 'zítra',
	'day'				=> 'den',
	'week'				=> 'týden',
	'month'				=> 'mesíc',
	'year'				=> 'rok',
);

$GLOBALS['langDateDay'] = array (
    'monday'            => 'pondělí',
    'tuesday'           => 'úterý',
    'wednesday'         => 'středa',
    'thursday'          => 'čtvrtek',
    'friday'            => 'pátek',
    'saturday'          => 'sobota',
    'sunday'            => 'neděle'
);

$GLOBALS['langDateMore'] = array (
	'days'				=> 'dny',
	'help'				=> 'tj. dnes, zitra, 12 srpna'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekt',
    'projects'          => 'Projekty',
    'name'              => 'Jméno',
    'description'       => 'Popis',
    'position'          => 'Pozice',
    'members'           => 'Uživatelé',
    'members_legend'    => 'Uživatelé pracující na projektu',
	'status'            => 'Status',
    'action'            => 'Akce',
    'project_history'   => 'Zobrazit historii změn statusu',
    'remove_confirm'    => 'opravdu odstranit uživatele z projektu?',
    'user_add_legend'   => 'Přidat uživatele do projektu',
    'user_add_button'   => 'Přidat uživatele do projektu',
    'user_no_project'   => 'Není v žádném projektu'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Informace o uživateli',
    'user'              => 'Uživatel',
    'name'              => 'Jméno',
    'title'             => 'Titul',
    'first_name'        => 'Křestní jméno',
    'middle_name'       => 'Prostřední jméno',
    'last_name'         => 'Příjmení',
    'address'           => 'Adresa',
    'location'          => 'Umístění',
    'city'              => 'Město',
    'state'             => 'Stát',
    'country'           => 'Země',
    'email'             => 'Email',
    'position'          => 'Pozice',
    'last_login'        => 'Naposledy přihlášen',
    'action'            => 'Akce',
    'delete_confirm'    => 'opravdu smazat uživatele?',
    'enable_confirm'    => 'opravdu povolit uživatele?',
    'disable_confirm'   => 'opravdu zakázat uživatele?',
    'account'           => 'Účet',
    'account_legend'    => 'Prosím zvolte jméno a heslo které chcete používat pro přístup do TaskFreak',
    'username'          => 'Jméno',
    'password'          => 'Heslo',
    'password_confirm'  => '(potvrdit)',
    'auto_login'        => 'pamatovat na tomto počítači',
    'password_legend'   => 'Vložte heslo (opakovaně) pouze pokud jej chcete změnit.',
	'enabled_label'     => 'Účet je aktivní',
	'login_signup'		=> 'Nemáš účet? Zažadej si o vytvoření'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Vytvořit',
	'add_account'		=> 'Odeslat',
    'update'            => 'Uložit',
    'cancel'            => 'Zrušit',
    'reset'             => 'Reset',
    'back'              => 'Zpět na seznam'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Data nenalezena nebo nemáte potřebné oprávnění',
    'denied'                    => 'Přístup zamítnut!',
    'project_delete'            => 'Smazat projekt',
    'project_delete_confirm'    => 'Opravdu si přejete odstranit tuto úlohu v tomto projektu?',
    'project_delete_ok'         => 'Projekt odstraněn',
    'project_delete_no'         => 'Projekt nelze smazat!',
    'task_edit'				    => 'Upravit úkol',
    'task_delete'			    => 'Smazat tento úkol',
    'task_delete_confirm'	    => 'Opravdu odstranit tento úkol?',
	'error_no_title'		    => 'vložte název!',
	'done_deleted'			    => 'úkol odstraněn!',
	'done_status'			    => 'status úkolu byl aktualizován',
	'done_updated'			    => 'úkol upraven!',
	'done_added'			    => 'úkol vytvořen!',
	'done_comment_added'		=> 'přidán komentář!',
	'done_comment_updated'		=> 'komentář upraven!',
	'done_comment_deleted'		=> 'komentář odstraněn!',
	'operation_failed'			=> 'operace selhala!',
	'purge_all'				    => 'purge (delete old tasks) for all projects',
	'purge_all_confirm'		    => 'opravdu chcete odstranit staré úkoly ze všech projektů?',
	'delete_all'			    => 'smazat všechny projekty (i s úkoly)',
	'delete_all_confirm'	    => 'opravdu chcete odstranit všechny úkoly ze všech projektů?',
	'purge_one'				    => 'purge (delete old tasks)',
	'purge_one_confirm'		    => 'opravdu chcete odstranit staré úkoly ze tohoto projektů?',
	'delete_one'			    => 'odstranit celý projekt',
	'delete_one_confirm'	    => 'opravdu odstranit tento projekt?',
	'no_task_found'			    => 'žádný úkol neodpovídá požadavkům vyhledávání',
	'no_project_found'		    => 'nalezeno 0 projektů',
	'create_task'			    => 'Kliknutím zde můžete zkusit vytvořit nový projekt',
	'no_project_found_1'	    => "Cink cink! Projekt nenalezen!!!",
	'no_project_found_2'	    => 'Mel by jsi nejdříve vytvořit úkol.',
	'close_window'			    => 'zavřít okno',
    'session_expired'           => 'relace vypršela',
    'clock_start'				=> 'měřič času spuštěn',
    'clock_stop'				=> 'měřič času zastaven',
    'clock_change'				=> 'modify timer',
    'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'No task for today',
    'error_login'   => 'Authentication failed'
);

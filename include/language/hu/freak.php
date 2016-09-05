<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.5                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'hu-utf8'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Feladat',
    'print_list'        => 'Nyomtatható változat',
	'new_todo'			=> 'Új feladat',
	'view'				=> 'Nézet',
	'all_projects'		=> 'Minden projekt',
	'future_tasks'		=> 'Következő feladatok',
	'past_tasks'		=> 'Elmúlt feladatok',
    'my_tasks'          => 'Saját feladataim',
	'all_tasks'			=> 'Minden feladat',
	'all_contexts'		=> 'Minden környezet',
	'all_users' 		=> 'Minden felhasználó',
	'reload'			=> 'Újratöltés',
	'manage'			=> 'Kezelés',
	'projects'			=> 'Projektek',
	'users' 			=> 'Felhasználók',
    'preferences'       => 'Profilom',
    'settings'          => 'Rendszerbeállítások',
	'login'				=> 'Bejelentkezés',
	'logout'			=> 'Kijelentkezés',
	'warning'			=> 'Figyelmeztetés',
	'warning_install'	=> 'A telepítő mappa (install) még mindig létezik! Biztonsági okokból ajánlott a törlése!'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioritás',
	'context'			=> 'Környezet',
	'deadline'			=> 'Céldátum',
	'project'			=> 'Projekt',
	'tasks'				=> 'Feladatok',
	'title'				=> 'Cím',
	'description'		=> 'Leírás',
    'user'              => 'Felhasználó',
    'visibility'        => 'Láthatóság',
    'private'           => 'privát',
    'internal'          => 'belső',
    'public'            => 'nyilvános',
	'status'			=> 'Állapot',
	'create'			=> 'Létrehozás',
	'save'				=> 'Mentés',
	'cancel'			=> 'Mégse',
	'reset'				=> 'Visszaállítás',
    'close'             => 'bezár',
    'edit'              => 'szerkeszt',
    'delete'            => 'töröl',
	'new'				=> 'Új',
	'project_new'		=> 'új projekt?',
	'project_list'		=> 'lista',
	'compulsory_legend' => 'A <span class="compulsory">vörös</span> mezők kitöltése kötelező!',
	'list_comments'		=> 'Hsz.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'leírás',
	'description_none'	=> 'nincs leírás',
	'tab_comments'		=> 'hozzászólások',
	'comments_by'		=> '',
	'comments_none'		=> 'nincs még hozzászólás',
	'comments_no_access'	=> 'comments are confidential',
	'comments_new'		=> 'szóljon hozzá',
	'comments_reply'	=> 'válasz',
	'comments_edit'		=> 'szerkeszt',
	'comments_delete'	=> 'töröl',
	'comments_delete_confirm'	=> 'biztos törli a hozzászólást?',
	'tab_history'		=> 'történet',
    'history_date'      => 'dátum',
    'history_user'      => 'felhasználó',
    'history_what'      => 'action'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'nap',
	'days'				=> 'nap',
	'help'				=> 'pl. ma, holnap, 12 ápr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekt',
    'projects'          => 'Projektek',
    'name'              => 'Név',
    'description'       => 'Leírás',
    'position'          => 'Pozíció',
    'members'           => 'Tagok',
    'members_legend'    => 'Projekt tagok',
	'status'            => 'Állapot',
    'action'            => 'Action',
    'project_history'   => 'Állapotváltozások története',
    'remove_confirm'    => 'biztos törli a projektből?',
    'user_add_legend'   => 'Felhasználó hozzáadása',
    'user_add_button'   => 'Felhasználó hozzáadása',
	'user_no_project'   => 'Nem tartozik projekthez',
	'user_added_ok'		=> 'Projekttag hozzáadása sikerült',
	'user_added_err'	=> 'Felhasználó már tagja a projektnek vagy nem elérhető',
	'user_removed_ok'	=> 'Projekttag eltávolítása sikerült!',
	'user_removed_err'	=> 'Projekttag eltávolítása sikertelen vagy nem is volt tag',
	'user_position_ok'	=> 'Projekttag pozíció(k) módosítása sikerült',
	'project_info'		=> 'Projekt info',
	'history_date'      => 'dátum',
    'history_user'      => 'felhasználó',
	'history_what'      => 'action',
	'action_save_ok'	=> 'Projekt adatok módosítva!',
	'action_added_ok'	=> 'Projekt létrejött!',
	'action_status_ok'	=> 'Projekt állapota megváltozott!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Személyes adatok',
    'user'              => 'Felhasználó',
    'name'              => 'Név',
    'title'             => 'Cím',
    'first_name'        => 'Vezetéknév',
    'middle_name'       => '',
    'last_name'         => 'Keresztnév',
    'address'           => 'Cím',
    'location'          => 'Hely',
    'city'              => 'Település',
    'state'             => 'Megye',
    'country'           => 'Ország',
    'email'             => 'E-mail',
    'position'          => 'Szint',
	'last_login'        => 'Utolsó bejelentkezés',
	'last_login_from'	=> 'Erről a címről',
	'logout_goodbye'	=> 'Kijelentkezett. Viszlát.',
	'logout_login'		=> 'Kattintson ide az újbóli bejelentkezéshez',
    'action'            => 'Action',
    'delete_confirm'    => 'biztso törli a felhasználót?',
    'enable_confirm'    => 'biztos engedélyezi a felhasználót?',
    'disable_confirm'   => 'biztos letiltja a felhasználót?',
    'account'           => 'Hozzáférési adatok',
    'account_legend'    => 'Válasszon egy felhasználónevet és jelszót a bejelentkezéshez!',
    'username'          => 'Felhasználónév',
    'password'          => 'Jelszó',
    'password_confirm'  => '(megerősít)',
    'auto_login'        => 'emlékezzen rám ezen a gépen',
    'password_legend'   => 'Csak akkor adjon meg jelszót ha meg akarja változtatni a régit.',
	'enabled_label'     => 'Hozzáférés engedélyezve',
	'login_signup'		=> 'Még nem tag? Kérjen hozzáférést itt',
	'account_created'	=> 'Létrehozva',
	'account_disabled'	=> 'Hozzáférés letiltva!',
	'state_us_only'		=> 'csak USA lakóinak'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Új',
	'add_account'		=> 'Elküld',
    'update'            => 'Mentés',
    'cancel'            => 'Mégse',
    'reset'             => 'Visszaállítás',
    'back'              => 'Vissza a listához'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Data not found or access denied',
    'denied'                    => 'Hozzáférés megtagadva!',
    'project_delete'            => 'Projekt törlése',
    'project_delete_confirm'    => 'Biztos törli a projektet és annak feladatait?',
    'project_delete_ok'         => 'Projekt törölve',
    'project_delete_no'         => 'Projektet nem lehet törölni!',
    'task_edit'				    => 'Feladat szerkesztése',
    'task_delete'			    => 'Feladat törlése',
    'task_delete_confirm'	    => 'Biztos törli ezt a feladatot?',
	'error_no_title'		    => 'adjon meg egy címet!',
	'done_deleted'			    => 'feladat törölve!',
	'done_status'			    => 'feladat állapota megváltozott',
	'done_updated'			    => 'feladat megváltozott!',
	'done_added'			    => 'feladat létrejött!',
	'done_comment_added'		=> 'hozzászólás elmentve!',
	'done_comment_updated'		=> 'hozzászólás megváltozott!',
	'done_comment_deleted'		=> 'hozzászólás törölve!',
	'operation_failed'			=> 'művelet sikertelen!',
	'purge_all'				    => 'projektek takarítása (régifeladatok törlése)?',
	'purge_all_confirm'		    => 'biztos törli a régi feladatokat a projektekből?',
	'delete_all'			    => 'minden projekt és feladat törlése',
	'delete_all_confirm'	    => 'biztos töröl minden projektet és feladatot?',
	'purge_one'				    => 'takarítás (régi feladatok törlése)',
	'purge_one_confirm'		    => 'biztos törli a projekt régi feladatait?',
	'delete_one'			    => 'teljes projekt törlése',
	'delete_one_confirm'	    => 'biztos törli ezt a projektet?',
	'no_task_found'			    => 'nincs a feltételeknek megfelelő feladat',
	'no_project_found'		    => 'nem található projekt',
	'create_task'			    => 'Kattintson ide és hozzon létre egyet',
	'no_project_found_1'	    => "Dang! Nincs egy projekt se!!!",
	'no_project_found_2'	    => 'Először egy feladatot kell létrehozni',
	'close_window'			    => 'ablak bezárása',
    'session_expired'           => 'Lejárt a bejelentkezés',
    'clock_start'				=> 'időzítő indítása',
    'clock_stop'				=> 'időzítő leállítása',
    'clock_change'				=> 'idpzítő módosítása',
	'information_saved'			=> 'Információk elmentése sikerült',
	'confirm_status_close'		=> 'Biztos lezárja a feladatot?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Nincs mára feladat',
    'error_login'   => 'Sikertelen hitelesítés'
);

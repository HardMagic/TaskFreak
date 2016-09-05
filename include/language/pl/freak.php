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
	'task'				=> 'Zadanie',
    'print_list'        => 'Wersja do druku',
	'new_todo'			=> 'Nowe zadanie',
	'view'				=> 'Podgląd',
	'all_projects'		=> 'Wszystkie projekty',
	'future_tasks'		=> 'Do zrobienia',
	'past_tasks'		=> 'Zrealizowane',
    'my_tasks'          => 'Moje zadania',
	'all_tasks'			=> 'Wszystkie',
	'all_contexts'		=> 'Wszystkie rodzaje',
	'all_users' 		=> 'Wszyscy użytkownicy',
	'reload'			=> 'Przeładuj',
	'manage'			=> 'Zarządzaj',
	'projects'			=> 'Projekty',
	'users' 			=> 'Użytkownicy',
    'preferences'       => 'Mój profil',
    'settings'          => 'Ustawienia systemowe',
	'login'				=> 'Loguj',
	'logout'			=> 'Wyloguj',
	'warning'			=> 'Uwaga',
	'warning_install'	=> 'Folder instalacyjny nadal istnieje, dla bezpieczeństwa należy go usunąć.'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Priorytet',
	'context'			=> 'Rodzaj',
	'deadline'			=> 'Data ukończenia',
	'project'			=> 'Projekt',
	'tasks'				=> 'Zadania',
	'title'				=> 'Tytuł',
	'description'		=> 'Opis zadania',
    'user'              => 'Użytkownik',
    'visibility'        => 'Dostępność',
    'private'           => 'prywatna',
    'internal'          => 'wewnętrzna',
    'public'            => 'publiczna',
	'status'			=> 'Status',
	'create'			=> 'Stwórz',
	'save'				=> 'Zapisz',
	'cancel'			=> 'Anuluj',
	'reset'				=> 'Wyczyść',
    'close'             => 'zamknij',
    'edit'              => 'edytuj',
    'delete'            => 'usuń',
	'new'				=> 'Nowe',
	'project_new'		=> 'nowy projekt?',
	'project_list'		=> 'pokaż listę',
    'compulsory_legend' => 'Pola <span class="compulsory">czerwone</span> są wymagane.',
	'list_comments'		=> 'Kom.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'opis',
	'description_none'	=> 'brak opisu',
	'tab_comments'		=> 'komentarze',
	'comments_by'		=> 'przez',
	'comments_none'		=> 'nie ma jeszcze komentarzy',
	'comments_no_access'	=> 'dodawanie komentarzy zablokowane',
	'comments_new'		=> 'stwórz pierwszy komentarz',
	'comments_reply'	=> 'odpowiedz',
	'comments_edit'		=> 'edycja',
	'comments_delete'	=> 'usuń',
	'comments_delete_confirm'	=> 'czy napewno usunąć komentarz?',
	'tab_history'		=> 'historia',
    'history_date'      => 'data',
    'history_user'      => 'użytkownik',
    'history_what'      => 'akcje'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'dzień',
	'days'				=> 'dni',
	'help'				=> 'np. dzisiaj, jutro, 11 września'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projekt',
    'projects'          => 'Projekty',
    'name'              => 'Nazwa',
    'description'       => 'Opis zadania',
    'position'          => 'Pozycja',
    'members'           => 'Użytkowników',
    'members_legend'    => 'Użytkownicy projektu',
	'status'            => 'Status',
    'action'            => 'Akcje',
    'project_history'   => 'Zobacz historię jak zmieniały się statusy',
    'remove_confirm'    => 'czy naprawdę usunąć z projektu?',
    'user_add_legend'   => 'Dodaj użytkownika do tego projektu',
    'user_add_button'   => 'Dodaj użytkownika do projektu',
    'user_no_project'   => 'Użytkownikowi nie przypisano żadnego projektu',
	'user_added_ok'		=> 'Użytkownik został pomyślnie dodany do projektu',
	'user_added_err'	=> 'Użytkownik należy już do tego projektu, bądź nie istnieje',
	'user_removed_ok'	=> 'Użytkownik został usunięty z tego projektu!',
	'user_removed_err'	=> 'Użytkownik nie może zostać usunięty, bądź już został',
	'user_position_ok'	=> 'Pozycja użytkownika została pomyślnie dodana',
	'project_info'		=> 'Projekt Info',
	'history_date'      => 'data',
    'history_user'      => 'użytkownik',
	'history_what'      => 'akcje',
	'action_save_ok'	=> 'Projekt został zaktualizowany!',
	'action_added_ok'	=> 'Projekt został stworzony!',
	'action_status_ok'	=> 'Zaktualizowano status projektu!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Informacje personalne',
    'user'              => 'Użytkownik',
    'name'              => 'Nazwa',
    'title'             => 'Tytuł',
    'first_name'        => 'Imię',
    'middle_name'       => 'Drugie imię',
    'last_name'         => 'Nazwisko',
    'address'           => 'Adres',
    'location'          => 'Lokalizacja',
    'city'              => 'Miasto',
    'state'             => 'Stan',
    'country'           => 'Państwo',
    'email'             => 'Email',
    'position'          => 'Poziom dostępu',
    'last_login'        => 'Ostatnie logowanie',
	'last_login_from'	=> ' z ',
	'logout_goodbye'	=> 'Zostałeś wylogowny. Dowidzenia.',
	'logout_login'		=> 'Kliknij tutaj aby się zalogować',
    'action'            => 'Akcje',
    'delete_confirm'    => 'naprawdę usunąć tego użytkownika?',
    'enable_confirm'    => 'naprawdę odblokować tego użytkownika?',
    'disable_confirm'   => 'naprawdę zablokować tego użytkownika?',
    'account'           => 'Szczegóły konta',
    'account_legend'    => 'Podaj nazwę użytkownika i hasło aby udostępnić logowanie do TaskFreak!',
    'username'          => 'Nazwa użytkownika',
    'password'          => 'Hasło',
    'password_confirm'  => '(potwierdź)',
    'auto_login'        => 'zapamiętaj użytkownika',
    'password_legend'   => 'Podaj nowe hasło, tylko jeżeli chcesz je zmienić.',
	'enabled_label'     => 'Konto odblokowane',
	'login_signup'		=> 'Nie jesteś jeszcze użytkownikiem, zarejestruje się!',
	'account_created'	=> 'Konto utworzone',
	'account_disabled'	=> 'Konto zablokowany!',
	'state_us_only'		=> 'tylko dla Stanów Zjednoczonych'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Stwórz',
	'add_account'		=> 'Wyślij',
    'update'            => 'Zapisz zmiany',
    'cancel'            => 'Anuluj zmiany',
    'reset'             => 'Wyczyść',
    'back'              => 'Powrót do listy'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Nie odnaleziono danych, bądź dostęp został zablokowany!',
    'denied'                    => 'Dostęp zablokowany!',
    'project_delete'            => 'Usuń projekt',
    'project_delete_confirm'    => 'Czy naprawdę usunąć ten projekt i wszystkie przypisane do niego zadania?',
    'project_delete_ok'         => 'Projekt usunięty',
    'project_delete_no'         => 'Projekt nie mógł zostać usunięty!',
    'task_edit'				    => 'Edytuj to zadanie',
    'task_delete'			    => 'Usuń to zadanie',
    'task_delete_confirm'	    => 'Czy naprawdę chcesz usunąć to zadanie?',
	'error_no_title'		    => 'wpisz tytuł!',
	'done_deleted'			    => 'zadanie usunięte!',
	'done_status'			    => 'status zaktualizowany',
	'done_updated'			    => 'zadanie zaktualizowane!',
	'done_added'			    => 'zadanie utworzone!',
	'done_comment_added'		=> 'komentarz dodany!',
	'done_comment_updated'		=> 'komentarz zaktualizowany!',
	'done_comment_deleted'		=> 'komentarz usunięty!',
	'operation_failed'			=> 'operacja zakończyła się niepowodzeniem!',
	'purge_all'				    => 'opróżnij (usuń stare zadania) wszystkie projekty',
	'purge_all_confirm'		    => 'Czy chcesz usunąć wszystkie stare zadania?',
	'delete_all'			    => 'usuń wszystkie projekty (i zadania)',
	'delete_all_confirm'	    => 'Czy naprawdę chcesz usunąć wszystkie zadania z tego projektu?',
	'purge_one'				    => 'opróżnij (usuń stare zadania)',
	'purge_one_confirm'		    => 'Czy naprawdę chcesz usuną stare zadania z tego projektu?',
	'delete_one'			    => 'usuń cały projekt',
	'delete_one_confirm'	    => 'Czy naprawdę usunąć ten projekt?',
	'no_task_found'			    => 'zadania nie spełniają kryterium',
	'no_project_found'		    => 'nie ma żadnego projektu',
	'create_task'			    => 'Stwórz pierwszy projekt',
	'no_project_found_1'	    => "UWAGA! Nie odnaleziono projektu!!!",
	'no_project_found_2'	    => 'Najprawdopodobniej należy stworzyć zadanie, nie uważasz?',
	'close_window'			    => 'zamknij to okno',
    'session_expired'           => 'Sesja zakończona',
	'information_saved'			=> 'Informacja została pomyślnie zapisana',
	'clock_start'				=> 'start timer',
    'clock_stop'				=> 'stop timer',
    'clock_change'				=> 'modify timer',
	'confirm_status_close'		=> 'Really close this task?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Brak zadań na dzisiaj',
    'error_login'   => 'Autoryzacja nieudana'
);

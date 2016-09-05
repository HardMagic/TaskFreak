<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'pl_PL.UTF-8', 'pl_PL');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Wystąpiły błędy w formularzu - Informacje nie zostały zapisane!',
  'field_compulsory'	=>	'To pole jest obowiązkowe'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "hasła są niezgodne",
  "user_pass_limit1" => "musi składać się z ",
  "user_pass_limit2" => " do ",
  "user_pass_limit3" => " znaków",
  "user_pass_empty" => "pole hasło nie może pozostać puste",
  "user_pass_invalid" => "Nieprawidłowe hasło",
  "user_name_limit1" => "musi składać się z ",
  "user_name_limit2" => " do ",
  "user_name_limit3" => " znaków",
  "user_name_exists" => "użytkownik już istnieje",
  "user_name_empty" => "Podaj nazwę użytkownika",
  "user_name_invalid" => "Nazwa użytkownika nie może zawierać znaków specjalnych oraz spacji",
  "user_name_not_found" => "użytkownik nie odnaleziony",
  "user_disabled" => "Konto nieaktywne",
  "user_forbidden" => "Nie posiadasz uprawnień do logowania",
  "user_email_empty" => "Podaj swój adres mailowy",
  "user_email_format" => "Podaj prawidłowy adres email",
  "user_email_invalid" => "Adres email nie odnaleziony",
  "user_password_invalid" => "Nieprawidłowe hasło",
  "email_empty" => "Podaj swój adres mailowy",
  "email_exists" => "konto o wskazanym adresie mailowym już istnieje",
  "email_invalid" => "podaj prawidłowy adres email",
  "document_wrong_type" => "zły rodzaj pliku",
  "document_empty" => "wybierz plik",
  "common_name_empty" => "podaj nazwę",
  "common_title_empty" => "podaj tytuł",
  "common_theme_empty" => "wybierz motyw",
  "common_description_empty" => "uzupełnij opis",
  "common_message_empty" => "wpisz wiadomość",
  "common_date_empty" => "wybierz datę",
  "common_date_invalid" => "data zakończenia jest nieprawidłowa",
  "common_city_empty" => "podaj miasto",
  "common_info_empty" => "uzupełnij wiadomości kontakowe",
  "common_url_empty" => "uzupełnij adres mailowy",
  "common_file_empty" => "Proszę wybrać plik klikając w przycisk wybierz",
  "login_email" => "Twój email",
  "login_password" => "Hasło",
  "login_error0" => "Wymagana autoryzacja",
  "login_error1" => "Wymagane hasło",
  "login_error2" => "Dostęp zabroniony (tylko dla upoważnionych)",
  "login_error3" => "Nieprawidłowa nazwa użytkownika, bądź hasło",
  "login_last_date" => 'Data ostatniego logowania',
  "login_last_address"  => 'Adres ostatniego logowania',
  "post_user" => "użytkownik",
  "post_category" => "kategoria",
  "post_title" => "tytuł",
  "post_documents" => "zdjęcia",
  "post_date" => "dodany",
  "post_by" => "przez",
  "doc_file_name" => "nazwa pliku",
  "doc_file_size" => "rozmiar",
  "doc_file_type" => "rodzaje",
  "doc_remove" => "usuń",
  "doc_update" => "aktualizuj pliki",
  "post_description" => "opis",
  "button_create" => "Stwórz",
  "button_update" => "Aktualizuj",
  "button_delete" => "Wykasuj",
  "button_login" => "Login",
  "profile_update_success" => "Konto zostało prawidłowo zaktualizowane",
  "url" => "Strona internetowa&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'dzisiaj',
	'tomorrow'			=> 'jutro',
	'days'				=> 'dni',
	'day'				=> 'dzień',
	'weeks'				=> 'tygodni',
	'week'				=> 'tydzień',
	'months'			=> 'miesięcy',
	'month'				=> 'miesiąc',
	'years'				=> 'lat',
	'year'				=> 'rok',
	'january'			=> 'styczeń',
	'february'			=> 'luty',
	'march'				=> 'marzec',
	'april'				=> 'kwiecień',
	'may'				=> 'maj',
	'june'				=> 'czerwiec',
	'july'				=> 'lipiec',
	'august'			=> 'sierpień',
	'september'			=> 'wrzesień',
	'october'			=> 'październik',
	'november'			=> 'listopad',
	'december'			=> 'grudzień',
	'jan'				=> 'sty',
	'feb'				=> 'lut',
	'mar'				=> 'mar',
	'apr'				=> 'kwi',
	'may'				=> 'maj',
	'jun'				=> 'cze',
	'jul'				=> 'lip',
	'aug'				=> 'sie',
	'sep'				=> 'wrz',
	'oct'				=> 'paz',
	'nov'				=> 'lis',
	'dec'				=> 'gru',
	'monday'			=> 'poniedziałek',
	'tuesday'			=> 'wtorek',
	'wednesday'			=> 'środa',
	'thursday'			=> 'czwartek',
	'friday'			=> 'piątek',
	'saturday'			=> 'sobota',
	'sunday'			=> 'niedziela',
	'mon'				=> 'pon',
	'tue'				=> 'wto',
	'wed'				=> 'sro',
	'thu'				=> 'czw',
	'fri'				=> 'pia',
	'sat'				=> 'sob',
	'sun'				=> 'nie'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'DO',
	'direction_out'		=> 'NA',
	'recipient_from'	=> 'OD',
	'recipient_to'		=> 'Do',
	'check_recipient'	=> 'Podaj prawidłowy adres',
	'check_subject'		=> 'Podaj temat',
	'check_injection'	=> 'Wykryto email injection',
	'check_active'		=> 'Adres email jest nieaktywny'
);

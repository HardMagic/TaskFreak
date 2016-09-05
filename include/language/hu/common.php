<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.5                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'en_EN.UTF-8', 'en_GB.utf8', 'en_US.utf8', 'en_EN', 'en');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Hibás az űrlap - Adatok mentése nem sikerült!',
  'field_compulsory'	=>	'Kötelező mező'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "jelszó eltérés",
  "user_pass_limit1" => "a jelszó legalább ",
  "user_pass_limit2" => " és legfeljebb ",
  "user_pass_limit3" => " karakter legyen",
  "user_pass_empty" => "a jelszó nem maradhat üresen",
  "user_pass_invalid" => "Érvénytelen jelszó",
  "user_name_limit1" => "a felhasználónév legalább ",
  "user_name_limit2" => " és legfeljebb ",
  "user_name_limit3" => " karakter legyen",
  "user_name_exists" => "ez a felhasználónév már foglalt",
  "user_name_empty" => "Adja meg a felhasználói nevét",
  "user_name_invalid" => "A felhasználónév csak az angol abc betűit tartalmazhatja",
  "user_name_not_found" => "ismeretlen felhasználónév",
  "user_disabled" => "Hozzáférés elutasítva",
  "user_forbidden" => "Nincs belépési engedélye",
  "user_email_empty" => "Adja meg e-mail címét",
  "user_email_format" => "Adjon meg egy érvényes e-mail címet",
  "user_email_invalid" => "ismeretlen e-mail",
  "user_password_invalid" => "rossz jelszó",
  "email_empty" => "Adja meg e-mail címét",
  "email_exists" => "Ez az e-mail cím már foglalt",
  "email_invalid" => "Adjon meg egy érvényes e-mail címet",
  "document_wrong_type" => "rossz állománytipus",
  "document_empty" => "válasszon egy állományt",
  "common_name_empty" => "adjon meg egy nevet",
  "common_title_empty" => "adjon meg egy címet",
  "common_theme_empty" => "válasszon témát",
  "common_description_empty" => "adjon meg egy leírást",
  "common_message_empty" => "adjon meg egy üzenetet",
  "common_date_empty" => "válasszon dátumot",
  "common_date_invalid" => "záró dátum érvénytelen",
  "common_city_empty" => "válasszon várost",
  "common_info_empty" => "adja meg az elérhetőségét",
  "common_url_empty" => "adjon meg egy internet címet",
  "common_file_empty" => "Kattintson a 'Tallóz...' gombra és válasszon egy állományt",
  "login_email" => "E-mail címe",
  "login_password" => "Jelszó",
  "login_error0" => "Azonosítás szükséges",
  "login_error1" => "Jelszó szükséges",
  "login_error2" => "Zárt terület: nincs hozzáférése",
  "login_error3" => "Érvénytelen felhasználónév vagy jelszó",
  "login_last_date" => 'Utolsó bejelentkezés ideje',
  "login_last_address"  => 'Utolsó bejelentkezés címe',
  "post_user" => "felhasználó",
  "post_category" => "kategória",
  "post_title" => "cím",
  "post_documents" => "képek",
  "post_date" => "elküldte",
  "post_by" => "",
  "doc_file_name" => "állományneve",
  "doc_file_size" => "állomány mérete",
  "doc_file_type" => "állomány tipusa",
  "doc_remove" => "törlés",
  "doc_update" => "állományok módosítása",
  "post_description" => "leírás",
  "button_create" => "Létrehoz",
  "button_update" => "Módosít",
  "button_delete" => "Töröl",
  "button_login" => "Bejelentkezés",
  "profile_update_success" => "Hozzáférés módosítva",
  "url" => "Honlap&nbsp;:&nbsp;",
  "atsign" => "@"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'ma',
	'tomorrow'			=> 'holnap',
	'days'				=> 'nap',
	'day'				=> 'nap',
	'weeks'				=> 'hét',
	'week'				=> 'hét',
	'months'			=> 'hónap',
	'month'				=> 'hónap',
	'years'				=> 'év',
	'year'				=> 'év',
	'january'			=> 'január',
	'february'			=> 'február',
	'march'				=> 'március',
	'april'				=> 'április',
	'may'				=> 'május',
	'june'				=> 'június',
	'july'				=> 'július',
	'august'			=> 'augusztus',
	'september'			=> 'szeptember',
	'october'			=> 'október',
	'november'			=> 'november',
	'december'			=> 'december',
	'jan'				=> 'jan',
	'feb'				=> 'feb',
	'mar'				=> 'már',
	'apr'				=> 'ápr',
	'may'				=> 'máj',
	'jun'				=> 'jún',
	'jul'				=> 'júl',
	'aug'				=> 'aug',
	'sep'				=> 'sze',
	'oct'				=> 'okt',
	'nov'				=> 'nov',
	'dec'				=> 'dec',
	'monday'			=> 'hétfő',
	'tuesday'			=> 'kedd',
	'wednesday'			=> 'szerda',
	'thursday'			=> 'csütörtök',
	'friday'			=> 'péntek',
	'saturday'			=> 'szombat',
	'sunday'			=> 'vasárnap',
	'mon'				=> 'h',
	'tue'				=> 'k',
	'wed'				=> 'sze',
	'thu'				=> 'cs',
	'fri'				=> 'p',
	'sat'				=> 'szo',
	'sun'				=> 'v'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'BE',
	'direction_out'		=> 'KI',
	'recipient_from'	=> 'Feladó',
	'recipient_to'		=> 'Címzett',
	'check_recipient'	=> 'Adja meg a címzettet',
	'check_subject'		=> 'Adjon meg tárgyat',
	'check_injection'	=> 'E-mail fejléc beszúrás',
	'check_active'		=> 'E-mail figyelmeztetés inaktív'
);

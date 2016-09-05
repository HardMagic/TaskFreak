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

setLocale(LC_ALL, 'sk_SK.UTF-8', 'sk_SK.utf8', 'sk_SK', 'sk');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'There are some errors in the form - Information not saved!',
  'field_compulsory'	=>	'This field is compulsory'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "heslo nesúhlasí",
  "user_pass_limit1" => "dĺžka hesla musí byť medzi ",
  "user_pass_limit2" => " a ",
  "user_pass_limit3" => " znakov",
  "user_pass_empty" => "heslo nesmie byť prázdne",
  "user_pass_invalid" => "Chybné heslo",
  "user_name_limit1" => "dĺžka mena užívateľa musí byť medzi ",
  "user_name_limit2" => " a ",
  "user_name_limit3" => " znakov",
  "user_name_exists" => "meno užívateľa už existuje",
  "user_name_empty" => "Prosím vložte svoje užívateľské meno",
  "user_name_invalid" => "Užívateľské meno nesmie obsahovať špeciálne znaky, ani medzeru",
  "user_name_not_found" => "užívateľ neexistuje",
  "user_disabled" => "Konto zablokované",
  "user_forbidden" => "Nie ste opravnený sa prihlásiť",
  "user_email_empty" => "Prosím vložte email adresu",
  "user_email_format" => "Prosím vložte správnu email adresu",
  "user_email_invalid" => "Email sa nenašiel",
  "user_password_invalid" => "Chybné heslo",
  "email_empty" => "Prosím vložte svoju e-mail adresu",
  "email_exists" => "konto s touto email adresou už existuje",
  "email_invalid" => "prosím vložte správnu email adresu",
  "document_wrong_type" => "chybný typ súboru",
  "document_empty" => "prosím vyberte súbor",
  "common_name_empty" => "prosím vložte meno",
  "common_title_empty" => "prosím vložte oslovenie",
  "common_theme_empty" => "prosím vyberte tému",
  "common_description_empty" => "prosím vložte popis",
  "common_message_empty" => "prosím vložte správu",
  "common_date_empty" => "prosím vložťe dátum",
  "common_date_invalid" => "koncový dátum nie je správny",
  "common_city_empty" => "prosím vložte mesto",
  "common_info_empty" => "prosím vložte kontaktné informácie",
  "common_url_empty" => "prosím vložte web adresu",
  "common_file_empty" => "prosím vyberte súbor kliknutím na tlačítko 'Browse..'",
  "login_email" => "Váš email",
  "login_password" => "Heslo",
  "login_error0" => "Potrebné príhlásiť sa",
  "login_error1" => "Potrené vyplniť heslo",
  "login_error2" => "Prístup zamietnutý",
  "login_error3" => "Chybné meno alebo heslo",
  "login_last_date" => 'Dátum posledného prihlásenia',
  "login_last_address"  => 'Adresa posledného prihlásenia',
  "post_user" => "užívateľ",
  "post_category" => "kategória",
  "post_title" => "oslovenie",
  "post_documents" => "fotky",
  "post_date" => "vložené dňa",
  "post_by" => "užívateľom",
  "doc_file_name" => "názov súboru",
  "doc_file_size" => "veľkosť súboru",
  "doc_file_type" => "typ súboru",
  "doc_remove" => "odstrániť",
  "doc_update" => "upraviť súbory",
  "post_description" => "popis",
  "button_create" => "Vytvoriť",
  "button_update" => "Upraviť",
  "button_delete" => "Vymazať",
  "button_login" => "Užívateľské meno",
  "profile_update_success" => "Konto úspešne upravené",
  "url" => "Web&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'dnes',
	'tomorrow'			=> 'zajtra',
	'days'				=> 'dni',
	'day'				=> 'deň',
	'weeks'				=> 'týždne',
	'week'				=> 'týžne',
	'months'			=> 'mesiace',
	'month'				=> 'mesiac',
	'years'				=> 'rokov',
	'year'				=> 'rok',
	'january'			=> 'január',
	'february'			=> 'február',
	'march'				=> 'marec',
	'april'				=> 'apríl',
	'may'				=> 'máj',
	'june'				=> 'jún',
	'july'				=> 'júl',
	'august'			=> 'august',
	'september'			=> 'september',
	'october'			=> 'október',
	'november'			=> 'november',
	'december'			=> 'december',
	'jan'				=> 'jan',
	'feb'				=> 'feb',
	'mar'				=> 'mar',
	'apr'				=> 'apr',
	'may'				=> 'máj',
	'jun'				=> 'jún',
	'jul'				=> 'júl',
	'aug'				=> 'aug',
	'sep'				=> 'sep',
	'oct'				=> 'okt',
	'nov'				=> 'nov',
	'dec'				=> 'dec',
	'monday'			=> 'pondelok',
	'tuesday'			=> 'utorok',
	'wednesday'			=> 'streda',
	'thursday'			=> 'štvrtok',
	'friday'			=> 'piatok',
	'saturday'			=> 'sobota',
	'sunday'			=> 'nedeľa',
	'mon'				=> 'po',
	'tue'				=> 'ut',
	'wed'				=> 'st',
	'thu'				=> 'št',
	'fri'				=> 'pi',
	'sat'				=> 'so',
	'sun'				=> 'ne'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'Z',
	'direction_out'		=> 'DO',
	'recipient_from'	=> 'Odosieľateľ',
	'recipient_to'		=> 'Príjemca',
	'check_recipient'	=> 'Prosím vložte adresu odosieľateľa',
	'check_subject'		=> 'Prosím vložte vec',
	'check_injection'	=> 'Zistený pokus o vloženie mailovej hlavičky',
	'check_active'		=> 'Emailové upozorňovanie nie je aktívne'
);

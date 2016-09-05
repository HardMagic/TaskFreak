<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'sl_SI.UTF-8', 'sl_SI.utf8', 'sl_SI', 'sl');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'V obrazcu je napaka - podatki niso bili shranjeni!',
  'field_compulsory'	=>	'To polje je obvezno'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "geslo se ne ujema",
  "user_pass_limit1" => "geslo mora imeti med ",
  "user_pass_limit2" => " in ",
  "user_pass_limit3" => " znakov",
  "user_pass_empty" => "geslo ne sme biti prazno",
  "user_pass_invalid" => "Napačno geslo",
  "user_name_limit1" => "uporabniško ime mora imeti med ",
  "user_name_limit2" => " in ",
  "user_name_limit3" => " znakov",
  "user_name_exists" => "uporabniško ime že obstaja",
  "user_name_empty" => "Prosim vnesite svoje uporabniško ime",
  "user_name_invalid" => "Uporabniško ime naj ne vsebuje posebnih znakov ali presledkov",
  "user_name_not_found" => "Uporabniško ime ne obstaja",
  "user_disabled" => "Račun je onemogočen",
  "user_forbidden" => "Niste pooblaščeni za prijavo",
  "user_email_empty" => "Prosim vpišite svoj e-poštni naslov",
  "user_email_format" => "Prosim vpište veljaven e-poštni nsalov",
  "user_email_invalid" => "E-poštnega naslova ne najdem",
  "user_password_invalid" => "Napačno geslo",
  "email_empty" => "Prosim vnesite svoj e-poštni naslov",
  "email_exists" => "račun s tem e-poštnim naslovm že obstaja",
  "email_invalid" => "Prosim vpište veljaven e-poštni nsalov",
  "document_wrong_type" => "napačen tip datoteke",
  "document_empty" => "prosim izberite datoteko",
  "common_name_empty" => "prosim vnesite ime",
  "common_title_empty" => "prosim vnesite naziv",
  "common_theme_empty" => "prosim izberite temo",
  "common_description_empty" => "prosim vnesite opis",
  "common_message_empty" => "prosim vnesite sporočilo",
  "common_date_empty" => "prosim izberite datum",
  "common_date_invalid" => "končni datum ni veljaven",
  "common_city_empty" => "prosim vnesite mesto",
  "common_info_empty" => "prosim vnesite kontaktne podatke",
  "common_url_empty" => "prosim vnesite naslov spletne strani",
  "common_file_empty" => "prosim izberite datoteko s klikom na gumb 'Browse..'",
  "login_email" => "vaš e-poštni naslov",
  "login_password" => "Geslo",
  "login_error0" => "Zahtevana je overovitev",
  "login_error1" => "Zahtevano je geslo",
  "login_error2" => "Dostop zavrnjen (omejeno področje)",
  "login_error3" => "Napačno uporabniško ime ali geslo",
  "login_last_date" => 'Datum zadnje prijave',
  "login_last_address"  => 'Naslov zadnje prijave',
  "post_user" => "uporabnik",
  "post_category" => "kategorija",
  "post_title" => "naslov",
  "post_documents" => "slike",
  "post_date" => "objavljena na",
  "post_by" => "od",
  "doc_file_name" => "ime datoteke",
  "doc_file_size" => "velikost datoteke",
  "doc_file_type" => "tip datoteke",
  "doc_remove" => "odstrani",
  "doc_update" => "posodobi datoteke",
  "post_description" => "opis",
  "button_create" => "Ustvari",
  "button_update" => "Posodobi",
  "button_delete" => "Izbriši",
  "button_login" => "Prijava",
  "profile_update_success" => "Račun uspešno posodobljen",
  "url" => "Spletna stran&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'danes',
	'tomorrow'			=> 'jutri',
	'days'				=> 'dni',
	'day'				=> 'dan',
	'weeks'				=> 'tedni',
	'week'				=> 'teden',
	'months'			=> 'meseci',
	'month'				=> 'mesec',
	'years'				=> 'leta',
	'year'				=> 'leto',
	'january'			=> 'januar',
	'february'			=> 'februar',
	'march'				=> 'marec',
	'april'				=> 'april',
	'may'				=> 'maj',
	'june'				=> 'junij',
	'july'				=> 'julij',
	'august'			=> 'avgust',
	'september'			=> 'september',
	'october'			=> 'oktober',
	'november'			=> 'november',
	'december'			=> 'december',
	'jan'				=> 'jan',
	'feb'				=> 'feb',
	'mar'				=> 'mar',
	'apr'				=> 'apr',
	'may'				=> 'maj',
	'jun'				=> 'jun',
	'jul'				=> 'jul',
	'aug'				=> 'avg',
	'sep'				=> 'sep',
	'oct'				=> 'okt',
	'nov'				=> 'nov',
	'dec'				=> 'dec',
	'monday'			=> 'ponedeljek',
	'tuesday'			=> 'torek',
	'wednesday'			=> 'sreda',
	'thursday'			=> 'četrtek',
	'friday'			=> 'petek',
	'saturday'			=> 'sobota',
	'sunday'			=> 'nedelja',
	'mon'				=> 'pon',
	'tue'				=> 'tor',
	'wed'				=> 'sre',
	'thu'				=> 'čet',
	'fri'				=> 'pet',
	'sat'				=> 'sob',
	'sun'				=> 'ned'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'NOTRI',
	'direction_out'		=> 'VEN',
	'recipient_from'	=> 'Od',
	'recipient_to'		=> 'Za',
	'check_recipient'	=> 'Prosim vnesite prejemnikov naslov',
	'check_subject'		=> 'Prosim vnesite zadevo',
	'check_injection'	=> 'Zaznan poskus vriva glave v e-pošto',
	'check_active'		=> 'Opozorilo z e-pošto ni aktivno'
);

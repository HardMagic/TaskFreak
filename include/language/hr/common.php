<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'hr_HR.UTF-8', 'hr_HR.utf8', 'hr_HR.utf8', 'hr_HR', 'hr');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Greška u formi - Informacije nisu spremljene!',
  'field_compulsory'	=>	'Polje je obvezno!'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "Nije dobra lozinka",
  "user_pass_limit1" => "lozinka mora biti izmedu ",
  "user_pass_limit2" => " i ",
  "user_pass_limit3" => " alfanumerickih znakova",
  "user_pass_empty" => "lozinka nemože biti prazna",
  "user_pass_invalid" => "Kriva lozinka",
  "user_name_limit1" => "korisnicko ime mora biti izmedu ",
  "user_name_limit2" => " i ",
  "user_name_limit3" => " alfanumerickih znakova",
  "user_name_exists" => "korisnicko ime postoji",
  "user_name_empty" => "unesite korisnicko ime",
  "user_name_invalid" => "korinicko ime nesmije imati specialne znakove ili razmake",
  "user_name_not_found" => "korisnicko ime nepostoji",
  "user_disabled" => "racun zabranjen",
  "user_forbidden" => "niste autorizirani",
  "user_email_empty" => "unesite e-mail",
  "user_email_format" => "krivi e-mail",
  "user_email_invalid" => "nema e-mail-a",
  "user_password_invalid" => "kriva lozinka",
  "email_empty" => "unesite e-mail",
  "email_exists" => "postoji racun sa ovim e-mailom",
  "email_invalid" => "unesite valjani e-mail",
  "document_wrong_type" => "krivi tip dokomenta",
  "document_empty" => "podaberi dokument",
  "common_name_empty" => "unesite ime",
  "common_title_empty" => "unesite titulu",
  "common_theme_empty" => "odaberite temu",
  "common_description_empty" => "odaberite opis",
  "common_message_empty" => "unesite poruku",
  "common_date_empty" => "odaberite datum",
  "common_date_invalid" => "datum završetka je krivi",
  "common_city_empty" => "odaberite grad",
  "common_info_empty" => "kontakt informacije",
  "common_url_empty" => "web adresa",
  "common_file_empty" => "odaberite datoteku",
  "login_email" => "vaš email",
  "login_password" => "lozinka",
  "login_error0" => "autorizacije je potrebna",
  "login_error1" => "lozinka je potrebna",
  "login_error2" => "zabranjen ulaz",
  "login_error3" => "krivia lozinka ili korisnicko ime",
  "login_last_date" => 'zadnji ulaz',
  "login_last_address"  => 'zadnja adresa ulaza',
  "post_user" => "korisnik",
  "post_category" => "kategorija",
  "post_title" => "naslov",
  "post_documents" => "fotografija",
  "post_date" => "objavljeno ",
  "post_by" => "sa",
  "doc_file_name" => "ime dokumenta",
  "doc_file_size" => "velicina dokumenta",
  "doc_file_type" => "tip dokumenta",
  "doc_remove" => "makni",
  "doc_update" => "nadopuna dokumenta",
  "post_description" => "opis",
  "button_create" => "napravi",
  "button_update" => "nadopuni",
  "button_delete" => "izbriši",
  "button_login" => "ulaz",
  "profile_update_success" => "racun uspješno izmjenjen",
  "url" => "stranica &nbsp;:&nbsp;",
  "atsign" => "(od)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'danas',
	'tomorrow'			=> 'sutra',
	'days'				=> 'dana',
	'day'				=> 'dan',
	'weeks'				=> 'tjedna',
	'week'				=> 'tjedan',
	'months'			=> 'mjeseci',
	'month'				=> 'mjesec',
	'years'				=> 'godina',
	'year'				=> 'godina',
	'january'			=> 'sijecanj',
	'february'			=> 'veljaca',
	'march'				=> 'ožujak',
	'april'				=> 'travanj',
	'may'				=> 'svibanj',
	'june'				=> 'lipanj',
	'july'				=> 'srpanj',
	'august'			=> 'kolovoz',
	'september'			=> 'rujan',
	'october'			=> 'listopad',
	'november'			=> 'studeni',
	'december'			=> 'prosinac',
	'jan'				=> 'sj',
	'feb'				=> 've',
	'mar'				=> 'ož',
	'apr'				=> 'tr',
	'may'				=> 'sv',
	'jun'				=> 'li',
	'jul'				=> 'sr',
	'aug'				=> 'ko',
	'sep'				=> 'ru',
	'oct'				=> 'li',
	'nov'				=> 'st',
	'dec'				=> 'pr',
	'monday'			=> 'ponedjeljak',
	'tuesday'			=> 'utorak',
	'wednesday'			=> 'srijeda',
	'thursday'			=> 'cetvrtak',
	'friday'			=> 'petak',
	'saturday'			=> 'subota',
	'sunday'			=> 'nedjelja',
	'mon'				=> 'pon',
	'tue'				=> 'uto',
	'wed'				=> 'sri',
	'thu'				=> 'cet',
	'fri'				=> 'pet',
	'sat'				=> 'sub',
	'sun'				=> 'ned'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'Unutra',
	'direction_out'		=> 'Van',
	'recipient_from'	=> 'Od',
	'recipient_to'		=> 'Prema',
	'check_recipient'	=> 'adresu primatelja',
	'check_subject'		=> 'subjekt',
	'check_injection'	=> 'Email header injection attempt detected',
	'check_active'		=> 'Email nije aktivan'
);

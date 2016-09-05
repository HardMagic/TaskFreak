<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'en_EN.UTF-8', 'en_GB.utf8', 'en_US.utf8', 'en_EN', 'en');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Greske u formularu - Informacije nisu snimljene!',
  'field_compulsory'	=>	'Ovo polje je obavezno'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "sifra netacna",
  "user_pass_limit1" => "sifra mora imati izmedju ",
  "user_pass_limit2" => " i ",
  "user_pass_limit3" => " karaktera",
  "user_pass_empty" => "sifra nemoze biti prazna",
  "user_pass_invalid" => "Pogresno korisnicko ime",
  "user_name_limit1" => "korisnicko ime mora imati izmedju ",
  "user_name_limit2" => " i ",
  "user_name_limit3" => " karaktera",
  "user_name_exists" => "Korisnicko ime vec postoji",
  "user_name_empty" => "Molim vas unesite korisnicko ime",
  "user_name_invalid" => "Korisnicko ime nebi trebalo da sadrzi specijalne karaktere i prazna polja",
  "user_name_not_found" => "korisnicko ime nije pronadjeno",
  "user_disabled" => "Nalog iskljucen",
  "user_forbidden" => "Niste autorizovani da se logojete",
  "user_email_empty" => "Molim vas unesite vas email",
  "user_email_format" => "Molim vas unesite tacan email",
  "user_email_invalid" => "Email nije pronadjen",
  "user_password_invalid" => "Pogresna sifra",
  "email_empty" => "Molim vas unesite vasu email adresu",
  "email_exists" => "nalog sa ovom email adresom vec postoji",
  "email_invalid" => "molim vas unesite tacnu email adresu",
  "document_wrong_type" => "pogresan tip fajla",
  "document_empty" => "molim vas izaberite fajl",
  "common_name_empty" => "molim vas unesite ime",
  "common_title_empty" => "molim vas unesite naslov",
  "common_theme_empty" => "molim vas unesite temu",
  "common_description_empty" => "molim vas unesite opis",
  "common_message_empty" => "molim vas unesite poruku",
  "common_date_empty" => "molim vas unesite datum",
  "common_date_invalid" => "krajnji datum nije tacan",
  "common_city_empty" => "molim vas unesite grad",
  "common_info_empty" => "molim vas unesite kontakt informacije",
  "common_url_empty" => "molim vas unesite web adresu",
  "common_file_empty" => "molim vas unesite fajl klikom na 'Trazi..' dugme",
  "login_email" => "Vas email",
  "login_password" => "Sifra",
  "login_error0" => "Autentikacija neophodna",
  "login_error1" => "Sifra neophodna",
  "login_error2" => "Pristup odbijen (oblast sa ogranicenim pristupom)",
  "login_error3" => "Pogresno ime ili sifra",
  "login_last_date" => 'Datum poslednjeg logovanja',
  "login_last_address"  => 'Adresa poslednjeg logovanja',
  "post_user" => "korisnik",
  "post_category" => "kategorija",
  "post_title" => "naslov",
  "post_documents" => "slike",
  "post_date" => "poslato",
  "post_by" => "od",
  "doc_file_name" => "ime fajla",
  "doc_file_size" => "velicina fajla",
  "doc_file_type" => "tip fajla",
  "doc_remove" => "obrisi",
  "doc_update" => "osvezi polja",
  "post_description" => "opis",
  "button_create" => "Napravi",
  "button_update" => "Osvezi",
  "button_delete" => "Obrisi",
  "button_login" => "Logovanje",
  "profile_update_success" => "Nalog uspesno osvezen",
  "url" => "Website&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'danas',
	'tomorrow'			=> 'sutra',
	'days'				=> 'dana',
	'day'				=> 'dan',
	'weeks'				=> 'nedelja',
	'week'				=> 'nedelja',
	'months'			=> 'meseci',
	'month'				=> 'mesec',
	'years'				=> 'godina',
	'year'				=> 'godina',
	'january'			=> 'januar',
	'february'			=> 'februar',
	'march'				=> 'mart',
	'april'				=> 'april',
	'may'				=> 'maj',
	'june'				=> 'jun',
	'july'				=> 'jul',
	'august'			=> 'avgust',
	'september'			=> 'septembar',
	'october'			=> 'oktobar',
	'november'			=> 'novembar',
	'december'			=> 'decembar',
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
	'monday'			=> 'ponedeljak',
	'tuesday'			=> 'utorak',
	'wednesday'			=> 'sreda',
	'thursday'			=> 'cetvrtak',
	'friday'			=> 'petak',
	'saturday'			=> 'subota',
	'sunday'			=> 'nedelja',
	'mon'				=> 'pon',
	'tue'				=> 'uto',
	'wed'				=> 'sre',
	'thu'				=> 'cet',
	'fri'				=> 'pet',
	'sat'				=> 'sub',
	'sun'				=> 'ned'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'U',
	'direction_out'		=> 'IZ',
	'recipient_from'	=> 'Od',
	'recipient_to'		=> 'Do',
	'check_recipient'	=> 'Molim vas unesite adresu primaoca',
	'check_subject'		=> 'Molim vas unesite temu',
	'check_injection'	=> 'Email header injection pokusaj detektovan',
	'check_active'		=> 'Email alarm nije aktivan'
);

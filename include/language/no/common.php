<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Norwegian translation by Håvard Kristoffersen, www.theta-design.no	     *
\****************************************************************************/

setLocale(LC_ALL, 'en_NO.UTF-8', 'no_NO.utf8', 'no_NO.utf8', 'no_NO', 'no');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Det er feil i skjemaet - Informasjonen ble ikke lagret!',
  'field_compulsory'	=>	'Dette feltet er obligatorisk'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "passordene er ulike",
  "user_pass_limit1" => "passord må ha mellom ",
  "user_pass_limit2" => " og ",
  "user_pass_limit3" => " tegn",
  "user_pass_empty" => "passord kan ikke være blankt",
  "user_pass_invalid" => "Ugyldig passord",
  "user_name_limit1" => "brukernavn må ha mellom ",
  "user_name_limit2" => " og ",
  "user_name_limit3" => " tegn",
  "user_name_exists" => "brukernavn finnes fra før",
  "user_name_empty" => "Vennligst skriv inn brukernavn",
  "user_name_invalid" => "Brukernavn kan ikke inneholde spesialtegn og mellomrom",
  "user_name_not_found" => "brukernavn ble ikke funnet",
  "user_disabled" => "Konto deaktivert",
  "user_forbidden" => "Du er ikke autorisert til å logge inn",
  "user_email_empty" => "Fyll inn din e-postadresse",
  "user_email_format" => "Vennligst fyll inn en gyldig e-postadresse",
  "user_email_invalid" => "E-postadresse ble ikke funnet",
  "user_password_invalid" => "Feil passord",
  "email_empty" => "Vennligst inn din e-postadresse",
  "email_exists" => "en konto med denne e-postadressen finnes allerede",
  "email_invalid" => "vennligst fyll inn en gyldig e-postadresse",
  "document_wrong_type" => "feil filtype",
  "document_empty" => "velg en fil",
  "common_name_empty" => "vennligst fyll inn et navn",
  "common_title_empty" => "vennligst fyll inn en tittel",
  "common_theme_empty" => "velg et tema",
  "common_description_empty" => "fyll inn en beskrivelse",
  "common_message_empty" => "skriv en beskjed",
  "common_date_empty" => "velg dato",
  "common_date_invalid" => "sluttdato er ikke gyldig",
  "common_city_empty" => "fyll inn by",
  "common_info_empty" => "fyll inn kontaktinformasjon",
  "common_url_empty" => "fyll inn webadresse",
  "common_file_empty" => "velg en fil ved å trykke 'Browse..'-knappen",
  "login_email" => "Din e-post",
  "login_password" => "Passord",
  "login_error0" => "Autentifisering er påkrevet",
  "login_error1" => "Passord er påkrevet",
  "login_error2" => "Nektet tilgang (begrenset område)",
  "login_error3" => "Ugyldig brukernavn eller passord",
  "login_last_date" => 'Siste login-dato',
  "login_last_address"  => 'Siste login-adresse',
  "post_user" => "bruker",
  "post_category" => "kategori",
  "post_title" => "tittel",
  "post_documents" => "fotografier",
  "post_date" => "postet den",
  "post_by" => "av",
  "doc_file_name" => "filnavn",
  "doc_file_size" => "filstørrelse",
  "doc_file_type" => "filtype",
  "doc_remove" => "fjern",
  "doc_update" => "oppdatér filer",
  "post_description" => "beskrivelse",
  "button_create" => "Opprett",
  "button_update" => "Oppdatér",
  "button_delete" => "Slett",
  "button_login" => "Logg inn",
  "profile_update_success" => "Konto ble oppdatert",
  "url" => "Webside&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'idag',
	'tomorrow'			=> 'i morgen',
	'days'				=> 'dager',
	'day'				=> 'dag',
	'weeks'				=> 'uker',
	'week'				=> 'uke',
	'months'			=> 'måneder',
	'month'				=> 'måned',
	'years'				=> 'år',
	'year'				=> 'år',
	'january'			=> 'januar',
	'february'			=> 'februar',
	'march'				=> 'mars',
	'april'				=> 'april',
	'may'				=> 'mai',
	'june'				=> 'juni',
	'july'				=> 'juli',
	'august'			=> 'august',
	'september'			=> 'september',
	'october'			=> 'oktober',
	'november'			=> 'november',
	'december'			=> 'desember',
	'jan'				=> 'jan',
	'feb'				=> 'feb',
	'mar'				=> 'mar',
	'apr'				=> 'apr',
	'may'				=> 'mai',
	'jun'				=> 'jun',
	'jul'				=> 'jul',
	'aug'				=> 'aug',
	'sep'				=> 'sep',
	'oct'				=> 'okt',
	'nov'				=> 'nov',
	'dec'				=> 'des',
	'monday'			=> 'mandag',
	'tuesday'			=> 'tirsdag',
	'wednesday'			=> 'onsdag',
	'thursday'			=> 'torsdag',
	'friday'			=> 'fredag',
	'saturday'			=> 'lørdag',
	'sunday'			=> 'søndag',
	'mon'				=> 'man',
	'tue'				=> 'tirs',
	'wed'				=> 'ons',
	'thu'				=> 'tors',
	'fri'				=> 'fre',
	'sat'				=> 'lør',
	'sun'				=> 'søn'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'IN',
	'direction_out'		=> 'OUT',
	'recipient_from'	=> 'Fra',
	'recipient_to'		=> 'Til',
	'check_recipient'	=> 'Fyll inn mottakers e-mailadresse',
	'check_subject'		=> 'Skriv et emne',
	'check_injection'	=> 'Email header injection attempt detected',
	'check_active'		=> 'E-postvarsling er ikke aktiv'
);

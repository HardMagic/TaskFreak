<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user  - Swedish language, sunday version...                          *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Marcus Persson <marcus (at) gazebo.se>                            *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'sv_SE.UTF-8', 'sv_SE.utf8', 'sv_SE', 'swedish.utf8', 'swedish', 'sv');
////setLocale(LC_ALL, 'sv_SE.ISO-8859-1', 'sv_SE.iso8859-1', 'sv_SE', 'swedish');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Det är några fel i formuläret - Informationen sparades aldrig!',
  'field_compulsory'	=> 'Detta fält är obligatoriskt'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "lösenord matchar inte",
  "user_pass_limit1" => "lösenordet måste ha mellan",
  "user_pass_limit2" => " och ",
  "user_pass_limit3" => " tecken",
  "user_pass_empty" => "lösenordet kan inte vara tomt",
  "user_pass_invalid" => "Ogiltigt lösenord",
  "user_name_limit1" => "användarnamnet måste ha mellan",
  "user_name_limit2" => " och ",
  "user_name_limit3" => " tecken",
  "user_name_exists" => "användarnamnet finns redan",
  "user_name_empty" => "Var god och fyll i ditt användarnamn",
  "user_name_invalid" => "Användarnamnet skall inte innehålla några special tecken eller mellanslag",
  "user_name_not_found" => "användarnamn hittades inte",
  "user_disabled" => "Kontot är inaktiverat",
  "user_forbidden" => "Du har inte behörighet att logga in",
  "user_email_empty" => "Var god och fyll i e-postadress",
  "user_email_format" => "Fyll i en giltig e-postadress",
  "user_email_invalid" => "E-postadress hittades inte",
  "user_password_invalid" => "Felaktigt lösenord",
  "email_empty" => "Var god och fyll i ditt lösenord",
  "email_exists" => "ett konto med denna e-postadress existerar redan",
  "email_invalid" => "Var god och fyll i en giltig e-postadress",
  "document_wrong_type" => "Felaktig fil typ",
  "document_empty" => "välj en fil",
  "common_name_empty" => "fyll i ett namn",
  "common_title_empty" => "fyll i en titel",
  "common_theme_empty" => "välj ett tema",
  "common_description_empty" => "fyll i en beskrivning",
  "common_message_empty" => "fyll i ett meddelande",
  "common_date_empty" => "välj ett datum",
  "common_date_invalid" => "slutdatum är inte giltigt",
  "common_city_empty" => "fyll i stad",
  "common_info_empty" => "fyll i kontakt information",
  "common_url_empty" => "fyll i en webb adress",
  "common_file_empty" => "välj en fil genom att klicka på 'bläddra...' knappen",
  "login_email" => "Din e-post",
  "login_password" => "Lösenord",
  "login_error0" => "Autentisering krävs",
  "login_error1" => "Lösenord krävs",
  "login_error2" => "Otillåten åtkomst (skyddad area)",
  "login_error3" => "Ogiltigt användarnamn eller lösenord",
  "login_last_date" => 'Senast inloggnings datum',
  "login_last_address"  => 'Senast inloggnings adress',
  "post_user" => "användare",
  "post_category" => "kategori",
  "post_title" => "titel",
  "post_documents" => "foton",
  "post_date" => "postat den",
  "post_by" => "av",
  "doc_file_name" => "filnamn",
  "doc_file_size" => "filstorlek",
  "doc_file_type" => "filtyp",
  "doc_remove" => "tabort",
  "doc_update" => "uppdatera filer",
  "post_description" => "beskrivning",
  "button_create" => "Skapa",
  "button_update" => "Updatera",
  "button_delete" => "Radera",
  "button_login" => "Logga in",
  "profile_update_success" => "Kontot har uppdaterats",
  "url" => "Webbsida&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'idag',
	'tomorrow'			=> 'imorgon',
	'days'				=> 'dagar',
	'day'				=> 'dag',
	'weeks'				=> 'veckor',
	'week'				=> 'vecka',
	'months'			=> 'månader',
	'month'				=> 'månad',
	'years'				=> 'år',
	'year'				=> 'år',
	'january'			=> 'januari',
	'february'			=> 'februari',
	'march'				=> 'mars',
	'april'				=> 'april',
	'may'				=> 'maj',
	'june'				=> 'juni',
	'july'				=> 'juli',
	'august'			=> 'augusti',
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
	'aug'				=> 'aug',
	'sep'				=> 'sep',
	'oct'				=> 'oct',
	'nov'				=> 'nov',
	'dec'				=> 'dec',
	'monday'			=> 'måndag',
	'tuesday'			=> 'tisdag',
	'wednesday'			=> 'onsdag',
	'thursday'			=> 'torsdag',
	'friday'			=> 'fredag',
	'saturday'			=> 'lördag',
	'sunday'			=> 'söndag',
	'mon'				=> 'mån',
	'tue'				=> 'tis',
	'wed'				=> 'ons',
	'thu'				=> 'tor',
	'fri'				=> 'fre',
	'sat'				=> 'lör',
	'sun'				=> 'sön'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'IN',
	'direction_out'		=> 'UT',
	'recipient_from'	=> 'Från',
	'recipient_to'		=> 'Till',
	'check_recipient'	=> 'Fyll i en mottagarns adress',
	'check_subject'		=> 'Fyll i subjekt',
	'check_injection'	=> "E-post 'header injection' försök upptäckt",
	'check_active'		=> 'E-post alarm är inte aktiverat'
);

<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Tobias Frasch <frasch@starsolutions.de>                     *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL,'de_DE.UTF-8', 'de_DE', 'de', 'ge');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Das Formular enth&auml;lt Fehler - Die Eingaben wurden nicht gespeichert!',
  'field_compulsory'	=>	'Das ist ein Pflichtfeld'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "Passwort ist falsch",
  "user_pass_limit1" => "Das Passwort muss ",
  "user_pass_limit2" => " bis ",
  "user_pass_limit3" => " Zeichen lang sein",
  "user_pass_empty" => "Das Passwortfeld darf nicht leer sein.",
  "user_pass_invalid" => "Falsches Passwort",
  "user_name_limit1" => "Der Benutzername muss ",
  "user_name_limit2" => " bis ",
  "user_name_limit3" => " Zeichen lang sein",
  "user_name_exists" => "Der Benutzername existiert bereits",
  "user_name_empty" => "Bitte geben Sie ihren Benutzernamen ein",
  "user_name_invalid" => "Der Benutzername darf keine Sonderzeichen oder Leerzeichen beinhalten",
  "user_name_not_found" => "Benutzername nicht gefunden",
  "user_disabled" => "Account deaktiviert",
  "user_forbidden" => "Sie haben keine Berechtigung sich einzuloggen",
  "user_email_empty" => "Bitte geben Sie ihre E-Mail-Adresse ein",
  "user_email_format" => "Bitte geben Sie eine g&uuml;ltige E-Mail-Adresse ein",
  "user_email_invalid" => "E-Mail-Adresse ist ung&uuml;ltig.",
  "user_password_invalid" => "Falsches Passwort.",
  "email_empty" => "Bitte geben Sie ihre E-Mail-Adresse ein.",
  "email_exists" => "Es existiert bereits ein Zugang mit dieser E-Mail-Adresse",
  "email_invalid" => "Bitte geben Sie eine g&uuml;ltige E-Mail-Adresse ein",
  "document_wrong_type" => "Falscher Dateityp",
  "document_empty" => "Bitte w&auml;hlen Sie eine Datei aus",
  "common_name_empty" => "Bitte geben Sie einen Namen ein",
  "common_title_empty" => "Bitte geben Sie einen Titel ein",
  "common_theme_empty" => "Bitte w&auml;hlen Sie ein Thema aus",
  "common_description_empty" => "Bitte geben Sie eine Beschreibung ein",
  "common_message_empty" => "Bitte geben Sie eine Nachricht ein",
  "common_date_empty" => "Bitte wahlen Sie ein Datum aus",
  "common_date_invalid" => "Das Enddatum ist ung&uuml;ltig",
  "common_city_empty" => "Bitte geben Sie eine Stadt ein",
  "common_info_empty" => "Bitte geben Sie die Kontaktinformationen ein",
  "common_url_empty" => "Bitte geben Sie eine Web-Adresse ein",
  "common_file_empty" => "Bitte w&auml;hlen Sie eine Datei aus, indem Sie auf den 'durchsuchen'-Button klicken",
  "login_email" => "Ihre E-Mail-Adresse",
  "login_password" => "Passwort",
  "login_error0" => "Sie m&uuml;ssen sich anmelden",
  "login_error1" => "Passwort ben&ouml;tigt.",
  "login_error2" => "Zugriff verweigert (gesch&uuml;tzter Bereich)",
  "login_error3" => "Ung&uuml;ltiger Benutzername oder Passwort.",
  "login_last_date" => 'Letztes Login-Datum',
  "login_last_address"  => 'Letzte Login-Adresse',
  "post_user" => "Benutzer",
  "post_category" => "Kategorie",
  "post_title" => "Titel",
  "post_documents" => "Fotos",
  "post_date" => "geposted am",
  "post_by" => "von",
  "doc_file_name" => "Dateiname",
  "doc_file_size" => "Dateigr&ouml;sse",
  "doc_file_type" => "Dateityp",
  "doc_remove" => "entfenerne",
  "doc_update" => "Dateien aktualisieren",
  "post_description" => "Beschreibung",
  "button_create" => "Erstellen",
  "button_update" => "Aktualisieren",
  "button_delete" => "L&ouml;schen",
  "button_login" => "Anmelden",
  "profile_update_success" => "Zugang wurde erfolgreich aktualisiert",
  "url" => "Website&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'heute',
	'tomorrow'			=> 'morgen',
	'days'				=> 'Tage',
	'day'				=> 'Tag',
	'weeks'				=> 'Wochen',
	'week'				=> 'Woche',
	'months'			=> 'Monate',
	'month'			=> 'Monat',
	'years'				=> 'Jahre',
	'year'				=> 'Jahr',
	'january'			=> 'Januar',
	'february'			=> 'Februar',
	'march'				=> 'M&auml;rz',
	'april'				=> 'April',
	'may'				=> 'Mai',
	'june'				=> 'Juni',
	'july'				=> 'Juli',
	'august'			=> 'August',
	'september'		=> 'September',
	'october'			=> 'Oktober',
	'november'			=> 'November',
	'december'			=> 'Dezember',
	'jan'				=> 'Jan',
	'feb'				=> 'Feb',
	'mar'				=> 'Mrz',
	'apr'				=> 'Apr',
	'may'				=> 'Mai',
	'jun'				=> 'Juni',
	'jul'				=> 'Juli',
	'aug'				=> 'Aug',
	'sep'				=> 'Sep',
	'oct'				=> 'Okt',
	'nov'				=> 'Nov',
	'dec'				=> 'Dez',
	'monday'			=> 'Montag',
	'tuesday'			=> 'Dienstag',
	'wednesday'			=> 'Mittwoch',
	'thursday'			=> 'Donnerstag',
	'friday'			=> 'Freitag',
	'saturday'			=> 'Samstag',
	'sunday'			=> 'Sonntag',
	'mon'				=> 'Mo',
	'tue'				=> 'Di',
	'wed'				=> 'Mi',
	'thu'				=> 'Do',
	'fri'				=> 'Fr',
	'sat'				=> 'Sa',
	'sun'				=> 'So'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'IN',
	'direction_out'	=> 'OUT',
	'recipient_from'	=> 'Von',
	'recipient_to'		=> 'An',
	'check_recipient'	=> 'Bitte einen Empf&auml;nger eingeben',
	'check_subject'	=> 'Bitte einen Betreff eingeben',
	'check_injection'	=> 'E-Mail-Header-Injection-Versuch erkannt',
	'check_active'		=> 'E-Mail-Benachrichtung ist nicht aktiviert'
);

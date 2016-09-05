<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'nl_NL.UTF-8', 'nl_NL');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Er zitten wat fouten in het formulier - Informatie niet opgeslagen!',
  'field_compulsory'	=>	'Dit veld is verplicht'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "Wachtwoorden komen niet overeen",
  "user_pass_limit1" => "Wachtwoorden dienen tussen de ",
  "user_pass_limit2" => " en ",
  "user_pass_limit3" => " karakters te bevatten",
  "user_pass_empty" => "Wachtwoord kan niet leeg zijn",
  "user_pass_invalid" => "Ongeldig wachtwoord",
  "user_name_limit1" => "Gebruikersnaam dient tussen de ",
  "user_name_limit2" => " en ",
  "user_name_limit3" => " karakters te bevatten",
  "user_name_exists" => "Gebruikersnaam bestaat reeds",
  "user_name_empty" => "Geef uw gebruikersnaam op alstublieft",
  "user_name_invalid" => "Gebruikersnaam mag geen speciale tekens of spaties bevatten",
  "user_name_not_found" => "Gebruikersnaam niet gevonden",
  "user_disabled" => "Account uitgeschakeld",
  "user_forbidden" => "U heeft geen inlogrechten",
  "user_email_empty" => "Geef uw emailadres op alstublieft",
  "user_email_format" => "Geef alstublieft een geldig emailadres op",
  "user_email_invalid" => "Emailadres niet gevonden",
  "user_password_invalid" => "Verkeerd wachtwoord",
  "email_empty" => "Geef uw emailadres op alstublieft",
  "email_exists" => "Er bestaat reeds een account met dit emailadres",
  "email_invalid" => "Geef alstublieft een geldig emailadres op",
  "document_wrong_type" => "Verkeerd bestandstype",
  "document_empty" => "Selecteer alstublieft een bestand",
  "common_name_empty" => "Geef alstublieft een naam op",
  "common_title_empty" => "Geef alstublieft een titel op",
  "common_theme_empty" => "Selecteer alstublieft een thema",
  "common_description_empty" => "Geef alstublieft een beschrijving op",
  "common_message_empty" => "Geef alstublieft een bericht op",
  "common_date_empty" => "Selecteer alstublieft een datum",
  "common_date_invalid" => "Einddatum is niet geldig",
  "common_city_empty" => "Geef alstublieft een stad op",
  "common_info_empty" => "Geef alstublieft contactinformatie op",
  "common_url_empty" => "Geef alstublieft een internetadres op",
  "common_file_empty" => "Selecteer alstublieft een bestand door op 'Bladeren...' te klikken",
  "login_email" => "Uw emailadres",
  "login_password" => "Wachtwoord",
  "login_error0" => "Inloggen vereist",
  "login_error1" => "Wachtwoord vereist",
  "login_error2" => "Toegang geweigerd (afgeschermd gebied)",
  "login_error3" => "Ongeldige gebruikersnaam of wachtwoord",
  "login_last_date" => 'Laatste logindatum',
  "login_last_address"  => 'Laatste loginadres',
  "post_user" => "Gebruiker",
  "post_category" => "Categorie",
  "post_title" => "Titel",
  "post_documents" => "Foto's",
  "post_date" => "Geplaatst op",
  "post_by" => "door",
  "doc_file_name" => "Bestandsnaam",
  "doc_file_size" => "Bestandsgrootte",
  "doc_file_type" => "Bestandsformaat",
  "doc_remove" => "Verwijderen",
  "doc_update" => "Update bestanden",
  "post_description" => "Omschrijving",
  "button_create" => "Aanmaken",
  "button_update" => "Updaten",
  "button_delete" => "Verwijderen",
  "button_login" => "Inloggen",
  "profile_update_success" => "Account succesvol bijgewerkt",
  "url" => "Website&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'vandaag',
	'tomorrow'			=> 'morgen',
	'days'				=> 'dagen',
	'day'				=> 'dag',
	'weeks'				=> 'weken',
	'week'				=> 'week',
	'months'			=> 'maanden',
	'month'				=> 'maand',
	'years'				=> 'jaren',
	'year'				=> 'jaar',
	'january'			=> 'januari',
	'february'			=> 'februari',
	'march'				=> 'maart',
	'april'				=> 'april',
	'may'				=> 'kan',
	'june'				=> 'juni',
	'july'				=> 'juli',
	'august'			=> 'augustus',
	'september'			=> 'september',
	'october'			=> 'oktober',
	'november'			=> 'november',
	'december'			=> 'december',
	'jan'				=> 'jan',
	'feb'				=> 'feb',
	'mar'				=> 'maa',
	'apr'				=> 'apr',
	'may'				=> 'mei',
	'jun'				=> 'jun',
	'jul'				=> 'jul',
	'aug'				=> 'aug',
	'sep'				=> 'sep',
	'oct'				=> 'okt',
	'nov'				=> 'nov',
	'dec'				=> 'dec',
	'monday'			=> 'maandag',
	'tuesday'			=> 'dinsdag',
	'wednesday'			=> 'woensdag',
	'thursday'			=> 'donderdag',
	'friday'			=> 'vrijdag',
	'saturday'			=> 'zaterdag',
	'sunday'			=> 'zondag',
	'mon'				=> 'ma',
	'tue'				=> 'di',
	'wed'				=> 'wo',
	'thu'				=> 'do',
	'fri'				=> 'vr',
	'sat'				=> 'za',
	'sun'				=> 'zo'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'IN',
	'direction_out'		=> 'UIT',
	'recipient_from'	=> 'Van',
	'recipient_to'		=> 'Aan',
	'check_recipient'	=> 'Geef svp ontvangstadres op',
	'check_subject'		=> 'Geef svp onderwerp op',
	'check_injection'	=> 'Emailheader injectiepoging gedetecteerd',
	'check_active'		=> 'Emailalarm is niet actief'
);

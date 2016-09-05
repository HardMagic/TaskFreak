<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'it_IT.UTF-8', 'it_IT');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Ci sono alcuni errori nella forma - le informazioni non conservate!',
  'field_compulsory'	=> 'Questo campo e\' obbligatorio'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "La password non coincide",
  "user_pass_limit1" => "La password deve avere tra i ",
  "user_pass_limit2" => " e ",
  "user_pass_limit3" => " caratteri",
  "user_pass_empty" => "La password non puo' essere vuota!",
  "user_pass_invalid" => "Password non valida!",
  "user_name_limit1" => "L'username deve avere tra i ",
  "user_name_limit2" => " e ",
  "user_name_limit3" => " caratteri",
  "user_name_exists" => "Questo username esiste gia'",
  "user_name_empty" => "Inserici il tuo username",
  "user_name_invalid" => "L'username non deve contenere spazi o caratteri speciali",
  "user_name_not_found" => "Username inesistente",
  "user_disabled" => "Account disabilitato",
  "user_forbidden" => "Non sei autorizzato ad accedere",
  "user_email_empty" => "Inserisci il tuo indirizzo email",
  "user_email_format" => "Inserisci un indirizzo email valido",
  "user_email_invalid" => "Indirizzo email non trovato",
  "user_password_invalid" => "Password sbagliata!",
  "email_empty" => "Inserisci il tuo indirizzo email",
  "email_exists" => "Esiste un altro account con lo stesso indirizzo email",
  "email_invalid" => "Inserisci un indirizzo email valido",
  "document_wrong_type" => "Tipo di file errato",
  "document_empty" => "Seleziona un file",
  "common_name_empty" => "Inserisci un nome",
  "common_title_empty" => "Inserisci un titolo",
  "common_theme_empty" => "Scegli un tema",
  "common_description_empty" => "Inserisci una descrizione",
  "common_message_empty" => "Inserisci un messaggio",
  "common_date_empty" => "Seleziona una data",
  "common_date_invalid" => "La data termine non è valida",
  "common_city_empty" => "Inserisci la citta'",
  "common_info_empty" => "Inserisci le informazioni sul contatto",
  "common_url_empty" => "Inserisci una URL",
  "common_file_empty" => "Seleziona un file cliccando sul pulsante 'Sfoglia..' ",
  "login_email" => "Il tuo indirizzo email",
  "login_password" => "password",
  "login_error0" => "E' richiesta l'autenticazione",
  "login_error1" => "E' richiesta la passowrd",
  "login_error2" => "Accesso negato (restricted area)",
  "login_error3" => "Username o password non validi",
  "login_last_date" => 'Data ultimo login',
  "login_last_address"  => 'IP ultimo login',
  "post_user" => "Utente",
  "post_category" => "Categoria",
  "post_title" => "Titolo",
  "post_documents" => "Foto",
  "post_date" => "Inserito il",
  "post_by" => "da",
  "doc_file_name" => "nome del file",
  "doc_file_size" => "dimensioni file",
  "doc_file_type" => "tipo di file",
  "doc_remove" => "rimuovi",
  "doc_update" => "aggiorna i file",
  "post_description" => "descrizione",
  "button_create" => "Crea",
  "button_update" => "Aggiorna",
  "button_delete" => "Cancella",
  "button_login" => "Accedi",
  "profile_update_success" => "Account aggiornato!",
  "url" => "Sito Web&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'oggi',
	'tomorrow'			=> 'domani',
	'days'				=> 'giorni',
	'day'				=> 'giorno',
	'weeks'				=> 'settimane',
	'week'				=> 'settimana',
	'months'			=> 'mesi',
	'month'				=> 'mese',
	'years'				=> 'anni',
	'year'				=> 'anno',
	'january'			=> 'gennaio',
	'february'			=> 'febbraio',
	'march'				=> 'marzo',
	'april'				=> 'aprile',
	'may'				=> 'maggio',
	'june'				=> 'giugno',
	'july'				=> 'luglio',
	'august'			=> 'agosto',
	'september'			=> 'settembre',
	'october'			=> 'ottobre',
	'november'			=> 'nuvembre',
	'december'			=> 'dicembre',
	'jan'				=> 'gen',
	'feb'				=> 'feb',
	'mar'				=> 'mar',
	'apr'				=> 'apr',
	'may'				=> 'mag',
	'jun'				=> 'giu',
	'jul'				=> 'lug',
	'aug'				=> 'ago',
	'sep'				=> 'set',
	'oct'				=> 'ott',
	'nov'				=> 'nub',
	'dec'				=> 'dic',
	'monday'			=> 'lunedi',
	'tuesday'			=> 'martedi',
	'wednesday'			=> 'mercoledì',
	'thursday'			=> 'giovedi',
	'friday'			=> 'venerdi',
	'saturday'			=> 'sabato',
	'sunday'			=> 'domenica',
	'mon'				=> 'lu',
	'tue'				=> 'ma',
	'wed'				=> 'me',
	'thu'				=> 'gi',
	'fri'				=> 've',
	'sat'				=> 'sa',
	'sun'				=> 'do'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'IN',
	'direction_out'		=> 'OUT',
	'recipient_from'	=> 'From',
	'recipient_to'		=> 'To',
	'check_recipient'	=> 'Please enter recipient address',
	'check_subject'		=> 'Please enter subject',
	'check_injection'	=> 'Email header injection attempt detected',
	'check_active'		=> 'Email alert is not active'
);

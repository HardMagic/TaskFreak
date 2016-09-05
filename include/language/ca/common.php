<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Catalan translation by Marti Minoves & AldeaGlobal (www.aldeaglobal.net)   *
\****************************************************************************/

setLocale(LC_ALL, 'ca_ES.UTF-8', 'ca_ES', 'ca');

$GLOBALS["langTznCommon"] = array(
 'form_error' => 'Hi ha alguns errors en el formulari - Informació no guardada!',
   'field_compulsory' => 'Aquest camp és obligatori'
);

$GLOBALS["langTznUser"] = array(
"user_pass_mismatch" => "la contrasenya difereix",
"user_pass_limit1" => "la contrasenya ha de tenir entre",
"user_pass_limit2" => "i",
"user_pass_limit3" => "caràcters",
"user_pass_empty" => "la contrasenya no es pot deixar buida",
"user_pass_invalid" => "La contrasenya no és vàlida",
"user_name_limit1" => "el nom d'usuari ha de tenir entre",
"user_name_limit2" => "i",
"user_name_limit3" => "caràcters",
"user_name_exists" => "el nom d'usuari ja existeix",
"user_name_empty" => "Introduïu el vostre nom d'usuari",
"user_name_invalid" => "El nom d'usuari no pot tenir cap caràcter especial ni espai",
"user_name_not_found" => "usuari no trobat",
"user_disabled" => "Compte desactivada",
"user_forbidden" => "No està autoritzat a accedir",
"user_email_empty" => "Introduïu el vostre correu electrònic",
"user_email_format" => "Introduïu un correu electrònic vàlid",
"user_email_invalid" => "Correu electrònic no trobat",
"user_password_invalid" => "Contrasenya incorrecta",
"email_empty" => "Si us plau, introdueixi la seva adreça de correu electrònic",
"email_exists" => "Ja existeix un compte amb aquesta adreça de correu electrònic",
"email_invalid" => "Introduïu una adreça de correu electrònic vàlida",
"document_wrong_type" => "tipus de fitxer incorrecte",
"document_empty" => "seleccioneu un arxiu",
"common_name_empty" => "Introduïu un nom",
"common_title_empty" => "Introduïu un títol",
"common_theme_empty" => "seleccioneu un tema",
"common_description_empty" => "Introduïu una descripció",
"common_message_empty" => "Introduïu un missatge",
"common_date_empty" => "seleccioneu una data",
"common_date_invalid" => "data final no vàlida",
"common_city_empty" => "introdueixi ciutat",
"common_info_empty" => "si us plau, introduïu informació de contacte",
"common_url_empty" => "si us plau, introduïu una adreça web",
"common_file_empty" => "seleccioneu un arxiu prement botó 'Navega ..'",
"login_email" => "La seva adreça",
"login_password" => "Contrasenya",
"login_error0" => "Autenticació requerida",
"login_error1" => "Contrasenya requerida",
"login_error2" => "Accés denegat (àrea restringida)",
"login_error3" => "usuari o contrasenya incorrecte",
"login_last_date" => 'Data últim accés',
"login_last_address" => 'Darrera adreça d´accés',
"post_user" => "usuari",
"post_category" => "categoria",
"post_title" => "títol",
"post_documents" => "fotografies",
"post_date" => "exposat",
"post_by" => "per",
"doc_file_name" => "nom de fitxer",
"doc_file_size" => "mida de fitxer",
"doc_file_type" => "tipus de fitxer",
"doc_remove" => "suprimir",
"doc_update" => "Atualizado arxius",
"post_description" => "descripció",
"button_create" => "crear",
"button_update" => "Actualitza",
"button_delete" => "Elimina",
"button_login" => "Accedir",
"profile_update_success" => "Compte d´usuari actualitzada correctament",
"url" => "Lloc web:",
"atsign" => "(arroba)"
);

$GLOBALS['langTznDate'] = array (
'today'			 => 			'avui',
'tomorrow'			 => 			'demà',
'days'			 => 			' dies',
'day'			 => 			'dia',
'weeks'			 => 			' setmanes',
'week'			 => 			'setmana',
'months'			 => 			' mesos',
'month'			 => 			 'més',
'years'			 => 			' anys',
'year'			 => 			 'any',
'january'			 => 			 'gener',
'february'			 => 			 'febrer',
'march'			 => 			 'març',
'april'			 => 			 'abril',
'may'			 => 			 'maig',
'june'			 => 			 'juny',
'july'			 => 			 'juliol',
'august'			 => 			 'agost',
'september'			 => 			 'setembre',
'october'			 => 			 'octubre',
'november'			 => 			 'novembre',
'december'			 => 			 'desembre',
'jan'			 => 			 'gen',
'feb'			 => 			 'feb',
'mar'			 => 			 'mar',
'apr'			 => 			 'abr',
'may'			 => 			 'maig',
'jun'			 => 			 'juny',
'jul'			 => 			 'jul',
'aug'			 => 			 'ago',
'sep'			 => 			 'set',
'oct'			 => 			 'oct',
'nov'			 => 			 'nov',
'dec'			 => 			 'des',
'monday'			 => 			 'dilluns',
'tuesday'			 => 			 'dimarts',
'wednesday'			 => 			 'dimecres',
'thursday'			 => 			 'dijous',
'friday'			 => 			 'divendres',
'saturday'			 => 			 'dissabte',
'sunday'			 => 			 'diumenge',
'mon'			 => 			 'dll',
'tue'			 => 			 'dma',
'wed'			 => 			 'dme',
'thu'			 => 			 'djo',
'fri'			 => 			 'dve',
'sat'			 => 			 'dss',
'sun'			 => 			 'diu'
);

$GLOBALS['langEmail'] = array(
'direction_in' => 'ENTRADA',
'Direction_out' => 'SORTIDA',
'Recipient_from' => 'De',
'Recipient_to' => 'Per',
'check_recipient' => 'Introduïu adreça de destinatari',
'check_subject '=>' Introdueixi l´assumpte ',
'check_injection' => 'temptativa de \ "email header injection \" detectada',
'check_active' => 'Alerta per correu electrònic no activada'
);

<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Vicente Jiménez Aguilar <googuy+taskfreak@gmail.com>              *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'es_ES.UTF-8', 'es_ES', 'es');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Hay algunos errores en el formulario - Informaci&oacute;n no guardada!',
  'field_compulsory'	=>	'Este campo es obligatorio'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "la contrase&ntilde;a difiere",
  "user_pass_limit1" => "la contrase&ntilde;a ha de tener entre ",
  "user_pass_limit2" => " y ",
  "user_pass_limit3" => " caracteres",
  "user_pass_empty" => "la contrase&ntilde;a no puede dejarse vac&iacute;a",
  "user_pass_invalid" => "Contrase&ntilde;a no v&aacute;lida",
  "user_name_limit1" => "el nombre de usuario ha de tener entre ",
  "user_name_limit2" => " y ",
  "user_name_limit3" => " caracteres",
  "user_name_exists" => "el nombre de usuario ya existe",
  "user_name_empty" => "Introduzca su nombre de usuario",
  "user_name_invalid" => "El nombre de usuario no debe contener ning&uacute;n caracter especial ni espacio",
  "user_name_not_found" => "usuario no encontrado",
  "user_disabled" => "Cuenta deshabilitada",
  "user_forbidden" => "No est&aacute; autorizado a acceder",
  "user_email_empty" => "Introduzca su correo electr&oacute;nico",
  "user_email_format" => "Introduzca un correo electr&oacute;nico v&aacute;lido",
  "user_email_invalid" => "Correo electr&oacute;nico no encontrado",
  "user_password_invalid" => "Contrase&ntilde;a incorrecta",
  "email_empty" => "Por favor, introduzca su direcci&oacute;n de correo electr&oacute;nico",
  "email_exists" => "Ya existe una cuenta con esta direcci&oacute;n de correo electr&oacute;nico",
  "email_invalid" => "Por favor, introduzca una direcci&oacute;n de correo electr&oacute;nico v&aacute;lida",
  "document_wrong_type" => "tipo de archivo incorrecto",
  "document_empty" => "seleccione un archivo",
  "common_name_empty" => "Introduzca un nombre",
  "common_title_empty" => "Introduzca un t&iacute;tulo",
  "common_theme_empty" => "seleccione un tema",
  "common_description_empty" => "Introduzca una descripci&oacute;n",
  "common_message_empty" => "Introduzca un mensaje",
  "common_date_empty" => "seleccione una fecha",
  "common_date_invalid" => "fecha final inv&aacute;lida",
  "common_city_empty" => "introduzca ciudad",
  "common_info_empty" => "por favor, introduzca informaci&oacute;n de contacto",
  "common_url_empty" => "por favor, introduzca una direcci&oacute;n web",
  "common_file_empty" => "seleccione un archivo pulsando bot&oacute;n 'Hojear..'",
  "login_email" => "Su email",
  "login_password" => "Contrase&ntilde;a",
  "login_error0" => "Autenticaci&oacute;n requerida",
  "login_error1" => "Contrase&ntilde;a requerida",
  "login_error2" => "Acceso denegado (&aacute;rea restringida)",
  "login_error3" => "Usuario o contrase&ntilde;a incorrecto",
  "login_last_date" => 'Fecha &uacute;ltimo acceso',
  "login_last_address"  => '&Uacute;ltima direcci&oacute;n de acceso',
  "post_user" => "usuario",
  "post_category" => "categor&iacute;a",
  "post_title" => "t&iacute;tulo",
  "post_documents" => "fotos",
  "post_date" => "expuesto en",
  "post_by" => "por",
  "doc_file_name" => "nombre de archivo",
  "doc_file_size" => "tama&ntilde;o de archivo",
  "doc_file_type" => "tipo de archivo",
  "doc_remove" => "eliminar",
  "doc_update" => "atualizar archivos",
  "post_description" => "descripci&oacute;n",
  "button_create" => "Crear",
  "button_update" => "Actualizar",
  "button_delete" => "Eliminar",
  "button_login" => "Acceder",
  "profile_update_success" => "Cuenta de usuario actualizada correctamente",
  "url" => "Sitio web&nbsp;:&nbsp;",
  "atsign" => "(arroba)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'hoy',
	'tomorrow'			=> 'ma&ntilde;ana',
	'days'				=> 'd&iacute;as',
	'day'				=> 'd&iacute;a',
	'weeks'				=> 'semanas',
	'week'				=> 'semana',
	'months'			=> 'meses',
	'month'				=> 'mes',
	'years'				=> 'a&ntilde;os',
	'year'				=> 'a&ntilde;o',
	'january'			=> 'enero',
	'february'			=> 'febrero',
	'march'				=> 'marzo',
	'april'				=> 'abril',
	'may'				=> 'mayo',
	'june'				=> 'junio',
	'july'				=> 'julio',
	'august'			=> 'agosto',
	'september'			=> 'septiembre',
	'october'			=> 'octubre',
	'november'			=> 'noviembre',
	'december'			=> 'diciembre',
	'jan'				=> 'ene',
	'feb'				=> 'feb',
	'mar'				=> 'mar',
	'apr'				=> 'abr',
	'may'				=> 'may',
	'jun'				=> 'jun',
	'jul'				=> 'jul',
	'aug'				=> 'ago',
	'sep'				=> 'sep',
	'oct'				=> 'oct',
	'nov'				=> 'nov',
	'dec'				=> 'dic',
	'monday'			=> 'lunes',
	'tuesday'			=> 'martes',
	'wednesday'			=> 'mi&eacute;rcoles',
	'thursday'			=> 'jueves',
	'friday'			=> 'viernes',
	'saturday'			=> 's&aacute;bado',
	'sunday'			=> 'domingo',
	'mon'				=> 'lun',
	'tue'				=> 'mar',
	'wed'				=> 'mie',
	'thu'				=> 'jue',
	'fri'				=> 'vie',
	'sat'				=> 'sab',
	'sun'				=> 'dom'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'ENTRADA',
	'direction_out'		=> 'SALIDA',
	'recipient_from'	=> 'De',
	'recipient_to'		=> 'Para',
	'check_recipient'	=> 'Introduzca direcci&oacute;n de destinatario',
	'check_subject'		=> 'Por favor, introduzca el asunto',
	'check_injection'	=> 'Tentativa de \"email header injection\" detectada',
	'check_active'		=> 'Alerta por correo electr&oacute;nico no activada'
);

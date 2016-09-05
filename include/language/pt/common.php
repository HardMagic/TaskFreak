<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'pt', 'pt_BR');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'Existem alguns erros no formul&aacute;rio - As informa&ccedil;&otilde;es n&atilde;o foram salvas!',
  'field_compulsory'	=>	'Este campo &eacute; obrigat&oacute;rio'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "senha incorreta",
  "user_pass_limit1" => "a senha deve ter entre ",
  "user_pass_limit2" => " e ",
  "user_pass_limit3" => " caracteres",
  "user_pass_empty" => "a senha n&atilde;o pode ser em branco",
  "user_pass_invalid" => "Senha incorreta",
  "user_name_limit1" => "o usu&aacute;rio deve ter entre ",
  "user_name_limit2" => " e ",
  "user_name_limit3" => " caracteres",
  "user_name_exists" => "o usu&aacute;rio j&aacute; existe",
  "user_name_empty" => "Informe o nome do usu&aacute;rio",
  "user_name_invalid" => "O Nome do usu&aacute;rio n&atilde;o deve conter caracteres especiais ou espa&ccedil;os",
  "user_name_not_found" => "usu&aacute;rio n&atilde;o encontrado",
  "user_disabled" => "Conta Desabilitada",
  "user_forbidden" => "Voc&ecirc; n&atilde; est&aacute; autorizado para logar",
  "user_email_empty" => "Por favor Informe o seu e-mail",
  "user_email_format" => "Informe um endere&ccedil;o de e-mail v&aacute;lido",
  "user_email_invalid" => "E-mail n&atilde;o encontrado",
  "user_password_invalid" => "Senha incorreta",
  "email_empty" => "Informe o seu endere&ccedil;o de e-mail",
  "email_exists" => "uma conta com este endere&ccedil;o de e-mail j&aacute; existe",
  "email_invalid" => "informe um endere&ccedil;o de e-mail v&aacute;lido",
  "document_wrong_type" => "tipo de arquivo incorreto",
  "document_empty" => "selecione um arquivo",
  "common_name_empty" => "informe o nome",
  "common_title_empty" => "informe o t&iacute;tulo",
  "common_theme_empty" => "selecione um tema",
  "common_description_empty" => "informe a descri&ccedil;&atilde;o",
  "common_message_empty" => "informe uma mensagem",
  "common_date_empty" => "selecione uma data",
  "common_date_invalid" => "a data final n&atilde;o &eacute; v&aacute;lida",
  "common_city_empty" => "informe a cidade",
  "common_info_empty" => "por favor preencha as informa&ccedil;&otilde;es de contato",
  "common_url_empty" => "por favor informe um endere&ccedil;o web",
  "common_file_empty" => "selecione um arquivo clicando no bot&atilde;o 'Procurar..'",
  "login_email" => "Seu e-mail",
  "login_password" => "Senha",
  "login_error0" => "Autentica&ccedil;&atilde;o requerida",
  "login_error1" => "Senha requerida",
  "login_error2" => "Acesso negado (&aacute;rea restrita)",
  "login_error3" => "Usu&aacute;rio ou senha incorretos",
  "login_last_date" => '&Uacute;ltimo acesso',
  "login_last_address"  => '&Uacute;ltimo endere&ccedil;o de acesso',
  "post_user" => "usu&aacute;rio",
  "post_category" => "categoria",
  "post_title" => "t&iacute;tulo",
  "post_documents" => "fotos",
  "post_date" => "postado em",
  "post_by" => "por",
  "doc_file_name" => "nome do arquivo",
  "doc_file_size" => "tamanho do arquivo",
  "doc_file_type" => "tipo do arquivo",
  "doc_remove" => "remover",
  "doc_update" => "atualizar arquivos",
  "post_description" => "descri&ccedil;&atilde;o",
  "button_create" => "Criar",
  "button_update" => "Atualizar",
  "button_delete" => "Remover",
  "button_login" => "Login",
  "profile_update_success" => "Conta de usu&aacute;rio atualizada com sucesso.",
  "url" => "Website&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'hoje',
	'tomorrow'			=> 'amanh&atilde;o',
	'days'				=> 'dias',
	'day'				=> 'dia',
	'weeks'				=> 'semanas',
	'week'				=> 'semana',
	'months'			=> 'meses',
	'month'				=> 'm&ecirc;',
	'years'				=> 'anos',
	'year'				=> 'ano',
	'january'			=> 'janeiro',
	'february'			=> 'fevereiro',
	'march'				=> 'mar&ccedil;o',
	'april'				=> 'abril',
	'may'				=> 'maio',
	'june'				=> 'junho',
	'july'				=> 'julho',
	'august'			=> 'agosto',
	'september'			=> 'setembro',
	'october'			=> 'outubro',
	'november'			=> 'novembro',
	'december'			=> 'dezembro',
	'jan'				=> 'jan',
	'feb'				=> 'fev',
	'mar'				=> 'mar',
	'apr'				=> 'abr',
	'may'				=> 'mai',
	'jun'				=> 'jun',
	'jul'				=> 'jul',
	'aug'				=> 'ago',
	'sep'				=> 'set',
	'oct'				=> 'out',
	'nov'				=> 'nov',
	'dec'				=> 'dez',
	'monday'			=> 'segunda-feira',
	'tuesday'			=> 'ter&ccedil;a-feira',
	'wednesday'			=> 'quarta-feira',
	'thursday'			=> 'quinta-feira',
	'friday'			=> 'sexta-feira',
	'saturday'			=> 's&aacute;bado',
	'sunday'			=> 'domingo',
	'mon'				=> 'seg',
	'tue'				=> 'ter',
	'wed'				=> 'qua',
	'thu'				=> 'qui',
	'fri'				=> 'sex',
	'sat'				=> 'sab',
	'sun'				=> 'dom'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'IN',
	'direction_out'		=> 'OUT',
	'recipient_from'	=> 'De',
	'recipient_to'		=> 'Para',
	'check_recipient'	=> 'Por favor informe o endere&ccedi;o do destinat&aacute;rio',
	'check_subject'		=> 'Por favor informe o assunto',
	'check_injection'	=> 'tentativa de \"E-mail header injection\" detectada',
	'check_active'		=> 'Alerta de e-mail n&atilde;o est&aacute; ativo'
);

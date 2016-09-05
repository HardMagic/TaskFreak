<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


// system menu
$GLOBALS['langSystemMenu'] = array (
	'general'   		=> 'Geral',
	'email_alerts'		=> 'Alertas por E-mail',
	'contexts'			=> 'Contextos'
);

// email description
$GLOBALS['langSystemEmail'] = array(
    1 => 'Cadastro: novo alerta de registro',
    2 => 'Cadastro: requisi&ccedil;&atilde;o pendente',
    3 => 'Cadastro: e-mail de ativa&ccedil;&atilde;o',
    4 => 'Cadastro: e-mail de confirma&ccedil;&atilde;o',
    5 => 'Lembrete de Senha',
    6 => 'Alerta de atribui&ccedil;&atilde;o de tarefa',
    7 => 'Alerta de fim do prazo da tarefa',
);

// email stuff
$GLOBALS['langSystemEmailStuff'] = array(
    'from'          => 'De',
    'to'            => 'Para',
    'cc'            => 'CC',
    'dir'           => 'Dir.',
    'dir_in'        => 'IN',
    'dir_out'       => 'OUT',
    'alert'         => 'Alerta',
    'name'          => 'Nome',
    'email'         => 'E-mail',
    'subject'       => 'Assunto',
    'body_template' => 'Template do Corpo',
    'enabled'       => 'Habilitado',
    'enable_label'  => 'Habilitar alerta por e-mail',
    'disabled'      => 'Desabilitado',
    'disable_label' => 'Desabilitar alerta por e-mail',
    'link_edit'     => 'Editar configura&ccedil;&otilde;es do alerta de e-mail'

);
?>

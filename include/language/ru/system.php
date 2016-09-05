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
	'general'   		=> 'Основные',
	'email_alerts'		=> 'Уведомления email',
	'contexts'			=> 'Типы'
);

// email description
$GLOBALS['langSystemEmail'] = array(
    1 => 'Включить: уведомление о новой регистрации',
    2 => 'Включить: уведомление о просроченных задачах',
    3 => 'Включить: активацию email',
    4 => 'Включить: подтверждение email',
    5 => 'Напоминатель пароля',
    6 => 'Внимание: новоя задача',
    7 => 'Внимание: задача просрочена',
);

// email stuff
$GLOBALS['langSystemEmailStuff'] = array(
    'from'          => 'От',
    'to'            => 'Кому',
    'cc'            => 'Копия',
    'dir'           => 'Dir.',
    'dir_in'        => 'IN',
    'dir_out'       => 'OUT',
    'alert'         => 'Внимание',
    'name'          => 'Имя',
    'email'         => 'Email',
    'subject'       => 'Тема',
    'body_template' => 'Body template',
    'enabled'       => 'Включен',
    'enable_label'  => 'Включено уведомление email',
    'disabled'      => 'Выключен',
    'disable_label' => 'Выключено уведомление email',
    'link_edit'     => 'Редактировать настройки уведомления по email'

);
?>

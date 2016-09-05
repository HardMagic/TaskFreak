<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.5                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


// system menu
$GLOBALS['langSystemMenu'] = array (
	'general'   		=> 'Általános',
	'email_alerts'		=> 'E-mail értesítők',
	'contexts'			=> 'Környezetek'
);

// email description
$GLOBALS['langSystemEmail'] = array(
    1 => 'Feliratkozás: új regisztráció',
    2 => 'Sign-up: request pending',
    3 => 'Feliratkozás: aktiváló e-amil',
    4 => 'Sign-up: confirmation email',
    5 => 'Jelszó emlékeztető',
    6 => 'Task assignment alert',
    7 => 'Task deadline alert',
);

// email stuff
$GLOBALS['langSystemEmailStuff'] = array(
    'from'          => 'Feladó',
    'to'            => 'Címzett',
    'cc'            => 'Másolat',
    'dir'           => 'Dir.',
    'dir_in'        => 'BE',
    'dir_out'       => 'KI',
    'alert'         => 'Értesítő',
    'name'          => 'Név',
    'email'         => 'E-mail',
    'subject'       => 'Tárgy',
    'body_template' => 'Body template',
    'enabled'       => 'Engedélyezve',
    'enable_label'  => 'E-mail értesítők engedélyezése',
    'disabled'      => 'Letiltva',
    'disable_label' => 'E-mail értesítők letiltása',
    'link_edit'     => 'E-mail értesítők beállítása'

);
?>

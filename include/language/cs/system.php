<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.4.2                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/


// system menu
$GLOBALS['langSystemMenu'] = array (
	'general'   		=> 'General',
	'email_alerts'		=> 'Email Alerts',
	'contexts'			=> 'Contexts'
);

// email description
$GLOBALS['langSystemEmail'] = array(
    1 => 'Sign-up: new registration alert',
    2 => 'Sign-up: request pending',
    3 => 'Sign-up: activation email',
    4 => 'Sign-up: confirmation email',
    5 => 'Password reminder',
    6 => 'Task assignment alert',
    7 => 'Task deadline alert',
);

// email stuff
$GLOBALS['langSystemEmailStuff'] = array(
    'from'          => 'From',
    'to'            => 'To',
    'cc'            => 'Cc',
    'dir'           => 'Dir.',
    'dir_in'        => 'IN',
    'dir_out'       => 'OUT',
    'alert'         => 'Alert',
    'name'          => 'Name',
    'email'         => 'Email',
    'subject'       => 'Subject',
    'body_template' => 'Body template',
    'enabled'       => 'Enabled',
    'enable_label'  => 'Enable email alert',
    'disabled'      => 'Disabled',
    'disable_label' => 'Disable email alert',
    'link_edit'     => 'Edit email alert settings'

);
?>

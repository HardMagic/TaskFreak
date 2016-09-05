<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Nowy',           // 0 is for new project
	10	=> 'Propozycja',      // anything between 0 and 40
	20 	=> 'W trakcie',   // is free to be customized
	40	=> 'Zakończony',     // anything 40 and over
	50	=> 'Anulowany'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'wizytator',	// see only, no action
	2	=> 'oficjalny',	// add comments
	3	=> 'członek',	// add tasks, add comments, task status
	4	=> 'moderator', // add/edit all tasks, comments, project members and status
	5	=> 'lider'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'gość',     // access own projects, view only public tasks
	2	=> 'wewnętrzny',    // access own projects, create projects, create tasks
	3	=> 'manager',   // access own projects, create projects, tasks
	4	=> 'administrator' // everything
);

// task (item) status
$GLOBALS['langItemStatus'] = array(
	0	=> '0%',
	1	=> '20%',
	2	=> '40%',
	3	=> '60%',
	4	=> '80%',
	5	=> '100%'
);

// contexts

$GLOBALS['langItemContext'] = array (
	1 => 'Praca',
	2 => 'Spotkanie',
	3 => 'Dokument',
	4 => 'Internet',	
	5 => 'Telefon',
	6 => 'Email',
	7 => 'Dom',
	8 => 'Inne'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Bardzo ważne!',
	2 => 'Wysoki priorytet',
	3 => 'Średni priorytet',
	4 => 'Normalny priorytet',	
	5 => 'Niski priorytet',
	6 => 'Niski priorytet',
	7 => 'Bardzo niski priorytet',
	8 => 'Bardzo niski priorytet',
	9 => 'Nie ważne'
);
?>

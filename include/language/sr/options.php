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
	0 	=> 'Novo',           // 0 is for new project
	10	=> 'Predlog',      // anything between 0 and 40
	20 	=> 'U procesu',   // is free to be customized
	40	=> 'Zavrsno',     // anything 40 and over
	50	=> 'Odlozeno'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'posetilac',	// see only, no action
	2	=> 'zvanican',	// add comments
	3	=> 'clan',	// add tasks, add comments, task status
	4	=> 'moderator', // add/edit all tasks, comments, project members and status
	5	=> 'lider'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'gost',     // access own projects, view only public tasks
	2	=> 'saradnik',    // access own projects, create projects, create tasks
	3	=> 'menadzer',   // access own projects, create projects, tasks
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
	1 => 'Posao',
	2 => 'Sastanak',
	3 => 'Dokument',
	4 => 'Internet',	
	5 => 'Telefon',
	6 => 'Email',
	7 => 'Kuca',
	8 => 'Ostalo'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Hitno!',
	2 => 'Visoki prioritet',
	3 => 'Srednji prioritet',
	4 => 'Normalni prioritet',	
	5 => 'Nizak prioritet',
	6 => 'Nizak prioritet',
	7 => 'Veoma nizak prioritet',
	8 => 'Veoma nizak prioritet',
	9 => 'Svejedno'
);
?>

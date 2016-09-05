<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Nov',           // 0 is for new project
	10	=> 'Predlog',      // anything between 0 and 40
	20 	=> 'V napredovanju',   // is free to be customized
	40	=> 'Končano',     // anything 40 and over
	50	=> 'Prekinjeno'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'gost',	// see only, no action
	2	=> 'uradni',	// add comments
	3	=> 'član',	// add tasks, add comments, task status
	4	=> 'moderator', // add/edit all tasks, comments, project members and status
	5	=> 'vodja'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'gost',     // access own projects, view only public tasks
	2	=> 'pripravnik',    // access own projects, create projects, create tasks
	3	=> 'upravitelj',   // access own projects, create projects, tasks
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
	1 => 'Delo',
	2 => 'Sestanek',
	3 => 'Dokument',
	4 => 'Internet',	
	5 => 'Telefon',
	6 => 'E-pošta',
	7 => 'Doma',
	8 => 'Ostalo'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Nujno!',
	2 => 'Visoka prioriteta',
	3 => 'Srednja prioriteta',
	4 => 'Normalna prioriteta',	
	5 => 'Nizka prioriteta',
	6 => 'Nizka prioriteta',
	7 => 'Zelo nizka prioriteta',
	8 => 'Zelo nizka prioriteta',
	9 => 'Karkoli že'
);
?>

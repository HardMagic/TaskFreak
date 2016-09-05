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
	0 	=> 'Novi',           // 0 is for new project
	10	=> 'Upitni',      // anything between 0 and 40
	20 	=> 'Provjera',   // is free to be customized
	40	=> 'Završen',     // anything 40 and over
	50	=> 'Prekinut'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'Posjetitelj',	// see only, no action
	2	=> 'Nadzornik',	// add comments
	3	=> 'Clan',	// add tasks, add comments, task status
	4	=> 'Manager', // add/edit all tasks, comments, project members and status
	5	=> 'Administrator'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'radnik',     // access own projects, view only public tasks
	2	=> 'voditelj',    // access own projects, create projects, create tasks
	3	=> 'direktor',   // access own projects, create projects, tasks
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
	1 => 'posao',
	2 => 'sastanak',
	3 => 'datoteka',
	4 => 'internet',	
	5 => 'telefon',
	6 => 'e-mail',
	7 => 'dom',
	8 => 'drugo'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Hitno!',
	2 => 'Visoka vanost',
	3 => 'Srednja vanost',
	4 => 'Normalna vanost',	
	5 => 'Niska vanost',
	6 => 'Jako niska vanost',
	7 => 'Nema vanosti',
	8 => 'za pregled',
	9 => 'nešt drugo'
);


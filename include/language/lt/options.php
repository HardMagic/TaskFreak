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
	0 	=> 'Naujas',           // 0 is for new project
	10	=> 'Pasiûlymas',      // anything between 0 and 40
	20 	=> 'Progrese',   // is free to be customized
	40	=> 'Uþbaigtas',     // anything 40 and over
	50	=> 'Atðauktas'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'lankytojas',	// see only, no action
	2	=> 'oficialus',	// add comments
	3	=> 'narys',	// add tasks, add comments, task status
	4	=> 'moderatorius', // add/edit all tasks, comments, project members and status
	5	=> 'lyderis'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'sveèias',     // access own projects, view only public tasks
	2	=> 'narys',    // access own projects, create projects, create tasks
	3	=> 'patyres',   // access own projects, create projects, tasks
	4	=> 'administratorius' // everything
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
	1 => 'Darbas',
	2 => 'Susitikimas',
	3 => 'Dokomuentas',
	4 => 'Internetas',	
	5 => 'Telefonas',
	6 => 'E-paðtas',
	7 => 'Namai',
	8 => 'Kita'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Skubus!',
	2 => 'Aukðtas prioritetas',
	3 => 'Vidutinis prioritetas',
	4 => 'Normalus prioritetas',	
	5 => 'Þemas prioritetas',
	6 => 'Þemas prioritetas',
	7 => 'Labai Þemas prioritetas',
	8 => 'Labai Þemas prioritetas',
	9 => 'Bet koks'
);
?>

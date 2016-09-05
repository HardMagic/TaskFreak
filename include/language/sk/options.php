<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation: Jan Michalicka <webdev@jimi.sk>                               *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Nový',           // 0 is for new project
	10	=> 'Pripravuje sa',      // anything between 0 and 40
	20 	=> 'Vykováva sa',   // is free to be customized
	40	=> 'Uzavretý',     // anything 40 and over
	50	=> 'Zrušený'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'návševník',	// see only, no action
	2	=> 'úradník',	// add comments
	3	=> 'člen',	// add tasks, add comments, task status
	4	=> 'moderátor', // add/edit all tasks, comments, project members and status
	5	=> 'líder'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'návševník',     // access own projects, view only public tasks
	2	=> 'člen',    // access own projects, create projects, create tasks
	3	=> 'manažér',   // access own projects, create projects, tasks
	4	=> 'administrátor' // everything
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
	1 => 'Práca',
	2 => 'Stretnutie',
	3 => 'Dokument',
	4 => 'Internet',	
	5 => 'Telefón',
	6 => 'Email',
	7 => 'Privátne',
	8 => 'Iné'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Súrne!',
	2 => 'Vysoká priority',
	3 => 'Stredná priority',
	4 => 'Normálna priority',	
	5 => 'Malá priority',
	6 => 'Malá priority',
	7 => 'Veľmi malá priority',
	8 => 'Veľmi malá priority',
	9 => 'Čo na tom záleží?'
);
?>

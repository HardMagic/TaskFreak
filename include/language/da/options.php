<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.4.2                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Ny',           // 0 is for new project
	10	=> 'Under opstart',      // anything between 0 and 40
	20 	=> 'I gang',   // is free to be customized
	40	=> 'Fuldført',     // anything 40 and over
	50	=> 'Annulleret'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'gæst',	// see only, no action
	2	=> 'officiel',	// add comments
	3	=> 'medlem',	// add tasks, add comments, task status
	4	=> 'moderator', // add/edit all tasks, comments, project members and status
	5	=> 'leder'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'gæst',     // access own projects, view only public tasks
	2	=> 'intern',    // access own projects, create projects, create tasks
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
	1 => 'Arbejde',
	2 => 'Møde',
	3 => 'Dokument',
	4 => 'Internet',	
	5 => 'Telefon',
	6 => 'Email',
	7 => 'Hjem',
	8 => 'Andet'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Vigtigt!',
	2 => 'Høj prioritet',
	3 => 'Medium prioritet',
	4 => 'Normal prioritet',	
	5 => 'Lav prioritet',
	6 => 'Lav prioritet',
	7 => 'Meget Lav prioritet',
	8 => 'Meget Lav prioritet',
	9 => 'Whatever'
);
?>

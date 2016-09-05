<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Norwegian translation by Håvard Kristoffersen, www.theta-design.no	     *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Ny',           // 0 is for new project
	10	=> 'Forslag',      // anything between 0 and 40
	20 	=> 'Under arbeid',   // is free to be customized
	40	=> 'Fullført',     // anything 40 and over
	50	=> 'Annulert'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'besøker',	// see only, no action
	2	=> 'offisiell',	// add comments
	3	=> 'medlem',	// add tasks, add comments, task status
	4	=> 'moderator', // add/edit all tasks, comments, project members and status
	5	=> 'leder'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'gjest',     // access own projects, view only public tasks
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
	1 => 'Arbeid',
	2 => 'Møte',
	3 => 'Dokument',
	4 => 'Internett',	
	5 => 'Telefon',
	6 => 'E-mail',
	7 => 'Hjem',
	8 => 'Annet'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Haster!',
	2 => 'Høy prioritet',
	3 => 'Middels prioritet',
	4 => 'Normal prioritet',	
	5 => 'Lav prioritet',
	6 => 'Lav prioritet',
	7 => 'Veldig lav prioritet',
	8 => 'Veldig lav prioritet',
	9 => 'Uviktig'
);

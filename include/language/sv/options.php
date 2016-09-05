<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user  - Swedish language, sunday version...                          *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Marcus Persson <marcus (at) gazebo.se>                            *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Nytt',           // 0 is for new project
	10	=> 'Förslag',      // anything between 0 and 40
	20 	=> 'Under Arbete',   // is free to be customized
	40	=> 'Slutfört',     // anything 40 and over
	50	=> 'Nedlagt'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'besökare',	// see only, no action
	2	=> 'officiell',	// add comments
	3	=> 'medlem',	// add tasks, add comments, task status
	4	=> 'examinator', // add/edit all tasks, comments, project members and status
	5	=> 'ledare'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'gäst',     // access own projects, view only public tasks
	2	=> 'intern',    // access own projects, create projects, create tasks
	3	=> 'manager',   // access own projects, create projects, tasks
	4	=> 'administratör' // everything
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
	1 => 'Arbete',
	2 => 'Möte',
	3 => 'Dokument',
	4 => 'Internet',
	5 => 'Telefon',
	6 => 'Epost',
	7 => 'Hemma',
	8 => 'Annat'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Viktigt!',
	2 => 'Hög prioritet',
	3 => 'Medium prioritet',
	4 => 'Normal prioritet',
	5 => 'Låg prioritet',
	6 => 'Låg prioritet',
	7 => 'Väldigt Låg prioritet',
	8 => 'Väldigt Låg prioritet',
	9 => 'Ointressant'
);
?>

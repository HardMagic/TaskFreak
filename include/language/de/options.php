<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* Translation by Tobias Frasch <frasch@starsolutions.de>                     *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Neu',           // 0 is for new project
	10	=> 'Erst angefangen',      // anything between 0 and 40
	20 	=> 'In Arbeit',   // is free to be customized
	40	=> 'Fertig',     // anything 40 and over
	50	=> 'Abgebrochen'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'Gast',	// see only, no action
	2	=> 'Kunde',	// add comments
	3	=> 'Mitglied',	// add tasks, add comments, task status
	4	=> 'Moderator', // add/edit all tasks, comments, project members and status
	5	=> 'Leiter'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'Gast',     // access own projects, view only public tasks
	2	=> 'Mitglied',    // access own projects, create projects, create tasks
	3	=> 'Manager',   // access own projects, create projects, tasks
	4	=> 'Administrator' // everything
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
	1 => 'Arbeit',
	2 => 'Meeting',
	3 => 'Dokument',
	4 => 'Internet',
	5 => 'Telefon',
	6 => 'E-Mail',
	7 => 'Privat',
	8 => 'Andere'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Dringend!',
	2 => 'Hohe Priorit&auml;t',
	3 => 'Mittlere Priorit&auml;t',
	4 => 'Normale Priorit&auml;t',
	5 => 'Niedriege Priorit&auml;t',
	6 => 'Niedriege Priorit&auml;t',
	7 => 'Sehr niedriege Priorit&auml;t',
	8 => 'Sehr niedriege Priorit&auml;t',
	9 => 'Unwichtig'
);
?>

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
	0 	=> 'Nouveau',           // 0 is for new project
	10	=> 'Proposition',      // anything between 0 and 40
	20 	=> 'En cours',   // is free to be customized
	40	=> 'Terminé',     // anything 40 and over
	50	=> 'Annulé'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'Invité',	// see only, no action
	2	=> 'Officiel',	// add comments
	3	=> 'Membre',	// add tasks, add comments, task status
	4	=> 'Modérateur', // add/edit all tasks, comments, project members and status
	5	=> 'Responsable'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'Invité',     // access own projects, view only public tasks
	2	=> 'Participant',    // access own projects, create projects, create tasks
	3	=> 'Chef de projet',   // access own projects, create projects, tasks
	4	=> 'Administrateur' // everything
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
	1 => 'Tâches',
	2 => 'Réunion',
	3 => 'Document',
	4 => 'Internet',	
	5 => 'Téléphone',
	6 => 'Email',
	7 => 'Personnel',
	8 => 'Autre'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Urgent!',
	2 => 'Priorité haute',
	3 => 'Priorité modéré',
	4 => 'Priorité normale',	
	5 => 'Priorité basse',
	6 => 'Priorité basse',
	7 => 'Priorité tr&egrave;s basse',
	8 => 'Priorité tr&egrave;s basse',
	9 => 'Pas prioritaire'
);


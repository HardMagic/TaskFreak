<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
******************************************************************************
* Catalan translation by Marti Minoves & AldeaGlobal (www.aldeaglobal.net)   *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Nou',           // 0 is for new project
	10	=> 'Proposta',      // anything between 0 and 40
	20 	=> 'En Progrés',   // is free to be customized
	40	=> 'Completat',     // anything 40 and over
	50	=> 'Cancel.lat'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'visitant',	// see only, no action
	2	=> 'oficial',	// add comments
	3	=> 'membre',	// add tasks, add comments, task status
	4	=> 'moderador', // add/edit all tasks, comments, project members and status
	5	=> 'l&iacute;der'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'invitat',     // access own projects, view only public tasks
	2	=> 'intern',    // access own projects, create projects, create tasks
	3	=> 'gerent',   // access own projects, create projects, tasks
	4	=> 'administrador' // everything
);

// task (item) status
$GLOBALS['langItemStatus'] = array (
0 =>'0% ',
1 =>'20% ',
2 =>'40% ',
3 =>'60% ',
4 =>'80% ',
5 =>'100% '
);

// Contexts

$GLOBALS['langItemContext'] = array (
1 => 'Treball',
2 => 'Reunió',
3 => 'Document',
4 => 'internet',
5 => 'Telèfon',
6 => 'Correu electrònic',
7 => 'Personal',
8 => 'Un altre'
);

$GLOBALS['langItemPriority'] = array (
1 => 'Urgent!',
2 => 'Prioritat Alta',
3 => 'Prioritat Mitjana',
4 => 'Prioritat normal',
5 => 'Prioritat Baixa',
6 => 'Prioritat Baixa',
7 => 'Prioritat Molt Baixa',
8 => 'Prioritat Molt Baixa',
9 => 'Indiferent'
);
?>

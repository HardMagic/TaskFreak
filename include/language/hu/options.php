<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.5                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

// project status
$GLOBALS['langProjectStatus'] = array(
	0 	=> 'Új',           // 0 is for new project
	10	=> 'Javaslat',      // anything between 0 and 40
	20 	=> 'Folyamatban',   // is free to be customized
	40	=> 'Lezárt',     // anything 40 and over
	50	=> 'Megszakított'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'látogató',	// see only, no action
	2	=> 'hivatalos',	// add comments
	3	=> 'tag',	// add tasks, add comments, task status
	4	=> 'moderátor', // add/edit all tasks, comments, project members and status
	5	=> 'főnök'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'vendég',     // access own projects, view only public tasks
	2	=> 'belsős',    // access own projects, create projects, create tasks
	3	=> 'vezető',   // access own projects, create projects, tasks
	4	=> 'admin' // everything
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
	1 => 'Munka',
	2 => 'Találkozó',
	3 => 'Dokumentum',
	4 => 'Internet',	
	5 => 'Telefon',
	6 => 'E-mail',
	7 => 'Hazai',
	8 => 'Egyéb'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Sürgős!',
	2 => 'Magas prioritás',
	3 => 'Közepes prioritás',
	4 => 'Normál prioritás',	
	5 => 'Alacsony prioritás',
	6 => 'Alacsony prioritás',
	7 => 'Nagyon alacsony prioritás',
	8 => 'Nagyon alacsony prioritás',
	9 => 'Majd egyszer'
);
?>

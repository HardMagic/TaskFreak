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
	0 	=> 'Νέο',           // 0 is for new project
	10	=> 'Πρόταση',      // anything between 0 and 40
	20 	=> 'Σε εκτέλεση',   // is free to be customized
	40	=> 'Ολοκληρώθηκε',     // anything 40 and over
	50	=> 'Ακυρώθηκε'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'επισκέπτης',	// see only, no action
	2	=> 'Σχολιαστής',	// add comments
	3	=> 'Μέλος',	// add tasks, add comments, task status
	4	=> 'Συντονιστής', // add/edit all tasks, comments, project members and status
	5	=> 'Διαχειριστής'     // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'επισκέπτης',     // access own projects, view only public tasks
	2	=> 'Συνεργάτης',    // access own projects, create projects, create tasks
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
	1 => 'Εργασία',
	2 => 'Συνάντηση',
	3 => 'Αρχείο',
	4 => 'Internet',	
	5 => 'Τηλέφωνο',
	6 => 'Email',
	7 => 'Αρχική',
	8 => 'Αλλο'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Επείγον!',
	2 => 'Υψηλή προταιρεότητα',
	3 => 'Μέτρια προταιρεότητα',
	4 => 'Κανονική προταιρεότητα',	
	5 => 'Χαμηλή προταιρεότητα',
	6 => 'Χαμηλή προταιρεότητα',
	7 => 'Πολύ χαμηλή προταιρεότητα',
	8 => 'Πολύ χαμηλή προταιρεότητα',
	9 => 'Οτιδήποτε'
);
?>

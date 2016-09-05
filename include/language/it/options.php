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
	0 	=> 'Nuovo',         // 0 is for new project
	10	=> 'Proposta',      // anything between 0 and 40
	20 	=> 'In Lavorazione',// is free to be customized
	40	=> 'Completo',      // anything 40 and over
	50	=> 'Annullato'      // is for non active projects
);

// project position
$GLOBALS['langProjectPosition'] = array(
	1	=> 'Spettatore',	// see only, no action
	2	=> 'Commentatore',	// add comments
	3	=> 'Membro',	    // add tasks, add comments, task status
	4	=> 'Moderatore',    // add/edit all tasks, comments, project members and status
	5	=> 'Leader'         // everything
);

// members global position
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'Ospite',        // access own projects, view only public tasks
	2	=> 'Interno',       // access own projects, create projects, create tasks
	3	=> 'Manager',       // access own projects, create projects, tasks
	4	=> 'Amministratore'  // everything
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
	1 => 'Lavoro',
	2 => 'Appuntamento',
	3 => 'Documento',
	4 => 'Internet',	
	5 => 'Telefono',
	6 => 'Email',
	7 => 'Casa',
	8 => 'Altro'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Urgente!',
	2 => 'Priorita Alta',
	3 => 'Priorita Media',
	4 => 'Priorita Normale',
	5 => 'Priorita Bassa',
	6 => 'Priorita Bassa',
	7 => 'Priorita Molto Bassa',
	8 => 'Priorita Molto Bassa',
	9 => 'Senza alcuna priorita'
);
?>

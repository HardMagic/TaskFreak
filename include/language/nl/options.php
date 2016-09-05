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
	0 	=> 'Nieuw',           // 0 is voor nieuw project
	10	=> 'Voorstel',      // kies een getal tussen 0 en 40
	20 	=> 'In Bewerking',   // is vrij aan te passen
	40	=> 'Voltooid',     // alles van of boven 40
	50	=> 'Geannuleerd'      // is voor inactieve projecten
);

// project positie
$GLOBALS['langProjectPosition'] = array(
	1	=> 'Bezoeker',	// alleen bekijken, geen acties
	2	=> 'Official',	// bijdragen toevoegen
	3	=> 'Lid',	// taken toevoegen, bijdragen toevoegen, taak status
	4	=> 'Moderator', // toevoegen/bewerken alle taken, bijdragen, projectleden en status
	5	=> 'Leider'     // alles
);

// members globale positie
$GLOBALS['langGlobalPosition'] = array(
	1	=> 'Gast',     // toegang tot eigen projecten, alleen openbare taken bekijken
	2	=> 'Assistent',    // toegang tot eigen projecten, projecten aanmaken, taken aanmaken
	3	=> 'Manager',   // toegang tot eigen projecten, projecten aanmaken, taken
	4	=> 'Administrator' // alles
);

// taak (item) status
$GLOBALS['langItemStatus'] = array(
	0	=> '0%',
	1	=> '20%',
	2	=> '40%',
	3	=> '60%',
	4	=> '80%',
	5	=> '100%'
);

// contexten

$GLOBALS['langItemContext'] = array (
	1 => 'Werk',
	2 => 'Vergadering',
	3 => 'Document',
	4 => 'Internet',
	5 => 'Telefoon',
	6 => 'Emailadres',
	7 => 'Thuis',
	8 => 'Overig'
);

$GLOBALS['langItemPriority'] = array (
	1 => 'Urgent!',
	2 => 'Hoge prioriteit',
	3 => 'Gemiddelde prioriteit',
	4 => 'Normale prioriteit',
	5 => 'Lage prioriteit',
	6 => 'Lage prioriteit',
	7 => 'Zeer lage prioriteit',
	8 => 'Zeer lage prioriteit',
	9 => 'Whatever'
);
?>

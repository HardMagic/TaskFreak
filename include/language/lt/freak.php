<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'en'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Uþduotis',
    'print_list'        => 'Spausdininimo versija',
	'new_todo'			=> 'Naujas darbas',
	'view'				=> 'Þiûrëti',
	'all_projects'		=> 'Visi projiektai',
	'future_tasks'		=> 'Bûsimos Uþduotys',
	'past_tasks'		=> 'Praëjusios Uþduotys',
    'my_tasks'          => 'Mano Uþduotys',
	'all_tasks'			=> 'Visos Uþduotys',
	'all_contexts'		=> 'Visi Kontekstai',
	'all_users' 		=> 'Visi Vartotojai',
	'reload'			=> 'Perkraunti',
	'manage'			=> 'Tvarkyti',
	'projects'			=> 'Projektai',
	'users' 			=> 'Vartotojai',
    'preferences'       => 'Mano profilis',
    'settings'          => 'Sistemos nustatymai',
	'login'				=> 'Prisijungti',
	'logout'			=> 'Atsijungti',
	'warning'			=> 'Áspëjimas',
	'warning_install'	=> 'Install Aplankas vis dar egzistuoja, jûs turite paðalinti já saugumo tikslais'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Prioritetas',
	'context'			=> 'Kontekstas',
	'deadline'			=> 'Galutinis terminas',
	'project'			=> 'Projektas',
	'tasks'				=> 'Uþduotys',
	'title'				=> 'Pavadinimas',
	'description'		=> 'Apibûdinimas',
    'user'              => 'Vartotojas',
    'visibility'        => 'Matomumas',
    'private'           => 'privatus',
    'internal'          => 'vidaus',
    'public'            => 'publikuojamas',
	'status'			=> 'Padëtis',
	'create'			=> 'Sukurti',
	'save'				=> 'Iðsaugoti',
	'cancel'			=> 'Atðaukti',
	'reset'				=> 'Perkrauti formà',
    'close'             => 'iðjungti',
    'edit'              => 'redaguoti',
    'delete'            => 'iðtrnti',
	'new'				=> 'Naujas',
	'project_new'		=> 'Naujas projiektas?',
	'project_list'		=> 'parodyti sàraðà',
	'compulsory_legend' => '<span class="compulsory">Raudoni</span> laukai yra privalomi.',
	'list_comments'		=> 'Kom.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'apibûdinimas',
	'description_none'	=> 'nëra apibûdinimo',
	'tab_comments'		=> 'komentarai',
	'comments_by'		=> 'paraðë',
	'comments_none'		=> 'joks komentaras dar neiraðytas',
	'comments_no_access'	=> 'komentarai yra konfidencialûs',
	'comments_new'		=> 'skelbti pirmà komentarà',
	'comments_reply'	=> 'atsakymas',
	'comments_edit'		=> 'redaguoti',
	'comments_delete'	=> 'iðtrinti',
	'comments_delete_confirm'	=> 'tikrai iðtrinti komentarà?',
	'tab_history'		=> 'istorija',
    'history_date'      => 'data',
    'history_user'      => 'vartotojas',
    'history_what'      => 'veiksmas'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'diena',
	'days'				=> 'dienos',
	'help'				=> 'p.s. ðiandien, rytoj, 12 liep.'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projektas',
    'projects'          => 'Projiektai',
    'name'              => 'Pavadinimas',
    'description'       => 'Apraðymas',
    'position'          => 'Padëtis',
    'members'           => 'Nariai',
    'members_legend'    => 'Projiekto nariai',
	'status'            => 'Padëtis',
    'action'            => 'Veiksmas',
    'project_history'   => 'Perþiûrëti padëties keitimo istorijà',
    'remove_confirm'    => 'tikrai panaikinti ið projiektø ?',
    'user_add_legend'   => 'Pridëti vartotojà prie ðio projekto',
    'user_add_button'   => 'Pridëti vartotojà prie ðio projekto',
	'user_no_project'   => 'Nepriklauso jokiam projektui',
	'user_added_ok'		=> 'Narys sëkmingai pridëtas prie projekto',
	'user_added_err'	=> 'Narys jau priklauso projektui ar nëra pasiekiamas',
	'user_removed_ok'	=> 'Narys iðtrintas ið projekto!',
	'user_removed_err'	=> 'Narys negali bûti iðtrintas ar buvo jau iðtrintas',
	'user_position_ok'	=> 'Nario padëtis sëkmingai atnaujinta',
	'project_info'		=> 'Projekto informacija',
	'history_date'      => 'data',
    'history_user'      => 'vartotojas',
	'history_what'      => 'veiksmas',
	'action_save_ok'	=> 'Projektinës detalës atnaujintos!',
	'action_added_ok'	=> 'Projektas sukurtas!',
	'action_status_ok'	=> 'Projektinë padëtis atnaujinta!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Asmeniniai duomenys',
    'user'              => 'Vartotojas',
    'name'              => 'Vardas',
    'title'             => 'Pavadinimas',
    'first_name'        => 'Vardas',
    'middle_name'       => 'Antras vardas',
    'last_name'         => 'Pavardë',
    'address'           => 'Adresas',
    'location'          => 'Vieta',
    'city'              => 'Miestas',
    'state'             => 'Valstybë',
    'country'           => 'Ðalis',
    'email'             => 'Elektroninis paðtas',
    'position'          => 'Lygmuo',
	'last_login'        => 'Paskutinis prisijungimas',
	'last_login_from'	=> 'Nuo',
	'logout_goodbye'	=> 'Jûs dabar atsijungiate. Viso gero!',
	'logout_login'		=> 'Spragtelëkite èia jai norite prisijungti',
    'action'            => 'Veiksmas',
    'delete_confirm'    => 'ið tikrøjø paðalinkite ðá vartotojà?',
    'enable_confirm'    => 'ið tikrøjø ágalinkite ðiam vartotojui?',
    'disable_confirm'   => 'ið tikrøjø drausti ðá vartotojà?',
    'account'           => 'Laikykite mandatus',
    'account_legend'    => 'Praðom pasirinkti vartotojo vardà ir slaptaþodá, kad ágytumëte prieigà prie TaskFreak!',
    'username'          => 'Vartotojo vardas',
    'password'          => 'Slaptaþodis',
    'password_confirm'  => 'Pakartokite slaptaþodá',
    'auto_login'        => 'atsiminkite mane ðiame kompiuteryje',
    'password_legend'   => 'Áveskite slaptaþodá (ir patvirtinkite), tik jei jûs norite pakeisti já.',
	'enabled_label'     => 'Vartotojas atblokuotas',
	'login_signup'		=> 'Ne narys? Uþsiregistruok èia',
	'account_created'	=> 'Sukurti',
	'account_disabled'	=> 'Vartotojas yra blokuojamas!',
	'state_us_only'		=> 'Only lithuanian'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Sukurti',
	'add_account'		=> 'Testi',
    'update'            => 'Iðsaugoti pakeitimus',
    'cancel'            => 'Atðaukti pakeitimus',
    'reset'             => 'Iðtuðtinti formà',
    'back'              => 'Gráþti á formà'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Duomenys, nesurasti ar leidimas neduotas',
    'denied'                    => 'Prieiga negalima!',
    'project_delete'            => 'Paðalinti projektà',
    'project_delete_confirm'    => 'Ið tikrøjø paðalinkite ðá projektà ir jo uþduotis?',
    'project_delete_ok'         => 'Project deleted',
    'project_delete_no'         => 'Projektas negali bûti paðalintas!',
    'task_edit'				    => 'Redaguoti ðià uþduotá',
    'task_delete'			    => 'Paðalinti ðià uþduotá',
    'task_delete_confirm'	    => 'Ið tikrøjø paðalinkite ðià uþduotá?',
	'error_no_title'		    => 'praðom ávesti pavadinimà!',
	'done_deleted'			    => 'uþduotis paðalinta!',
	'done_status'			    => 'uþduoties padëtis atnaujinta',
	'done_updated'			    => 'uþduotis atnaujinta!',
	'done_added'			    => 'uþduotis sukurta!',
	'done_comment_added'		=> 'komentaras ádëtas!',
	'done_comment_updated'		=> 'komentaras atnaujintas',
	'done_comment_deleted'		=> 'komentaras iðtrintas!',
	'operation_failed'			=> 'operacija nepavyko!',
	'purge_all'				    => 'iðvalymas (paðalina senas uþduotis) visiems projektams',
	'purge_all_confirm'		    => 'ið tikrøjø paðalinti senas uþduotis ið visø projektø?',
	'delete_all'			    => 'paðalinkite visus projektus (visas uþduotys)',
	'delete_all_confirm'	    => 'ið tikrøjø paðalinti visas uþduotis ið visø projektø?',
	'purge_one'				    => 'iðvalymas (paðalina senas uþduotis)',
	'purge_one_confirm'		    => 'ið tikrøjø paðalinti senas uþduotis ið ðio projekto?',
	'delete_one'			    => 'paðalinti visà projektà',
	'delete_one_confirm'	    => 'tikrai paðalinti ðá projektà?',
	'no_task_found'			    => 'jokios uþduotys nerastos jûsø kriterijams',
	'no_project_found'		    => 'joks projektas nesurastas',
	'create_task'			    => 'Spragtelëkite èia, kad pradëtumëte sukurti toká',
	'no_project_found_1'	    => '#$%&*! Negali surasti projekto!!!',
	'no_project_found_2'	    => 'Jûs turite sukurti ið pradþiø uþduotá ',
	'close_window'			    => 'uþdarykite ðá langà',
    'session_expired'           => 'Sesija baigësi'
);

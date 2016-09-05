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
	'jscalendar'	=> 'fr'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'T&acirc;che',
    'print_list'        => 'Version imprimable',
	'new_todo'			=> 'Nouvelle t&acirc;che',
	'view'				=> 'Voir',
	'all_projects'		=> 'Tous les projets',
	'future_tasks'		=> 'T&acirc;ches futures',
	'past_tasks'		=> 'Anciennes T&acirc;ches',
    'my_tasks'          => 'Mes t&acirc;ches',
	'all_tasks'			=> 'Toutes les t&acirc;ches',
	'all_contexts'		=> 'Tous les contextes',
	'all_users' 		=> 'Tous les utilisateurs',
	'reload'			=> 'Recharger',
	'manage'			=> 'G&eacute;rer',
	'projects'			=> 'Projets',
	'users' 			=> 'Utilisateurs',
    'preferences'       => 'Mon profil',
    'settings'          => 'Configuration',
	'login'				=> 'Connexion',
	'logout'			=> 'D&eacute;connexion',
	'warning'			=> 'Attention',
	'warning_install'	=> 'Le r&eacute;pertoire d\'installation est toujours pr&eacute;sent. Il est recommand&eacute; de le supprimer apr&egrave;s usage.'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Priorit&eacute;',
	'context'			=> 'Contexte',
	'deadline'			=> '&Eacute;ch&eacute;ance',
	'project'			=> 'Projet',
	'tasks'				=> 'T&acirc;ches',
	'title'				=> 'Titre',
	'description'		=> 'Description',
    'user'              => 'Utilisateur',
    'visibility'        => 'Visibilit&eacute;',
    'private'           => 'priv&eacute;',
    'internal'          => 'interne',
    'public'            => 'public',
	'status'			=> 'Etat',
	'create'			=> 'Cr&eacute;er',
	'save'				=> 'Enregistrer',
	'cancel'			=> 'Annuler',
	'reset'				=> 'Annuler modifications',
    'close'             => 'fermer',
    'edit'              => 'modifier',
    'delete'            => 'supprimer',
	'new'				=> 'Nouveau',
	'project_new'		=> 'Nouveau projet?',
	'project_list'		=> 'Voir liste',
	'compulsory_legend' => 'Les champs en <span class="compulsory">rouge</span> sont obligatoires.',
	'list_comments'		=> 'Com.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'description',
	'description_none'	=> 'pas de description',
	'tab_comments'		=> 'commentaires',
	'comments_by'		=> 'par',
	'comments_none'		=> 'pas de commentaires',
	'comments_no_access'	=> 'les commentaires sont inaccessibles',
	'comments_new'		=> 'ajouter un premier commentaire',
	'comments_reply'	=> 'répondre',
	'comments_edit'		=> 'modifier',
	'comments_delete'	=> 'supprimer',
	'comments_delete_confirm'	=> 'réellement supprimer ce commentaire?',
	'tab_history'		=> 'historique',
    'history_date'      => 'date',
    'history_user'      => 'utilisateur',
    'history_what'      => 'action'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'day',
	'days'				=> 'days',
	'help'				=> 'ex. : aujourd&apos;hui, demain, 12 avr.'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Projet',
    'projects'          => 'Projets',
    'name'              => 'Nom',
    'description'       => 'Description',
    'position'          => 'Position',
    'members'           => 'Membres',
    'members_legend'    => 'Participants',
	'status'            => 'Status',
    'action'            => 'Action',
    'project_history'   => 'Voir l&apos;historique des changements',
    'remove_confirm'    => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer le projet ?',
    'user_add_legend'   => 'Ajouter un utilisateur &agrave; ce projet',
    'user_add_button'   => 'Ajouter un utilisateur au projet',
	'user_no_project'   => 'Ne participe &agrave; aucun projet',
	'user_added_ok'		=> 'Membre ajout&eacute; au projet',
	'user_added_err'	=> 'Ce membre est d&eacute;j&agrave; associ&eacute; au projet',
	'user_removed_ok'	=> 'Membre retir&eacute; du projet',
	'user_removed_err'	=> 'Ce membre ne peut &ecirc;tre retir&eacute; du projet',
	'user_position_ok'	=> 'Position(s) mis &agrave; jour',
	'project_info'		=> 'D&eacute;tails du projet',
	'history_date'      => 'date',
    'history_user'      => 'utilisateur',
    'history_what'      => 'action',
	'action_save_ok'	=> 'Project mis &agrave; jour!',
	'action_added_ok'	=> 'Project cr&eacute;&eacute;!',
	'action_status_ok'	=> 'Project mis &agrave; jour!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Informations personnelles',
    'user'              => 'Utilisateur',
    'name'              => 'Nom',
    'title'             => 'Titre',
    'first_name'        => 'Pr&eacute;nom',
    'middle_name'       => 'Pr&eacute;noms suppl.',
    'last_name'         => 'Nom',
    'address'           => 'Adresse',
    'location'          => 'Localisation',
    'city'              => 'Ville',
    'state'             => 'Etat',
    'country'           => 'Pays',
    'email'             => 'Adresse email',
    'position'          => 'Niveau',
	'last_login'        => 'Derni&egrave;re connexion',
	'last_login_from'	=> 'Depuis',
	'logout_goodbye'	=> 'Vous &ecirc;tes d&eacute;sormais d&eacute;connect&eacute;. Au revoir.',
	'logout_login'		=> 'Cliquer ici pour se reconnecter',
    'action'            => 'Action',
    'delete_confirm'    => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cet utilisateur ?',
    'enable_confirm'    => '&Ecirc;tes-vous s&ucirc;r de vouloir activer cet utilisateur ?',
    'disable_confirm'   => '&Ecirc;tes-vous s&ucirc;r de vouloir d&eacute;sactiver cet utilisateur ?',
    'account'           => 'Param&egrave;tres de connexion',
    'account_legend'    => 'Merci de choisir un identifiant et un mot de passe pour acc&eacute;der &agrave; TaskFreak !',
    'username'          => 'Identifiant',
    'password'          => 'Mot de passe',
    'password_confirm'  => '(v&eacute;rification)',
    'auto_login'        => 'M\'identifier automatiquement depuis cet ordinateur',
    'password_legend'   => 'Entrer un mot de passe (et le confirmer) seulement si vous souhaitez en changer.',
	'enabled_label'     => 'Le profil est activ&eacute;',
	'login_signup'		=> 'Pas encore membre? Faites-en la demande ici',
	'account_created'	=> 'Cr&eacute;&eacute; le',
	'account_disabled'	=> 'Compte d&eacute;sactiv&eacute;!',
	'state_us_only'		=> 'USA uniquement'
);

// buttons
$GLOBALS['langButton'] = array(
	'add'               => 'Cr&eacute;er',
	'add_account'		=> 'Soumettre la demande',
    'update'            => 'Enregistrer les modifications',
    'cancel'            => 'Annuler les modifications',
    'reset'             => 'Recommencer',
    'back'              => 'Retour &agrave; la liste'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Donn&eacute;es introuvables ou acc&egrave;s refus&eacute;',
    'denied'                    => 'Acc&egrave;s refus&eacute;!',
    'project_delete'            => 'Supprimer le projet',
    'project_delete_confirm'    => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce projet et toutes ses t&acirc;ches ?',
    'project_delete_ok'         => 'Projet supprim&eacute;',
    'project_delete_no'         => 'Impossible de supprimer le projet !',
    'task_edit'				    => 'Modifier cette t&acirc;che',
    'task_delete'			    => 'Supprimer cette t&acirc;che',
    'task_delete_confirm'	    => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cette t&acirc;che ?',
	'error_no_title'		    => 'Merci d&apos;entrer un titre !',
	'done_deleted'			    => 't&acirc;che supprim&eacute;e!',
	'done_status'			    => 'status modifi&eacute;',
	'done_updated'			    => 't&acirc;che modifi&eacute;e!',
	'done_added'			    => 't&acirc;che cr&eacute;&eacute;e !',
	'done_comment_added'		=> 'commentaire ajouté!',
	'done_comment_updated'		=> 'commentaire mis à jour!',
	'done_comment_deleted'		=> 'commentaire supprimé!',
	'operation_failed'			=> 'échec de l\'operation!',
	'purge_all'				    => 'purger (supprimer les t&acirc;ches termin&eacute;es) pour tous les projets',
	'purge_all_confirm'		    => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer les t&acirc;ches termin&eacute;es de tous les projets ?',
	'delete_all'			    => 'supprimer tous les projets (toutes les t&acirc;ches)',
	'delete_all_confirm'	    => '&ecirc;tes-vous s&ucirc;r de vouloir supprimer toutes les t&acirc;ches de tous les projets ?',
	'purge_one'				    => 'purger (supprimer les t&acirc;ches termin&eacute;es)',
	'purge_one_confirm'		    => '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer les t&acirc;ches termin&eacute;es de ce projet ?',
	'delete_one'			    => 'supprimer le projet',
	'delete_one_confirm'	    => '&ecirc;tes-vous s&ucirc;r de vouloir supprimer ce projet ?',
	'no_task_found'			    => 'aucune t&acirc;che ne correspond &agrave; ces crit&egrave;res',
	'no_project_found'		    => 'aucun projet trouv&eacute;',
	'create_task'			    => 'Cliquez ici pour tenter d&apos;en cr&eacute;er un',
	'no_project_found_1'	    => "Projet introuvable !!!",
	'no_project_found_2'	    => 'Cr&eacute;er d&apos;abord une t&acirc;che ',
	'close_window'			    => 'Fermer cette fen&Ecirc;tre',
    'session_expired'           => 'Session expir&eacute;e',
	'information_saved'			=> 'Information sauvegard&eacute;e',
	'clock_start'				=> 'd&eacute;marrer le chrono',
    'clock_stop'				=> 'arr&ecirc;ter le chrono ',
    'clock_change'				=> 'modifier la dur&eacute;e',
	'confirm_status_close'		=> 'Vraiment cl&ocirc;turer cette t&acirc;che?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Pas de t&acirc; pour aujourd&apos;hui',
    'error_login'   => 'Authentication &eacute;chou&eacute;e'
);

<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL,'fr_FR.UTF-8', 'fr_FR', 'french', 'fr');

$GLOBALS['langTznCommon'] = array(
  'form_error'			=> 'Ce formulaire comporte des erreurs - Modifications non sauv&eacute;s',
  'field_compulsory'	=>	'Ce champ est obligatoire'
);

$GLOBALS['langTznUser'] = array(
  'user_pass_mismatch' => 'Mot de passe incorrect',
  'user_pass_limit1' => 'Le mot de passe doit comporter entre ',
  'user_pass_limit2' => ' et ',
  'user_pass_limit3' => ' caract&egrave;res',
  'user_pass_empty' => 'Le mot de passe ne peut pas &ecirc;tre laiss&eacute; vide',
  'user_pass_invalid' => 'Mot de passe invalide',
  'user_name_limit1' => 'L&apos;identifiant doit comporter entre ',
  'user_name_limit2' => ' et ',
  'user_name_limit3' => ' caract&egrave;res',
  'user_name_exists' => 'Cet identifiant existe d&eacute;j&agrave;',
  'user_name_empty' => 'Merci d&apos;entrer votre identifiant',
  'user_name_invalid' => 'Votre identifiant ne doit pas contenir de caract&egrave;res sp&eacute;ciaux ni d&apos;espaces',
  'user_name_not_found' => 'Utilisateur non trouv&eacute;',
  'user_disabled' => 'Profil d&eacute;sactiv&eacute;',
  'user_forbidden' => 'Vous n&apos;&ecirc;tes pas autoris&eacute; &agrave; vous connecter',
  'user_email_empty' => 'Merci d&apos;entrer votre adresse m&egrave;l',
  'user_email_format' => 'Merci d&apos;entrer une adresse m&egrave;l valide',
  'user_email_invalid' => 'Adresse m&egrave;l introuvable',
  'user_password_invalid' => 'Mot de passe invalide',
  'email_empty' => 'Merci d&apos;entrer votre adresse m&egrave;l',
  'email_exists' => 'Un profil utilisant cette adresse m&egrave;l existe d&eacute;j&agrave;',
  'email_invalid' => 'Merci d&apos;entrer une adresse m&egrave;l valide',
  'document_wrong_type' => 'Type de fichier incorrect',
  'document_empty' => 'Merci de s&eacute;lectionner un fichier',
  'common_name_empty' => 'Merci d&apos;entrer un nom',
  'common_title_empty' => 'Merci d&apos;entrer un titre',
  'common_theme_empty' => 'Merci d&apos;entrer une cat&eacute;gorie',
  'common_description_empty' => 'Merci d&apos;entrer une description',
  'common_message_empty' => 'Merci d&apos;entrer un message',
  'common_date_empty' => 'Merci de s&eacute;lectionner une date',
  'common_date_invalid' => 'La date n\'est pas valide',
  'common_city_empty' => 'Merci d&apos;entrer une ville',
  'common_info_empty' => 'Merci d&apos;entrer des coordonn&eacute;es',
  'common_url_empty' => 'Merci d&apos;entrer une adresse Internet',
  'common_file_empty' => 'Merci de s&eacute;lectionner un fichier en appuyant sur le bouton "Parcourir.."',
  'login_email' => 'Votre adresse m&egrave;l',
  'login_password' => 'Mot de passe',
  'login_error0' => 'Authentification requise',
  'login_error1' => 'Mot de passe requis',
  'login_error2' => 'Acc&egrave;s refus&eacute; (zone restreinte)',
  'login_error3' => 'Identifiant ou mot de passe incorrect',
  'login_last_date' => 'Derni&egrave;re connexion',
  'login_last_address'  => 'Derni&egrave;re adresse de connexion',
  'post_user' => 'utilisateur',
  'post_category' => 'cat&eacute;gorie',
  'post_title' => 'titre',
  'post_documents' => 'photos',
  'post_date' => 'ajout&eacute; le ',
  'post_by' => 'par',
  'doc_file_name' => 'nom du fichier',
  'doc_file_size' => 'taille du fichier',
  'doc_file_type' => 'type de fichier',
  'doc_remove' => 'supprimer',
  'doc_update' => 'actualiser les fichiers',
  'post_description' => 'description',
  'button_create' => 'Cr&eacute;er',
  'button_update' => 'Actualiser',
  'button_delete' => 'Supprimer',
  'button_login' => 'S&apos;identifier',
  'profile_update_success' => 'Profil mis &agrave; jour',
  'url' => 'Site Internet&nbsp;:&nbsp;',
  'atsign' => '@'
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'aujourd\'hui',
	'tomorrow'			=> 'demain',
	'days'				=> 'jours',
	'day'				=> 'jour',
	'weeks'				=> 'semaines',
	'week'				=> 'semaine',
	'months'			=> 'mois',
	'month'				=> 'mois',
	'years'				=> 'années',
	'year'				=> 'année',
	'january'			=> 'janvier',
	'february'			=> 'février',
	'march'				=> 'mars',
	'april'				=> 'avril',
	'may'				=> 'mai',
	'june'				=> 'juin',
	'july'				=> 'juillet',
	'august'			=> 'août',
	'september'			=> 'septembre',
	'october'			=> 'octobre',
	'november'			=> 'novembre',
	'december'			=> 'décembre',
	'jan'				=> 'jan',
	'feb'				=> 'fev',
	'mar'				=> 'mar',
	'apr'				=> 'avr',
	'may'				=> 'mai',
	'jun'				=> 'juin',
	'jul'				=> 'juil',
	'aug'				=> 'aout',
	'sep'				=> 'sep',
	'oct'				=> 'oct',
	'nov'				=> 'nov',
	'dec'				=> 'dec',
	'monday'			=> 'lundi',
	'tuesday'			=> 'mardi',
	'wednesday'			=> 'mercredi',
	'thursday'			=> 'jeudi',
	'friday'			=> 'vendredi',
	'saturday'			=> 'samedi',
	'sunday'			=> 'dimanche',
	'mon'				=> 'lun',
	'tue'				=> 'mar',
	'wed'				=> 'mer',
	'thu'				=> 'jeu',
	'fri'				=> 'ven',
	'sat'				=> 'sam',
	'sun'				=> 'dim'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'Entrant',
	'direction_out'		=> 'Sortant',
	'recipient_from'	=> 'Exp.',
	'recipient_to'		=> 'Dest.',
	'check_recipient'	=> 'Veuillez saisir une addresse email',
	'check_subject'		=> 'Veuillez saisir le sujet',
	'check_injection'	=> 'Tentative de modification de l\'header d\'email',
	'check_active'		=> 'L\'alerte n\'est pas activ&eacute;e'
);

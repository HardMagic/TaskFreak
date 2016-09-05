<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'en_EN.UTF-8', 'en_GB.utf8', 'en_US.utf8', 'en_EN', 'en');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'There are some errors in the form - Information not saved!',
  'field_compulsory'	=>	'This field is compulsory'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "password mismatch",
  "user_pass_limit1" => "password must have between ",
  "user_pass_limit2" => " and ",
  "user_pass_limit3" => " characters",
  "user_pass_empty" => "password can not be empty",
  "user_pass_invalid" => "Invalid password",
  "user_name_limit1" => "username must have between ",
  "user_name_limit2" => " and ",
  "user_name_limit3" => " characters",
  "user_name_exists" => "username already exists",
  "user_name_empty" => "Please enter your user name",
  "user_name_invalid" => "Username shouldn't contain any special characters or spaces",
  "user_name_not_found" => "username not found",
  "user_disabled" => "Account disabled",
  "user_forbidden" => "You are not authorized to login",
  "user_email_empty" => "Please enter your email",
  "user_email_format" => "Please enter a valid email",
  "user_email_invalid" => "Email not found",
  "user_password_invalid" => "Wrong password",
  "email_empty" => "Please enter your e-mail address",
  "email_exists" => "an account with this e-mail address already exists",
  "email_invalid" => "please enter a valid e-mail address",
  "document_wrong_type" => "wrong file type",
  "document_empty" => "please select a file",
  "common_name_empty" => "please enter a name",
  "common_title_empty" => "please enter a title",
  "common_theme_empty" => "please select a theme",
  "common_description_empty" => "please enter description",
  "common_message_empty" => "please enter a message",
  "common_date_empty" => "please select a date",
  "common_date_invalid" => "end date is not valid",
  "common_city_empty" => "please enter city",
  "common_info_empty" => "please enter contact information",
  "common_url_empty" => "please enter a web address",
  "common_file_empty" => "please select a file by clicking the 'Browse..' button",
  "login_email" => "Your email",
  "login_password" => "Password",
  "login_error0" => "Authentification required",
  "login_error1" => "Password required",
  "login_error2" => "Access denied (restricted area)",
  "login_error3" => "Invalid username or password",
  "login_last_date" => 'Last login date',
  "login_last_address"  => 'Last login address',
  "post_user" => "user",
  "post_category" => "category",
  "post_title" => "title",
  "post_documents" => "photos",
  "post_date" => "posted on",
  "post_by" => "by",
  "doc_file_name" => "file name",
  "doc_file_size" => "file size",
  "doc_file_type" => "file type",
  "doc_remove" => "remove",
  "doc_update" => "update files",
  "post_description" => "description",
  "button_create" => "Create",
  "button_update" => "Update",
  "button_delete" => "Delete",
  "button_login" => "Login",
  "profile_update_success" => "Account sucessfully updated",
  "url" => "Website&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'today',
	'tomorrow'			=> 'tomorrow',
	'days'				=> 'days',
	'day'				=> 'day',
	'weeks'				=> 'weeks',
	'week'				=> 'week',
	'months'			=> 'months',
	'month'				=> 'month',
	'years'				=> 'years',
	'year'				=> 'year',
	'january'			=> 'january',
	'february'			=> 'february',
	'march'				=> 'march',
	'april'				=> 'april',
	'may'				=> 'may',
	'june'				=> 'june',
	'july'				=> 'july',
	'august'			=> 'august',
	'september'			=> 'september',
	'october'			=> 'october',
	'november'			=> 'november',
	'december'			=> 'december',
	'jan'				=> 'jan',
	'feb'				=> 'feb',
	'mar'				=> 'mar',
	'apr'				=> 'apr',
	'may'				=> 'may',
	'jun'				=> 'jun',
	'jul'				=> 'jul',
	'aug'				=> 'aug',
	'sep'				=> 'sep',
	'oct'				=> 'oct',
	'nov'				=> 'nov',
	'dec'				=> 'dec',
	'monday'			=> 'monday',
	'tuesday'			=> 'tuesday',
	'wednesday'			=> 'wednesday',
	'thursday'			=> 'thursday',
	'friday'			=> 'friday',
	'saturday'			=> 'saturday',
	'sunday'			=> 'sunday',
	'mon'				=> 'mon',
	'tue'				=> 'tue',
	'wed'				=> 'wed',
	'thu'				=> 'thu',
	'fri'				=> 'fri',
	'sat'				=> 'sat',
	'sun'				=> 'sun'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'IN',
	'direction_out'		=> 'OUT',
	'recipient_from'	=> 'From',
	'recipient_to'		=> 'To',
	'check_recipient'	=> 'Please enter recipient address',
	'check_subject'		=> 'Please enter subject',
	'check_injection'	=> 'Email header injection attempt detected',
	'check_active'		=> 'Email alert is not active'
);

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
  'form_error'			=> 'Formoje yra klaidø - Informacija neiðsaugota!',
  'field_compulsory'	=>	'Ðis laukas yra privalomas'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "slaptaþodþio neatitikimas",
  "user_pass_limit1" => "slaptaþodis turi bûti tarp ",
  "user_pass_limit2" => " ir ",
  "user_pass_limit3" => " simboliø",
  "user_pass_empty" => "slaptaþodis negali bûti paliktas tusèias.",
  "user_pass_invalid" => "Blogas slaptaþodis!",
  "user_name_limit1" => "vartotojo vardas turi bûti tarp ",
  "user_name_limit2" => " ir ",
  "user_name_limit3" => " simboliø",
  "user_name_exists" => "vartotojo vardas jau egzistuoja",
  "user_name_empty" => "Praðome ávesti savo vartotojo vardà",
  "user_name_invalid" => "Vartotojo vardas neturi turëti jokiø ypatingø simboliø ar tarpø",
  "user_name_not_found" => "vartotojo vardas nerastas",
  "user_disabled" => "Vartotojo vardas yra blokuojamas.",
  "user_forbidden" => "Jums neleidþiama prisijungti.",
  "user_email_empty" => "Praðome ávesti jûsø e-paðto adresà",
  "user_email_format" => "Praðome ávesti teisingà e-paðtà.",
  "user_email_invalid" => "E-paðtas nerastas.",
  "user_password_invalid" => "Blogas slaptaþodis.",
  "email_empty" => "Praðome ávesti jûsø e-paðto adresà",
  "email_exists" => "toks e-paðtas jau yra naudojamas kito vartotojo.",
  "email_invalid" => "Praðome ávesti teisingà e-paðtà",
  "document_wrong_type" => "blogas failo tipas",
  "document_empty" => "praðome pasirinkti failà",
  "common_name_empty" => "praðome ávesti vartotojo vardà",
  "common_title_empty" => "praðome ávesti pavadinimà",
  "common_theme_empty" => "praðome ávesti temà",
  "common_description_empty" => "praðome ávesti apibûdinimà",
  "common_message_empty" => "praðome ávesti þinutæ",
  "common_date_empty" => "praðome pasirinkti datà",
  "common_date_invalid" => "tokia data neegzistuoja",
  "common_city_empty" => "praðome ávesti miestà",
  "common_info_empty" => "praðome ávesti kontaktinæ informacijà",
  "common_url_empty" => "praðome ávesti puslapio adresà",
  "common_file_empty" => "praðome pasirinkti failà (spauskite 'Browse..' migtukà) ",
  "login_email" => "Jûsø E-paðtas",
  "login_password" => "Slaptaþodis",
  "login_error0" => "Reikalinga autentifikacija",
  "login_error1" => "Bûtinas slaptaþodis",
  "login_error2" => "Leidimas neduotas",
  "login_error3" => "Blogas vartotojo vardas arba slaptaþodis",
  "login_last_date" => 'Paskutinio prisijungimo data',
  "login_last_address"  => 'Paskutinio prisijungimo adresas',
  "post_user" => "narys",
  "post_category" => "kategorija",
  "post_title" => "pavadinimas",
  "post_documents" => "nuotraukos",
  "post_date" => "paskelbta",
  "post_by" => "paraðë",
  "doc_file_name" => "failo pavadinimas",
  "doc_file_size" => "failo dydis",
  "doc_file_type" => "failo tipas",
  "doc_remove" => "iðtrinti",
  "doc_update" => "atnaujinti failus",
  "post_description" => "apibûdinimas",
  "button_create" => "Sukurti",
  "button_update" => "Atnaujinti",
  "button_delete" => "Iðtrinti",
  "button_login" => "Prisijungti",
  "profile_update_success" => "Vartotojas sëkmingai atnaujintas",
  "url" => "Puslapis&nbsp;:&nbsp;",
  "atsign" => "(eta)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'ðiandien',
	'tomorrow'			=> 'rytoj',
	'days'				=> 'dienos',
	'day'				=> 'diena',
	'weeks'				=> 'savaitës',
	'week'				=> 'savaitë',
	'months'			=> 'mënesiai',
	'month'				=> 'mënesis',
	'years'				=> 'metai',
	'year'				=> 'metai',
	'january'			=> 'sausis',
	'february'			=> 'vasaris',
	'march'				=> 'kovas',
	'april'				=> 'balandis',
	'may'				=> 'geguþë',
	'june'				=> 'birþelis',
	'july'				=> 'liepa',
	'august'			=> 'rugpjûtis',
	'september'			=> 'rugsëjis',
	'october'			=> 'spalis',
	'november'			=> 'lapkritis',
	'december'			=> 'gruodis',
	'jan'				=> 'saus.',
	'feb'				=> 'vasar.',
	'mar'				=> 'kov.',
	'apr'				=> 'baland.',
	'may'				=> 'geguþ.',
	'jun'				=> 'birþel.',
	'jul'				=> 'liep.',
	'aug'				=> 'rûgp.',
	'sep'				=> 'rugs.',
	'oct'				=> 'spal.',
	'nov'				=> 'lapkr.',
	'dec'				=> 'gruod.',
	'monday'			=> 'pirmadienis',
	'tuesday'			=> 'antradienis',
	'wednesday'			=> 'treèiadienis',
	'thursday'			=> 'ketvritadienis',
	'friday'			=> 'penktadienis',
	'saturday'			=> 'ðeðtadienis',
	'sunday'			=> 'sekmadienis',
	'mon'				=> 'pirmadien.',
	'tue'				=> 'antradien.',
	'wed'				=> 'treèiadien.',
	'thu'				=> 'ketvritadien.',
	'fri'				=> 'penktadien.',
	'sat'				=> 'ðeðtadien.',
	'sun'				=> 'sekamdien.'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'Áëjo',
	'direction_out'		=> 'Iðëjo',
	'recipient_from'	=> 'Nuo',
	'recipient_to'		=> 'Kam',
	'check_recipient'	=> 'Praðome ávesti gavëjo adresà',
	'check_subject'		=> 'Praðom ávesti tema',
	'check_injection'	=> 'Email header injection attempt detected',
	'check_active'		=> 'E-paðto áspëjimas nëra ájungtas.'
);

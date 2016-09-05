<?php

/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

setLocale(LC_ALL, 'ru_RU.UTF-8', 'ru_RU', 'ru');

$GLOBALS["langTznCommon"] = array(
  'form_error'			=> 'В форме есть ошибки - Информация не сохранена!',
  'field_compulsory'	=>	'Это поле обязательно для заполнения'
);

$GLOBALS["langTznUser"] = array(
  "user_pass_mismatch" => "неправильный пароль",
  "user_pass_limit1" => "пароль должен быть больше ",
  "user_pass_limit2" => " и меньше ",
  "user_pass_limit3" => " символов",
  "user_pass_empty" => "пароль не может быть пустым",
  "user_pass_invalid" => "Неправильный пароль",
  "user_name_limit1" => "имя пользователя должно быть больше ",
  "user_name_limit2" => " и меньше ",
  "user_name_limit3" => " символов",
  "user_name_exists" => "имя пользователя уже занято",
  "user_name_empty" => "Пожалуйста ввдите ваше имя пользователя",
  "user_name_invalid" => "Имя пользователя не может содержать любые спец. символы или пробелы",
  "user_name_not_found" => "имя пользователя не найдено",
  "user_disabled" => "Аккаунт заблокирован",
  "user_forbidden" => "Вы не авторизованы",
  "user_email_empty" => "Пожалуйста укажите ваш email",
  "user_email_format" => "Пожалуйста введите правильный email",
  "user_email_invalid" => "Email не найден",
  "user_password_invalid" => "Неправильный пароль",
  "email_empty" => "Пожалуйста введите ваш e-mail",
  "email_exists" => "аккаунт с таким e-mail уже зарегистрирован",
  "email_invalid" => "пожалуйста введите правильный e-mail",
  "document_wrong_type" => "неправльный тип файла",
  "document_empty" => "пожалуйста выберите файл",
  "common_name_empty" => "пожалуйста введите имя",
  "common_title_empty" => "пожалуйста введите название",
  "common_theme_empty" => "пожалуйста укажите тему",
  "common_description_empty" => "пожалуйста укажите описание",
  "common_message_empty" => "пожалуйста введите сообщение",
  "common_date_empty" => "пожалуйста укажите дату",
  "common_date_invalid" => "дата окончания неправильно задана",
  "common_city_empty" => "пожалуйста введите город",
  "common_info_empty" => "пожалуйста введите контакнтую информацию",
  "common_url_empty" => "пожалуйста введите вэб адрес",
  "common_file_empty" => "пожалуйста укажите файл нажатием на кнопку 'Обзор..'",
  "login_email" => "Ваш email",
  "login_password" => "Пароль",
  "login_error0" => "Требуется авторизация",
  "login_error1" => "Требуется пароль",
  "login_error2" => "Доступ запрещен (закрытая информация)",
  "login_error3" => "Неправильное имя пользователя или пароль",
  "login_last_date" => 'Последний вход',
  "login_last_address"  => 'Адрес последнего входа',
  "post_user" => "пользователь",
  "post_category" => "категория",
  "post_title" => "название",
  "post_documents" => "фото",
  "post_date" => "размещен",
  "post_by" => "от",
  "doc_file_name" => "имя файла",
  "doc_file_size" => "размер файла",
  "doc_file_type" => "тип файла",
  "doc_remove" => "удалить",
  "doc_update" => "обновить файлы",
  "post_description" => "описание",
  "button_create" => "Создать",
  "button_update" => "Обновить",
  "button_delete" => "Удалить",
  "button_login" => "Войти",
  "profile_update_success" => "Акканунт успешно обновлен",
  "url" => "Сайт&nbsp;:&nbsp;",
  "atsign" => "(at)"
);

$GLOBALS['langTznDate'] = array (
	'today'				=> 'сегодня',
	'tomorrow'			=> 'завтра',
	'days'				=> 'дней',
	'day'				=> 'день',
	'weeks'				=> 'неделей',
	'week'				=> 'неделя',
	'months'			=> 'месяцев',
	'month'				=> 'месяц',
	'years'				=> 'лет',
	'year'				=> 'год',
	'january'			=> 'январь',
	'february'			=> 'февраль',
	'march'				=> 'март',
	'april'				=> 'апрель',
	'may'				=> 'май',
	'june'				=> 'июнь',
	'july'				=> 'июль',
	'august'			=> 'август',
	'september'			=> 'сентябрь',
	'october'			=> 'октябрь',
	'november'			=> 'ноябрь',
	'december'			=> 'декабрь',
	'jan'				=> 'янв',
	'feb'				=> 'фев',
	'mar'				=> 'мар',
	'apr'				=> 'апр',
	'may'				=> 'май',
	'jun'				=> 'июн',
	'jul'				=> 'июл',
	'aug'				=> 'авг',
	'sep'				=> 'сен',
	'oct'				=> 'окт',
	'nov'				=> 'ноя',
	'dec'				=> 'дек',
	'monday'			=> 'понедельник',
	'tuesday'			=> 'вторник',
	'wednesday'			=> 'среда',
	'thursday'			=> 'четверг',
	'friday'			=> 'пятница',
	'saturday'			=> 'суббота',
	'sunday'			=> 'воскресенье',
	'mon'				=> 'пн',
	'tue'				=> 'вт',
	'wed'				=> 'ср',
	'thu'				=> 'чт',
	'fri'				=> 'пт',
	'sat'				=> 'сб',
	'sun'				=> 'вс'
);

$GLOBALS['langEmail'] = array(
	'direction_in'		=> 'IN',
	'direction_out'		=> 'OUT',
	'recipient_from'	=> 'От',
	'recipient_to'		=> 'Кому',
	'check_recipient'	=> 'Пожалуйста введите адреса получателей',
	'check_subject'		=> 'Пожалуйста введите тему',
	'check_injection'	=> 'Обнаружено включение в заголовок email',
	'check_active'		=> 'Оповещение email не активно'
);

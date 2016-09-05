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
	'jscalendar'	=> 'ru'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Задачи',
    'print_list'        => 'Версия для печати',
	'new_todo'			=> 'Новая задача',
	'view'				=> 'Просмотр',
	'all_projects'		=> 'Все проекты',
	'future_tasks'		=> 'Будущие задачи',
	'past_tasks'		=> 'Прошедшие задачи',
    'my_tasks'          => 'Мои задачи',
	'all_tasks'			=> 'Все задачи',
	'all_contexts'		=> 'Все типы',
	'all_users' 		=> 'Все пользователи',
	'reload'			=> 'Обновить',
	'manage'			=> 'Управл.',
	'projects'			=> 'Проекты',
	'users' 			=> 'Пользователи',
    'preferences'       => 'Мой профиль',
    'settings'          => 'Настройки системы',
	'login'				=> 'Вход',
	'logout'			=> 'Выход',
	'warning'			=> 'Внимание',
	'warning_install'	=> 'Папка установки все еще существует, вы должны удалить ее в целях безопасности'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Приоритет',
	'context'			=> 'Тип',
	'deadline'			=> 'Контр. срок',
	'project'			=> 'Проект',
	'tasks'				=> 'Задачи',
	'title'				=> 'Название',
	'description'		=> 'Описание',
    'user'              => 'Пользователь',
    'visibility'        => 'Видимость',
    'private'           => 'личный',
    'internal'          => 'внутренний',
    'public'            => 'общедоступный',
	'status'			=> 'Статус',
	'create'			=> 'Создать',
	'save'				=> 'Сохранить',
	'cancel'			=> 'Отмена',
	'reset'				=> 'Восстановить форму',
    'close'             => 'закрыть',
    'edit'              => 'редактировать',
    'delete'            => 'удалить',
	'new'				=> 'Новый',
	'project_new'		=> 'новый проект?',
	'project_list'		=> 'показать список',
	'compulsory_legend' => 'Поля помеченнын <span class="compulsory">красным</span> обязательны для заполнения.',
	'list_comments'		=> 'Комм.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'описание',
	'description_none'	=> 'нет описания',
	'tab_comments'		=> 'комментарии',
	'comments_by'		=> 'от',
	'comments_none'		=> 'комментариев еще нет',
	'comments_no_access'	=> 'комментарии являются конфиденциальными',
	'comments_new'		=> 'разместить первый комментарий',
	'comments_reply'	=> 'ответ',
	'comments_edit'		=> 'редактировать',
	'comments_delete'	=> 'удалить',
	'comments_delete_confirm'	=> 'действительно удалить комментарий?',
	'tab_history'		=> 'история',
    'history_date'      => 'дата',
    'history_user'      => 'пользователь',
    'history_what'      => 'действие'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'день',
	'days'				=> 'дни',
	'help'				=> 'например, сегодня, завтра, 12 апр'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Проект',
    'projects'          => 'Проекты',
    'name'              => 'Имя',
    'description'       => 'Описание',
    'position'          => 'Позиция',
    'members'           => 'Участники',
    'members_legend'    => 'Участники проекта',
	'status'            => 'Статус',
    'action'            => 'Действие',
    'project_history'   => 'Посмотреть историю изменения статуса',
    'remove_confirm'    => 'действиельно удалить из проекта?',
    'user_add_legend'   => 'Добавить пользователя в этот проект',
    'user_add_button'   => 'Добавить пользовтаеля в проект',
	'user_no_project'   => 'Не принедлежит ни к одному из проектов',
	'user_added_ok'		=> 'Участник успешно добавлен в проект',
	'user_added_err'	=> 'Участник уже принадлежит проекту или недоступен',
	'user_removed_ok'	=> 'Участник удален из проекта!',
	'user_removed_err'	=> 'Участник не может быть удален из проекта или уже был удален',
	'user_position_ok'	=> 'Позиция участника успешно обновлена',
	'project_info'		=> 'Информация о проекте',
	'history_date'      => 'дата',
    'history_user'      => 'пользователь',
	'history_what'      => 'действие',
	'action_save_ok'	=> 'Детали проекта обновлены!',
	'action_added_ok'	=> 'Проект создан!',
	'action_status_ok'	=> 'Статус проекта обновлен!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Персональная информация',
    'user'              => 'Пользователь',
    'name'              => 'Имя',
    'title'             => 'Титул',
    'first_name'        => 'Имя',
    'middle_name'       => 'Отчество',
    'last_name'         => 'Фамилия',
    'address'           => 'Адрес',
    'location'          => 'Местоположение',
    'city'              => 'Город',
    'state'             => 'Штат',
    'country'           => 'Страна',
    'email'             => 'Email',
    'position'          => 'Позиция',
	'last_login'        => 'Последний вход',
	'last_login_from'	=> 'Из',
	'logout_goodbye'	=> 'Вы вышли. Досвидания.',
	'logout_login'		=> 'Нажмите для входа',
    'action'            => 'Действие',
    'delete_confirm'    => 'действительно уделить этого пользователя?',
    'enable_confirm'    => 'действительно активировать этого пользователя?',
    'disable_confirm'   => 'действительно заблокировать этого пользователя?',
    'account'           => 'Аккаунт',
    'account_legend'    => 'Пожалуйста выберите имя пользователя и пароль для входа!',
    'username'          => 'Имя пользователя',
    'password'          => 'Пароль',
    'password_confirm'  => '(подтверждение пароля)',
    'auto_login'        => 'Запомнить меня на этом компьютере',
    'password_legend'   => 'Введите пароль (и подтвердите) только если вы хотите изменить его.',
	'enabled_label'     => 'Аккаунт активный',
	'login_signup'		=> 'Еще не зарегистрированы? Отправить запрос на регистрацию',
	'account_created'	=> 'Создан',
	'account_disabled'	=> 'Аккаунт заблокирован!',
	'state_us_only'		=> 'только для США'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Создать',
	'add_account'		=> 'Сохранить',
    'update'            => 'Сохранить изменения',
    'cancel'            => 'Отменить изменения',
    'reset'             => 'Востановить форму',
    'back'              => 'Вернуться к списку'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Данные не найдены или доступ запрещен',
    'denied'                    => 'Доступ запрещен!',
    'project_delete'            => 'Удалить проект',
    'project_delete_confirm'    => 'Действиельно удалить этот проект и все его задачи?',
    'project_delete_ok'         => 'Проект удален',
    'project_delete_no'         => 'Проект не может быть удален!',
    'task_edit'				    => 'Редактировать эту задачу',
    'task_delete'			    => 'Удалить эту задачу',
    'task_delete_confirm'	    => 'Действительно удалить эту задачу?',
	'error_no_title'		    => 'пожалуйста введите название!',
	'done_deleted'			    => 'задача удалена!',
	'done_status'			    => 'статус задачи обновлен',
	'done_updated'			    => 'задача обновлена!',
	'done_added'			    => 'задача создана!',
	'done_comment_added'		=> 'комментарий добавлен!',
	'done_comment_updated'		=> 'комментарий обновлен!',
	'done_comment_deleted'		=> 'комментарий удален!',
	'operation_failed'			=> 'операция отменена!',
	'purge_all'				    => 'очистка (удалить все задачи) для всех проектов',
	'purge_all_confirm'		    => 'действительно удалеить все задачи из всех проектов?',
	'delete_all'			    => 'удалить все проекты (все задачи)',
	'delete_all_confirm'	    => 'действительно удалить все задачи из всех проектов?',
	'purge_one'				    => 'очистка (удалить все задачи)',
	'purge_one_confirm'		    => 'действительно удалить все задачи из этого проекта?',
	'delete_one'			    => 'удалить содержимое проекта',
	'delete_one_confirm'	    => 'действительно удалить этот проект?',
	'no_task_found'			    => 'нет задач удовлетворяющих вашим критериям',
	'no_project_found'		    => 'проектов не найдено',
	'create_task'			    => 'Нажмите здесь, чтобы создать новую',
	'no_project_found_1'	    => "Чёрт! Проект не найден!!!",
	'no_project_found_2'	    => 'Возможно вам надо сначала создать задачу',
	'close_window'			    => 'закрыть это окно',
    'session_expired'           => 'Сессия истекла',
    'clock_start'				=> 'включаить таймер',
    'clock_stop'				=> 'отсановить таймер',
    'clock_change'				=> 'изменить таймер',
	'information_saved'			=> 'Информация успешно сохранена',
	'confirm_status_close'		=> 'Действительно закрыть эту задачу?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Нет задач на сегодня',
    'error_login'   => 'Ошибка авторизации'
);

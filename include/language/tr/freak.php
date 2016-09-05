<?php
/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.5.4                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

$GLOBALS['langParams'] = array(
	'jscalendar'	=> 'en'
);

// top menu / navigation
$GLOBALS['langMenu'] = array (
	'task'				=> 'Görev',
    'print_list'        => 'Yazıcı Görünümü',
	'new_todo'			=> 'Görev Oluştur',
	'view'				=> 'Görünüm',
	'all_projects'		=> 'Tüm Projeler',
	'future_tasks'		=> 'Bekleyen İşler',
	'past_tasks'		=> 'Tamamlanan İşler',
    'my_tasks'          => 'İşlerim',
	'all_tasks'			=> 'Tüm İşler',
	'all_contexts'		=> 'Tüm Kategoriler',
	'all_users' 		=> 'Tüm Kullanıcılar',
	'reload'			=> 'Yenile',
	'manage'			=> 'Yönet',
	'projects'			=> 'Projeler',
	'users' 			=> 'Kullanıcılar',
    'preferences'       => 'Bilgilerim',
    'settings'          => 'Sistem Ayarları',
	'login'				=> 'Giriş',
	'logout'			=> 'Çıkış',
	'warning'			=> 'Uyarı',
	'warning_install'	=> 'Kurulum dizini hala duruyor, güvenlik nedeni ile install dizini silinmelidir.'
);

// fields and column labels
$GLOBALS['langForm'] = array (
	'priority'			=> 'Öncelik',
	'context'			=> 'Kategori',
	'deadline'			=> 'Mühlet',
	'project'			=> 'Proje',
	'tasks'				=> 'İşler',
	'title'				=> 'Başlık',
	'description'		=> 'Açıklama',
    'user'              => 'Kullanıcı',
    'visibility'        => 'Kapsam',
    'private'           => 'Özel',
    'internal'          => 'İç Kullanım',
    'public'            => 'Genel',
	'status'			=> 'Durum',
	'create'			=> 'Oluştur',
	'save'				=> 'Kaydet',
	'cancel'			=> 'Vazgeç',
	'reset'				=> 'Temizle',
    'close'             => 'Kapat',
    'edit'              => 'Düzenle',
    'delete'            => 'Sil',
	'new'				=> 'Yeni',
	'project_new'		=> 'Yeni Proje?',
	'project_list'		=> 'Proje Listesi',
	'compulsory_legend' => '<span class="compulsory">Kirmizi</span> ile gösterilen alanlar zorunludur.',
	'list_comments'		=> 'Com.'
);

$GLOBALS['langTaskDetails'] = array (
	'tab_description'	=> 'Açıklama',
	'description_none'	=> 'Açıklama girilmemiş',
	'tab_comments'		=> 'Yorumlar',
	'comments_by'		=> 'yazan:',
	'comments_none'		=> 'Yorum bulunmuyor',
	'comments_no_access'	=> 'Yorumlar gizli',
	'comments_new'		=> 'İlk yorumu sen yaz',
	'comments_reply'	=> 'Yanıtla',
	'comments_edit'		=> 'Düzenle',
	'comments_delete'	=> 'Sil',
	'comments_delete_confirm'	=> 'Yorum silinecek?',
	'tab_history'		=> 'Tarihçe',
    'history_date'      => 'Tarih',
    'history_user'      => 'Kullanıcı',
    'history_what'      => 'İşem'
);

// date support
$GLOBALS['langDateMore'] = array (
	'day'				=> 'gün',
	'days'				=> 'gün',
	'help'				=> 'eg. today, tomorrow, 12 apr'
);

// project related
$GLOBALS['langProject'] = array(
    'project'           => 'Proje',
    'projects'          => 'Projeler',
    'name'              => 'İsim',
    'description'       => 'Açıklama',
    'position'          => 'Görev',
    'members'           => 'Kullanıcılar',
    'members_legend'    => 'Proje kullanıcıları',
	'status'            => 'Durum',
    'action'            => 'Action',
    'project_history'   => 'Durum değişiklik tarihçesi',
    'remove_confirm'    => 'Projeden silinecek?',
    'user_add_legend'   => 'Bu projeye kullanıcı ekle',
    'user_add_button'   => 'Kullanıcı ekle',
	'user_no_project'   => 'Projesi bulunmuyor',
	'user_added_ok'		=> 'Kullanıcı projeye eklendi',
	'user_added_err'	=> 'Kullanıcı zaten projeye dahil',
	'user_removed_ok'	=> 'Kullanıcı projeden çıkarıldı!',
	'user_removed_err'	=> 'Kullanıcı zaten projede değil',
	'user_position_ok'	=> 'Kullanıcı görevi değiştirildi',
	'project_info'		=> 'Proje hakkında',
	'history_date'      => 'Tarih',
    'history_user'      => 'Kullanıcı',
	'history_what'      => 'İşlem',
	'action_save_ok'	=> 'Proje detayları değiştirildi!',
	'action_added_ok'	=> 'Proje oluşturuldu!',
	'action_status_ok'	=> 'Proje durumu değiştirildi!'
);

// project related
$GLOBALS['langUser'] = array(
    'information'       => 'Kullanıcı bilgileri',
    'user'              => 'Kullanıcı',
    'name'              => 'Ad',
    'title'             => 'Ünvan',
    'first_name'        => 'İsim',
    'middle_name'       => 'İkinci isim',
    'last_name'         => 'Soyisim',
    'address'           => 'Adres',
    'location'          => 'Lokasyon',
    'city'              => 'Şehir',
    'state'             => 'Eyalet',
    'country'           => 'Ülke',
    'email'             => 'Email',
    'position'          => 'Seviye',
	'last_login'        => 'Son giriş',
	'last_login_from'	=> 'Giriş yeri',
	'logout_goodbye'	=> 'Çıkış yaptınız, güle güle.',
	'logout_login'		=> 'Giriş için tıklayın',
    'action'            => 'İşlem',
    'delete_confirm'    => 'Kullanıcı silinecek?',
    'enable_confirm'    => 'Kullanıcı aktive edilecek?',
    'disable_confirm'   => 'Kullanıcı deaktive edilecek?',
    'account'           => 'Kullanıcı hakları',
    'account_legend'    => 'TaskFreak kullanmak için bir kullanıcı ve şifre edinin!',
    'username'          => 'Kullanıcı',
    'password'          => 'Şifre',
    'password_confirm'  => 'Şifre(onay)',
    'auto_login'        => 'Beni hatırla',
    'password_legend'   => 'Şifrenizi belirlemek için, şifrenizi onaylayın.',
	'enabled_label'     => 'Hesap aktivasyonu yapıldı.',
	'login_signup'		=> 'Üye değilseniz buradan edinebilirsiniz.',
	'account_created'	=> 'Hesap açıldı',
	'account_disabled'	=> 'Hesap kullanıma kapatıldı',
	'state_us_only'		=> 'Sadece US üyeleri için'
);

// buttons
$GLOBALS['langButton'] = array(
    'add'               => 'Ekle',
	'add_account'		=> 'Gönder',
    'update'            => 'Kaydet',
    'cancel'            => 'Vazgeç',
    'reset'             => 'Temizle',
    'back'              => 'Geri'
);


// error and information messages
$GLOBALS['langMessage'] = array (
    'not_found_or_denied'       => 'Erişim yetkiniz veya bilgi yok',
    'denied'                    => 'Yetkiniz yok!',
    'project_delete'            => 'Projeyi sil',
    'project_delete_confirm'    => 'Proje ve ona ait işler silinecek?',
    'project_delete_ok'         => 'Proje silindi',
    'project_delete_no'         => 'Proje silinemedi!',
    'task_edit'				    => 'Bu işi düzenle',
    'task_delete'			    => 'Bu işi sil',
    'task_delete_confirm'	    => 'İş silinecek?',
	'error_no_title'		    => 'Lütfen başlık girin!',
	'done_deleted'			    => 'İş silindi!',
	'done_status'			    => 'Durum değiştirildi',
	'done_updated'			    => 'İş değiştirildi!',
	'done_added'			    => 'İş oluşturuldu!',
	'done_comment_added'		=> 'Yorum eklendi!',
	'done_comment_updated'		=> 'Yorum değiştirildi!',
	'done_comment_deleted'		=> 'Yorum silindi!',
	'operation_failed'			=> 'Operasyon gerçekleşmedi!',
	'purge_all'				    => 'Tüm projelerde eski işler silindi.',
	'purge_all_confirm'		    => 'Tüm projerlerdeki eski işler silinecek?',
	'delete_all'			    => 'Tüm projeler ve onlara ait işler sil',
	'delete_all_confirm'	    => 'Tüm projeler ve onlara ait işler silinecek?',
	'purge_one'				    => 'Eski işleri sil',
	'purge_one_confirm'		    => 'Bu projedeki eski işler silinecek?',
	'delete_one'			    => 'Projeyi sil',
	'delete_one_confirm'	    => 'Proje silinecek?',
	'no_task_found'			    => 'Aradığınız kriterlerde iş bulunamadı.',
	'no_project_found'		    => 'Proje bulunamadı',
	'create_task'			    => 'Bir tane oluşturmak için tıklayın',
	'no_project_found_1'	    => "Dang! Bir proje bulunamadı!!!",
	'no_project_found_2'	    => 'Biliyorsun öncelikle bir    rojeoluşturmalısın',
	'close_window'			    => 'Pencereyi kapat',
    'session_expired'           => 'Session has expired',
    'clock_start'				=> 'Kronometreyi başlat',
    'clock_stop'				=> 'Kronometreyi durdur',
    'clock_change'				=> 'Kronometreyi değiştir',
	'information_saved'			=> 'Bilgi kayıt edildi.',
	'confirm_status_close'		=> 'İş kapatılacak?'
);

$GLOBALS['langRss'] = array (
    'no_task'       => 'Bugün için iş bulunmuyor.',
    'error_login'   => 'Giriş yapılamadı.'
);

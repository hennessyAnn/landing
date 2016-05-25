<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bGmJ/<^{xi^&sv%o$5n+YMXC?shseYjCI${qT$O^1J($5Q7kAJO+,0G,x=S(Tvx=');
define('SECURE_AUTH_KEY',  'hbBY,0uIGdo1%>iBfOl1*B[JucXlZ%lM>Rl4@gP2-]{/;i-jolr(kA?:%2q;9gy ');
define('LOGGED_IN_KEY',    'T7T ~c(MvQ4Ea~SNdn(_<08rV3Vnhm< *Nz,E;1h;[kk-+s([UbV>/ZwrL|WDO8f');
define('NONCE_KEY',        '~c?+-T2/oZ?{>?5]J_aN4NK>x_^?xs)pOhu)OXA.vC]PaRd0v}P<ujaJU9!G$jJS');
define('AUTH_SALT',        '>cr~X_mvg=3!~fj.u%Z]p=h]:wROFP@svnGR Mr8};$!8WHhCw?u%AA@XG 8Vx6O');
define('SECURE_AUTH_SALT', '+ S)_/57E@pZCzO$D#?b{QuvIjnLy+.;H*G!W_MP8A5.X>+_aP1T%Dh=VDeLHe%1');
define('LOGGED_IN_SALT',   'f+,OrGDf7e=aeI|vzf=wVbOOg1&Ay,,xeE/I]n9/QnA9fF}&7ha#2G#REC2lw$.j');
define('NONCE_SALT',       '#u>?}~*iO50<cvFSeaLceZi[tw5 @_46Ik>k^9?0)= ->F:JynZZ(Q6.Ong|X Y!');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

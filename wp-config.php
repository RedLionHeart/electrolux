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
define( 'DB_NAME', 'electrolux' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A4qBCYv):M!]r9t~fva,sJ_o?mPe%.J+o^9-4LLZA*_+ c^@ln79 1TlWK8+1%Hz' );
define( 'SECURE_AUTH_KEY',  'DZ0-b-uK2F]RLPoz-003K#oeLf~=JbIa ^t>B,uWD^;]7pEm%J5]cz=D<:k<*-q=' );
define( 'LOGGED_IN_KEY',    'AfD!>^w9:}H#L7&u =bE#e[tPH-P /d{~y,bNLL%<S`PFJVE$J~B:{SLL<y-=d!]' );
define( 'NONCE_KEY',        '@$CAAn uRM{D9h3#1izJ<z]ZJ?Amm+.!wnDlj*$aT[kh,9~JqSNK2Oa0BM-VN$vI' );
define( 'AUTH_SALT',        'd^-:qbvL,&{DdAh%%CvE*Mo@0l nT`DLZ&NKYx^1Yiw_sYHw?6Mnr:EiYCv0%4a4' );
define( 'SECURE_AUTH_SALT', '|11W@ qI^age2HfY.cgJx)*(eAuU@8@L;4E0{zR*Os9+5zkuM`;}2J=+.k$HJCid' );
define( 'LOGGED_IN_SALT',   '6xxG8_OFe:8@`5@oBU.<,)S]3/FidGY,EFu8jF_5.>SK|`6IqR,)o@QU|a^h#e>s' );
define( 'NONCE_SALT',       '5NUqn97dq&T1Mr}OOg4/_tzQYVGdDE%)@e6e-WdWE&_|&,4I=Ft5@F=5C{8~0.5k' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

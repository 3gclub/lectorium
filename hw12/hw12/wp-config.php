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
define( 'DB_NAME', 'hw12' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'f=4|m5JuWj:~[~Dk40~T:Y4E&?Wi?U!yPgT_^fDg! +RlxDhKjQ>-S$Pk}.6pk])' );
define( 'SECURE_AUTH_KEY',  'i~cFf[WPr4>}rn!yie_D4E(MQ|fZH^QDYpi0>>f-s_F!T$!J3*4F^H)iC9(cUUS%' );
define( 'LOGGED_IN_KEY',    'J>l)W3&V@aQJ/aRy$ 6,?RwI-[{~T=YCn9zi/7o:~^_IuvkX@UY5q.t@Z1+)</e]' );
define( 'NONCE_KEY',        'jxa>50~5#0BcAzjM!n?cqZiHa@fB=lhM?1@L#hx4@FZ.gJ3=CAh_.T@sBwg76hW-' );
define( 'AUTH_SALT',        '7k9jC01sD6<D.Lg6rdkDd+h>5dFbyvBZ#d`IH/oC:aE/|n6FuH5Pt+H}(kR5aRHu' );
define( 'SECURE_AUTH_SALT', 'pD>QoaCbE/1CZ&G@^Ac[R[.=(o6U87m0T}NV)!58BUI5<Q`9DNovXI<]h+cAlF<G' );
define( 'LOGGED_IN_SALT',   ']f@WF_A3,@fi`u0.q`GX!|>IoWx`MXu+8 GMr#|#Vs2[Gp* {Rq0ho53%kX(U<2+' );
define( 'NONCE_SALT',       '/(F%!@S_gV605-/ER`7wBY9e%`[58WbM]Ik&4U$#xBDW}];74K0/!(8x%f..I8kX' );

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

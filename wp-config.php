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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpresssite' );

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
define( 'AUTH_KEY',         '(XsoaEP,>3af2f`48~,z>qjCvJTx@(3>j}8kmyUv8yAdXqEc{gUVWy`y#%[,4f4Y' );
define( 'SECURE_AUTH_KEY',  'U48Ho7Z1=-l;ptPX]*S>z=Zz>pK<h#Ux8>`V1w 6rWGxrZ<O.J)s&auu80PWOdE2' );
define( 'LOGGED_IN_KEY',    '}L3)!DU.@Au,+gThbm.f]ZNg]N#IjC36}pibpC !Bg=r,3XVFx$goPQ1q<c<}6d5' );
define( 'NONCE_KEY',        'q7@^ai0[~NYUnSf^Q,BXycz>.fd(C<Y3u8ZQ!5Y@`LBOjSj&}^}s:-,rE21]y$o,' );
define( 'AUTH_SALT',        'G,=.fGd!^T81O8)Bd+WTDd3-L}J>rQ(W|$n9VDJVhXG3YXHF /Du -4*~Aj9}L0Q' );
define( 'SECURE_AUTH_SALT', 'CccX1 bNKHcGBLLZVxfSKa1zp],DPa_m<L?l{zn=oDU5 Q>_xHCakNlr.^H}T5n2' );
define( 'LOGGED_IN_SALT',   '+B0ADokE(_1G+:LMnKgdusgH4v]mPFp1}J}TBk,rX^P{M]Ho|y#-pCb)&Ej{3O,W' );
define( 'NONCE_SALT',       '&i|UV{+bV$Z$#dWRh*PLTd@^U0R8 jy(@9*VgGj&iu~Q5 %5-Z5tR<*im^RbTjy$' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_site';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

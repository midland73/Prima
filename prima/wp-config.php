<?php

// BEGIN iThemes Security - Не меняйте и не удаляйте эту строку
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Отключить редактор файлов - Безопасность > Настройки > Подстройки WordPress > Редактор файлов
// END iThemes Security - Не меняйте и не удаляйте эту строку

define( 'ITSEC_ENCRYPTION_KEY', 'LXRhPCFUcWJGfE5oKTdHfkhJNVVsWF1acmAwdklPTHk6MSZXJnU2eHp1MSsycFV1KGJvKHZTV1pebkAlQ3c0Sw==' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prima2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.2' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IVO[+_|9Go2m+T=Vt<#C94uYyK9@}i-Shld6|zHqrL$?,|n7BYE]Fn$}amBp&FBJ' );
define( 'SECURE_AUTH_KEY',  'WVM@,A[Ed#Xt._S(>lqG/v~i nbl-G_[7u,$U <E<~CqL@OM#kR~P-&hijcF5k56' );
define( 'LOGGED_IN_KEY',    'QQ$4|J-7AOGw4a_)5x,{%N~N^5:<4c<1}/Z_<XhfsL%4H4z@MCn$p7h3Q-8v;Ww0' );
define( 'NONCE_KEY',        't4d8n{dtT9?4%~=j5wTyGezjZZcKf-(cjGd8n|ua1|r*J}o.O7.EZ`zdCN8WWo4j' );
define( 'AUTH_SALT',        '5pZM^_MEKT<4~ }4Ih=(:pp(*TO^Y#r|`3<sPuz*0RUtb`6kSxPlzh&87R[np76p' );
define( 'SECURE_AUTH_SALT', 'R2]+fI,TplyhXj_%+`x+EyX1YFXT_(_me{VZ5q~OENbs%!{_YM=-nS_UQjvm%-q=' );
define( 'LOGGED_IN_SALT',   'u=~u>rb|lJ(D1Q-xH `N5b>6.LIB>iUQB23f*[yI8jt:WCW|n7Grn^mf8:I22-Bh' );
define( 'NONCE_SALT',       ' QP*uJr`M,akFV7w*82qZxb%)MmS8[-@Gj>P]q{IQK17 a7266~mD$ya;sloT0/f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

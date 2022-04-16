<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_estud' );

/** Database username */
define( 'DB_USER', 'wesley' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'J}X:w^A>/hswE}e`B7Rq41AF}Ux#bl9][AsS|H4(khPZ( R1}1s$pIU(g3bt2O?W' );
define( 'SECURE_AUTH_KEY',  'JA97jZJ2}/8W?3ZX{i&bRM25)m!hJ9lyUaUUW>[] V)lW|U/db+BN>9]q=ZV^dP_' );
define( 'LOGGED_IN_KEY',    '?1_>|=~u#hv!sn@lgRq.zl$|3@HUv5|r@f--q,*t+:!0Js>b?qx9X^:+9R>k?BUa' );
define( 'NONCE_KEY',        'xQnO @0EzMwn2_XCqD#aQV`Q]I?AA|2T6jKc L:Ez-7F9L]d/v?JMCDU e%on]a#' );
define( 'AUTH_SALT',        'K4]>+#:t~~kkyNeG3/UFBfJ`kDtQ*]q1KN$i5x0pRxzH`//~>u/n}=o9M>lZNtx6' );
define( 'SECURE_AUTH_SALT', '*Qj]S C:&Z16X{W!@[_+=:e3+Apcy[^$O`k:14%!7PB6B[8Vv20bi@=-DxW7l`Z4' );
define( 'LOGGED_IN_SALT',   'u^Z!Py#(I>7=Hf>[5/-,(!MN`7>a#t/#!hSUoJ47&,//F{XLy#f$JE-<_Yb!OW(T' );
define( 'NONCE_SALT',       'mGq4yE}S_~8P,e|!l`{,pr_XVW;,PE3p5C%Saqv{!E1O]ZZG5cP lejHuuE5|E|U' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

define('FS_METHOD','direct');
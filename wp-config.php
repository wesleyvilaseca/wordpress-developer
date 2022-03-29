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
define( 'DB_NAME', 'worpress_dev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#$Oi qGj@|&`GXF81CQY4G[4f~E-i9ko0DOf=_Uu6RgpjvY!*zTmP6_ Jw*@8(84' );
define( 'SECURE_AUTH_KEY',  'o=Kk,r^xn;c(:1Bc>K-O3v,r6R~,r}{8314YpoaX2[7Zh0>mm.%tI>q}[)R|#9h!' );
define( 'LOGGED_IN_KEY',    'del+hRxYq.,B@f92hMEs{}r~9WizTE2E,b|<aNMx|G!gfvIkA+R$0MPI`a1y7M@7' );
define( 'NONCE_KEY',        '>U$3D_oGW::=$@k&2kcq(Z87y9uQ2f]MO_cIuf9If}fw  &bk!gH?Ge9;+SV{?M<' );
define( 'AUTH_SALT',        's(HZetNsFzm@GLW[@PE{MvU:![E]U(p+XUGj.+9Ktlp~:{Um9|dzNpDSe/?#5JT,' );
define( 'SECURE_AUTH_SALT', 'Il@467zG9dyTS60y[mAANn+s9T`a9v2h>$-.z]15[)rui07e1YaZ*Cgd}*`nK3,&' );
define( 'LOGGED_IN_SALT',   'r+ERB-.k<W@<L-84[0{8F3u^N#.Hw$7<0)`lOihb)jwf)9pYTF~ |^96~-!qMGoR' );
define( 'NONCE_SALT',       'C/*=6G<W<*Y).Paba,gY#<z.:~wC+L<28s!JXR<T$#i;yqz/B]wZ%he7=;b^+gJj' );

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

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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_tablas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`dPV7t;5hlvlM]yYNU$N5::4~agM+s`4RR+: y0$rHEV9MqL.kS(lvjR5WvUje/d' );
define( 'SECURE_AUTH_KEY',  '-BYE_e3U2 kr:{:|YVe@ztDJ7g>WFs^B4u#xc$H$1[UL{](d#Pe}a^p43Ux%+_qr' );
define( 'LOGGED_IN_KEY',    'e!bF=WFeYiURYV `D@|eOK0$r|lORu/WJconio#YN@bz1vVCVF!m.U,LK VjEv_*' );
define( 'NONCE_KEY',        '?Xk;J>h{Q=u!hLXIF08nc.n2[{YZE>K->Ls)a8jf9I@5}[:fs1TPM251oXae8|.h' );
define( 'AUTH_SALT',        'je~dP*_2Z-HB{arF/a))eH7DV4x+n+q$V8j@Mom?jpALT9_bZ<.:x<9!_3I^`>]:' );
define( 'SECURE_AUTH_SALT', 'CTI4C$]tSte$E2U!:z^`+:q58f{{1P/<:$G?%6~(f@s<e2^FS%}Xih|8EYg&.8^>' );
define( 'LOGGED_IN_SALT',   'V*Q6u(y 4=-QFgk,g(8}I,2bkDV(#TM_xhg5AaNGUYHp%A ,bw(2Xoh8qeVHA7XP' );
define( 'NONCE_SALT',       '**#q! ,7M(u-=)4X+_+gwXHa?~aM@1W1A[z_q+An6*v7k7L1]iI1@|nQh!L=Yy[s' );

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

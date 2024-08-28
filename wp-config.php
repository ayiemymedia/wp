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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'FxQ>T@pt,BALCh=98h0;+HZ`&hJM3Dr.7V:yo~JE9SbFaZM_d|{ID8ioJh,w#_qO' );
define( 'SECURE_AUTH_KEY',   'XM+{!LzCzW9Ak <lJz9O=>$F:P,g?f2*E<dv~NX)A7Z[;rV%=^Ysb9P3LnaHG.[R' );
define( 'LOGGED_IN_KEY',     'xQvk56 C^0f1`F4Q!CMwxXz7MY!-AuG$lET:/M~#[.IhA36b$@W.vsgq+Ze!P~w}' );
define( 'NONCE_KEY',         'P0pJN/r<@]J_Ap>CeUtn*V^@A6> uH:*}XH@)L79w~PHImQYsRJ+4$|0<-cE^*:|' );
define( 'AUTH_SALT',         'brqB2iQgJ}#TjjbM)17XFR!ML[s~(b}/r:7LU6PFD]F,h#(<Z0id(zJ4?=X7E+mn' );
define( 'SECURE_AUTH_SALT',  '*89=nI!d?[w)zlV{rb *)BF2kIPb/QV7Q^pqx(=_$9_lD=762n+jt<TV9H~FP!i#' );
define( 'LOGGED_IN_SALT',    'Fg^Wpc5IUe0ehwAhN4#|t2I5=IUo}zx29-4htHu:+Gh92B[J(pLx03M[-41(o:Pb' );
define( 'NONCE_SALT',        '--V1I.LqWtE:m 5nw4j!kF_7*hz^WeyFb2;c/,nrzsV77llQXpEtnYjn9|r&^n1Z' );
define( 'WP_CACHE_KEY_SALT', 'A4i6V2AQFRl_W#L<uX<1K*,G3TIJqY4`Ie=?o~EP+^RGzy o136d$_~kv#1Xd>`,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

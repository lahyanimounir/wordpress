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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         ')IO9o.N;Dfs9/6rX4cq@98$lWHb+P?X/3eueEvO^NcP&`^++[M>d!6!}U_!SDQe_' );
define( 'SECURE_AUTH_KEY',  'z2SU[s&ljq:+L_VvdRkOBis?@4312;Pybo+#@FSV^xj~WJ,t.*CVv&[:cobm,nmc' );
define( 'LOGGED_IN_KEY',    '8-t6Fl~g&0*:NFtv&*.k)Z`$MnT!V?Z%jY09{B[8/L8a|p!S }dh6ZN.{Lr/@Y@b' );
define( 'NONCE_KEY',        'Yp~3bQ0rJX6,]Hr.TT{D<J<1Lvq{|4;az/r1`+ ^ij;%of%`L:EMk$,e3qT#EUM0' );
define( 'AUTH_SALT',        '~J%LC2D&!>2ax7z3fOk6zzwark@KUM-|wg|-lUfgl7u$pidBeC{J{r&v4P/y2[w+' );
define( 'SECURE_AUTH_SALT', '6To/!yS5!`Z@wt-%!hc,dJ#3UF?,9j4->ieg.>3m@xRH%}i6=Z},x_Jp>h$3BUW:' );
define( 'LOGGED_IN_SALT',   'TR#.n%|oTnKl(`TP~JU]T5}eVfZ]@Yx@yTD]G25P*C[u@~79Pv;HjC*RXSwY3NOc' );
define( 'NONCE_SALT',       'NR]XNmZOPTztg;N&%Qtzle8rOB8+q:RydPxDy/$h50X5Nws?`^6WbkV=Uv>DWWI6' );

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

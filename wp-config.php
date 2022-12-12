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
define( 'DB_NAME', 'newsportal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
// admin/Wdp6#@OPE9@

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
define( 'AUTH_KEY',         'j6ZY>Ydbwo~|Y_r1?6J*OySVHYr(>]vE6p[02tNoeS3u,@ZRVj7yfgf|kC75Kp<B' );
define( 'SECURE_AUTH_KEY',  'qKv|VMUH1br[o-}I}Np[8EW Nw-TE`@|z7>6=I$c*yuTgl*^HU;QcVh5?t6OXoR?' );
define( 'LOGGED_IN_KEY',    'VW$O=O#OlJ t1p)&3 7vTM_J/g^iF4si[txLJ: b[Ls5GwJ6MsfF5gd>02J,qu$S' );
define( 'NONCE_KEY',        '`.#1{(zd=Z$Z a+Mv8gKy2)v 4OND],rK`;IJtP|/L_lC<:@dwz7b<y>U^xP?-p8' );
define( 'AUTH_SALT',        '6!F,A%?8a]iLn9(=:Lq-lC|HTJ#uqWD:cI.WWG(?(eJ:`R*b=IRc:?1*a<Ygd8`p' );
define( 'SECURE_AUTH_SALT', 'd$$,j!EMj$zY(:0*C7`#>_HS2uFpPm=EuZXm3h{uPEWubOl{WaFFG6#LQ<3(qo#q' );
define( 'LOGGED_IN_SALT',   'Mf_v13rUB[}w^emtMJWmyitIw>wI6eKJj)ob%!)A`>RUnq&GlY,IcF7h$F!7h/B3' );
define( 'NONCE_SALT',       'lI=J-}D2@;{(?kAvL:S5!Nb{ADB$_qY/WJI-U!HH+R.+ R,WMCu$gk*}<,%*CQe4' );

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

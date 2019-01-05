<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_voyage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cn=q7Nu}13TGs8zT5Afuz7!b=R;({9<b_>*9(ReZ!CVjKA[o;0Fa@]b<G-MyY,$D');
define('SECURE_AUTH_KEY',  '}yT&~V)3GAvrST|<+HjGj$(*q!S^^}`2HJ>tXp[aCG2kM{tl@]~:bGJ]2o%6n-dE');
define('LOGGED_IN_KEY',    'dyY>wP}QlBDAX!@!g.-z}]#tOPo1Ppf!d<:CY#*W9cq_Dmx|vQvtI0k`#tC[H)9W');
define('NONCE_KEY',        'w]e|M41KyzQl[Ik]ADv6)d)=$xc%RuK:KmS&p)iqW<Lgg:ep3DOOS2:Nv^7L#^l7');
define('AUTH_SALT',        '*E0S=2X7SU5M&Isnfyy/:x0v8Roy+=0;s*[OC.m};VGr;%Jh;OZf#%r0+VESIOB[');
define('SECURE_AUTH_SALT', ']sahjs%x_F<0tn|QE#&Fo38d>r5Z-Xy`J=).-Gi{k;w|eSAVhE kD8DgY93!r3@p');
define('LOGGED_IN_SALT',   '1Y7E2Y$hJ6{*D:6Y(t1I[NP1if(gwR1n.>`xULhQC5:FJqNq)^[24;A0`C98a4Zv');
define('NONCE_SALT',       'H,U8.,]PGxMQ{b]-#~do5CqVsTn_fmW1s,6/qm/(<>/30VPNl3h,}+HFuP$c8>K9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

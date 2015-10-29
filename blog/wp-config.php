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
define('DB_NAME', 'schoolblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'nzoNli@QMf5x;[|EkjBP-/E }</>Slnw#U ^y*@FdY`=I+U.hcSS(Qie865&a+-R');
define('SECURE_AUTH_KEY',  'I#YDi$6NUl8Ot!+Byui:GxdQY!<|+~7o|VXeyt-D|Q+o1Gk%s;t-N-#Pl!*x?zv`');
define('LOGGED_IN_KEY',    '=Tz/H:R1@:dC6939!<xvv|.Kbn967>FuGd}?]$Ih[u>GcCKAc.aW/l -+r+H58G]');
define('NONCE_KEY',        '|1fa#c/<3*={^ei~tY I)7O?$d(H5iMom~xK+~dYMKs/.wNd|eb-<=:&atMi+~qf');
define('AUTH_SALT',        'C`/3+fY3p<G?f6SjdJ1$P.OQ4_b+J&Zty?zNd7#Cl*6=^fJWkPhwM%3(l@nb3<~K');
define('SECURE_AUTH_SALT', 'Z+_^yD5fy1*ib@j$eSUKesG }ul-p%;F!s^;4kL/  PXmwg?7NQ/OFxqZ7:AoAxc');
define('LOGGED_IN_SALT',   'a3!F$,Oc1-gX&-dV/l8E-HrCS-W!YST&n!gFDK_F#;i=OC-P*+FrSd/r/([r8fWA');
define('NONCE_SALT',       '|K:TIk=;S*@iV#LYV#?7*5JPc^VDb^:Uo.E1>a7-wlW%<.+`|eztzB7IY|9{)LIl');

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

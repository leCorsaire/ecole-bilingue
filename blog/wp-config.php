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
define('DB_NAME', 'blog-informations');

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
define('AUTH_KEY',         ' Z?@LIH/T=SW-s$M.vK()K|7G3rc|MKw?J$inhk%&Ir,Wb2v;#lsv0Fc;-TSN^+Y');
define('SECURE_AUTH_KEY',  'WV~<<KC;>P2{O+kv&]Czcazd#v>QA)E~]}UftQ5VO2:3,K1Q;/a^.my9-k?=etX{');
define('LOGGED_IN_KEY',    'DWRGdjg:r[n$RZZHws&4`2rW+(F,uWh#!e?CdbS.:f`I+j<sOFpoK;oSXPdg#x$T');
define('NONCE_KEY',        'VEkV8(?:}Ro+6wT}E`g@o.L:{3ya5%P~4v%.$ylpx+-a/2Z)-kR7$hut0aO2Q:NJ');
define('AUTH_SALT',        '*N%WW`VNq]@=%4OV%@%fgF X44GMR{70|5${e@Hk9pG|mpRvO|~6ArhEBVeuc8nz');
define('SECURE_AUTH_SALT', 'R%KqoTchGt_,z-*m[*Fy-cRU #3do~j8Ufg9j6g9W@3(G$bOx~Yi3MA[pm0rd5+a');
define('LOGGED_IN_SALT',   '=Bf~qu`O<~q++-&C&Kp84[_?Fv$2})k]FIGigbsE_(}Lzv,LOHnt-okV ^/c=?Y}');
define('NONCE_SALT',       'm:?=,a9;-z;hRnO `f%Lr #fuc[F*$&Rn{7&A2pcqsxWiVk]IhX;U=IS+K3Ao4gb');

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

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
define('DB_NAME', 'RamirezAgency');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         '4L{#|9QuL{IJ)5oE|:RMDJ{(J!nLc91`sme|%WE +bL#|HwlV(0W7xO=~l{Gn8 K');
 define('SECURE_AUTH_KEY',  'Im4+rB-E]F-(eQac`^n- kRQt$ahRLRl+i-P6kY)fx!n,;EE{S`w5>CV-1pZi%tx');
 define('LOGGED_IN_KEY',    'WX_8Ypw_z@2k|I[TioE7:Kt4`E++|Vyr?0qb+#11ccn/7i-~R=}WJwnwRKikUI~+');
 define('NONCE_KEY',        '{fqZ|~X+,2z_F:f6BqFKz /m.9QBmuu}Lk6pO9]*|dqjp|5]gfuOg>k/T7]L+tGK');
 define('AUTH_SALT',        '-0y;DYLr7Y%LfE:-n@weGk#I_4#D<t-KF:pBkD}nzu>1UXO+}g-n|VH_q5Pym>u/');
 define('SECURE_AUTH_SALT', '/:8:BMZ5wF0?HBsi>=y<why8u--wCQx]1c/3SA6YABuB7q8?{LTEoCAQ&G&R.#]H');
 define('LOGGED_IN_SALT',   '?Fe.U~9b?:OcvC4lF=l|E!78l}N+>~4h&.g;xs;DZ)O<tw:~KrC y9RF`NS|6aEe');
 define('NONCE_SALT',       'u^so7=-|]g=FS>)XU!|j6g;ftpNN @|9:{<4~l6;q)^1AF+97+A*v2h(-1qd,Y,u');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

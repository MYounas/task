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
define('DB_NAME', 'task_db');

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

error_reporting(E_ALL); ini_set('display_errors', 1);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l<?XX)5r,J%68}4rH^}sY/Tog6xe+Q.rQC;Y -PHlI0/M@ FkUuw^d/3Ee}7x]B1');
define('SECURE_AUTH_KEY',  'iv(@G&X}S!XzFqy/{vqZI]/gqPjMI&O8:-|,Hr::mdg}t_4$w+.8tBp.0o[P0EmP');
define('LOGGED_IN_KEY',    'By3{VhEsyIr^Us@&n:].~L+2JxOh#4n.9j][Kjy-`w@ku,[CUB= !e((?/JP#uE[');
define('NONCE_KEY',        '-_EwNA;RxnToOo52UI8iW/_mx.B9>yNEe3n*_)%`O0)|Dbc*<)Nv(yBz9<)4!?87');
define('AUTH_SALT',        '<TY`*43|C>qTVQp2=d4O5D+1b#x{nfuLD.t=`M; XTNInXLAxsNHq0^TlQ__I5Z#');
define('SECURE_AUTH_SALT', 'LfrV%Zk|$k}LW-AnB3UJcb5:,D:c;fUMYYQUEm=IPclh:+I&F>o2yLgc%sp5Qrl3');
define('LOGGED_IN_SALT',   'svSqK#%&;zt0 ]-!:rd1T]>B0P&!{<<-*/jjsvIIXK!h&C0L%+l8Y/RF7ff|sQk|');
define('NONCE_SALT',       '&8d~jghcvF`v:7oP(cw6o<[Wgy-Hob#~xf&87rm0s8Kj?,?cH|&(qh]yrEaYR^xV');

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

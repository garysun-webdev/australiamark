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
define('DB_NAME', 'aust41230166514');

/** MySQL database username */
define('DB_USER', 'aust41230166514');

/** MySQL database password */
define('DB_PASSWORD', 'M+bZgnXL|If2L');

/** MySQL hostname */
define('DB_HOST', 'aust41230166514.db.41230166.hostedresource.com:3311');

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
define('AUTH_KEY',         '4=+g=L%mKj2%Jq+n*10U');
define('SECURE_AUTH_KEY',  '-YM4taVrpsQ$S%Xww$55');
define('LOGGED_IN_KEY',    '84d_R#21FxUKN$3& ps=');
define('NONCE_KEY',        'E10(Kfh-4s44I%)r+ABb');
define('AUTH_SALT',        'Rb86(ND6-w/Hsb%3wy b');
define('SECURE_AUTH_SALT', 'd*t=FYtagGRQ$3hHYhMp');
define('LOGGED_IN_SALT',   'FEYMk8t5WLN5)sC+znw$');
define('NONCE_SALT',       'I_59Z5)Fc5MbBCUZfEBI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ggmdfpg111_';
define( 'FORCE_SSL_LOGIN', 1 );
define( 'FORCE_SSL_ADMIN', 1 );

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
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
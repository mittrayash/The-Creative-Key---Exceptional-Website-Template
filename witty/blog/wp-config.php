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
define('DB_NAME', 'i1787300_wp3');

/** MySQL database username */
define('DB_USER', 'i1787300_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'T#ZK@eRK(s#[vKSmLK[51[[2');

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
define('AUTH_KEY',         'vEeZ1X8iecl3NjlJWyCD8bs7n1rEVwOIIz7u2F3jnsPZSZsCHYuMGfP0w127z8ED');
define('SECURE_AUTH_KEY',  'xW2FBZsztbLbXItDTWhUHgXTbPUvjm5tTA29SIOnkg2YNlt95OsmPuUHy6zt5qgz');
define('LOGGED_IN_KEY',    'pTWXAZKtypepprDVH2QvNBSUenJtscGlhwm4RJ4RiBSOWtRGmWa1LIoI3wjjIFuV');
define('NONCE_KEY',        'mwPpF54RO8AFIdTay5GAGdiZdgmUReW2qhv9e2hdvbTTm2YfULlTttr4A3OpF0Xn');
define('AUTH_SALT',        'JMxJg8sJ8xLLQsTrCphH5sEB33UUD6EZOFUNQtt9L08iNva813pmf1gO4SMvFCoq');
define('SECURE_AUTH_SALT', 'PDsmV6zik5o6c1czSXiQ7MTp7azeV6QtLJdYnsIHiLaNMN58ltIaQdLyR7npWOTz');
define('LOGGED_IN_SALT',   '8mSC1956fs73Ii6g4UXcWJMIbh4pBt8abaoQdxHXRQnRp0lCzYnG96OXbvFV2KRA');
define('NONCE_SALT',       'GdlXFjZmgn9LAqL8ItGnzMQwiFNopGG4xup4pUDASl4QtYGQyPCZJYpgV8n0VKBq');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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

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


define('AUTH_KEY',         'vnIbzJ1cnBRV1Sf0aJinmoqXxtmFP+Y87Ah6vtUm113Yn7UXT1qp+HCluqY5bLoOxCuifoI7Zk4RSZYV37fpiQ==');
define('SECURE_AUTH_KEY',  '8omYXdxcq8TAFAb3J0pgvWOBcSh6myk75gupI0Tpi84fxqEi2BuXJBUbjU6Gss0aLqSz4lBeSE82fZ8nTHWyOQ==');
define('LOGGED_IN_KEY',    'athCXqHXKiyRhqdw6Q8aJ2t0IFCodpIa+KKxMIv7Tg9pRf5kDFtYfnZrH9xDhyVh7X2VxiyN761Mv7re4kHWFg==');
define('NONCE_KEY',        'gcF3lr0y0OKPnhgN79W+C9WykwezjOxJaE0solHbb7AIXavPxk0pVoxQiaX7CaSLRQLAfhv8ZVj2aSO8K5JU+w==');
define('AUTH_SALT',        '+9y5cVdAxvUGQbqT4TrzCITB41bvwW6hl2dwfS+4jxR5jr/i9qPcIghJOlsAhYcWZ7Gw33kYwNk+wQPCdoKowg==');
define('SECURE_AUTH_SALT', 'ISSh8Y5q4o42rj+bjdvl5hHeX5pt3r/7OguaoYOwLgMa0Ja1q219xhC6RamLvUAuvrD9MgVw7Yj8xKJwzbP6Mw==');
define('LOGGED_IN_SALT',   'aXSbqvJ9pupvLnXBzMUHYl0qTCfoORnyTWeXKCp3L2HRjGuTFnseHXvpB10BMFbm+glZ6pPkoCDzM0hTsHnmFg==');
define('NONCE_SALT',       'qKsdpgRJ9VBexShVS1OR111XJgQcqGQ/lbqtXpmby5doc1NjfAA92XXdpW0YXOjJXangbF2hqWJI79AbjUqZRg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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

define('WP_DEBUG', true);


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'JNi1LwQ+ojlzbE9uT9vEKNKx1v4LPUU7hupfB1ouPcB2rrXs6e3Ykfofb7QPb47HtUDOi/E0Hdx/j3IAiwa8og==');
define('SECURE_AUTH_KEY',  'rDHOOyPiKS5tFvPzhukunYPzFzgCwX82NxRSqSi+r2fmnIQvjKG7yEhvbeY3ob0P3ODf13XAsRItUKCk5lYfBQ==');
define('LOGGED_IN_KEY',    'MK9Ez6xuAl1VCiUH1lwCIO8DYuXOMGKQTO+GSdTDfB0iVHYydx+ttBVhmhqP7M8XRgxRsh7ImWDN4zWh1sJ07Q==');
define('NONCE_KEY',        'J15idtlATtoP0CJwGcP46yCDWQnd2zqdKIBGA1qzzji0xZr11Kns0eiI2H0zPXiqNmKXofNbfeT/Dpq0YGnZgA==');
define('AUTH_SALT',        'YeuK+dAjbOZtUl55kaoIS2/aWkvc+3I8KrE3NJL/VRX0NJIc7mPcHfeT89BRXQ/DzNq+XlL53Q/QdVgxes9INg==');
define('SECURE_AUTH_SALT', 'GOnhLyfSxNmGjeO/Orib0nlZ9oVoyPU29tg09C6lQMBexwd1aADE9WLp4RGoVZcy8Si+89HQEAq08+FHQkFH/w==');
define('LOGGED_IN_SALT',   'bhVmvsou/X5E+/+aQvm+YKukmT4xOvBZ2K3oPhYvd8y7bRO43M40hkmy0jcjqZDS49/uGKsNudTT+D4kVEDRDg==');
define('NONCE_SALT',       'g9s8wGN7MCf2QG55PEdI21ij/+jVh0nGgw4qwy2nRTOWriRJPI9Uz8WZs6Pqef6DD9SlMlL67JsXUtVoo7YG9A==');
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jaguar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'CSLpH3IyN0KRNsXFvRWrzZtdo9tc6DUnVpHRPIMbFuR7JICmsIfwbmIYKv1t5apX' );
define( 'SECURE_AUTH_KEY',  'oqIM8dRjqcbwK26FV0FJZjpDH7KtUg1cNJC9q7z6qvq9qPv5NEVnKQBYI3wdSQR4' );
define( 'LOGGED_IN_KEY',    'q4ssYSL1LubTckCGwG79SGdv1NhRR37DKoD2xXJ68Xtr9AnVDc3PqCYsMca1ca25' );
define( 'NONCE_KEY',        'zAFm773dXMVz0kDjPyPjImu6xQZdej3RFMqz56SnsWrIKqbOkK8kfkHJpmgrjJgO' );
define( 'AUTH_SALT',        '9q5KfaeXDfJc1m5SV36FuuYimALvUvb25LXgd2FalkHjc92m78KgMtQUlx7eeBJI' );
define( 'SECURE_AUTH_SALT', 'et0OHEIKDSn6f9rZws0Y8p0QHoKHj8oVV5YLn37JrE9apNPCQgVFa1LObK73L3uv' );
define( 'LOGGED_IN_SALT',   'aD3YgE7KJzNw0BlhgtiIe1s3I82sZujSJxObuxIjGIMaMOsPXHIDqyDfe33F7pFK' );
define( 'NONCE_SALT',       '8J8HLIhqiVJG9hr9hVqvTp3RAJ3S03BYnyU0i7TJ5Ziiey3P1kEuXGfIfqfE5MXO' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

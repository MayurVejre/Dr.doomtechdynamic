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


define('AUTH_KEY',         '5bmWstO5sXlll0gA9u2Am4GPj05m8HHRuRwRsJHWaqFxiSGqsYlvcqjVsuN0jj5naWLdyhEpw55lT72nSRoL3Q==');
define('SECURE_AUTH_KEY',  'OZFKQUjFO9fJVkzPMbNAXInWTe4a5yj/9LN3LKwEU0WkFzAK5RVPxb3wl0kQtSLOQCpTkSdgmAlzhhxQwkizZQ==');
define('LOGGED_IN_KEY',    'At57/3SNstgCngWkriAObfHi/d5+GWvwUjB6LPY58nB1xt1TjK6/UBm/xPhEDaLS/XIqQrMymqnme8IaKePNXw==');
define('NONCE_KEY',        'xwOFVK2edoxzgKaf8D01reh9E4mQa8i3WdHdpl3DPFIzFuRjZKnotTvITvqn9/jZU/HJzE10rUk2fS0MV/jI3w==');
define('AUTH_SALT',        'ZoM3YdLx5wMGiuLl9jKEg8Cr1POkdcge6brTorYKtEq1fD/cUO41Dh+m1NNdUXHGIg1jjRLZKa273zvtr8LUXw==');
define('SECURE_AUTH_SALT', 'trCpw56R3CIw2OlKXfYWvQ6NBHqhEICE/eOSK4vEnF+lrcj/pHJOCcDVHmzFZ4b78kI7V2gBPPK2UASVdLNJBA==');
define('LOGGED_IN_SALT',   'HRiHX+eGS5h3RV+DQ48ujnk3tX3ybdxQdKh3CeSivdBVNUZsYOW9Mf1ao50/M/caWU6ALfKltznAunTbhj6mRw==');
define('NONCE_SALT',       'sc6i/dXvLN0Bbc1SiOXepuCVDd7KZaGM9KtyYRQvjM2MD2BsISMoan/WrHYWN7OjYgcHfwO5Ajnid9otOrPHkw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

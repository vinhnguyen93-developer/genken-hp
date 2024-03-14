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


define('AUTH_KEY',         'DzuoEpP4F8dSig5tbWU7bw5qAGAQ0AGBp/eyhG8YIsQ7jKQv0S+k7Qfr3zhVSDYvNhan/N18mhZthPYJyxO9mA==');
define('SECURE_AUTH_KEY',  '6wp5dxZQA+kmCJkvVl6y8vH1ZzP7gqec7DrkFK+IWgaBUoWeSs7XCuHe35zOmathcMW5uh2/VENA4WFGbTt1ZA==');
define('LOGGED_IN_KEY',    'tBSOe/KwA7KAIWE0Bm6cY6coqfMhKgKXf3TWc63RMGDSpLEf0znNbl2XG202kW/kV0jEHhZTWFuY3g2EhmAtLg==');
define('NONCE_KEY',        'NCgpKzJeQAql/0KC5h5WybTHTkcnREsMjlB72NCxZ6X+FFvwL5mbiclIGERyfLDc5IH6Svi3mUfWzzKBoOtNSA==');
define('AUTH_SALT',        'YNU/DTeW8+xNQJgPNwp5cO+GJo2beNmGhn6IDqCI4dAaVpCq6f6M8JkAnD7HtHTfPbhajf1Gc74eZFX6WuokUw==');
define('SECURE_AUTH_SALT', 'gAwhwvjUX7dfFWU6PtmhkV8dBb6PgmDnJtsPHeGwE6YxsBElr9jXPmrUS+6g0cReOwykiTxAtWlgr1l305Mv6w==');
define('LOGGED_IN_SALT',   'ORV/jj6pK7mrVybcHw2o6g5fSQqoty/sNOrJI9KDwwM/tAsgu4ppw7N51PtxZtiKJ5jwTTu7+ykNOUmPgTIuKQ==');
define('NONCE_SALT',       'QyDNs5GgRrLaA02H7yHXiavy9egM5OUZu5xM0GIhetm3f4cszt1WiAqOY2cnaODbn7kae7jxWd+ocQ1+VLE4Ew==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YlVQCOKsO3NJ9G1aM0vpPjp5pD8RLhLXogza5Z6JWN66i00YyY3CWEqL3s5CCJrC/e44ko134KN3ENuj09l5Ig==');
define('SECURE_AUTH_KEY',  'Q/hjq+fbZ2Pe8C8XYc6INomJTDY+Kj7msDhIEjSvpiN3mHEAGcJzioBnARMMm6rC2WptDRcwpVnkf6a+jhfqxQ==');
define('LOGGED_IN_KEY',    '0pEGMtv+D12xLPzYiVfqbyxJSvIq+0uhE0PQwHdtlHywDy0LlW2HuUWt2MWd2uaWH8z8S0BaYN7NGcZL1smnbw==');
define('NONCE_KEY',        'omnCqJhhiB5X4ucQsz6IUjCh6XIUbnWZtU8VHRjshK7BjvlCvm0Y1sAPyikidVxh1YA2YZz2SfZFi0duR44Ncg==');
define('AUTH_SALT',        'cjg+oQK3SvWqcCc0JfhizJxroNopFXctBitMQi7VErz6NFAqgw2lEdcvbkRONESHB7BbE/W9F9hKzD8qQwP0bw==');
define('SECURE_AUTH_SALT', 'Ib2qZ78N+QLWn5lfVYoPO6I7ts+/r7Hy4yc8NCyNYPtri2M14bh1eHvzkI09p3MqU4ruDcxEcwryqhVg/AHkww==');
define('LOGGED_IN_SALT',   'JalTS2Pr1fcxIg+RgJmtVAIRF3J6asMOjVvA4jH5MPBtgWuFZ5WoMlVwhAzUmCMYN7jvttr9R4EyZw3XXW/o8Q==');
define('NONCE_SALT',       'JtHNWnrM342mkDtx49+J3sQvmcxXKTHqtom9J/b56hs7uxlUPcuEgA3v+9Q1/PvidDlgG2jrfM3w3LyCgpqNaQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

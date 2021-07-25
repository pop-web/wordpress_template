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
define('AUTH_KEY',         'mtOBx/0OgKeodh/z7M2TIkyOMYrn6vh/oVfsL1ZDD5p9NxQWx0Uif+5qLNAkdA/AQlC9nk8I/o4geHoWDK+h/A==');
define('SECURE_AUTH_KEY',  'nMKEHyfESEqe2uJNQfiGhoBUovF3RY0MaevhVus4rew5ZmuLSM4nPOqmVez4i58b8Tii8xTnGRZ6O7Fh1QCTTw==');
define('LOGGED_IN_KEY',    'Q6sF+00wzcoK1ephjnClvLZQVm+BKuD0haSduMk9jE904jc88Q7ndpPiwodUonwtaby0Yu6BJgNWbdq/xhMYdQ==');
define('NONCE_KEY',        'at7De2ozBUCBbGvlRWPgAxvg2KlBhQrzfVaqUYGSju7zYeCyBjjeX01BDoV+2YHvn6QCnrjSB4wgJ4GIQcch0g==');
define('AUTH_SALT',        'rnubPi8FewIgpzLSfxo5pONCZy7UZtgG4BYxu4cUj1T4t0vMytlLH+sq1rz9u6PG7wSv5RgtI3NoGwDAoipAnQ==');
define('SECURE_AUTH_SALT', 'nnpU8wR+SWSLa+O/75ap02MBLyJwiJ8bhQAFyMIGIngj4N8QZ/GqUK+HIMV2nLwq1XWuJCrJbPqnRXM5kqooqA==');
define('LOGGED_IN_SALT',   'RxD6Grjdzzy2hsi3d9fV4MO6WJ4p8m3T4NzR8UT+EOaWSaBy0Q3cp77SI17c/h2+/Aekr1Zi/2g7tFp4P42HIw==');
define('NONCE_SALT',       '/DGFWIDyotwTHawmY4ac6fg8bze2/MzC40uxQ1Atm7odOo6ZzwhOOgLTR6mSxNvsIi+LXqg6Goa8s7k6MXTCjw==');

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

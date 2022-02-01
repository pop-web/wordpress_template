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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'SBCvyKDR04ZyvfKuQQGAwWpsd3wCOipEzvWUxxswSnIggxBi0R/fs26Zh48OGSRh4H0vdli8ihHjWvGAhBZtgQ==');
define('SECURE_AUTH_KEY',  'O4PCDAopfCsTnM5sjdlcLOSQqejYcBmFmkNVnJmc6jUUJkeINQOltWjazsp6r2BDqrLerX38L76/w+zHPSjfEQ==');
define('LOGGED_IN_KEY',    'RkbJhau/JCRhLxGMWC9BTB//TelsT7bgwoIJFfnOFOUoDH/hTqC10GpTrQQpzth9ChmG2fGuWh7sXpG/BxzRng==');
define('NONCE_KEY',        'cHbMxkseNm1L5kDVjYy/mYMSiOhBWBtOXZug7VB10pRgcb1TSevbhOrQXQS45/TPDHUslEZBRNe8M0NE6eFrLw==');
define('AUTH_SALT',        '2z/cwnPXSzf4gxKOrj+T/bftr4Ym5z74FVVukTsrWjlRgLtIGoSYWbf5Cy4qfhe4KdbNaqc1Ahm4gKWKb5OSoQ==');
define('SECURE_AUTH_SALT', '6GipQUprm6q341bKQL1bH2qiZGeKyEAuJ7WM/saFQVlnHNCFKGYGro2CbzPAHxMZaAOWg+GuDLw9STEpnV3KIg==');
define('LOGGED_IN_SALT',   'bXwxONLw39wh5R0abORCNNRTl4fNqEwe0rJclV2wowuIkb4fYpVIvq5OOz/off7bUWBwxz2NcqFghKYWwsX4zg==');
define('NONCE_SALT',       'MdZnKH+ukTniwdutS4PVfM4ZgnvGbc7FDIAp8Hfdkcg3pyPFZZnKNQMvIZuYk0fMx+uyspujMgFg2x+qsbq+JQ==');

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

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
define('AUTH_KEY',         'pTUez7WDUYp9bCRAYckk7UPOPso/0L8LbSRFK6OT3UCyW9J09rMftCLHfzR25YU0I7AfDnEwZok3dRK7Ob4Uqw==');
define('SECURE_AUTH_KEY',  'cdsCYiGwBl2Fxc+z1b8v4JILxVlT5yzw2B9Z5knY2kY/kQDmrjttuQDxuNIieBebYSMxjwYBiKvTH5UwXZuqEA==');
define('LOGGED_IN_KEY',    '/NPwIUVoeTC7YHCPNHdUF7aIRsItMwAz40OEI6f9M/GNORAuhBy5pJjGO2qrC1xFGfC2XcW0d61uzoJ6L66rJw==');
define('NONCE_KEY',        'g+JgChSvu0QtYKHouV2JkFBySOMjZI9lEG0+kisBZB1nKUhpsmTSyzK34lt+qf2Y5HGSr+PTRMzv3HkmfteIXQ==');
define('AUTH_SALT',        'Gk9+pTpt+D0gtQqIa83rX88bguadU1C5CvaZowVnb6A2GjTd+Re4giT661374FpfYCn06RdyE20od/3IJMPRYQ==');
define('SECURE_AUTH_SALT', 'BJaRWSGHCUiSZQkVtJ24eRhxEK93eQUTV2Rsf7020+5a3Ojc2pjWOEt8Gb+hW5r3eOM8caL4jJhpWBOVRKMe8w==');
define('LOGGED_IN_SALT',   'Fp5489j5WKnZ2TOVuqJyX6fb+nIxzFP/sqfpwxb/3HyX69ahoBUShr+8wY2FWqVM8z7L3K3AnjEs97oevRT+zA==');
define('NONCE_SALT',       'OaL3ZOIW2fZOJU8OXlGSmnyzGey8IJ1v1ASa6CppOI2w5vC2+XKz0A8uwVYRCFCYOvyHeTEAoZe7xz+eVCJc8w==');

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

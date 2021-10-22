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
define('AUTH_KEY',         'DlFiuzKQhskIA55QFN21Y6KvegcdEby4XSUHX6FiNZ/phuRndqiXvX5gkLcG6m4O6/v0Cfy896HNnuW+lTIHKg==');
define('SECURE_AUTH_KEY',  'Pbm4i5Sp9vgBXMEPuGxQm+4Z43KKYYRCzuUjdHjXA5+S8Q3eZjD9VhGgQUAh5Bbt4qepQ/UdXOHoC97XmzWU+A==');
define('LOGGED_IN_KEY',    'h69fOuGXOELpYq1YsN3eWw3/BLuox3fc7PSrX5i6mk3JODecVJObcqUwsG/CZVgESvIHiJXK1RkmcsHA10fXzA==');
define('NONCE_KEY',        'd5vyRmwFE7sIrvJRnae8eQvhy+tmZD3bAzO6uFRwFaaUYxcUZOolBuzLPATmzaWMxV4Zm1vKzv74w5B74ZlI5A==');
define('AUTH_SALT',        'jwOmFip83m0aqRoPSmT4gZH4vFxuQ0MOLwv2U2I3TRpxKtbxkOEMeKDATApMN1sMlXKzEYBkhJW1kD9fCrmsjQ==');
define('SECURE_AUTH_SALT', 'P72T4tEmwEXIJ27+p3h4S0hP6ty6M5E8LS36FrnMAjIp5kwYXwBc4/NDs2E5xm80xLcK6akEhXXHP5MwHJx/nA==');
define('LOGGED_IN_SALT',   'AeZoKbZMolM+Tp3NAM6iRMax/je0cG0Y0y1zYeWRXzhpSayFLKJt81r2/i7u8e+q42tKRy8BX6haV8ojUllrkw==');
define('NONCE_SALT',       'kkYEEhhcr0kr486n4QTLB8Gh/srVoRl7unXZs89DZDguny11UbGQJYZZxhqPsYEqAwkn3GExbZpcQyJy+n5GgQ==');

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

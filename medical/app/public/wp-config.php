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
define('AUTH_KEY',         'ubUUGcBn0z+WimPIsndYujhSb1KfVtw2HrAGpPPivjH7Nkg4fN5sDOF2nSnhHgBLucRYux38gNDEeCFkR+Zj/w==');
define('SECURE_AUTH_KEY',  '7xaCOcG04qnic454nmwTANnwNMB4qM8f+plwCRsK5Xvd9d+v1oi+MPNsbfZmfDVQrva9AwWFosQ9T99MVVJuyw==');
define('LOGGED_IN_KEY',    'tuSxyfAahrbTG/u87Z4RuKN3Ya8rSfYm4y/cMurzNtEr8QRAfL5WsEphQ9P5dMRSiHRHy1PSVzfEbOfbvfpBIQ==');
define('NONCE_KEY',        'qlalEFgqdB9E7VQGzSu4NkBUhksMVE9EzFJE0zQBF6DMjDofqFxuOhm9NVvfTiBKTreEszw24EiUEnmua69ZGA==');
define('AUTH_SALT',        'dIk1uc/Wzno1QONKU+Tc5nwZd6XsXbwWYYL3wV2Ai/tPhuL5wXf5sr86Tr92FaialSii8F173bvtA2mxKgxPFg==');
define('SECURE_AUTH_SALT', 'BA4ydDFhjhGbOUZ1piSKZSoUNvEOecZV4du+kAIMIT7Oy7KuRUO1QAll8L8djNlI1Ck9xvJ/qg3MbNZ+tKOHEw==');
define('LOGGED_IN_SALT',   'WtDtnUV0MsJUZwi9zCgdHSR89ZvR7w6enAAXP+XsQ0G290pnu+AhSFH29cor4Q7MgZEZUhN2iz0rlfmBtDvFSA==');
define('NONCE_SALT',       'DFmbQYRnCiM72ZaY2XLBMBGuxAFg2v59dCLgbee9hoVqMBwjBkfsrCZUytc2vWth9mQLLs4XJwMtvIj8G18XGw==');

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

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
define('AUTH_KEY',         'B9RIo18/uIpUbVuvA0k2JbRhyWuLcTptEdIU5vhBMNs6+bJlZdWsSRkEPr8rOmeE5071CuyODWPs5W8EbDhtWA==');
define('SECURE_AUTH_KEY',  '7+VvE3nDaV9SYdQUHN/mu9TrNiQBJoQaqLUuSyPm0ls2ZUaaoD+D7Insx8EfcbOPPSqPX5NCFNt6IjJJr4MyKA==');
define('LOGGED_IN_KEY',    'FW6fIiCA9RgieojOlp8q4faCs+DKISnWP3xCUklXhPsNIPDmvMvJ6Nz5l1da6JzfiH7iY9wImV1wGwruASafKw==');
define('NONCE_KEY',        'zQQdD+0Vr61y+4QDOvf3M4bSyH1MTvwlQMQbH5JruAygc3YEawXqShD7BG83nhv5AFpPPis3oTVBeece58wFlQ==');
define('AUTH_SALT',        'JpbzNmDCl7IfGPDDuhc91W+k4pGe+1mcOmCVkVAHBjzVSwpQYH5khCFAqVhwjf94IE1zXxUXZAKkPOcgMKzQmg==');
define('SECURE_AUTH_SALT', 'Wj7GYyBv/2v+a968hU2sVTxVbCLHWSZq7+SFzax1i100bGuoECy3ssTkDMhjvbCu6uRLUf94maH7b47M7/Z1sQ==');
define('LOGGED_IN_SALT',   'GYLvYqmAHvgXZYcAKBbJFvkKLAAS1HfwYQBX2d+kdFNe90XrZs+Deok682LlLoRuJRGrvxjVCNusosMKHZcQ0g==');
define('NONCE_SALT',       'JBdwW/R3zM6cSnFJBUwwmglEqEp/NhDeRAUDgIiyv0qTEXy3RSnSjNzmeCugkZm2Ahp/Tbh1Z63eJc0QDZdEEg==');

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

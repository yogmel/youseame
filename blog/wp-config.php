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
define('DB_NAME', 'youse263_wp2622');

/** MySQL database username */
define('DB_USER', 'youse263_wp2622');

/** MySQL database password */
define('DB_PASSWORD', 'taetiseo252422');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '03gnbflqsqiuwt0wpaqpgfpdf9ujykjpjaynrk3t3tkv0kfkjxwit6rrimwrhcrc');
define('SECURE_AUTH_KEY',  '6mugktlrfzazhqhfr4edqwarkkptrflrvkg8fenx08rj9kx3krcdem783fkgq8qn');
define('LOGGED_IN_KEY',    'de8rskpsqsqhyxfaajofgvykknqz8akob2x73nwrvkb6n1jkdqjyjdwtcvo8xhwf');
define('NONCE_KEY',        'f9ysdq80passkyeyuckcb6jean4uosyu2uoeiwe0dqfvdagvahbynuygkpbhszht');
define('AUTH_SALT',        '7mltn3ey7frskrfohm4kte9o7tmfxzqhys7yuvnbxtm212dwgkqwfrumt1umv6pp');
define('SECURE_AUTH_SALT', 'gzjokervbmu9eqrhik6rzwaite8coz1sxlnzye8smgi1ubgk5vmmg2wzcgdnnb04');
define('LOGGED_IN_SALT',   '8ohul8v01yeen1gcrzkq8gfowuu3ig4ukdeipmr0anm7i6d5exwgjdvulsb2vdep');
define('NONCE_SALT',       '0bso0wlbe8wzpzzzzg1eyzsrtbcnctyohcjhxkaa0sjdjsxa624a6nmb4xoieqdw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpow_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

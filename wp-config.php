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
define( 'DB_NAME', 'villageaction' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Blpl8SkJtnLJuslwoqqkJ8ZK9RNQb5PQfrCgTIv3yr6HhrFMGD2XOu8MbrwDkOqF' );
define( 'SECURE_AUTH_KEY',  'kxi0JsGX3PxqhjKX6wWW91t7SbMlJVJEgWMfsUltjdyNsxhVlX4esTACguzA8Vdq' );
define( 'LOGGED_IN_KEY',    'eah9Yd9Jde6C3t6b545XKaFcgXuNtuhAxOCOLGaM1Gu3NK8XDbf0oS0fXhw15fXR' );
define( 'NONCE_KEY',        'xijcKrFKKvU3GgHQRsxeNMJYZJxIbZcrZ3r6sMtnOSkpuCvgaMXYsO1ss7JcdnHW' );
define( 'AUTH_SALT',        'ay64VMu6R151OsSnDm6zs1i0z2a1RIrgZBv3udUkE1U4KTwS2JO1xJrzEGK5UsGV' );
define( 'SECURE_AUTH_SALT', 'NgWEkqjHgvEUiEAWYeW6rg1VNVPL4XlTLE3sTBaooHOrGHwFSuUQs4QlZqWEEpjO' );
define( 'LOGGED_IN_SALT',   'daoKXxfPipuDnjF90gV1npBJRT1s4MzqEh0hvo5C9T5OH0mC0jsmZQqDB9NIAiei' );
define( 'NONCE_SALT',       '9NoIciGBtO3Q9tZl9M42ZzNPfEIUOm8nV01QOaTVPm143mcEryDhVOZgjWK9wBYJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'chOngpIddt5VHEqfD5Mo5lBBHfDBHJ5rr5w9vzSdVAU0rFWyHbS5mnlq9Y3gZGCJbqHVkdliR9ZM01nHoSJ4rg==');
define('SECURE_AUTH_KEY',  'cHZXMb1aa8f6A7WJxjrC77SRTx+nsODHp4Fbs8FNM4A4JQcuZBDGJzX+IZ5AkWkWQ0fEphyd7BUcRBf7TQYeQQ==');
define('LOGGED_IN_KEY',    'zskDMwINVEd2/J5SAReDt7gx48QPZvux6MtSkHDMP91UWCWtGrwkhr9nThvBiQ3P05K6D8kcN7brZBySxq0v0g==');
define('NONCE_KEY',        '1SGSV1oL9GALThsHetrh3ZV6BYkHSCW6xLjI5+/AnX+UBVks7iQKParFP1TeraHlJig8r+8i1D+2PzFYoa1W6g==');
define('AUTH_SALT',        '/EMGixjmtDe2zAQVAIVTqYtBVssS3CuhdKTpBcGjSKSAhiHXGK8P6Hmeo/Qf3tFIqHaMIZwcw2KzEXl9nwXCHw==');
define('SECURE_AUTH_SALT', '27qRHR/0D9uavs8ur7H8CTc9gD20PncfJMrOcz68ZY+Z8TmAzz9G3fMbvbApdrM7+BsY3RFuUcwfNPQPnWptKQ==');
define('LOGGED_IN_SALT',   '820FMLnXEaUN4Je786vF7COg8U94PLHto8p4lwTDjJZzXDteIdx2Fo4zqVN9/PJqigZeVA/3/9/vvIDHjO91vg==');
define('NONCE_SALT',       'AHe/hJJv+rIYJ/Ct33kyAItMkrM1+mqTh6zADQuWaYC0vrgYtmr4s2LdnDLQbf+o/24AE4xlceAepC6Vc1NC8Q==');
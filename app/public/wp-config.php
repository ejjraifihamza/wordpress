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
define('AUTH_KEY',         'FRa552KaJgcrnwzNppG+Q829gi/9GSRH45DSrrOp7miB/+JITSqp+sITtlqL0TrqZUqCHzmqk/wt0tK+/TDGOQ==');
define('SECURE_AUTH_KEY',  'uObysTFENNc4sJ4esoY0ZWUWpeCpCTK6+4MnqxT7ddustJqJQsySoYjQgLIqSQ3PCyekFlsIe5FxjKoKiGWGQA==');
define('LOGGED_IN_KEY',    'smQ3ZBsr2n020WmZwgOOp5vUJ59jHu1lbIBC5FjdsGUxS1vrmcGX1Jmzf/xgbgawQhnBDg+VfQ1wqq8TUEtgEg==');
define('NONCE_KEY',        'nzV33Br3l2zT9lE6fF/ndXTmXoShhkddBuNr9UJT0q/uLwOFiuLSVEGyvMScw2rEP8+ma5p6VVLp1nvCgKSvvg==');
define('AUTH_SALT',        'iH7VeHbnxd1MquVRn6dRy6TptH/aVgC23kuPlp8OOiPVqwH5kNVqe6Jwv3JkM0m9itsmmvrmcEOsGPIQZ7gKpA==');
define('SECURE_AUTH_SALT', 'V34M94PQIjts4tUtLMT3fHkrO7+MzYU8DYBoTXk6apxmT4tat8KysPbtEkOuuFWAu+CH1KA28VVNX8mGCV9Ilg==');
define('LOGGED_IN_SALT',   'Z/tya65oDJy6O/3DyYLG3XRsXtqFMnIHUEp7R1QqGG1rrOOvs1KOctPhzgVdE0hHr5k97CFsDWNX4ric7BO8ug==');
define('NONCE_SALT',       'Jdr/Z1BFY0zP4UekvnpBBZB0z7Q/8zgIYvbdam4GPpTGWUdimK0m++vs8oneJFPF90B20jY1d2xTwXPpPPa1jw==');

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

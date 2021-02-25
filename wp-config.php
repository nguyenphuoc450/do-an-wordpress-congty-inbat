<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'doan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mywtZ(X4Ad8~w}W4o?&~dRR[ve&|9N]WcYLBT{8eFPKNzajhaaP78@0a5t,^TtL,' );
define( 'SECURE_AUTH_KEY',  '~c1{^w}K}j9R0jp @]TrM=2ZXxLn55[abnmC1Qr8W=x^MT+*1<XG[!RL&nof4qVS' );
define( 'LOGGED_IN_KEY',    '+j~YN%p9p:g1kK-o|U q]C/~`8Cz()Cc43{-W$B=d?`,=44.+B+]PI IN1EViJW2' );
define( 'NONCE_KEY',        '(9]~4Y&/_X~nmM/fbTC&L0n8.1z=r6;,LOa/{}jE6H-.c/vb|}Etn&WGZ#4GSh-S' );
define( 'AUTH_SALT',        '7s)l,vx@Suwl%IFXMV](C^vih2&Y.jqikcfGC~5)msJNAoyC.P/XqlA2k%dho[;R' );
define( 'SECURE_AUTH_SALT', 'QxaP91iW&1D}==gLq.sOq1&n(8}jBt5{31&>2YPsFT@W4)E-q6sr>-bKzk&|Rrh7' );
define( 'LOGGED_IN_SALT',   '?UD5`olHyp,5Dp}Xun~ue1ER87>WUU`)h|wg>sNvI4swq{X/nsLUz04?#E$DNARi' );
define( 'NONCE_SALT',       '2g!SaYtS7K;,G^q?>^9$X^=H4@k)7|eitxSIj+Y/_iV[naz9)94p4A(w!MBK+3kc' );

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

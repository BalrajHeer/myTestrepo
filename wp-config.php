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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db_midterm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'lTCjvVk)QD6?k TKZI-Br)hi|F2j%4bQ]`=E{g*+3_?lJ+Pe9[rd=8a.a(=7TZ?*' );
define( 'SECURE_AUTH_KEY',  '=^,{Z8]kV?nziPgS R^4JFx|F%v)es<G(H/yUm@UQ+,B5{ix.D_(xb|b@4%iyCHn' );
define( 'LOGGED_IN_KEY',    ',j94(4^I#yQ_eY@|7/fgfN_Z,bG]@9Yd}B%EZ085p+fPWB0 Zd)9R`50Qa9`Ly[)' );
define( 'NONCE_KEY',        's<k0>[);rWLLQzinDI`GVWIG}bnCS&*sRZD^&$3[Fk}t:9LzeyajyhM,|WZmrEup' );
define( 'AUTH_SALT',        '<#PYZv8^J_Nfj2|H=@Q1VKq6?D3.&A~a#x`ytUX4@i`+l1}[R8I@J3e9j27T$FMS' );
define( 'SECURE_AUTH_SALT', ':C)a)cLNO3&`<j_xybDJ>&PulX`+(Nqy9I82mLWf,*(R}u9K`91C`Zhv2>K-qA=d' );
define( 'LOGGED_IN_SALT',   'O!Xx0dzxM?xO@T/|FL<G5Dj`PD&R}@[sK!rzKr>g F`;K;FU)UuSJ32}Z2&IUO%Q' );
define( 'NONCE_SALT',       'ItSJFj AJO6e@KHt+V&>mGRVR]J4Skgap-+iNo/-N<Q-aZK_g&I`zi1t^V*!>`3x' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

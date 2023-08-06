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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         'fQ`e]3mCVuim` Ds|k$~hbJ*W4%S/$`jez-!:H)D4VkmPhrDvrW@:KS`|_iQoZhd' );
define( 'SECURE_AUTH_KEY',  'VgAF6QO4hp<v?BXYs5`Nrch`ZMjR8EW.Rs0zHA>PrB(*I9gWTP*U4O[1UaIN^Zy]' );
define( 'LOGGED_IN_KEY',    'Zj$kCyv(SJ?>S[ju$}_C1z(4QS4>T5W$K*(|-#/MS3[?Irw&ajLTJ:Eu A)04#3:' );
define( 'NONCE_KEY',        'gFS)]pR-P^qFIV~Y0y#V{uyZ#q%l^1%E8?ACPt[X3eb/gf{?#|b/Q~~z3rN10[kL' );
define( 'AUTH_SALT',        'bCoqF8Dr]9vSM=C4mGkx7^!{3.i,i96#K@&aedH[=v7^y,6owi=}p^p/Yd#Ld&(x' );
define( 'SECURE_AUTH_SALT', '3cnX),:If=&n`zu[xC=Kw1&zCL&%9kg/[~-N/FC~4h=6}A#D+l;Jk/_5XG9U0O}x' );
define( 'LOGGED_IN_SALT',   'r$oe%@+*Wj^4``Dq@PbX@oXax$H/#ny8PL+}>m41FHc.]aAPf#+:2EI}]**~R!& ' );
define( 'NONCE_SALT',       'Pp>EnK?nUwH`!s~X>xKh>_!1xpZybMqRc;}y0>JwGJ OfV( H`C4z`iKSy&WgC(3' );

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

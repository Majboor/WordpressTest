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
define( 'AUTH_KEY',         's486N5jV2.p8ElC)DcOBU0!=Dw$;rf.FA@qJ4MgAPA%ATh y:?rmnK[:mQ@e^2.?' );
define( 'SECURE_AUTH_KEY',  'a?yS!&H%jvSSb$k<hAypw_=>CMGQ7GY@2H&e.W0YboIpUpX/Pj!{1uWG$#*G{g`u' );
define( 'LOGGED_IN_KEY',    'x;23(HeA<?H/*O&Iuo#L@i:zjox%es/BpBftW%f`,JRc,Sej] /su=iZ.bME,wN/' );
define( 'NONCE_KEY',        ',Ra&(?g&5%J&.L2:]nn0K%pN`@OyEkZygx<n<b1mK5v{EJ$GlJzOcgIds,)y l|^' );
define( 'AUTH_SALT',        '3Tow@S@Fw58VK{#o_}W(1ApXU wjcg|Opsg9+Gm:>)CZfBAj52_*h|iC!EiJJUN^' );
define( 'SECURE_AUTH_SALT', '_/mg=<rSUvWU}h_!d%a}p)Mn;BmR+`gPXazHn_;=}^7or%lWX[tq7San_;@s/G.M' );
define( 'LOGGED_IN_SALT',   'u>Kt_5_ztJFAu?ro_F$U&@Bz3bOj>j&|Oc0:[9wARp@4]M*blt]TCaUaH;O}Vseq' );
define( 'NONCE_SALT',       '>&xj;k-D}^/$10&;gIuXu`(3QCQueT:_K;C{1VPoM,2)fayZ+P!a%7v/?rw{[CHk' );

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

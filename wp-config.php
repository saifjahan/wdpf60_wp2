<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wdpf60_wp2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3310' );

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
define( 'AUTH_KEY',         '=)7s(S;n/X^+,S7^M-qU3&lgMwhi*-_7zxKNb7=db]NS>;9LRBQ4=mdA&H(V]5G|' );
define( 'SECURE_AUTH_KEY',  '+uj6(MT~Jh<W`_4-ca65UldSrro96fc$Xi=9o:&nYu5W5MIOl@+rIL{%W7l<9W-k' );
define( 'LOGGED_IN_KEY',    '|#Tm!t(5TOW50^6t+<NA<-]8uFX>qEhOI]p3<PA&PlPECxM)8_5),cysBU~[9c-Y' );
define( 'NONCE_KEY',        'uHn$0) g5Rvpu*ZQBUP/glh1x|~[h)^fuB@fqmu0Egg4>JED|uuk^>c2lb]9p|4R' );
define( 'AUTH_SALT',        '*Q= !ujDyO; N@Y5Jzs>dGR&)!2KVZ0#yo|k@&!QMvRySV]C^j~I|s436;^Ym(w#' );
define( 'SECURE_AUTH_SALT', 'yUlgLrY@;+us#xqClqBOt=+aAY9[G>4j4crBR31y&@6EpY[j &7+)IeJ1=A&KG0V' );
define( 'LOGGED_IN_SALT',   '@~^MMhp _y9|ASxc%|rYL6b%`]vixLWky5d*E$Y )X:84r~|&$@%gT A)j}hu*FQ' );
define( 'NONCE_SALT',       'h9+hC9ouTq_ b{C-.0J.U#0Gtt.)s`5K8c7g1pDIu>4tUW<`I$a^SH+aM&f/xSfk' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

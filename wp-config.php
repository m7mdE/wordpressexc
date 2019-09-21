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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'wnGeBPa5FY^G~2I T`Gxb9=r5q-hwe(}0<Er2z~y{<PK%3&M`ye&jtwd]rMLJ91&' );
define( 'SECURE_AUTH_KEY',  'NDtd7YBO0p]LM:!wZg|v`,{uq@^PO{fdJ.K)dY-F`yt*Y+e/m5J$brY|hZ2n&^_s' );
define( 'LOGGED_IN_KEY',    'BHu_vikrnKd<)<C<,>B0Z;W}_R~kbOQ+8RBWh)_OyQ97@OF+<~$}oBs/WNBDL[hu' );
define( 'NONCE_KEY',        ')NJP=whmdZaU)!}KL^PuNUG>Iv`F^O@/Q<b@UOKY$x?lqd:_m/[Xe;B_7M;y3Aaq' );
define( 'AUTH_SALT',        'g`S9xW<rb4BMyKdD(G[}.GpY3!-^j$y.Xhn}[]p;_P|m.kFd}8X#j^Z3&4.3di8#' );
define( 'SECURE_AUTH_SALT', 'YcA3W?}vz5wc;Ha4!1C^Vq,Tcgvv*EtV~_kP?@ F87& B6$uCIx4x;;&|u0d?M5?' );
define( 'LOGGED_IN_SALT',   '|O*Z|`EseL:fI.8_}P ED9P s1BzmVG@GdTRV`Q{bjIm$,;@{Q;ex3.]WGW((AH{' );
define( 'NONCE_SALT',       'c>v,L8sK:j10V#MJ<m uGbCf%&$ZG7o;FF9>`v4ZuighXmKI}&I(!Bx3O*](g0T8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

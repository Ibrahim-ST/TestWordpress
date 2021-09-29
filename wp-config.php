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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.jy/aw*-]I1lV93G!)q@RvVEE?-IXw/kyy-ujK}0PLb6>[z*zCwrvz2J2}pihP*T' );
define( 'SECURE_AUTH_KEY',  '=~!$A9N)JqF_5#,DY|JA5WzwyI]S-<bRyQp64K7Vm0B*]ouiSy|:5sKNPes2R`u=' );
define( 'LOGGED_IN_KEY',    '^H9b<f)lb_Qc6P&Vk9WtM_+R]#[rN(jY[sIaFxjL;]~^9nN,v|4 6()UHbMJk.d[' );
define( 'NONCE_KEY',        'm0JlTv}BDUXs.&&o1qi)DEKt>.!,<A9|E-,^oKZy^KT*ZiI 6hQ$|k>|xx2*cCX#' );
define( 'AUTH_SALT',        'P+X;9^D@r~=b<VKDVdf&^,i-QQXE}EGaV8w`AGTeU6?/WkL}M<HQ5w&OSx3wZGE1' );
define( 'SECURE_AUTH_SALT', '`9 S>*Yp~?+}km2`+MYt{WX@>A.oy(6&!hl$xJ4PX> s79fn$v~99N~A3o@]f_>#' );
define( 'LOGGED_IN_SALT',   'Rp(#/g](EnJ<bF<E;4j[3UR$cD[UROn4e$qdJH[TNG(C/@5x8JYb+F)Ec)1_.Rdw' );
define( 'NONCE_SALT',       '4]Ee3GS0oY~+!/i8LdB`z(%m|$+3QPY&nF}qs?YWp<2~kz5RQrIdQK44Mp],N&)o' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

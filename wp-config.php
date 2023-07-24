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
define( 'DB_NAME', 'adu' );

/** Database username */
define( 'DB_USER', 'sam' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'X}hS@$wrJwy>8Y0?|9k?Oe6{>@l#.Q4m9EzKvf$YAU0q1#>shOC-Q^{A0Vs1hg$~' );
define( 'SECURE_AUTH_KEY',  ']`gQ5H}~/n~P@9#8!jtOyy%i{*Bwq-sK.d/jz[q?xlfgT1NRI B|o-+]W(i^vxux' );
define( 'LOGGED_IN_KEY',    '8IXk`HkrF=@mI+Y|}D<O`5DdMnUmPyv.3~kKM}HY VFyqnLhieB{ru4gj}OU?QeP' );
define( 'NONCE_KEY',        '3yhBL7E=6[F<G9^vvHcEs,!$b[M1qp(|;9-D(Alcr<]$z1.vi3J*aTghgQ;W_8}a' );
define( 'AUTH_SALT',        'K)TT_,92F#V(&&nMTZaUX`te.ySKzGBfE<y%4]gw0-:aHx{B+f xf*2^=Tb&G:N~' );
define( 'SECURE_AUTH_SALT', 'S%l:<m~y;$rTf_ugF5HY1x~DcyqOd}eq7YYf!fFiMC}sT52#_Zevlug7.VX:6crH' );
define( 'LOGGED_IN_SALT',   '?f^C*+4!i|E@g6Vehv|/@TyCX+RaG*0i0<x+[jG9Uo:{ _]D}FWrB,pxpRY+KMVI' );
define( 'NONCE_SALT',       '_/Fgb?G2h/W:n W$d=$<Z5;))<~Q`6PXrGo#RKdSuv/L.m2{@{23SR%MhqY?6]WE' );

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

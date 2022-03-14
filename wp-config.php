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
define( 'DB_NAME', 'healthwebsite' );

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
define( 'AUTH_KEY',         ' M%}p?A7-e.5qQ?3/-Z<`LjEkI5Rb=1*m:6?[T@(g8fB{R-&)C[-{31=(G5fR^li' );
define( 'SECURE_AUTH_KEY',  '2hCr0j=DOwnC.@;QV)3+)Q4H&B*[RqzPKgY_xLtlHNOsf32m[VtTm*PziE;Bcd d' );
define( 'LOGGED_IN_KEY',    'ycdOq=N}q`Y(~|&PjCcB[_xw|;hZ+1}[LB9FtawUD32G4fQQZC#aaH%UUx{C2[6 ' );
define( 'NONCE_KEY',        '?g2#@bnM)UtBXU~J9vN-)[7BN@>Dq47L^}FUh[gm==4,3J:Y?i0/l?*hV.=jKlzJ' );
define( 'AUTH_SALT',        'Wc+,x8spPcAl<uXXuA~<7a_T[V4Z@57tpV[c4Yy%Ibu;w-:6#>4}2@^hsS9ZNDr[' );
define( 'SECURE_AUTH_SALT', '^B3dMf-*OUf<z[5Ac..xSYPbJT:+>z`XE]?UwI@i|a^RS>Lcg@O_/,xkc}}oLJR1' );
define( 'LOGGED_IN_SALT',   'G!ch60XqNL&4VVrwX/yH4e7?x Humrf7M!8PmHHmk,MqW1bAbY0dg$;C}/dA=56|' );
define( 'NONCE_SALT',       '7QRFuL:[Zy-lr|yny2PIB=G}$&O /I^JY8c{5TQEcp &<@D$^`k[GeU?|g5iVkb.' );

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

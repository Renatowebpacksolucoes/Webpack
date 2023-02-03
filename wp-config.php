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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webpack' );

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
define( 'AUTH_KEY',         'YLcfmqO#AcIR>Iwd/_nqH@;4`q#4cT/JOhY344<iH9qcjb))-jYX$>Yu8emb8}{T' );
define( 'SECURE_AUTH_KEY',  'hJG6aQnmR]9O?q<i)k60pk>2.{ e.w{Sna{nOX#tX#h.zk||hP{ a!Fy{ucJba:;' );
define( 'LOGGED_IN_KEY',    ';]jVH_i4j[{|9oO4t+Lx!57svss JH+u$}X]P:@*FmYn-vt&W[`)b0^t]F#Ny>*g' );
define( 'NONCE_KEY',        'V};JzSC^Y6J]VXDn>etd $dD4}Zrw&AGuQU&j #Md&LmPbzi7ct(ZWc<*H8N|!c)' );
define( 'AUTH_SALT',        '!6&H,gmR>tSftDf}lY$HfXxdHZ!gj(,&m{z+X?1Qe9&g<p/[v-`n8r8MYu@=xX-1' );
define( 'SECURE_AUTH_SALT', 'K-LWFrzT;-f33SHa(2d#BXM[!}I{DA*^+09}x=w*xCbu[|{CbE98t</=LotYU@)j' );
define( 'LOGGED_IN_SALT',   '^fc Y1`9d/=*TF_m+x`f3xlFn:l10yIcLK-Ig6$ytX*;-.TAr >hh@)vp6#XOpZ}' );
define( 'NONCE_SALT',       '3LJR5b{.qa*^gNpi* 5?pD;Hx+.C~L<x6?8Q;=I5YmuZ7tcZq=[/f_eOAO!.4o-<' );

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

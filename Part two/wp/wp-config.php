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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress1000' );

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
define( 'AUTH_KEY',         'TXYy7Hma[vMSV8CRk@gu, zz([fvi#NIAn.:`Znts#x;jqk9X@`{&-tD,6StR$M4' );
define( 'SECURE_AUTH_KEY',  'veNMAbwZJ)=lspZX;!X%FO~z+~NmRsv;7gs{a*Zs9H,&m0GQS?iOFg-@r%cgyIyH' );
define( 'LOGGED_IN_KEY',    'm*_Z#1Utg+ks;@6[@R1f8Xi|MnYu.[};W)dDQ^Zl;i8G?-|%sh9@sjy,f#r*Fg5i' );
define( 'NONCE_KEY',        ']t4H81# y!tMiNo_V|j>MD8YQe=,kB8Au~AUan<[L7{T? .9F:M@([@EuO]cYuGP' );
define( 'AUTH_SALT',        'Zj&jJ7s)wNR;PjYJ^HTSIO<%^3aMC-=:]wOV_@+x]tvdOz(gCY@[B9}OM.IMlfOg' );
define( 'SECURE_AUTH_SALT', 'dI12TVmq{G:7 Y~;>=joZ&|;xDpDVVT*Fh$yV&OsD-`rU7vF[0=[*9%IhK49]@(f' );
define( 'LOGGED_IN_SALT',   '3?ucc5&FqAPg<~`Q7{OeYeU qNP8}I!v3Z$Z<4K^QEm~UNUv]$FL0#hmRR3kgaip' );
define( 'NONCE_SALT',       '[FFX+&~s9r!rU=!v3v;8^,wmE,V/,?Vd@s=tte)`n2SW*i@ g-aC8eRfnnmj4W:M' );

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

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
define( 'DB_NAME', 'wpkamrul' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '}npR:4Kw@Gkf,jh1O{->u`jT}]Pxw53g`yTftGR_nk*Ki5dj5:ja^oLMQ,>7 u(=' );
define( 'SECURE_AUTH_KEY',  '&X*S;XW.K[5b&N/K+o>eVfI#=_]]UDgyt5M-0?j_vmpkW$qJG}Bw|oj/MMF7NlC ' );
define( 'LOGGED_IN_KEY',    '#6wNQ44r27xqLAZ6@lxXaa(<_JigQI_)l[n*h_1mfbtBJ(s/<F5;i<9<D~7|^~T7' );
define( 'NONCE_KEY',        'M<:XmupmI*+ 6,%F#H>0Tmp]~O&6{V;NA=.Q4foo,8#R@@Tdff?o2zU74f)?;7*k' );
define( 'AUTH_SALT',        '{qUM/.@!t+LX+}G*8+@FI`~2Q}JZ`peMw%{z>lfS+6Xltj|}7yh=Ltc]O]{?I*zU' );
define( 'SECURE_AUTH_SALT', ',!,i0.s<rwp#fX`:%K2~wMn)UH@_e8ia.=uj pYl arbv+!3xiTnh|HCp;oKkDff' );
define( 'LOGGED_IN_SALT',   ',Zs->^yKe4`/;T[Idj;8h_DfKh9!o1D;PQ_n>FsGcB|Ve-F0BP<r$)>7Gx7Rlvn#' );
define( 'NONCE_SALT',       'wbP:nod%Y52/>LntixjGmw<#`>l;CC`7}FTb`M1)R=XX,F0c&$9t0Da.F7?d&>M#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kamrul_';

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

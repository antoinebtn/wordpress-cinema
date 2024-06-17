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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdd_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'P1s,6j@Ij,dflp6wb`M]cDK*?zj=6$^hs[Wg<[w2}jj$#6NTUfFjW%!T|&k5]0|$' );
define( 'SECURE_AUTH_KEY',  ' VoDg=CfG644TKZkkcaF[j7/0Y;e+Z:LD|7<yS_{5nX@=S*Sbf7nRx[BHB~x/?Pw' );
define( 'LOGGED_IN_KEY',    'U,/f[]mR2$aV?(HEDBAwzU{037v2=zeF7Px##4LE,N{i5WQzkgFa;$fQfHt1l?/O' );
define( 'NONCE_KEY',        '>Z7FeJ|kKpokcU<y_|a@Q $Z=g$K:|FC<_Q<hwgc0.^p64l1.Cx_fE*.O )u#ZW,' );
define( 'AUTH_SALT',        '3|uC+1SO*_TRNPn?VllR/D>o~3|dcPJH(J2XXJ7|?l!FB=7g @4&BwH:tE#sLF6l' );
define( 'SECURE_AUTH_SALT', '.cTe+^vSPHgc)d6~R,BfAik|fJ}8Y&_o#CIvkULb&)iydjSSH]i**[=G%HdL(<g>' );
define( 'LOGGED_IN_SALT',   '{NJ){bqkpPL#R@7rU|D(aU;z`iaIK}uR.fTDKo&<vpT 17kSWn%_1W#`/Wdi](Fd' );
define( 'NONCE_SALT',       'gu0O/~]m^ZNeqHP_6covv4=^`GsquF}(<&Rj4L#[9v0qgDYWcM2DN91ee!?Zb{~t' );

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

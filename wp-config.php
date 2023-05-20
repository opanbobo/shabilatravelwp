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
define( 'DB_NAME', 'shabila' );

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
define( 'AUTH_KEY',         '+0S|dBwQO:3=;EYX;Y=DfA~XD#TY%<)o;]Fp5y%97vUOwK9.=S)v^o[*/PGOE=Uu' );
define( 'SECURE_AUTH_KEY',  '6f-h<cr(_D7 7HISRdv+vn92|-kmem6m:]mw-d1(P-C=b1NE)P``lB+]w]]ABrj#' );
define( 'LOGGED_IN_KEY',    'qBhwQplhLvY*OE EEQWLEg^[7Lz1wIy1U{is7_m}dDQr)>446-vx4ZxR+ _V($~G' );
define( 'NONCE_KEY',        'T$r~}v*S$1OiCWb[WVh~mgSVVHq97C7PI d5scC#I[X_]uW) @ Wg53_(a9CzAk}' );
define( 'AUTH_SALT',        '-XS#YU&6?TTs-P%Muy}cV=J`aZ? >mOwk#jWE8tjDn@mFI%i-2@f_<zH_cugF[Hr' );
define( 'SECURE_AUTH_SALT', 'gf62-TPF6Hj -gZ2)BW;C`k;ya8>Kn5im1ou4k=tk5zMdei:TG&oqwzr}JH0-5Ce' );
define( 'LOGGED_IN_SALT',   'KsRwH3!,S1{O1aIESWW]#!FE&1=kg(m8y09)bt0R~oMi?7KR yH}3lJHSxVGaY)]' );
define( 'NONCE_SALT',       '%VKRnPTCjgJ?h, ]wKElonTbO.o<Ub?zBj3VS&P4$~,dS2f7r)Hi!z:8lq_lN^dQ' );

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
define( 'FS_METHOD', 'direct' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

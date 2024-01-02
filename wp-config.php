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
define( 'DB_NAME', 'site4' );

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
define( 'AUTH_KEY',         'gv?Rjg?Vxf;V8mei8NCv[.V*7^R%6%9g|Y-_-0{DmHM6-c2{kh~#wh;448/e0@l1' );
define( 'SECURE_AUTH_KEY',  'ukGTZk&nU84;,~S)1l{YgP&-7.vXe6<rju7nX}#6SCKrCQ=C(_xzre^t>A[Kr4fI' );
define( 'LOGGED_IN_KEY',    'EXZp|KVi8|nY^e.R<F]^%j[;JbyF,E^5L*qWe=W=w_e*o^M8+uJ<E_Kw{}qnY:7`' );
define( 'NONCE_KEY',        'En_W4<)bAA@Kgr[?Eam}:*_WT1Of4g=jO*pF:p_I!(yvOT$)c8SD3:+p_824aN|a' );
define( 'AUTH_SALT',        'MrkzJ2e?V7S6ELKq.6Sp}cyl?^ ,eEH7x6X1=!!vD9`)}6jVWB!A;k1%6 vD/fK ' );
define( 'SECURE_AUTH_SALT', '4Q{DX/JEX%:-I,&B,l6GyqS(TgnaRjefVtB3pzJ}n:cRE7fcrr7c<bkMm3nO.M^q' );
define( 'LOGGED_IN_SALT',   '^]yoG|UUjE}JEHEbud)D^|Hn_B70~YM2VTq!vPn.rZuk0X}EO/82ks~i76lAg>/3' );
define( 'NONCE_SALT',       '5-rD*U@]UFg{pBKFuGG^_]#rTL)i*zxx!v@[NWB6<x#;?OBX)$B<gk6K~&>Ab>SH' );

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

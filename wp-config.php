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
define( 'DB_NAME', 'fahimegh' );

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
define( 'AUTH_KEY',         '4?Iq}-:v]$:}?/ (L~S`A3KxC< iD[+@i^6)9,LyQs9c4S38g+;}Y5@M#3|/M*3Z' );
define( 'SECURE_AUTH_KEY',  ',p<XDY(x2@+^yG<U[@olRDd0CZKV?n]//-|40rI1kw1 :}=tWHa:)^,$EZr]>f}~' );
define( 'LOGGED_IN_KEY',    'c]6E8GBvXld)t[h`v F+e</9),Mcg/GHX;C{_.Z36Rtggj[0}lIFi4e-lKvf%)nx' );
define( 'NONCE_KEY',        '1g|D*)N&:;y=Bx-1?>Jh*&#)2p(tgL!&oe-v+PaG3-7@Lb/XLgeq(/z;+-jE1~:;' );
define( 'AUTH_SALT',        'd4L8AAug<szg[CYCGy6PStn<$*q{m3C=YhUEC^g8K<V1JJ6gRlur,aACvi{QJ0~1' );
define( 'SECURE_AUTH_SALT', 'eC8:g95nfAPGgNMkX;W(Z}Repi^eo#y&-0>p,@n{rUF;9#_!dBM}8 k?x]cJ:}eT' );
define( 'LOGGED_IN_SALT',   '6duv=pwh_S<Jl/8!JYh=qzHKxIv:*d:_ZQrAS5r{%GW~h2},F 4]Kr&RP*NurUJW' );
define( 'NONCE_SALT',       '$^0$e$1E7|1Y-Wd4>O?J]h43>)KHwhE JL&>@74{P04iC3.Nr)seh/?tc/}RjQ6U' );

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

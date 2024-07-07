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
define( 'DB_NAME', 'PrnvDev' );

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
define( 'AUTH_KEY',         ')3Oe$S#R6.*V ?d:f#97eA:BF(D(,G;?ttz##io1($.dJLA(_>D*@PF/,@LzTwGr' );
define( 'SECURE_AUTH_KEY',  '0.4bDwo=_&KOQ,tnW&q]iB{h60]bP2f,^^*;e`<K|g5FMRcm0-N=8^LT+SI*%&>A' );
define( 'LOGGED_IN_KEY',    'mSeYgDg%5T+(Q=6`iJHL&]1&_:]I+yc{}2f:)#J%@nd~bu2n$#hJ$-6/%$(-8e):' );
define( 'NONCE_KEY',        '!K|jojNLVHhWR Arx&(!l0Kto|Lfz{G^uCQ!F*xVY.aBtey:NpC#xvsKGYF!-Sr0' );
define( 'AUTH_SALT',        '_Ox1vLd5yOz[i3G@85Atvw@,:y7h5hQ0C#??7.Vir/%AwCh290*v7nfS(rRy^{N=' );
define( 'SECURE_AUTH_SALT', 'vc4!ogDCuL^a88t)5V0E6rK;9(;F7];1qjMPZBKW1aAyrhcGRmxhx).J,r;~5qEa' );
define( 'LOGGED_IN_SALT',   'Oa)?$NPPdT4ZGZN<?!T8~5:! Q-G$8V@#8{1fF^PJKt],[S$p9Vf+<6U)[kGrG[x' );
define( 'NONCE_SALT',       'A<Kia&zJ@sH}CB0h#;rh{~_D^R^~4 b.fz>:q&As*@i%]mf{5U~tkkuh}oS~,K!3' );

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

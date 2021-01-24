<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'amresh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+fd-l3Ehc=Tr7|!gXe^W(na(CAl>)QAD;26>O4h{^3kA2+zOF->M}{Xt=$Wq_L#+' );
define( 'SECURE_AUTH_KEY',  '8;-[+T8R&::^i?-5hq[y]p8J%x$LMNMb]fYRuG[aF.jt[MPoGLyxc*/.%)_r@[)p' );
define( 'LOGGED_IN_KEY',    '?O0Ctfb%V2([kCTq54ZN=RZR^&PvpV+Knz]n4Ok~*hg:JWHKq/.-QN:|B.~/=$vg' );
define( 'NONCE_KEY',        'Nb&_?`LsAa2zGf_5%`s`;mFIu42F%UgZ)Ppib9]]WU/)97@c1$U4<Q?*#21bA<]#' );
define( 'AUTH_SALT',        'MYMg!IXj0Y3x~0n:%8>g 8AARQKs_?!MAB?Zv^D2!W.@dVTS5AiL|r2wQ<+rhX*u' );
define( 'SECURE_AUTH_SALT', 'N21oFvG>r|0?hKBsQ,?])0~vrc^JO?n&n|U,Del,;?0]Ml,>i8%NeW7:+g[)~yx]' );
define( 'LOGGED_IN_SALT',   '{//SLu0r,_wRI0Ul>2eM*^,,w@F$3DQn# N]EE9pT *3)amQ4Wva,ev3DyK-@a+&' );
define( 'NONCE_SALT',       '[)Q@^JLqQxbo>dY_~!+?!lqRZ#~*]WAZZ,iUTaCA>|=iMR~Q$AE8bu/aIlT%|h|~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

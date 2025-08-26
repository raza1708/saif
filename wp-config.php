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
define( 'DB_NAME', 'saif' );

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
define( 'AUTH_KEY',         'X}.K/2md)V:~D_RffjS]:KvbFeQGkdXaTvh|nJXNhg#ngWx]QwUu_uGIzMe`>3Qq' );
define( 'SECURE_AUTH_KEY',  'b:1-|rO$<bIp0g{9A$C6-!G;f|iU`?M?7_[ySx1jva_FiG}}zT?V`myPz{ojY)&t' );
define( 'LOGGED_IN_KEY',    'vh33y`sxO:<LGg/3J{hAeD!3dtQ/eO5ho)1(V54L({$D|XZqx`t%kUh<f~HLfWYM' );
define( 'NONCE_KEY',        ']P?Hh(h|B.*AA4PZ>eG, +f[t8>A7<&O j}K3/HQ:WLAPVAs{4NMzHzq1z1:(Mda' );
define( 'AUTH_SALT',        'F/Fnz/G*Ac7J#aD6C24G~x~&J?K@RQJX&xs=k/2E`z5H7lxcRQ_U>P9`~tK<uN20' );
define( 'SECURE_AUTH_SALT', 'i(o^?,AfU5n^nYI{;0w[UC,PPo/7GnG[1HqN`?T!<[fz^$r3;dE|7j2-,0T&!fYB' );
define( 'LOGGED_IN_SALT',   'pa`o/z|2u,K?jE-}5~Q^~~~TtK C5N`zPDFfY1%y%@oj$/:j[pN1:53S}u|)o?7A' );
define( 'NONCE_SALT',       '~z5n;x]3B5;BB7l&Aih/`8$|!B-p-!UD83j?5gf7px`#?%f.VKtrx-w2?@Z&F?p&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

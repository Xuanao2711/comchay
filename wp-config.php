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
define( 'DB_NAME', 'comchay' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'O&zikm90`Rn/{ld# oBrai]b0i;Gt7`uR*ok%?Vi7guqVM6 ^qD q=WW/~qvM;K^' );
define( 'SECURE_AUTH_KEY',  '#9ei#ApaJ1k8d}x]gp~KuJRbJT-rWmENIYJ$(z@T~WFLh>Tq4LK9Y{k@WouooK2O' );
define( 'LOGGED_IN_KEY',    'UpWH/+A71?r^4krN[o7E:V?Gwt-QZ;oUYCX{1p=~e{I0RKjva=vvZYBW91!LKQ/L' );
define( 'NONCE_KEY',        '!<JW/]Eki&?JdK!iU}Qh+(`w*uKMmB%zzdo!T3VgDAy)c7Ii*BJ2X+E%n^ndZt}V' );
define( 'AUTH_SALT',        'qC4&M&!4Qhir*i(qu4-_D7}xX/{@H5@B,^{2t#a`W!dd?+q33vqMt4b~mH^im.o{' );
define( 'SECURE_AUTH_SALT', 'P-{PB)#MJq-^])h0&&y/LwA4hX<.<I1KQ1^=RBmV_s5qEah=og,~Jql[=PC]zS.i' );
define( 'LOGGED_IN_SALT',   'Pz3x$n1.c~+yqrNiXE Nd.9eSlzu`Jr}(/LD7C?q#}1$szqn/2syQED)g8f}PF,G' );
define( 'NONCE_SALT',       '_$<~Aoij=`0Hf+-2c?W@#W.sF`Z-(Im1(d$ @rdbCQifWG/)Vc9z #|i%-Rv2F[d' );

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

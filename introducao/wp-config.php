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
define( 'DB_NAME', 'introducao' );

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
define( 'AUTH_KEY',         'ip=T[114:bbV;M_&MycxzSa2z-w1YIGnRaMMK>DCJ8yKcfG=a/=r&sE_sma=XUuH' );
define( 'SECURE_AUTH_KEY',  'E,ltN7*b4n:}}Dev9F/^u60QZ5E3&&e^jg,}nX&Ve4P9z01 [TZAdTpMj?9 A,*J' );
define( 'LOGGED_IN_KEY',    'xAwxUVaa5@O S?!9{4v;M6DPdT}3uT-DzM=3]`vL4?L^h09Gpi5=gBJR^n*F8zp#' );
define( 'NONCE_KEY',        '?JI=u)P+^Il4Ki8>P:{rZ|e}C{]XS!t~fvV;1dn5}[QF@Hqr?`RBT#H G9uoyFQh' );
define( 'AUTH_SALT',        '3[KU]w|G,?K*<&*#[H {Fk=t)&Qkf*V:?C3fLR:jVn^LS)Qf$ l$<%:FzblMId5(' );
define( 'SECURE_AUTH_SALT', '[It*#2O_X9;/2%<<m`OmBq6$7ZBO)noHnnbui:{]u]AuX5Yy_O){CnJC5aCx14jA' );
define( 'LOGGED_IN_SALT',   'F;5^<0Dx^MPktR]a-?k!gi|J&=x_)Lk*SyF|{$K%23TdI3f]g_2FMM%3;G{Cj0m1' );
define( 'NONCE_SALT',       '2Qg-fZFFN]7g`l$`M;H#_&cy7V;m%mHl|*:+JW^41|uj5e3AOVPTV!uEjN:Ix!]U' );

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

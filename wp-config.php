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
define( 'DB_NAME', 'demo-db' );

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
define( 'AUTH_KEY',         't#!kjl!n]>F:|Uxm5~qrq#a;BTT)W1>(oSF!C9{9k)TEK*~p9KQHCQ[eM xH(-5`' );
define( 'SECURE_AUTH_KEY',  'hhY&8cjutNzV}Mu;02i{{ Q!J;ho-RoQ f*mT]P$./4tun_tm{Fq^?c$EACs>*R1' );
define( 'LOGGED_IN_KEY',    'Rg&2c#@UM(CCY&N<;*W$|HA-8Cx3ZU]qt<b{aB-WNUjcfjKvC%Z+b!Qv:y>y(doR' );
define( 'NONCE_KEY',        ' 7m7InJV(Q@x2}g9AL<-6u,n~g`=fgxC7@!mJX*og$+({hcV#Jq1bwd=@@fT`ZEt' );
define( 'AUTH_SALT',        'f:q8dmo}jo]j%+`AQebXU#c8Ij+{.J;ZQyf)FA|&rh3M+WK:AL=xrz]U$rl4ISr3' );
define( 'SECURE_AUTH_SALT', 'T*`R?1y#f|8{9.F*CwE}zlo]W<CLm0J!=N29+%$vI^LQ7+NFrHAmYl<TT(fn3N.r' );
define( 'LOGGED_IN_SALT',   '-cjiw8{XQq!?H*M?!n0A;Q1}(u$5^j@..hjb6D@zn5>:OC*$X1^],Ol9;>]CD|S7' );
define( 'NONCE_SALT',       'U3m;PJR0mE%0ed>pAMbr{at=[7o.,zgKlU`O*j0|=U`wVme2@6zYq`jf KfE^mL$' );

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

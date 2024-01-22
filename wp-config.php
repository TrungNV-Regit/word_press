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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'V3:b}P]M/y0Cff-w4TwdjY&qK@mr/FQG(*}E11)o!<:wt(SXNX^`7p:K;/]Oj7&T' );
define( 'SECURE_AUTH_KEY',  'w`a~~YW_5/eeKnqU~c|Dtu*&HZeL,U$;u3:O~uf3Q*FCa&tV#p?} ],W.f[{EiDF' );
define( 'LOGGED_IN_KEY',    'I@eZ25B{W{V)s{VBbU6d6Mqq9bEH@>ik(D-fKDls~jnO F59|{dSO._O3asyhH:D' );
define( 'NONCE_KEY',        'T6x:ciPy!TQ$?p0@ 4O!_;,EsvM,6lc&%Qya>y%lvI[CzTU?q%4nS!fKO3SE.rLU' );
define( 'AUTH_SALT',        '>m-^V@!B0miPKHK*r=@[R6ps38&Xu3$=E`O3U}wAgx-Ol0t>QV&^:P$geK0SJa^X' );
define( 'SECURE_AUTH_SALT', '_.Don/X&x>FW`:^ 1upjT)W@OO`$aC{)4:M3SDep3ZNUA6Xo+K0Y4_hGw&>H9wcr' );
define( 'LOGGED_IN_SALT',   'pgEg{nl`L^J=9z r`>z4Ug%wWbiWRp]E_q^htG)dCiNBYZB?Cg#pQo[4-k7f$Z%)' );
define( 'NONCE_SALT',       'ICxfN7W#-<5uiz#iY+c[+1 D5_T3qL#IMq%zz7eW0rbwT59[5{:[A[;HG[=-b~L8' );

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

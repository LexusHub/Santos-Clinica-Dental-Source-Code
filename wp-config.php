<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u347961766_SyR87' );

/** Database username */
define( 'DB_USER', 'u347961766_NQnnr' );

/** Database password */
define( 'DB_PASSWORD', 'SZnc6gt6iO' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'CrT=2JZrDO8ug%xcoj9Q{k>WFl/o-wF<bP?Z`L22-WG)t-dK/5b}Go&JV!C`F`-%' );
define( 'SECURE_AUTH_KEY',   'VH:Xc7P ~.0Eo(9SoEW^GL3<%dK2Kdzn$Z.aug|v^Hw.oKi=i >]#wKN227E<+Re' );
define( 'LOGGED_IN_KEY',     'NN(RYh$]g(#utY:u<AQRS<~4:A|tp;P4|6x0: =d p @d<:ThgDPm@j%j#/;Z01l' );
define( 'NONCE_KEY',         '~|(F#17Q=0Z[CrKA,~T<.1^zFtpuaZnL*(/Y}an?-AmhV/#D5,p<V{3rAe$g)Q+W' );
define( 'AUTH_SALT',         '2x4E~IAeTbcFM -rY.?WdA2$ GprKXI`BaUg.+;pg.8sHwQB*B92A`jH<(7?lV.J' );
define( 'SECURE_AUTH_SALT',  'tF?~aA^b;lg8JUEw3^cBW_~AwmHc`4g}uOgOA:W;1ie,T3@&/i]E3QUX%+fFMJH7' );
define( 'LOGGED_IN_SALT',    'LPqLfvM|j6T^(R8Du!$Q2b/+Qla2r>!cZ:H%bAf3`#I%eAkGj{h(x7ax57WkJ29?' );
define( 'NONCE_SALT',        'rPlevkd5ldUZf+b6FV*m+X/j%3pvG(2JGm$zcy-9Q`9|vo3P;q1l{I)E#:s))*!H' );
define( 'WP_CACHE_KEY_SALT', ' ]ZW+/RAKs!Z;y0S U&Aa9kI}WqXDM^bFb}|8&FoncrWsL:HrrfP|hb3?M*;;:S8' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

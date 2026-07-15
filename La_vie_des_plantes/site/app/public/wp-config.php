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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '|IT81Ev%FIQ5g)-,w-h?djqCH/q77d!hPm}Gh+&{& e6#AW%WLjl;zlhWtQDYBSY' );
define( 'SECURE_AUTH_KEY',   'FdxVgA.hVB(Id6TT`tH1ZfkM)ytU76|]S`)DdZ/CgmJ|xmPv]M[o|jf_S^$M}!^a' );
define( 'LOGGED_IN_KEY',     'E*p`&M&}pz/0spXJP;2c=F[:J!,QUa.B;EiDm$(jso8zgn7&gG ~+&av]xa^ft^7' );
define( 'NONCE_KEY',         'J^Ax|e;SIF[3$r}BUP~f%].Jd+B=D;!U?aI_wf/z08=]u| kk<Gn{]pD.M3XSn>P' );
define( 'AUTH_SALT',         ')2(%bR86>bsZlTi+Z`gOT#FG$)4vH5H;/(dk?gODCg&sO}<:%3-8WGwIe3J&R>D=' );
define( 'SECURE_AUTH_SALT',  ']O*:P<RX3+RuiOQ/(eVpvgiRAUrA{&9wbEuwfwCpFxC{X#q!_C}/^88^N.quQsM}' );
define( 'LOGGED_IN_SALT',    ')i=TB3omN8cjm`#*irX[Z:GFYY]atmbY#JGL4Z[ZN,gxfT3m*.2gMN;gJ,2Uaq3/' );
define( 'NONCE_SALT',        '/]u$F?[;VxKQ;L&a.@(Ekj!`~n!>Fufzk^LFxzD%jBDzvQ@cTIePc+Mg[cij;tLv' );
define( 'WP_CACHE_KEY_SALT', 'q)3y@IRNA+w^$$56@{lptw]f;:Ibn,ewf3cmk_EUv>nS006vBgbso|.W|uldtCem' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

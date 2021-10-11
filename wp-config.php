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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

if (strstr($_SERVER['SERVER_NAME'], 'wp-lovephotography')) {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'lp_wordpress_data' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}else {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'rayaa_photo_home' );

	/** MySQL database username */
	define( 'DB_USER', 'rayaa_greengarden' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'Malta1996' );

	/** MySQL hostname */
	define( 'DB_HOST', '127.0.0.1' );
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'D2Ou:p8oG&!o5Mv_=LCpw7Z,Vw4pee~[gb`F<cz|@,2-rIub {;?uv}f.Ru]E5h{' );
define( 'SECURE_AUTH_KEY',   '2c?TyELq|*.Vr^{^/3x$3n:Tq#pO}(gyMRJf#GG7EG[n)y#.ek?VfvME@g{(($a^' );
define( 'LOGGED_IN_KEY',     '8MAI%I#L,2M_Czgau~okQ=aD?Wxh3f~ Xhl-MtxsQ6zF*C.4)8;l(|j={4u.H_DK' );
define( 'NONCE_KEY',         'r|LmUU$RB^^;O_*<-Oil>H^vWOc<!YrGbr:D|]:o2~.Tgj<bV;!ZG|i;8Lo?lIV;' );
define( 'AUTH_SALT',         ':UW`$|U+ajG-,+.u|pv!o6<{sz]{Ie<Qa[@_/J-4g>3)u;S.3l8]Q!Nr>5M3dai#' );
define( 'SECURE_AUTH_SALT',  'O&dPjrNRQ#L3^l*1~!u:^N%(!2Mxv7)4s&Mw:Ki#7<wc%;KYJFVXO)qVHn_KvQUy' );
define( 'LOGGED_IN_SALT',    'O*Jm;rasywsK-o@[HDy[4_;>k2$f$.#!Rb.oSQLzH5@8dG^c:fQ,oX<3t=z1>-_|' );
define( 'NONCE_SALT',        '4q$yjNuvtx/_kM~;px<MaH46Q*E%}Evvt-g | !@3;=Oz_ &HBX%,us_)3P21&&w' );
define( 'WP_CACHE_KEY_SALT', '5yZGaQuA~wW{Znh]2,&GZL ?7Y*4-F/V~yOnlPih(RM|wEXSSF#Hn3y>fR=$!Y}[' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bd_';





/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
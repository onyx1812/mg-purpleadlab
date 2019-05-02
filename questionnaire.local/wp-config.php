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
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_questionnaire' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'yt#$.E[v.Mmma<h_=F{PjFPgPx~#We$5nYI>0f?F^@qg)}~H>90A`OQLcKZPw8bp' );
define( 'SECURE_AUTH_KEY',  '~vv-;?>y{#^&DJMpPr%^1v)T*m n+A6}adW*Qo/jp9<#)(?oy+PYDKL?O*:18YF%' );
define( 'LOGGED_IN_KEY',    '!jYV8>t_al.M:9rAFsV{Qb,y0b{|e^yY$<):X6h$jRHB(<9r{kL12QapaBoeG;[:' );
define( 'NONCE_KEY',        'GU]M05~Nl+te;qE0xG9rXNMFwNMZVjTFg`u8NmiUX?Pp/1-Jd}-1BnzKKKT}VmmF' );
define( 'AUTH_SALT',        '3cEy`.3~YM0?rdqn]ga+Aj=r {^!h=X;fVy.C9]2)#IHcm3*0>4S7N+,;+57#h+3' );
define( 'SECURE_AUTH_SALT', 'AXB%8/DHBI4q36EBTh<5VW%_r+^!USM2FAh4==lBX+[,MwFE]}${qR14rm?>B B_' );
define( 'LOGGED_IN_SALT',   'q,+W3h}kS@@@Y!(R%vN-kgMGondOzH?I:7[H9*++ZArKFOzXY^5^mBY!Iurp]3|a' );
define( 'NONCE_SALT',       'rPIYD3}AUUU*aN[FfxOznJR2E$-aM_59^>2##IkYu[G)0lh56n%Rnj}|>J;! 1AZ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

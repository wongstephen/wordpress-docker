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
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '>69)g<yZ@0I_+hf}.y^0kq8G9sDuFt+%tDNniQ$Ed>oM,aV#E$6JUKxM}jV2r.S3' );
define( 'SECURE_AUTH_KEY',  'JoQ:]!GdLqDAIc+NqFC/ aapA$6.RsB+S}&u&r($ug&Am~8#$rV=cjO^f5WsYVS1' );
define( 'LOGGED_IN_KEY',    'Wo|j71a3ape$;|~wM3*Va%q+Ds5_x$Sd;U|$6Ah5p6^@gY7#^*2w&L?R:88G&t_[' );
define( 'NONCE_KEY',        '>F9Htk&2$$@6VV6yreB|5%N-M89G95)_-NI8NxL`3x2ltRvG.;/l%vC#vMSJGSK.' );
define( 'AUTH_SALT',        'LLzQ[-pj^P4t*JVt>$1sM/6:Ip5E~$#aPn?+DRzQ(LuavTf=c_?TgVXr]%k5Lw;`' );
define( 'SECURE_AUTH_SALT', ']C{}~81&7%ODIs?P~7X`MJ|Z4M_-gUwT,;8$)VyTV<>)eRE!o3?lOF3~]v?e=HLB' );
define( 'LOGGED_IN_SALT',   'x&oHX0`&1lv2=E9v:BG:;1$u`U4f%fcT$g[DdQMZ.;tA=uE@L^.]!oOjoO5-,F~V' );
define( 'NONCE_SALT',       'l;]VjAlg=4@7vaUEU_2>JLwb+P(>mU5@vx@P02$7 1&_Ys-RG]4UK`}+!Xpqc|(%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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

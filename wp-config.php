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
define( 'DB_NAME', 'wp_elonmuskquotes' );

/** MySQL database username */
define( 'DB_USER', 'wp_elonmuskquotes' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_elonmuskquotes' );

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

define('AUTH_KEY',         '?d9lB!F|nIPV2z$+a2sQ<c&(T/)jcsAomfF3.!(soR@Zxud}u7P1yu&%m{lXtDh.');
define('SECURE_AUTH_KEY',  'cfWpUVg.[[^e6[OYK;]v+l$[G|D|.mvi):L6LzYFD.fRG$MO2LvrV.w.v4ht%}A ');
define('LOGGED_IN_KEY',    '`|pQTyW$t-Ho6BA$7IE<=_}A]vl;5Im]sq&/zUoW6AN&}4=3k7<GtY;@W_R_XC(K');
define('NONCE_KEY',        'TxBe&W;c_I0rPR~aX%JMf@n} D{q6%^N qT?wB.%cq7x@j@HAYI+</8OiUWAvQF&');
define('AUTH_SALT',        ':$`Qze)Jx68}7[C§|L§[@S:amX]ARv_3U§AbxHK§z  OqG/ oQCX|U~-n5uCgMSz');
define('SECURE_AUTH_SALT', 'kQ(~J6 :QS66G[o%hF;hbn|+HW0l@s9`BL CM:l%V[La^xHigFKygrJtRBujKkCZ');
define('LOGGED_IN_SALT',   'SNe[j,<8<|=§+q56gjMG &:VW!7!|gQw_0Y{8C$g]:>Pb`!pOLxCla={D_uyTO%g');
define('NONCE_SALT',       '?qZiSyh^7[;vCf2R§L@Qn(d0OleY~KaZ.60;K>[3F) GeqZ9Z7+CF($)4Tp-yFMR');

define('WP_HOME','http://elonmusk.quotes/');
define('WP_SITEURL','http://elonmusk.quotes/');

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



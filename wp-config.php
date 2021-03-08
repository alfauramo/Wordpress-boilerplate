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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_pruebas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`8.|Z<N5 [9Wju4M%}oz0.9:$iOV?+vjG^,z@N~9Lk29)L5-.5(tHF?M#@y&9g55' );
define( 'SECURE_AUTH_KEY',  '4g;7./L;_N29AB,W?Pdp?#;;Tpmr3m_Y~<||PRbwD_$Kq(TR)<xBiL+QMp-9vnll' );
define( 'LOGGED_IN_KEY',    '`c]u^d*^~j~d1g`;n~s9runOHc][Bp,=9%2bEAA-6PL^?_wy50zvm`;V#oTjM3v2' );
define( 'NONCE_KEY',        '/mL|pE@i#a>o>.$lC4{;c/G,UOOxp9xT8:?qN#K{J_-qwEY-WOC8pOCd9^v_-<Nx' );
define( 'AUTH_SALT',        '_~Eg#i)FKUc*U~w[;}U%pjkCl-CTV)lF)fh@[Pc!/[C}I*aQ8oB,q8jxdI531pB<' );
define( 'SECURE_AUTH_SALT', '0FI[O:mdeIAe)dRc^({]Lv^xCUK>WPFSv.3#}o:Y@O|OXR:?_r;.FsgR&4q5QKnp' );
define( 'LOGGED_IN_SALT',   'j-td)Lg?9b->][G;KFQ]=aL.FwBW;+ut=L.CBCYe/I]fYlrqz<04llcBW51|Up/u' );
define( 'NONCE_SALT',       '2{*B!w?=gz{(=@o=>!_ellfl.4+MtQxtN[xqCKqVTP(:dUsP<0b 8Ln1:6S~4;0P' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

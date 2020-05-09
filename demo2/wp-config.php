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
define( 'DB_NAME', 'demo2' );

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
define( 'AUTH_KEY',         '1wTV-RzSXu9 EKp_Fn28$4C^Z&2D=;HA*|!7GCDIO/xFmSSs&Pm~uqVSE)&g>3u5' );
define( 'SECURE_AUTH_KEY',  '*8X?%8}]h6CGG|tb$tOWpLFEy!u;8iO8x`SuE%.*6S%>frHSyHp1DBQ%$fB@@Rg<' );
define( 'LOGGED_IN_KEY',    '7~7R8D0>&]#u=_&EzbydP4Rv 8Q<2{y=j>[[ I#PA~N4oD]!B!3+GIrrLJYNec^,' );
define( 'NONCE_KEY',        ';,w/4L5Z2TnZmS~U|y|7MlLx9WyDel4^u&}1kTM3>x.:v2WdbASp}lw*[bqiFGM/' );
define( 'AUTH_SALT',        'H4P>@-ig1JuW{SQ2F`2N3{<ert#~| ~_B0!ZQi^BF|,nbD>?a/EqOmC2|;:Pk5f@' );
define( 'SECURE_AUTH_SALT', 'wp|v7nm+:Z=nu4oO;2R>dRL)}]0v3D&lcpjL$Z&:L ]MmR4%7R)!J/{%F?u3|A}&' );
define( 'LOGGED_IN_SALT',   '/LWJN*ck+CXhBRx_&xh07|~&f:kS4>{ZvR@WIf<]WopP-nEF]u4BIYkJ{=sF }7$' );
define( 'NONCE_SALT',       'tE`n` R6wF7BaKy7fU>ilMgupq^kqqs@@1xkFX.3-~CNo4mk^kR%%>fGVf/!1.Bi' );

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

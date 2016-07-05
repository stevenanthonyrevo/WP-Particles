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
define('DB_NAME', 'particles');

/** MySQL database username */
define('DB_USER', 'particle-user');

/** MySQL database password */
define('DB_PASSWORD', 'particle-pass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';O87Ln:o>VX>qQk&Z.>z-?N;3<T0Q&=y>Zm:L-N#}7_G5:N.g$qNl24%@*7f*G V');
define('SECURE_AUTH_KEY',  '%QT_u7L-Qp@^o(z|uebH3p^;3G.p[7fF)]ug]lR`~zJ3x(fGGY*$$ep`V2t9uN</');
define('LOGGED_IN_KEY',    'zBHUy.}{c(w8Utr,c03z4eo$8q|T)w38A^10K-XCyiTJGWwHW3c/Q>JSEtBSC$WH');
define('NONCE_KEY',        '%41CLU_M!_FE!/vx4JsLz,q@qqxwt<7ngAiR15~,Ha4[&_`O}Z8Su <^cqGg0T&9');
define('AUTH_SALT',        '.$kgk3%KGnTLFbJ,K%gJ|+rlM*/?/Y(62xN}H3G~7YDz=n(GF&=f8rzbpK!B>S(0');
define('SECURE_AUTH_SALT', 'Q@|)wzwl.bKOpe%(d[<3R:xRHfwiMUSL.6a>m3]#K/#*4t?1OqM:N$J<6gx,h%0W');
define('LOGGED_IN_SALT',   'PO xMZ/ZNj]ZL0S2}@;%Dqk+~acN:X{?,i_~k0AoQ1~6|NI2TZ|v,F{n(Up}d>tn');
define('NONCE_SALT',       'kJsq]u~-}IDTJ L@GXHS&wFN1Gu76 MoF2,3/pRj9bbw[cO}TW=Zl+`&/ p-[enP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

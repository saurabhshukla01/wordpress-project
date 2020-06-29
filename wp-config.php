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
define( 'DB_NAME', 'wordpress_db_1' );

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
define( 'AUTH_KEY',         'C=#_e1L@mki`Y5o^u>h5i1?&M4UNGUsF{Y34{+pnUg%`cq8PT*S51WG`JLTkziyh' );
define( 'SECURE_AUTH_KEY',  'oZiz]G0+R(]_Vh{-N!IB6%O{!pyXKiH~o{9M7(S#V!>.GQ/Zx]fbg{SA~||ZUb7@' );
define( 'LOGGED_IN_KEY',    'O]XfgDc#V}@m&q@,ysr~46KWtF^`)pp24Grn#!^;CV4Hc<fkJ(y-wk(6dWn,;fGr' );
define( 'NONCE_KEY',        'aTg$|:scStUrj.|;y<4S4o5`4.&_ZH|j|._Ob*H8c~f{V<1T(AA!`T?~q,+:5#T#' );
define( 'AUTH_SALT',        'O0}P+G4E$&(|/_:5q*RoZqAwQ}0L*8i4|E&(#6B)#|mcsP9>Rn/)YH0vDZ$$>_aV' );
define( 'SECURE_AUTH_SALT', '83|bub$lA?85=/!3WP4q2$EZCq-~L@g9~q3yZ+qK$XrY+#}4=0Fh lgaI}y.ah@t' );
define( 'LOGGED_IN_SALT',   '_Wc:|`c+@dM07mGv;yqWUZ%J,1WnV=#)(Wv>THm}NxoO,#bjsvQo2o({FHF|e_C*' );
define( 'NONCE_SALT',       '6g_~_}/I~Ksm3|S~xPHa&I>!w4Ld%FTut//b2sU>&B ) jtkf]k#;6qQ%r7yH5K+' );

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

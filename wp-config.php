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
define('DB_NAME', 'startingwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'adminroot');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'u`#2gi[8UHZhc!C~~jLB!yNm}Yr|%3G~YX%VN<8=B_A`W0tExZ8+1/1ci$/OCxD ');
define('SECURE_AUTH_KEY',  '>HVMg0q[vi(tjY)r=i,$ufx=1ZVQw](0CS-gMIP?aFy|c w8COvUFlaimrLKg9Fm');
define('LOGGED_IN_KEY',    'U/n?Zn@X=zH)G1?/K_MrxG(gzV=Qm$`8CTu-/X3Qs|v&vbr@fR|$53ncG3QXgGLo');
define('NONCE_KEY',        'a,UDzX@1]vbllvS]re}1boSi/%TGIM}$hCVVHkgYobV=f~= i$5[dvzoKSt6NgEd');
define('AUTH_SALT',        ']S~.^@?lUjIJz6u+~W)}>Fi6`L9U*Kgh>nJl&O90yKO3Ay}>[WcBw>.h/ki~{ga{');
define('SECURE_AUTH_SALT', 'QAb<?b6o)h!!U?gma$D64h1u>KC17nUV{]XVdAzBu8IA#L<eWW$ngi?Z5^pAFf+5');
define('LOGGED_IN_SALT',   'u1ImjDWAH_H jK]zR5v0jge$C]43w5 9l@xP#<*{;&pqCH 8&s$Jb1H{!uk)FXFt');
define('NONCE_SALT',       '0[1c{gT9+dk*W81[<N2}yourG2esmII8yuumdfR@a6nLfeTAr9ctC>UT.9P9zp$Q');

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

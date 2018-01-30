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
define('DB_NAME', 'valerie');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '[|Xo6OmC&^Ey!Efek,+s8~ )m+&N5wY<{-W;(6+V{_.eZ:oWK9nVD,YXvv{><{{3');
define('SECURE_AUTH_KEY',  'ub1A:5LWNm#R^3y+O:3~$rkXpNBJ8K`%5wV+Bh%Xvg9}UuZ(z9Oc0jr+/L2| RF=');
define('LOGGED_IN_KEY',    '~0!2~/3gpnw?JW<-53|Ppt>Dlu9!@c$Ut0J0=!EpKL^Q{@/C5zlT~mpi nm?y1y?');
define('NONCE_KEY',        'S2.Q*bXKLjr</`x7>Xddrvq99FZ@0mJ}[8t.QLz+ix3=?1; towAnJ1$LM-E<1T{');
define('AUTH_SALT',        'nzDD*]-hO_3a|FdoM=9i#))-wV~z-EDcP(B^vlraEmG(!xSXdB8[_[{T?vs&-KjK');
define('SECURE_AUTH_SALT', '[s2D@<k&t1u{:jqaL+w)`D>/ySg+/1[-U|mJ$8=/tTfI2>~P:T$t$%H*4;5.a:qB');
define('LOGGED_IN_SALT',   'mi;3!M1:82D.F[6V-`)[{8^*.zUseC?jB!|5bnP>Z+Q)D4( %-26) YP|xSf no^');
define('NONCE_SALT',       'Cild53a6|cB_o~Odn%w]efAj|%gW[=^@0x5Lzs/(4QXs]RKb6!k_gGw>`EUI7jEf');

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

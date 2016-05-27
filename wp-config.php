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
define('DB_NAME', 'd6wpguides_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~`bm1Gz[7p@abqeJKA)yI+Z_hI<*7O-eu@ T<Y?Q;B`4.#912qu+=_gSArGTVIs<');
define('SECURE_AUTH_KEY',  '9C%OFbwRE*_A<u;Lc,Qs1y)FA9HGy^!crvx(t!O$!KVF)e5sAMpOz6ifWj/?Tww!');
define('LOGGED_IN_KEY',    'S/|mCJyYkZH9PZ>zGhliZ@nYB3Q.>F:nS=q~-/ZbJFT|JALL!:m?H}Ke?e2ISG]0');
define('NONCE_KEY',        'O?@eu1f>RI9e#K_QVm;cXwjj#]EW_7d92mgf!BH9{qCj0)rO8B<FTgWN<XKsNJ1I');
define('AUTH_SALT',        '8(l`Gx^q6#j+nxfVFc}7,T)^k!cS-rke9zTL_[nGb)MVNzJl%=Q,m[gj98@DVotJ');
define('SECURE_AUTH_SALT', 'SbFuh|uHc)THEv(X3APYnGF:)7y6mEtXK/{<{fzT!4r-&2YD <B1nP.kU=QR,/Cj');
define('LOGGED_IN_SALT',   '&d7Vq-vRbe$!R}~a>u63)Zy}@;58Rt&{6@V@V;rj>]3$4m^kJ_)Sl{_ +/l^en.B');
define('NONCE_SALT',       'dHQ.[@%z?7X@%Ftv eG_f9XmL$DqpHop5CK!juYp1:jo)iy%Y@z>/7vv.kusP7u*');

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

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
define('DB_NAME', 'hipotiroidismo');

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
define('AUTH_KEY',         'rN6t/dPh;3.{{aBmg[Z>y,Ld .Ko4#akYzOmMa}=S)/v4)]B?bW5LVRd6Lnp)*CP');
define('SECURE_AUTH_KEY',  '>ghCsb{f<*kZL|Iot<8}vHFqBM_=oxY3.+RBs]` {Xe(qzu-t{w%O,a#9}2y,o&_');
define('LOGGED_IN_KEY',    '3Mln%v,qjl$lbl07$W_E7V$p~4[)+WqXp_+b@U8-|9<8:wl%M&>M8O[azT:O^jGz');
define('NONCE_KEY',        'VtUFrU0q?!,H+3cY]B4zx)3^c)v)[aEFpix2R=Dm:T|43N1<1y^G`hNIjf[(_~sI');
define('AUTH_SALT',        'D_#n!4uYy.fUZrP,><g0+&[ Wg)(|6dZ7ox#P#6qdS>O,.Qf,[0[7UC@:phZ@Wb ');
define('SECURE_AUTH_SALT', 'Q(M]Rg3a#&KXP<AIz_V-tbJO^~SU2dDp&! =Td8R|Cl&F|OA+zAq4E 2w/VlnYWW');
define('LOGGED_IN_SALT',   '09bDONcq}joK`?! XGir<8`D*]9j&}ra .c;&,C2i<zPX4xBMLxXAe v_<>z)cq3');
define('NONCE_SALT',       'KH;yQU-@,.q>eWZ}Pp33te6pP6Zyo4L^+H=~r/}xY?E2W*}jluD2F&px$$&]J@@`');

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

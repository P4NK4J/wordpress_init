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
define('DB_NAME', 'cii_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '@coloredcow');

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
define('AUTH_KEY',         '^xa&^O:5*,VvwY9:z6=>9u~IRg3q)QrD_<;2jx601w| k(Qh^H9Lg|Xf4z..O4Tn');
define('SECURE_AUTH_KEY',  'QzA5kxjBX5V%S`fOw78}w<i7li|C*HlR8T,CO2d`6oa=@QK!{`^=>QU7Pq:ayow6');
define('LOGGED_IN_KEY',    'FR(:D:qT(=5x?#eu3,|{9FHl>3~US@#Ml,Y4I rzt;l,wk,2e1!ftfx[LcPMT`q$');
define('NONCE_KEY',        '$SXB]DP*k=bB+@s8Kvhu.fJH(rs1P/zxk94dU}#rJG?YA0X@YO4a^=jb9la:aU(j');
define('AUTH_SALT',        'Qe#[Kl4J`f0{?5PJcSx5fe9=J,N+n)2+~+C;KL*rDW9,b|L61wiE)zcqb^^u5%Pf');
define('SECURE_AUTH_SALT', './d40r^AfJ:{pxg3ZEULjn,@5N86iU@dbS mR`;-@7FD!6.-qRZT0r[+lqKA1xhv');
define('LOGGED_IN_SALT',   'd0Wm(wE(yxOWu*x]pY~M~oC.kxhjN`,A>FiKNgRy*]+>c0F!fe3$!+*J0mHR6${:');
define('NONCE_SALT',       'S1d5L@%|l>DMvaQ`:bv.TB4tEnn_d~3eM*k!C6D//VFv[jPgi .5A}rKAfb<F-mq');

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

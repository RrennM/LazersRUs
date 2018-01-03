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
define('DB_NAME', 'lazersrus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Zszeq#1Tp&$%<G $rrswPqjw-~Z;R@H?JXo8tl:3L>8I RTv=36KcDopjcVO^ob,');
define('SECURE_AUTH_KEY',  '_#~M!h9e,1-~F0*]v+J@p R3{09,irz`JaBW]VQ95yMRl.gC*WVY7H>RAe?*JGsU');
define('LOGGED_IN_KEY',    'u#D4[&_x?`wB(@j0i.`CF3C?YF7&pb3k6B&`&h#SKBxVO(jv(FG ]l2DI/SOrYV#');
define('NONCE_KEY',        '`1.cOMPcH[LuStjk+-KNbdmu.)lS$;DAD3;fSv/Xc>J=&SThClT#:M!~v@mWA(Y9');
define('AUTH_SALT',        'T3teWg@9$B]boDzaP?7FppsKUa.2d_@f[@$}$MMAvJJwJ!BWJ!$_pS*VUJ^yu<8=');
define('SECURE_AUTH_SALT', 'Tmq`2:hS%HDe{tV?1h@NI)w ;$Jv:!$~>H0)t*%x)~)-=yFyM:9Oy{9Mw?7xjJB*');
define('LOGGED_IN_SALT',   'a%zc|3h?ZKzivr-?By773E=aqZs>%eWL?n!+Ko9#?fWyQHni?`%sk+hM`v=FIF7%');
define('NONCE_SALT',       '`h>CKgwbDnL74.^cT=O=Pq[xwl3WonCy,xhDP)0~7,j5ct]/=y+pk#8w%L<JkWD{');

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

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'sz<LikI_{[*RctdlwiV)N|W[Nk|^zY9GfSL=33WDKZ3x`L=9AZnvMd.s}oh(3G*v');
define('SECURE_AUTH_KEY',  'xeN.yEp+*IX_B+8&.Cx8jq}NR D-@bA:.YJ/G7]=xhgv*l/3jq]ht#vk=Yq`wkfl');
define('LOGGED_IN_KEY',    'Z,Xv$-TP6jS/L$tvM*4!+2_o#z>s&G_wXFxdUc7wXNAIbmf6!L[H!}p,M$xnWW8O');
define('NONCE_KEY',        '%h;ktIXKJ4[d%v$$xG.)>hcWfognD&4=6B&k>9n*o~7iw0+aD^I+JNBv)8~Yep|7');
define('AUTH_SALT',        'a[ar>(Ec`6kxU;#h=}R2}fheb#2}t6 9M+.`pgc&B/o._qrrA_U:VMKb~lC*[3Oe');
define('SECURE_AUTH_SALT', '@NLD{PA]FaAK`o&ywK4Kyu(dO%e9v}Q:ZITa]7!?rR5l_yb6R?1yeUQ[*OjYqXSt');
define('LOGGED_IN_SALT',   'p{X9#_|VcjoJe/rBtd`jJz-2(Ir~mp2]En2%owJ;ro{?4W2c!>AkvuQ3S27N)/ =');
define('NONCE_SALT',       '&:3Hf337?-O!d-uUSPnz_GiMTGH&uPjmv%H-pRuM&5R.oC?9qe/KS}t;JHr?bptx');

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

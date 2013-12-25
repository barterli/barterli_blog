<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'barterli_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'w72E$xJa}_w02zJ9,).B@%kRL@%q&,z8{nIq|IR#7>%CafZhrx MyPG(0#&h,z|G');
define('SECURE_AUTH_KEY',  'sQ+u5,)1spI-:Z]YxDWz)nuu9Ndl4K.DZ~3WZv;SrFGno3$oQO#|0o1<b80V#<@q');
define('LOGGED_IN_KEY',    'Dzzx3f/k3eaVr$GE0S2HGxFw0F8{=T1*%l)m,2f1Ex%mx{V@cZt{x)bSm~._PDJz');
define('NONCE_KEY',        '<,@zqTdI)Wswb/$<ClusmI`qFpc9I{8cQ7O8:yJyLVeUj:{9-?MSbOEm(>$G>[Py');
define('AUTH_SALT',        '+_qc#-YF N`-7sMOK`>;(vX F{+D-v-QbL}Q5}c&[wu6wGf<wG^>2{@<*Rgl2;<~');
define('SECURE_AUTH_SALT', 'o}F 9s9|V7X?&kqK&2<JSlDn[N[61vT!e~<)+h~P+GSKimVlHj7$i?EWM6R5?dVA');
define('LOGGED_IN_SALT',   'iU0{v,f4<dq+|*J`YX?B!~xd9XoF+f#?ekh6d|;K|dlv.|.f!.^uw!*)rgK7|X;.');
define('NONCE_SALT',       'bDn].gH#r4#[Xk#39-K-%;Mp1K&2Q}Clr3{ovTMt9WC|+p6~mR9!zh=dFO*FqOpa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

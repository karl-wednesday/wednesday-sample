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
define('DB_NAME', 'wednesday-sample');

/** MySQL database username */
define('DB_USER', 'wednesday');

/** MySQL database password */
define('DB_PASSWORD', 'wednesday');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '?qha,=|GY9F<<Y<u|* @T2%C5@v%De{/Y<|)MzA`SXYDn,/yO#mj)Wd}=<P$tVAj');
define('SECURE_AUTH_KEY',  'EYs,<*>&Tb=uYQ(YySC>gw<wF*h`ouC-p>k+@|8D/*j&ngtA-J<mAek|4 fwaX}b');
define('LOGGED_IN_KEY',    'wd+P< *B<gmMZmK_>l.:=(rRim}B#s-=k5`eaF(%7Ks|;-H{X,,;(DE07lo8}uU+');
define('NONCE_KEY',        ',&oU,}XN1efoku/w-x+IvoA<6@F,OdE:f1lxd`iY$kf{*J>~CxU0q|A5|mi>~UyD');
define('AUTH_SALT',        '$KF@i+?bLao]{__-U}bnWXMA~mIR/RQucs/f6j+Cb!4p ~N=(Zj&]kVUH|d/+5jo');
define('SECURE_AUTH_SALT', 'bv,)-^O;xr&1v*$<[GT9,-~WH:@1-=.83&i^P=U_qoq#-c]1Po-II&-Nj/)@:q+z');
define('LOGGED_IN_SALT',   '{_-}g:3&6WQp# /L1m`Yu+#p-)#c]6;4}/JlVbEe]SF:Jq=H=vLJ*<,ZbfBv3+6K');
define('NONCE_SALT',       '@u*CTu }T(RE]AF++Czn)ej4Jixk[<l?/X*n|-]^I#yqb+wGe9QJB|Sl^a#s-}hZ');

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

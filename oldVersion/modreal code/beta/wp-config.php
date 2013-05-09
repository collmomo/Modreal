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
define('DB_NAME', 'askovi_modreal');

/** MySQL database username */
define('DB_USER', 'askovi_modreal');

/** MySQL database password */
define('DB_PASSWORD', 'm0dr3al');

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
define('AUTH_KEY',         '%.39vW/`ORBNx|R)6;FuAWyjT6^ixt3uPz7=j)E&Rvoc+<J&q!&8T1vZ6ERx.fP$');
define('SECURE_AUTH_KEY',  '#Lxh|I`w&|=pK#V#f)|-,@D~Q9S<P#aG^?4EVf z:!T3c=EJZ#SOY:J`h9sTUGE&');
define('LOGGED_IN_KEY',    'S;]Mi-*K?mBY{@fQ-:]{g<FQ56OyiQJeI/A%+y:~T-6op9},l8Y%_Fv]$~4nw)|L');
define('NONCE_KEY',        'P7oS[2{T+2&Kt`+Bc/;t?Wly/-^P,WNoThSp]J#5v5dycN{F@$-dVsefF&JF#HxM');
define('AUTH_SALT',        'y~n_F)6FJ@DOd50pv)eN1x~V+)DLb![wco%j..^4W$K{CgL|UA~VjD6dnm&+ Q2$');
define('SECURE_AUTH_SALT', 'w|cSWEfGVkZhdJzM!/z0+UYCR|NUJ480DhP(0hXE.eBwfH<PHbs|q]y!:;S}9en^');
define('LOGGED_IN_SALT',   'zf9>Zql(kQ;6a`pVN<<$?amFZ(i~(b7J,p/5Xfvd6QwW-D}|0/(;8yk_WmJ6[fnE');
define('NONCE_SALT',       'I]N:*/`&|=m.cQ$p-<*TuKzqBKwxHt1Ua.[-+mq(`;+[TW`>w,2<C0cKT$%r-K,+');

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

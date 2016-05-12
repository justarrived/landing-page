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
define('DB_NAME', 'wordpress');



/** ============ MySQL database username ============ */

/** Live */
/* define('DB_USER', 'wordpress'); */

/** Local */
define('DB_USER', 'root');

/** ================================================= */


/** ============ MySQL database password ============ */

/** Live */
/* define('DB_PASSWORD', 'w58NwwfISBoNXN001qHomA6PAx4jhseb2r12h9jpYIWDV3YSXkIcstyNxPmUcwb5'); */

/** Local */
define('DB_PASSWORD', 'root');

/** ================================================= */

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

define('AUTH_KEY',         '#p[U`G]_Sk3?;:$muRSublL$se7?)@my1&.Ve4JRZb{|Gq(3>a;7us[Ctj&e}%e5');
define('SECURE_AUTH_KEY',  '|:}O_?KDnK(OrdV<JQq%Ec!E@r*XUcRdS-,;<KKvruXj]%Q/z3HY+5z^$r{M/#x-');
define('LOGGED_IN_KEY',    'KXm,DjVR+yA-QRn%W}R:wAOmG6cd~- %#c(_oNgnt.<y!px6N;(N>^4]{-]h[5+-');
define('NONCE_KEY',        '*Fo*bc+`:< #W3lj18z-}T{]ll|*E#{~84|Hf+:v|hdu(+7$E&%Jkp;T^xTXd]4X');
define('AUTH_SALT',        '66f[a0zv4Ol[AUvp){C=/PHUK.jXy D@8,9TIDi=5hU7J3:t@/]]`n@xVT4 {x-G');
define('SECURE_AUTH_SALT', '[nNZz%F>kQ-.-lfzggQ+a )@NM?@/Kas|+#}R.isM^S2-f ~k:I5VG0_It% |@*6');
define('LOGGED_IN_SALT',   'sa,qCo|d&8Xk(`=u| eQ*kIqKnnZmQ]B*kn{f-k~$P66!K~x2)P$99MwI/pzw/<q');
define('NONCE_SALT',       'c[h6a=++@ZOq:eB{F}K)nAr?9P }Q]1oMe+HM}6a+|1[rwtMc`or^qJjI0}66A^^');

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

/** Disable Automatic Updates Completely */
define( 'AUTOMATIC_UPDATER_DISABLED', False );

/** Define AUTOMATIC Updates for Components. */
define( 'WP_AUTO_UPDATE_CORE', True );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

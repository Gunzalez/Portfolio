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
define('DB_NAME', 'gunzalez');

/** MySQL database username */
define('DB_USER', 'gunzalez');

/** MySQL database password */
define('DB_PASSWORD', 'nobble');

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
 * Edited by Shegun Konibire; 2nd October 2010.
 
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
*/
define('AUTH_KEY',         '+F=*$+&VXm7paanJPyh|U{ieQ7|*Qx30A/Ck2bZ+Jp0MAs4;i](^+u)([KE-L&JN');
define('SECURE_AUTH_KEY',  'F3P-0+ld)VFy% _ZZE:Vvt!M{DQhvBRq?Bk*5]0i|Ka1$-KdZFj1jF-u:CE &K1`');
define('LOGGED_IN_KEY',    '9-?``-7,;CQabUfG)C(gB0y}=uDJ$%M.dHR;ej~p0;3-5jQ&yA3o(nlj8sUEz*t}');
define('NONCE_KEY',        '-qr{!LtO$TLN|+86zU:m|G6m8M_Z05.+#fb}yG{?=P7!W6xLfHO0-&r+f^$$$qOg');
define('AUTH_SALT',        'CK5+k^IZ3Q|Qo(SlFu{2*:K9cNBf{j4d|loLt.2<fLQs--=QW-P{;):1GZ7tk|G3');
define('SECURE_AUTH_SALT', 'a{M!<*)REXweK07W!8TOXR`ua jpQudHb|^t %{][6iYxXA{qTD0R-#<GR$|!}jW');
define('LOGGED_IN_SALT',   'whJsAuV+H)>2gE+rXvA&+.LMnC@1jpX.9m)Y:WdHzSd4~EjpzR3;./I0@zU!kW0b');
define('NONCE_SALT',       'Y6(RG-_9|sM*3*]4!ArnEsJd((l^O7><If-NfIoDyJ|1~C-A(&|pvSfn/aDdi+4W');




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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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

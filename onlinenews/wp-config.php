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
define('DB_NAME', 'wp_banglavision');

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
define('AUTH_KEY',         'OYyGT=i?2*W|9@+aOE| 9!cm(~d69I%S2PT>(gDyQSs=FX$2kVEpdy}QX~NU=8+O');
define('SECURE_AUTH_KEY',  'pyS0|b-i@}idqiXyd$a_S.[oK)iDAQntnA~G.m{&_HCRR!jC$|$yO`5-+.5~rF3W');
define('LOGGED_IN_KEY',    '=B11AD[O.#_$uHr_Jfv7=402mnRrh(UXllp5f&sU-42H0wrG^sHQkb*uYPP8q!^<');
define('NONCE_KEY',        'uuMzHEyup^Uw7m?Y`jcoNeZU fH6GIux@l5x%N~vD>U~8|M5dt9s[Kw%dVT)|/I)');
define('AUTH_SALT',        'rM!-:BOvzGtk+Uy}C{J 4ZA9#>^M-&G)hGopaux0^N+P)DT-9mU?]@KW|UH^ nqV');
define('SECURE_AUTH_SALT', 'ydHRO6:taFp2<K58]ccP1BS_o=$-?*M!^,Ov.zewM5rd!IIOI`s<CMpd<We:bEOY');
define('LOGGED_IN_SALT',   '_w^WrN&bKVUZH5!;6T-&5xv&v6oS;xj[,L04R*,b-7NN@ZN!MDC+Sz!EI.-I0NW`');
define('NONCE_SALT',       ',lAk$)DL]8o4Ets*DnolDp<1*4h6b}W;u[#z/FqK)9g-DT(z):|I-#5Ov+,}ff T');

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

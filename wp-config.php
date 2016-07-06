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
define('DB_NAME', 'mahemo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'M4th3vsh3nr1');

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
define('AUTH_KEY',         'qRhjru@K(AJJnW_R]$ZVcM)onjsabUl_#-Rq}Zbtc_E_:UM`|qH`` yOKFN?86i_');
define('SECURE_AUTH_KEY',  'o3cGSS4E}G|-$dini3@3tT#HYv$u%QZ.3)Arsc2%>%.=at.R.j;$-t,5&:QS^3S%');
define('LOGGED_IN_KEY',    'b&qt.TV#e=+AJz;gCV|]GJ+A5A*o>U wltuQmxSUy_ /5he,PHP!N.7BVHwKC=)g');
define('NONCE_KEY',        'VyUQ@!ssTQ%FEin;VM5{bQEQuR}Q%:;2=}m|$P;AuL9#*dHARj$UJ2iv78&|d2<z');
define('AUTH_SALT',        'f4z}g(37c+!^l1U+W1H{M%aE,^3J4Y1tw$(w3Q2gjP{0/RJaqxYKjM{CPRVN#U]^');
define('SECURE_AUTH_SALT', '33k2MFf>@wDw2nW?b0eA~hZC21d9Cxt~$93fSa8qdK(d4;26E]OdG5W)qh!DZ;cG');
define('LOGGED_IN_SALT',   '0=Hz2BfaKJ3u]x0WZT1Ua{tI+,Fnz-]$M7P9RT6C2cICmDqQn!>K2,G^8z#$,utw');
define('NONCE_SALT',       '(p<KM2c&r2~[tV]hP6mG/`/JJ@&FZhkOQ91p1Oo(5Z)&GA?yFwjwQ5D/`C# $j.S');

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

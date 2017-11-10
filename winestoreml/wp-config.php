<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wine_localhost');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tung791995@');

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
define('AUTH_KEY',         'RpYR/Z8n=1w]+t!6T3mX_Nv[Hq6c1`&8GUv5+{pp07FFQ1t]lyNv5;@dDt1_j{jq');
define('SECURE_AUTH_KEY',  '|>Zcc$`+69irg.:%*w-sYg+6`ANb`e{s]S~0O&rlU6-m3v_F.U>}[vB=;7)ecl7z');
define('LOGGED_IN_KEY',    ' S.NAl6|+i RMa]zmCFRYD0IVl-GfML>( e/z&naJg`0P#U?JzyPvu:;du/3n4$v');
define('NONCE_KEY',        'i^8w@zv^@iTwmo<riq_kR$zjs]OP_X|]@J6K$+c23qyItJnVjDleiv<ZfXo07$:I');
define('AUTH_SALT',        'yAf& )vZ{x8w&1pY:)oor),Cb*[O2cj94Ew&Pxx.-]BWQxsENWa>/PQZ3$?U*YFT');
define('SECURE_AUTH_SALT', ']C1ovAD}!QA)!2wiBt-Y^h`b`|r_8v)ztX);Xl#=4WZbX5L}-?g78Q9bZZlujw/h');
define('LOGGED_IN_SALT',   'ES8M9T-r8JB.iqLmL8*KNnUyOAolA/]iY_]sd2~Gi0-O{yU^3YXa~[]a2f:6Cv>1');
define('NONCE_SALT',       'b)Ltdim(xN}]shcoBT(GO#+ruL#O9nt||P(GyP?,M-P0B5Y@DP||I1kcG80,j~1Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp3_';

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

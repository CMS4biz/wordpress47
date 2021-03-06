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
define('DB_NAME', 'wp47');

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
define('AUTH_KEY',         'e ^Es#BE4$0gR$lU}7*yN)Txqe1Cb&9Ox1KashRa>7/i 8f9}Ro-*<96yN(h9_T:');
define('SECURE_AUTH_KEY',  '!=LR#hw:|QK$m2, j+N[`u9lW`,2^X:-0Z~ifs@4{X`LXC{jeyHtYagi<yd|U2+a');
define('LOGGED_IN_KEY',    '.{;k!ZvBw_4CN~t>v<!8WitFEpz]`;RIx.%;ajilj#>*`4>WW_Q9pgaCbA|2LI)]');
define('NONCE_KEY',        '?Qimk8N@S:Kh%q>LL1W@sxa= y6r|-wHFc:2QvTh=7yt~&P6~nH!R+OH3d.Y?{=@');
define('AUTH_SALT',        'Y?*/nb.^;aD(+J1h0l@{ iu:Rj/YwpkuG8r],Usx;e[M?(q%XiI@*8b8j xD[J|T');
define('SECURE_AUTH_SALT', 'tFP L1Ef9*3QL7@Yy)Yi:Knu3Ok*%#I>1-9yWW%t3H@w<=>?Td;=Un<f+ThXY 9e');
define('LOGGED_IN_SALT',   '41]:ztgH;f/#u:In=GJke#E@,;LnO?*$W,>Mdb~R0[*g$/U?kgY_2(V20|adHYM ');
define('NONCE_SALT',       'w0!FM3[^AsRS-tT*/[_K.ktt4H}EH(df^z~:lH?=7_APsuX.8O<F*xQKK7}g3dNL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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

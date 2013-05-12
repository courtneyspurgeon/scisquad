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
define('DB_NAME', 'scisquad');

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
define('AUTH_KEY',         'VdQ$L-R,:Dv1OQ0{kPRa:|>RcoM+bjS,@&>Bz._T7AN_Dz3P`At*u45L~wFb8u![');
define('SECURE_AUTH_KEY',  '3.,^<uU~f^W&n5H ,c?}z9gF,b}La4uH@|&nxd7.aw=} lHoUdG%i81R0h2$ 5#a');
define('LOGGED_IN_KEY',    '_oIb~DV0u.-&|{s}&$t59<6)fZG@z1HGQN.Fq.d&GQ30@=@2#<1Ivt>R`i,n+M*2');
define('NONCE_KEY',        'u-.d{hM` 0IDKwe!dC`S97./x+rtEdHG1T8OM,9Irr].9aj444y}A:z$^XLO-uL#');
define('AUTH_SALT',        'E,~En@,=CNK+B86iA;G6`;qDv[e-q6Zv!W--b!90sk0o)BFhuU23xi%Aslk|o$I4');
define('SECURE_AUTH_SALT', '}#zi(Y=RG?Ra-E2S<j?4I+v4(0n+D@$M,KpYL .VmKO>OGL)FJ7|>Nj?P?Iec9p5');
define('LOGGED_IN_SALT',   'fN#~G6*_K| .WU 0+^rze<q$&]4t1T~o=)wjxLL.@BlnV9T+R*G_C=Vc+:)m4_or');
define('NONCE_SALT',       'Ncr?uWdkrX6jdcw0-I4z?+HOx*uj] =.2Lat)tpj:y!e%Pl7]}fE_jX+^dV,@2$3');

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

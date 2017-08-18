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
define('DB_NAME', 'netvirta_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ap^GS?p&(*>vdIi$C!XVh/A*{zRY {65!#cvp^&Z3k-CmvGd xEZ)SUG&}BTa1Qg');
define('SECURE_AUTH_KEY',  'nS8bNgc1jWEgaeTiDe#tqP.zGOVcR(cq*2A7-Pc:]P824F%n$]PgPL*){GDPfwNm');
define('LOGGED_IN_KEY',    'w&6SX;C u~xGX2ZlhW^,L6jry(Tq{w40^EIE_27CiZr$veF&W@i3ULhrNjK?G55%');
define('NONCE_KEY',        'I]a%]Xg1.RLeJ8%5;=i$})j?1$QsAd{jb`nt;a5j#I(} v/E^NNSrt[!,Q,kFrV7');
define('AUTH_SALT',        'fz3YT0bTfp{LQ9vm^Gei7oJ#0-Wvg<N}Vx5Ogv23U/5$Y9yXR]~r~dY>`a<O@9n>');
define('SECURE_AUTH_SALT', 'X!)-;s4jqr/LXI /35jh)j2TY;@$i5]`[DQ&-_L5@XXfk{=~3PE0>o}aws%.kn<S');
define('LOGGED_IN_SALT',   'WwC}xSo)OQug68&EJol!/>t/<B]y2n:tA)ubB_[(g=c)x-#!2V*<#HW/4MnHtjp>');
define('NONCE_SALT',       '(bd?%Hu{#O10}ND[kzGSUyez?L@NsLY+j.w%l4yS(L*E.+%GjM2Iw@Uf[|61!op_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nv_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

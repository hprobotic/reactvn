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
define('DB_NAME', 'zadmin_reactvn');

/** MySQL database username */
define('DB_USER', 'reactvn');

/** MySQL database password */
define('DB_PASSWORD', 'eta6a4abu');

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
define('AUTH_KEY',         'PV3W]fFu(QGa+znaJ)6{S84$bWzR+!w9!PMb =p}Ye{>~]dYup66:T]atm-#:]e$');
define('SECURE_AUTH_KEY',  '~;5f;qpky|PvJFz{rE]d_,:u2Q&7pXD<^4E c_^=qP>Uf6Wfx3%<B0~*=r _lsE=');
define('LOGGED_IN_KEY',    'z0nz=rq3=0j533t~;+0r1b& S<GNd22lT71$>nXli1UvrLxW`j %ytjRP;P5f6@?');
define('NONCE_KEY',        'GA^X)8pKPf NhE1Z{XhMr!NxY=&l#Cs&Zp>{$b)y;43vXd6:{,cbP|/K|{Ojly(u');
define('AUTH_SALT',        '2(C3CsUYx@Vd1V?3b-X(/7_6!EM>JVON$s,3]Bf}vr<06Ki;f%)Cj$<KUtld-;Xr');
define('SECURE_AUTH_SALT', 'f[mCL`/$Mr#OGp$gz8]f7Ka&`Sd-2_S=kl5UtN<6>W]pBIG&zx7K8T!,(yAw</sO');
define('LOGGED_IN_SALT',   'BAUCS%Mh^c=?T%s<N_ex/kdNiK4WkgqW=W|#T{o=z?bo}pCAbJrT(4 rNmstZzk~');
define('NONCE_SALT',       'B-Co9Y+mvT63az4!8+i8Ya k@zb-,kP]S$.=[)+EsmVzmEy67k9p=(|Tu%8~)v&a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'reactvn_';

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


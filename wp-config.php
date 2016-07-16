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
define('DB_NAME', 'reactvn');

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
define('AUTH_KEY',         '-w7eTDaK.xRra:ahn)I_w:kjA~&<x~w=RFWr0aYix/z}nEH{4PXxv3s,Ns[9[114');
define('SECURE_AUTH_KEY',  'YM.JH+Zf6 &PM%@u|c:)grRU|x?T49KY@H,X)b2ajzqrt;s1uFWO}_2^fAE^U9N}');
define('LOGGED_IN_KEY',    '%188ZJNARK@_vQ_c2V~{I@ruSH3NY5B!ww|U/CZX:3bITx^>Ar,6O{gL%oC^%VvI');
define('NONCE_KEY',        '.<K|[pjXfIq^56;|hn</46b^C[N=?:.Ka|KfikgI.$ii#C<-Ul1O<Y{kubh`mc$7');
define('AUTH_SALT',        'Z,J,TY^umBKjNKi/urQ(}s$s,;[BwD7`JfcP5ToxVX|mdZuW<)]o!)JS%(4uI!7I');
define('SECURE_AUTH_SALT', 'wfOZz>Dzjyb0@V`q+bZ%BDNXW$x~jBj.^%^vuHnFf(KhJU9jD2Y_oca12~s3Tsa2');
define('LOGGED_IN_SALT',   'hlj)<UTszEihzR#rF}6k/E-+xqe_jCd&5+xI((.11b^~TIPGO$bfP[[T8kM6S>9C');
define('NONCE_SALT',       '_P0u!C{>?*m{8I*K~A>P]v<%bB,Igo?}us@wW~N;A>[bYhM%EX~Tzi)bx :U9e.K');

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

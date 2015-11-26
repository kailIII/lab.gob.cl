<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'goblab');

/** MySQL database username */
define('DB_USER', 'goblab');

/** MySQL database password */
define('DB_PASSWORD', 'dBtzsGRGXmCrzKL9');

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
define('AUTH_KEY',         '`+@e&jPLwR@Y96ImH20IH|^Bot@&=nC0jFUrNQFVtqk5 &|as_MX^*RHb!/a_tRw');
define('SECURE_AUTH_KEY',  'Yn-y`f!X-/3|hgA9T>oXbYF|)H3c7=SJ7.&(9=5Mqg4_Yc%ZK{8<:EY)CGJ:s^2g');
define('LOGGED_IN_KEY',    '`bH| h(_Ym/G=!44.~IM1oV+:.ZMzt*G`WkqLDV] 7^n+VRw,hm~FM;!:krK=g1|');
define('NONCE_KEY',        '{]jdhVslI:G&7hOzOygP)U-(Ft?)&,ORmCA-peA_anhY+RcTO5}h:yo1Kg]:OUcX');
define('AUTH_SALT',        'U-|XU(+/b~;m6#>/Icg?(b-;qD|]8PgI.h-xF(6/0 -^0h,QU1kazv<`g+N>hdfu');
define('SECURE_AUTH_SALT', 'p[*E $4jXXYo-rj~&O<4&%rqLNp[N!p.{Ns,lN36)G(_8f(J(Y<zj4k/BFdOa434');
define('LOGGED_IN_SALT',   'MgDN<7|X{4L.cf@+X+pEi{v!QbdqLJ]8&P|nd[17]Y{?@AZ{~-5UB+IHY`,!/1zx');
define('NONCE_SALT',       '$>9KR+.+|qg}ACht]z$f>jZ[sm!nC#)MH+kdhk.?R!hMGLF[NGIJsvZ2|,$3;[QX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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


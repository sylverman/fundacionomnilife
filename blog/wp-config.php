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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fundacionomnilife_blog');

/** MySQL database username */
define('DB_USER', 'admin_fundaciono');

/** MySQL database password */
define('DB_PASSWORD', 'mD5BSBrrq6NHZwE2');

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
define('AUTH_KEY',         ';bLEjPe)ttHPp|p9]Y49HDV%HWwn?@ihOrBl@`Ptl<+LnK#xX*0+8FF<bsPA+wEa');
define('SECURE_AUTH_KEY',  'h4YCU0^Xgg{v1@XmP-c:t~?C}-Dkhnm4G >j:<*6$h6X+U?eGH+,8.v6BctX42B ');
define('LOGGED_IN_KEY',    '-Vi[T.[_,z%NGujDPo9OTj_shp+(x;b?*z6j9F.;N+8a8A_S!vOIm*>[g$0Y+Pr;');
define('NONCE_KEY',        'pN$zP#{?/rB|8lAHKta@l4Q-nIg%A{2~d.UX+o-1>Z.)z-E=K^.%uo.!pKFol 3o');
define('AUTH_SALT',        '}dkz9-Z3wP4*bT*|qW(m]*RAX4TjmK;+;-X`Rx@S+e[1f8dy8dHm+f!63oZ9os7Y');
define('SECURE_AUTH_SALT', 'szST}R$a6R@?]mAiq,L_^&crAGJwJRK-fIc$DBOHy4l;X?!~c1Y_  RIn`s/N9``');
define('LOGGED_IN_SALT',   'rL3Ss-4N)zpWaJC(<Uu@uz8|idyX/PnFha#I_wG(#+eR@A7,]ad8_A!{&DGX1@Zr');
define('NONCE_SALT',       'is`Gw5,luT%kfuwu*V?ru?RUe]vi@*w,&Uhg0$-&93VJn~pbI5@b,I{>w *{vmlW');

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

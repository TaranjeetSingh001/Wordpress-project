<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';MNf#R7whFBWcu6F&yj6X~5B/0@)M#L<8ac|Tt4@ggN<GyMENw{h(+S6vBr}<UV;' );
define( 'SECURE_AUTH_KEY',  'X,c+jH|DpWzHt-dY}-IF3pN29]a$z-u-|qg-g2X$vWHM=[DzMuz4{_>*#AR+U6<R' );
define( 'LOGGED_IN_KEY',    '0O:Lt)^Rm@dMy%D4P!y57@H}9@*sx^TY#fS)u$-^^[uKjNPY`r~Ph>R=(*#Y#~DC' );
define( 'NONCE_KEY',        'z2l77<!8qwt$U)z<bchCV>h87V;$vg9dxDR iC`(qt ~UvbqOAuJez4Ah Tc $GO' );
define( 'AUTH_SALT',        '?~Mh;?:yTgeQz2GtIKja$zZ[,I=$eE3`^OjK5TR_NnbmsZf3hZlm; lJT[mu%a*C' );
define( 'SECURE_AUTH_SALT', 'Aj_Pp_S @J0R*p=:uUr.Q?l0$hp )-ntb?`{8P)9ipC(`%(dk#gnS$BDw&5d41*o' );
define( 'LOGGED_IN_SALT',   '8-.jX!1BKc`w4lw<xT+Gy3E(i?2Lq6aRrp|Jg)Dl-itQ29`Qg5{h+`f}5@k)05Jl' );
define( 'NONCE_SALT',       '$b]@qnGVH%B};-SRd#Sn>GaK`L->f&*:jTlwF?_mxQ8Q~75QH8AXOGU|6![mMQSp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

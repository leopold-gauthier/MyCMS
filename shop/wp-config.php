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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/storage/vhosts/leopold-gauthier-de-porry.students-laplateforme.io/httpdocs/shop/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'leopold-gauthier-de-porry_wp_th1nc' );

/** MySQL database username */
define( 'DB_USER', 'wp_14tn8' );

/** MySQL database password */
define( 'DB_PASSWORD', '4x^mgFAUE~0C2i2o' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'JE:-&qWSz)C33r_1)G~9DZO;&8|kL7kAGfkBH39sl!2e64[%210pRoYS/988h%Pb');
define('SECURE_AUTH_KEY', 'wo*3~:&6-6HnW@P92;:2kvms#K99o7C+sR9H!2RtH*t2M)2s463udEIe[-8q2;50');
define('LOGGED_IN_KEY', 'vq&@j[82C0*o98/40vG&flv5b+960qU0b0aU9G2!l91Vs3VTu|ty0UEwaAXA[36J');
define('NONCE_KEY', '1Jk+9::)6(r&i|UVi7&p&*M9[Lo#%3!nr7qI8~65S99M[JbP6FH74Weoh@xL!qjR');
define('AUTH_SALT', '@8#6_76r(YpwUO~q%n@iy!4|J3Kr0I4pSi0IH|@9aPds/@TVVH42ol06F2DXD|wN');
define('SECURE_AUTH_SALT', 'n]tL6D]NJFpgF(9[P#1]1s4T_#9T4EQY[a9(DvC8_zN7kkTT5ieS;0d*/#uRY6p9');
define('LOGGED_IN_SALT', '6%j55;Js&[(J|n|06I4-Eu2RH150*TO&[2fMQV:U8]8wq[8MT5aHJo8nU-I5j|7C');
define('NONCE_SALT', ';u@%5#K%EUy*8oc-t0~/9qSOPg+)h+Pc*1:7|kR*7UKxs3vKiOsZ613Fi52ZL1%)');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '8ad9s_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

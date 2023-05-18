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
define( 'DB_NAME', 'nnvxrhgx_HxyO1UUOE' );

/** MySQL database username */
define( 'DB_USER', 'nnvxrhgx_jR40Tb1Co' );

/** MySQL database password */
define( 'DB_PASSWORD', '1k0yL0VKHjIFiqEgAOsfxEQXUDWJawuL' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Zh[{E{O8;.0^`6e#(m?UjFG6eTf5Ti`z=@?WC5vUF1d[2@&J(;;,6;~l9CCT=8I:' );
define( 'SECURE_AUTH_KEY',   '(!:r+G}z?c[[PHb$80rKARiB[H65H])tJT!S!%0l4 +E_,}=m>YUC3m[mH&^1:S)' );
define( 'LOGGED_IN_KEY',     '{a6GK*|6dPsJ_V;HS`EUE_=W{0HdShM1J*~$V)IQ~HYB&YY2{2@C373N<XAbu P8' );
define( 'NONCE_KEY',         'Tko@zj~<i?$Wu:*H5qT4A)$h{fXfhG2C}AIA]E.bc--KfWQGxxHf6F$Xr-/cBJTs' );
define( 'AUTH_SALT',         'Re]h?0,nt?s%H)u1{MkE3oNj/qkc<P0Kdv/|1b2(^&48Q<#3UHl40wm+7)3s/!1I' );
define( 'SECURE_AUTH_SALT',  'WVe5)af]j`9t7Xy D5*x]E2%,?v4<Tj>yyA<LS#1/KtVi-etyndxdt] Xf+mXMLg' );
define( 'LOGGED_IN_SALT',    'md{SIA4T*XDtvYjbKNCYfcV4jCj;{1kW/i.Zt9E5X4as{J&)o){oLGnyOON{`$~A' );
define( 'NONCE_SALT',        'gs=ZkrKT+Le^5T[^`GXz4pYZisd!v$[ uh1:Wg{;QevQfL R,_M<)nO9QVN<r5a5' );
define( 'WP_CACHE_KEY_SALT', 'Yz_~]X`X f~vcb=AW85;n/4=`f;spD`XbfYF:Tv5oq6TRzVRYDW@}ryV)#}|nXGj' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

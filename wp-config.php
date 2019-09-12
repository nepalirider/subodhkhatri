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
define( 'DB_NAME', 'subodhkhatri_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mBt2wP??9%}TaIQj5Yt8`6X^-!1v+`$|`#o 9q32) M-mn@l%vJLXT/Tfh~r{E;,' );
define( 'SECURE_AUTH_KEY',  '#%w7m?m=lwP=s9~ynv-X9@%FUj.8m?I,r0`p#?N`|Rj@(Le:^itTW)mCSm6IJ._C' );
define( 'LOGGED_IN_KEY',    'e`g539}v3@0KA(Z^ wXJle[cUr#/c&{F,K)xPx<h-Is4ExXbIug9aUCLi;9+pG%k' );
define( 'NONCE_KEY',        'x;_9_Txx2[2#5lqeu2_z~!JO.m=sc04f>!&10O(mS$1)0s#Q[c=GB>%$ZTpq+<Wk' );
define( 'AUTH_SALT',        '8yYH-Cf-|;p%m:h~G=#@>IrZ<S$7s?CB&Ea7,mqP#^[Dzdd2I}eqO|1-=/JV_}W^' );
define( 'SECURE_AUTH_SALT', 'N9sItwb}rGI#Br|5hMj9({*gIlYCbl4;%L9_Z=3`Tz|e%2rNkEEizrF0r/t%KH.U' );
define( 'LOGGED_IN_SALT',   ')b~Oi1:vQm|iIu1~+r=oz3(<aHvII2-UNo>A.V.;A7i^LYE^QI`{I3|Pc}.UagWw' );
define( 'NONCE_SALT',       ']Jid9@riuIMl(_;eD)JHJJz=-:/,9@|%dlo)M,]z$]m-f]/ow`DQ9;Zga-Jt<II>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

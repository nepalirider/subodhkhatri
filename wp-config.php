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
define( 'AUTH_KEY',         'HLS%%h%E,g4k=6` kc&NM06eJ$1&BbEB]90j?jLe,263g4_i.Lz]%mJWFiG6[1XR' );
define( 'SECURE_AUTH_KEY',  ' Yt)IC;i(0:t23LdU<mJCW>W]#*Z{P&EJ*{b;8r{fRC<r`[i;lywVEn{7So^{duJ' );
define( 'LOGGED_IN_KEY',    'qlVM~`Cap3?qxm5]W!}t%@](O8{<$T&IKq7%|{GS1bpn(Y.2)4o15b)y<nZ&,UiW' );
define( 'NONCE_KEY',        ')ugs47dQjmUA)BOhH1}Q`Pf$22~rX&LA].1qg>, 9gXc}-@z~4FKyJXtIZ#,f*k]' );
define( 'AUTH_SALT',        ' ZVzxQ#%fQ CnEu9Lhy[k7m}.][VhS)V#mJ&4G&jK%ieQ}(7/aHv#GBZnL?^9aQ3' );
define( 'SECURE_AUTH_SALT', 'yFMr9_$^}=(4,,<]5+L+{`qPT_x[2x-6l+3SCbnDz]j3/o^,^iNFH/!}bxHSLHqd' );
define( 'LOGGED_IN_SALT',   'fLEvS;uC4)v2TZ*-r,OFvxEN7ltTJR#)Qnd<.8y56:4wwRamLJW,XMGrlqzZ/[kM' );
define( 'NONCE_SALT',       'GDQM3M/x4(/}a)XfSU;:+J*XfF2BI-n#Y-w1%uK2G{a9i}XL-S<x,uQcq1Y{ ad=' );

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

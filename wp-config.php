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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-template' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Jo&mX*bI)A(/DaP*)0HD-uFcj8x|)DwY~A ^E@^vuYV*2KTofcaFC9R[6w6juy2#' );
define( 'SECURE_AUTH_KEY',  'pCl2E(?Qb&|H3r~TZ1];x[{7~wSq]CzPC=t-.xE`brThD1oTn@$;@8m6a_jF&C`%' );
define( 'LOGGED_IN_KEY',    'zy3Kck!9PivprAVhJ^Nr@@4R[#Eg[CmNp3Mh 2+QU= f4dUpfr&$M(2_~PE+FpE:' );
define( 'NONCE_KEY',        'x-L~#mlbvd#8%|/NV.z}St$[0}X_MZ<=Sp:shkN1;oE:c$2Cc-<g/1MGmrcr`DnR' );
define( 'AUTH_SALT',        'rqRt?)xF!g}1Z`RM3F]PE[4E+quL#=E|d{@ zy~nZ42rs.47V;LvZPNQ(=[cDTLI' );
define( 'SECURE_AUTH_SALT', 'pT5Czs8y&&EjFl@~*{oJ]ea%8p-t^G4J__d46QZ]1+24,FB#*Zu~rOWA{_ K$>;Z' );
define( 'LOGGED_IN_SALT',   'v*x-.!T&Jn-dM<^.ysy.]kEAnxg|-6Av}Z,Sp;)/<2./8<KY?:t*CYB6/<$..PL.' );
define( 'NONCE_SALT',       'TtuvsM0%?BkU0]Ig6xI,`sJ|}re0UZhi%]GezD}%S!S+M/95|_&&nKH;)JFY&Jz)' );

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

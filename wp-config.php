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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'G+)R75%ZjNr`2r26Rl#$OgKwsd@R._Ik[XV_dsXG*R*y-1<wk Nx+b1@cs:Q!<9@' );
define( 'SECURE_AUTH_KEY',  '<3MOkOa+kU]*HvE31l6MYCUhyEUHj9i5~JU($FgzH9_T;>v?%vAGwX<6<)mGD%..' );
define( 'LOGGED_IN_KEY',    'zWwcn.k@N[=;SK~(c:oV!/n6>rkVOISR)FvYYoi4n-@H^OZV9<O)G}Y]fZnro@;H' );
define( 'NONCE_KEY',        '>G$]. wSA`x;z^^n1L-e~wVYRlLvmock$Jrc+A&Mb#A4ebF4El|8OTT_,d|~#7]9' );
define( 'AUTH_SALT',        '6;CV#FmpBNoy^-z4*=oI2++[9]A)ry#f_O/VJ1lEbwm|!8aL y-qg;EyqZtNo|-q' );
define( 'SECURE_AUTH_SALT', '{r}*df#K@LHG^qxq0u1&(?t}^:xx%g^9q(:kYh|Pm/X<{2ln_?wzVzM&`{m7}eT9' );
define( 'LOGGED_IN_SALT',   '#J=5R-&S#y]@L|;{oSq~C~(.U$_6osV:(JmR]XP)VD7quq{{zphg#S;gWbV<YPvx' );
define( 'NONCE_SALT',       '|Z@)=Y~[yKbA`L|v7:t((@.Z!t3:Y6bbp?l!}6y!059,|H##-P.T=M`Mne_gL`M/' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

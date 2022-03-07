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
define( 'DB_NAME', 'site_cv_db' );

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
define( 'AUTH_KEY',         'ri.}@$|7m!+Bk}e 9YAhi-on8=siT!NS1:Gu.[:|dVOg|Xt],|pwik:~-#6>YX8-' );
define( 'SECURE_AUTH_KEY',  '9FK/CjA:DUTde^V 8P/ #-1GwRcrI?}o` +/O[CkYOp70yq1)M~ e2UnE[=MqJp+' );
define( 'LOGGED_IN_KEY',    '[DB}?h][0Z#2mtPsS>9Z>HB{Z[/(kUXe;uN]~gmBa)5*+S) lf7XF0ljBl*8;%W?' );
define( 'NONCE_KEY',        'jxOc?!B4JeV8cI>5&8qw0htF*J*keW<xiG{qLz:F}3r;)(2C?$!;E!nTtiSs>**o' );
define( 'AUTH_SALT',        ',YMPf=IqJk  :I).vS8{rqWbk_2/ppXG;]su><*,#lE8#Q?s1~ /ni$;A1N6Y$U^' );
define( 'SECURE_AUTH_SALT', '6`$XN~)j.._;7I r5~Z==vm}2QNWMEQ)u>XYP$s-R=:pPoU:%8]=I]?TUx,yM.^T' );
define( 'LOGGED_IN_SALT',   'a^OOB0;q2(S:F<O{55!k5<T1nR%-#E{qE~CB7W$4a4Ty*rcRFTdx.7)@recd;@8D' );
define( 'NONCE_SALT',       'G0{P5vehdg6ms^$lSwA:kiUO x%1c=7)XbF^{6%/r=:K#%u9$0X4{@h1=vI63c7C' );

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

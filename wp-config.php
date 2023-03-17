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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_theme' );

/** Database username */
define( 'DB_USER', 'wp_theme' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Az_Gxr,3hZVWMx*+?=i. 3-BYOJC(L!BJqwZ!zv35X>lWw_e.q4$:-bedCybk-dc' );
define( 'SECURE_AUTH_KEY',   '0-#E%*fr,&,/sqoM|*b]3XQcBuFq$aG%ANx,.7^<d_uq9.sJYhMh>APzY*kyT lC' );
define( 'LOGGED_IN_KEY',     '%$PMXn~#I[i,$@b #>?I.TX_8bwrCLB]_1~FwE(Y[LC7Ool3F!4*Po9=!Yo>qL:Y' );
define( 'NONCE_KEY',         '860=M,s{b;7BmBq+J8+;[QR_F]jY-Wb[{m.1<B}^sP+w#:uNYD5WW9lK%-|#YpT,' );
define( 'AUTH_SALT',         '&(u|T a>sY62r0~Ms*OnezSc) FmAdY4`P$yHV,}^{vwtQ7H~8[.(8+{[j}EdBaW' );
define( 'SECURE_AUTH_SALT',  'CVl/9J2emB=4jO/eHKzI!2y4CQP-~O<#V&%oDy<*a&4TDeD@R*-,Og$[}yULx_WF' );
define( 'LOGGED_IN_SALT',    'oF<pD /rZ,.17zsOjo)/s|cH5}JMfycmjI[?5k!?=1.];:8*hx[QXasXW)j%0vZ!' );
define( 'NONCE_SALT',        '1>IZ,vktD=gzTZTc)D1G}NS}|{wQV0*(XwZqP]n]U:?Z8pDi^>TuhFEq#3CQ7z;~' );
define( 'WP_CACHE_KEY_SALT', '9rW?YHcbqBMl2=B&;+}JABwM2Ua]7Q=-NB?I/uphtg(VCF!N%~`5DvSFVuagY7Q3' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

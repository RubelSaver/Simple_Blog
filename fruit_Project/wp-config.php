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
define( 'DB_NAME', 'fruit' );

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
define( 'AUTH_KEY',         'r,pE+$lTI2XdMW($nU,+[fKvCQX@t{K.PZMaa+Jb@57@|sche5nNx5oFq_puOpHL' );
define( 'SECURE_AUTH_KEY',  'vz!O&:bLyzwI{zM$](.fT=.G6=,B[dToT=4lrX3~r3Yj}1a7:$bg~3`pTx[r,5)!' );
define( 'LOGGED_IN_KEY',    ')Yhi,8$pTX]qyit`D!;|oU>Rf%H3XJ01=qnfK@!X0W}k!z%k6~b8UKeiq(,c1bnA' );
define( 'NONCE_KEY',        'MfD :[9q?O`UK,LBZ_6Gk>zQlILBC{2I#@k-w~{=J-},#q40Y?.2A=*yo=;ZS,j{' );
define( 'AUTH_SALT',        'pJ*lIY{r?/#pV%r4Vk0S!r m{t^>)wAWS6X$>sy4WAp__s@=4>8_jF4:=-y;*MR~' );
define( 'SECURE_AUTH_SALT', 'IKm8sO#BS;5BVOD}A=G9CBmGlFVCWrN<Is-VdVlB0D&-7 2e:s[fOT&F<oJ_t%G~' );
define( 'LOGGED_IN_SALT',   '8?<IiHEvbV6}XKhq-_e*z%iZcVa!P{1K>Sd8vU=2VI>jzBTGoLWaSboFUgV4$9Pk' );
define( 'NONCE_SALT',       'Y4~/;/Df3Onl,Ddj+2w;3Hbp9C*luaLdUuC2pjbpzFBJ^!Pb;F#>4-vC.]K!NMBG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Fruit_';

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

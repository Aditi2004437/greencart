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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'RK5:,)uZyc12DxCkQ9}cQ9-MngJ|S(*MulK2kIq^RfAiy0eEzzsu`a=BIlv#&f65' );
define( 'SECURE_AUTH_KEY',   'K%;8Dx0`lH897Sp/xrFT6EDfJ6f!!iM/:X;uLlt3DR0|w{p AWeB&-u|C0>25u v' );
define( 'LOGGED_IN_KEY',     ':zMB$mmq)(b9kG8CZ>9OLxm&dRbAZ%xRcb<3P&`-?GqTXW |U6R< Q_gNR5w~}lu' );
define( 'NONCE_KEY',         ':(eN0A5*k3dL10IaanPQAr|ed?p,z-%p_mjeGz5<YH]?u:T,u:(JH&QQsV=-5!y}' );
define( 'AUTH_SALT',         'Ci%*Q[Ez8;hqb?JD+FyFbL}%p07#p67yf;&)<N_mNCDsGc;^b7!8_y~Eu2!u{$?C' );
define( 'SECURE_AUTH_SALT',  'Z)(s1>YDA>w=sY*nP?>]VgD)p*rQI/QqUNZY?&th*}h]IJJm)S#Jj#o&mD.fZh@K' );
define( 'LOGGED_IN_SALT',    'q#.r+L<I!VzBGH*^u}SbP|xXF41S/d?PG0}M#X~ !f0QogU#VdSe}7B6e{CL$-h`' );
define( 'NONCE_SALT',        '!(>xlL&mY?b_8g^ K%.0Q-w6]z+cF6O]>//$Om3HfK99V/l?^eU#%)0u}-cmatSU' );
define( 'WP_CACHE_KEY_SALT', 'Yb9&a?B /sYE@0`&!{H_FhmR63a oAi?6QjzXi} [Hf/7Y@;o33J17=I(4U,/!6c' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

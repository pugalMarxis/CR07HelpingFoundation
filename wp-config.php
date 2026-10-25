<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ngo' );

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
define( 'AUTH_KEY',         'vg&?Cm:a&EOge~*W(TSNTxW;dI*d9ZL^TljNj!>IpZ{mC)/d0|`xmMC86nKR7z(t' );
define( 'SECURE_AUTH_KEY',  'rrZ<ndEiDR*/=;~Q+j:P`U/v[b-`imZrXro66V~+HPR;{1Yu74@thc&i:*DBsP~o' );
define( 'LOGGED_IN_KEY',    'sm[8B$HF,vkH$j*:LtGhS{0GP8?.hLuAjyy*f)MT+WyDM!_}x[@q:-Z##1m|9EzM' );
define( 'NONCE_KEY',        'y[@1PMYHwA`UXKq,8WQ:>,a)8|Q&bX>E ;!C{L3Ms?f;b{ jW7ugj0.K;OIGV/ =' );
define( 'AUTH_SALT',        'O*3wk,m~`g)XqZ:F}XGYyd5ts3,e 9Vmu=):!1K)IFJn!ZE;,HUv{aT:SUNRz&=i' );
define( 'SECURE_AUTH_SALT', '}a,{SwMUs)F9BD0C~l^l<*T[/mNl(w7Z>xEG/C5bniDk%4@ix[h.Q3O;}jyXby}J' );
define( 'LOGGED_IN_SALT',   'yx}Mlj Uq6d]^=9h#v.[<e$*5Rpy~cD&Bge_L]EV$^Us:yHawV{Efahq8bOa1wPn' );
define( 'NONCE_SALT',       ' D}%5X%.D(_1:NDAwve934Iih.|q%S7W6#pBb(o+#(6[rzW|C{VQa29G@O,&0ZsS' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

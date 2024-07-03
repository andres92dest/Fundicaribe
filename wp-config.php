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
define( 'DB_NAME', 'comercio' );

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
define( 'AUTH_KEY',         'ej?T!c~&kdaPCE-s2k?uSZmV}o=fb!!Yt>L#|}+2x})a!qm|=Pv?,@~NM33sfxkR' );
define( 'SECURE_AUTH_KEY',  ';`]|O83fw3JHjB+yib2{B j)t^yVZ>E<<^mO@G#H]<J|:,-fy@;9,+M~!PEM|e$M' );
define( 'LOGGED_IN_KEY',    'Ui:A^ /Ys|Ey0g[X|qx@0joZ1=F)|z|y?Pra``2y+#}Ba tSbZ4cra:zU!E0r(2+' );
define( 'NONCE_KEY',        'U6QSK_V5MB,vBrvNr>g#9<lZ6!Z7m3.&fp|5J{Ei!Jb9&&E*jhxSy9Ee)t^.auvc' );
define( 'AUTH_SALT',        'Q_(<i=BO5GWO~-o01X<kmk^%gN|RUs0DZ+*,gZ0LD4;e1dnTxk`6L``>BBh7LZ[0' );
define( 'SECURE_AUTH_SALT', '$ Kci.XF;rjPSykgX0J1C^vpB9[Sl~0Vvi!pV]H{A[O^{WN{4)6.4U=K?GkL#T7?' );
define( 'LOGGED_IN_SALT',   '[zMfG_!q;%EmOD{h&`ZiF-NU(F+:`lK[zS@l/d]8Y~&%As=IE:O]b<KZ<(*hl}S~' );
define( 'NONCE_SALT',       'IYH|DL~iC%x9Wd> u@ZK<DatG~:EK&E/gQrw;b<]8[x#B(EE(.;);<xLOdux;Ada' );

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

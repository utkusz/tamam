<?php
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yI0.L<F$&r7Wq~y`0n+P!ZZ8Qg2&2s%5KZG@=Lv530:v)D&`t-mE8X9.7VRZ#Kpb' );
define( 'SECURE_AUTH_KEY',  'C.Cx6.D-[R+R|)p*)>VU&A7Dm]@Sd)j#x|#tK#,/R9YvVv~()%jClfyTu.YE2;U~' );
define( 'LOGGED_IN_KEY',    'ly74*ebJIBMyx6^1@ow^f7{?6|KZVX#L4.g,O.4*2H0H3wfn&g&l#eNKP@Sa3Cv=' );
define( 'NONCE_KEY',        '- F.h#vp@B@re_9q^#eJj%KiU;`6|QImF/U9pfDzj4|#Y{)SuWaNOg%NOu^Tro<~' );
define( 'AUTH_SALT',        'C}re : 7-w^kX=O=S_uP,?}bs@7z{JXmR@]kk?pWhB3,U!d]lk_<LZJT(S7%^U<v' );
define( 'SECURE_AUTH_SALT', '6mq(3i?,d9u~vo}D[17Ij3z`!<*XLDSCc.@r.g(?p+r y<k[XY -GLENk8E5qefj' );
define( 'LOGGED_IN_SALT',   'ZZ)qv]1]M_`tkm2EU#d3p>GjhLX&UJN/tz? $@wm]I0ug&:35?:~:Ozx]N1nlKr$' );
define( 'NONCE_SALT',       'Swr*IZly4KMXe!U/XVsgq@O,.)#6>2n5[fV&D5[5ZE+soSBWdO6lA&m$(4o0Q+EE' );

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

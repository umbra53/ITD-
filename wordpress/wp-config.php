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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         ',mY2c]ty~9.xz@5x[gVD`a?_UkE/CA{^&:Fi$LKs<jquux,{|(.nB0bwm?]e !d^' );
define( 'SECURE_AUTH_KEY',  'W>X5Zw1p ?TQBe|xlo9ZKW:BiB:Jh+0ku=9@LU(h(GNQoViMx7t!#8A#=0b{8adA' );
define( 'LOGGED_IN_KEY',    '[N]3QK y;+ngHq.p(K5z->lP.,/<cw-d0}m;+Y5ELjHuO._caMMn3-6r|u3^Rs4k' );
define( 'NONCE_KEY',        ';rwN=3#u3,X.k_cYyAw:e-Qy#HOFONwMUj3%:Zy+L3vB4j%2,[.t/UAUT+Y]cst]' );
define( 'AUTH_SALT',        'Z@pvyMC)8n5GhqrqA9gq^G3MBFr/r!n!lVaoycQlsmk):^8J,H<T*mWj-TeL6|,_' );
define( 'SECURE_AUTH_SALT', 'F$=nDtm^>Wt$)PPY?$ `_>IjoZ&tKMBCpwhYl$JYOQ2RrE_{qhX~c~mJ Ag.Klqw' );
define( 'LOGGED_IN_SALT',   'ej2t6Str*H;3I4YS}V~86N|d8w8H&c$:fHf,Ezd6[8JIz{p}vs}n!(P}Jh<Upr19' );
define( 'NONCE_SALT',       'Z*)$k`]e63TXL?xRxJOC}xjS7[1C|p`HT=vol;7bfO.3SG_*NC-gOuk?:_kPDn i' );

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

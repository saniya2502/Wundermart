<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'wundermart_db' );

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
define( 'AUTH_KEY',         ' C)Xl|[V(4~1aS2_yp5p%ch]f0vjm$,msJvLT f2^{ X,iK,vn)`btkSyi%d/#R~' );
define( 'SECURE_AUTH_KEY',  'r<O&`O9cC+ENKA1`Tto.bLFE.23]m[[?W:t0u,I6$$z;RXzg+-.9s3J|D.`n&[;j' );
define( 'LOGGED_IN_KEY',    '3xr1tn9A,p;qY{(TcY4Q><tN/%*>utb+(O./(Lyo+/cK+5h}c#xG6>;Js<|aI]L_' );
define( 'NONCE_KEY',        ']uh<FmdCUd0>GF-8m9v3-:Xpja*L.8Dyg2Yx{u-)$u9aAD4ObS&z0;8a$8{|C+,7' );
define( 'AUTH_SALT',        '!:P/R(,&sYt-R)HPD^cxY m`q}{i<Vfsm]CpuW,~v=jh1Cp @a2(sKQ6AqXq=5:]' );
define( 'SECURE_AUTH_SALT', '66,6Pk=d@Lkd&;h4)b-@so7x[X8p)MA )rj85A~4`JGv]kdXkOW<Din^S_JaR)oR' );
define( 'LOGGED_IN_SALT',   'a$2T9J!m+6/;7Yly:u(J|M@?^qN]{)(iQ<zS7GT9>+z}u_$n<&hB6mF0!j!`~Gt+' );
define( 'NONCE_SALT',       '.4[##sGFnk:&_=.kzE6y,b<(p$Yw9Q!AJrS e+<]KnsOw~%%Ujm69$.^ooil%X13' );

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

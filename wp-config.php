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
define( 'DB_NAME', 'shopeengin' );

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
define( 'AUTH_KEY',          '2n^3r=[2Y)v{?&*`eZVGFF*!V90*46ZirnThHUXGC4)@llI5dL^=PRmmAysVj|>q' );
define( 'SECURE_AUTH_KEY',   'OZ|Rg>/oRyC>fE@uSjM*FL,zX>7^Z4NFGh6hcQ<z_.vztm2TF.-h#n6kh2|0B%di' );
define( 'LOGGED_IN_KEY',     'kBKRAO]ss7rE|w;;=x;N</xzTXXf1>!t^]7R(2dtXh!|Dr0#KqjQ?uP2x:D%Iakc' );
define( 'NONCE_KEY',         'e0{qRU}LbjKy|d!n%9#[UYKkcHF^c4kFOfgx91/EWkTr 69ldvI8#U?`$w~.LwU4' );
define( 'AUTH_SALT',         '5v$Th)Za#VM;64!3`VHm<A? |PQyp?49Q_J/EYWt&5o?Z};%:$B3TP8<6&r;d~W5' );
define( 'SECURE_AUTH_SALT',  'b7+QsS&mch.hSEm`OjRmbvHAAqq17x&5f:Y7Dr-h4=O#xr!)C29lJ+)B.aOw.@*`' );
define( 'LOGGED_IN_SALT',    'Xt5bQ(F/st_k9Kl#RShPDR>dr)tK(1,eX%CL@-1!*cL9C3RL9-^KC$s~8#XAIT^ ' );
define( 'NONCE_SALT',        'cMs?iu3*=#>(*Q|{s4v!*Tq`Gq_qjNG<dc|KBC}uWP-npO7Elfre5]|&Oy`D=uq^' );
define( 'WP_CACHE_KEY_SALT', 'E7 wXs0&b0/UunaPbYpS>]sb+fylnPDkJ@]1[zr9?B)5kX28iX*qpIoln=gS|V3D' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'spn_';


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

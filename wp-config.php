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
define( 'DB_NAME', 'wpsajt' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wp_sajt' );

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
define( 'AUTH_KEY',         'i^!k!LDENFq_S%SSe/RGMgmsl+YBLVCr4BKnof.$k^Nw?m6(ZTOHa$J8c7G)B~,2' );
define( 'SECURE_AUTH_KEY',  'H<0GN+y~u?rA:ZS?r(7bH+l]aYeeV#UU<q9!`Gs?a%HAK;A4qi ;y7id>%$Ms<HA' );
define( 'LOGGED_IN_KEY',    'AemvWg4@;SX^b^KInE3Np[}w>xG+]7/Stb;Z4TE,wc*?]D@8Xtw8MOAUQ&Swj~v&' );
define( 'NONCE_KEY',        'KgN &6LJZBj[&B:UCCtZvXn4(nNx* l0q<,eU1SyLGh/Hw,$QH/0-8UjqT%?gtn@' );
define( 'AUTH_SALT',        '@k  wgVS4Xh}^Im!PGEaq+}v`idTv;l6}Bi9C%)a}^*e0*^A1/BA|{9ASQE`ZQ|-' );
define( 'SECURE_AUTH_SALT', '6@L!`tN&.&56>Y<]%^4GjNz-tVdJ(coe2)G*!YMyFy6b[U: S>Ul<;Ygp;B0$1DN' );
define( 'LOGGED_IN_SALT',   'x@jN+7cX#ETlUD0Wd{aEdpO2|9!QXCWwXWe>7{:SS4wN~[>9?fRGgaX_$4+an]gq' );
define( 'NONCE_SALT',       '~8a[l.VrW|&Mh#M~A:}dl1eI-N j%m_}K&k7.$v#oG.B!7ulaBzAqT9]Sx)~e_z`' );

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

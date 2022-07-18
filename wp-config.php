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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         '=]mJ.&<33rX`3iq%P% &!%9@N1<w(%VRd/Z;p+Bmbay?WyX#)u.4IbIUr8j@}{+5' );
define( 'SECURE_AUTH_KEY',  '&U1IBy0|)&7X?2Z:/ 5O<$|;f^o3W,-]b2r0. U$P9tt+=oyllq~=6tJpnrz)e$z' );
define( 'LOGGED_IN_KEY',    'ZAl;IS5|Z:qgxs0*:%~e^@9UCg5B/>0ep-E}fUe_@bS.hEOJ<* L4-|*y%.;g*x`' );
define( 'NONCE_KEY',        'jyO-kvfJB B{{Xl)@76q9p53IW#[36AN9Z,nNeU];s?bze_LAzJd[13[&Ya^0A)E' );
define( 'AUTH_SALT',        'N0HA{nK2#yh]jhQuj@&D$z1Tr5V/>0xv=)h-G;oDFC7oF2Rmuj9M~YS|xp/Bl)*)' );
define( 'SECURE_AUTH_SALT', '!#:Kp!Q#d=(Qo5jv=ajoFjAl[_mLVRSdJ]/]e5xfcN:JGZF/a&EUym]z%4eOe/IU' );
define( 'LOGGED_IN_SALT',   '9MWKg/^Y)IdA1gsr^ p&u4y{?FjB;z}2uOQ28^Nd=)C!G--6}Cd<;IckHj4J[,G>' );
define( 'NONCE_SALT',       'qG]Dege]53qV^d%5j%ffmE7D>C7en(OthC1zn}4-L^3tZMsraH26+9cA1KvT:=(M' );

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

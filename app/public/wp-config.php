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
define( 'AUTH_KEY',          'SfAO]JXn6YQCxL=`l#oGW;L[ BP/:#MX^I1=c)WSb9siaw3?q~%W$+![fPPm*WR8' );
define( 'SECURE_AUTH_KEY',   'bFpX,)ydTvZbi g+aX!iFz#@g`!R,Si<6)2>0r0@$Z[>d!-%)zL8#S60.uASu~S,' );
define( 'LOGGED_IN_KEY',     ';DEJJoyC&R5zot%oLc,)gopdCe=9h2;N~:&.:9zDe0X*O#H32l*O=4siG3bg_1T=' );
define( 'NONCE_KEY',         'L ?_ysZrRRR[A=kH<$>bqQW?)y<ZOr?#X12e{`,mVxBxI_PG6$ gD?3mr{?]O+6,' );
define( 'AUTH_SALT',         '4M|~-u$I~Q66Aj@#Ez~o/U^!cCaxT| D.]Thm%-OFQIq!hI~+#ke;T|STjPQ>6e;' );
define( 'SECURE_AUTH_SALT',  '<k[O8dYA/:*Mii5~lc0)aw;$FZejdbJb^ cpQL4[H`=9q*9QIw36OyX<*D`pYLvW' );
define( 'LOGGED_IN_SALT',    'rKo2|Gex[LrWM6{:SX;?eL2g<$(I@hLtfv5.A=EUUjz9ZAkMMmS@s4$$rrKBh>6>' );
define( 'NONCE_SALT',        '~[-&-5i=LY9&t>B_L9bhLouBz~]s*)QW|)Rd^IZ44jj`o`9t{zPlrE_OD$i<5u*S' );
define( 'WP_CACHE_KEY_SALT', 'C$Dn[4?.*lcO5w7%K%QD*gQF #Clq^s?n.s4_KoTOh~c8E@<F}]|S^3jJ!Qee^ey' );


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

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
define( 'DB_NAME', 'rajovs_db2022' );

/** Database username */
define( 'DB_USER', 'rajovs_db2022' );

/** Database password */
define( 'DB_PASSWORD', 'OSeDoyy9~Mj6' );

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
define( 'AUTH_KEY',         'sXvue_P2A&idmjL%*dJmmq/Nd,_D6NFn6/[`p1)p:8K43n1RUKBx$)(F3dIUdo)1' );
define( 'SECURE_AUTH_KEY',  'S(1o=</&/(@I>s}](F}GL-7hOS/;Z+cPIF/NOvqqon:.nz4ZjX3Ca7tfH3@}2G-8' );
define( 'LOGGED_IN_KEY',    '!$A:n}{>mFX2f[OluU~NXE&X4;~yP#t4hUD?mrqHiCVzD%6}zkKqU]sy`t)N}s |' );
define( 'NONCE_KEY',        '3^j.JR(b0316Ys0<ml04[qPyJEU$_6%Lf~!$-XJNeUuzu4rw?L{0$lP.* o<$[Mv' );
define( 'AUTH_SALT',        '!(m!9^}.z6iz:$y3{|n`@i<IUcBwb@>nD|+ujXO_PRET-ZE!I;$db0/q5E!E2Qiw' );
define( 'SECURE_AUTH_SALT', 'FhQsH(g{BGn=R_>~vnH@KZTgB@tJ+Htn/JLfOuJr0v&)R_94-) bqP$;^T!ZR]b)' );
define( 'LOGGED_IN_SALT',   '%$CVo$&,$gF;!7l=8G_[@.Am||O21bt?p;ilEc B:,H39sN8ycpwcr(.VtEo+K^M' );
define( 'NONCE_SALT',       '!(|[b)D9zw(Fxpni&|M2W.+:=5;3{}:C,4COp0Bzrsak1<sCUmz^YTOquKH&p8Ji' );

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

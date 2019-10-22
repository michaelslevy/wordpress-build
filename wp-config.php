<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs197644' );

/** MySQL database username */
define( 'DB_USER', 'dbu269873' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hyJ&76^rtjn2d' );

/** MySQL hostname */
define( 'DB_HOST', 'db5000202682.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u_.FW7KC YH`0P>^1WkD#BD).M@DHAqJ=acAg,oDac~tY*9@aY_t|;RpnYG tugP' );
define( 'SECURE_AUTH_KEY',  ' fg:w<<_I>V{?:p2d@Mt;4zObrO1+&IMT[>!S5Y@==zJ=l]H[gC)soaAA{M8bl2[' );
define( 'LOGGED_IN_KEY',    '0RI 5JW$xl;9Q$o TSp%,Z>~^Xk3}WT;a##fzxw%)c1=vp!x{sopt<2ntHEt5$K>' );
define( 'NONCE_KEY',        'JaK)sO]Ca[T_@_6zZ]S*o+@%&V/a_O~2%8V.<{aO18+`Mr@{Q*^Yh7pg0iSspS`E' );
define( 'AUTH_SALT',        'f5U>/_sOd(AI9{o@Xz~.EuIR|RHZD}{Q 2mrlZ636G,IupK9].>>+9fUc2C@K!^B' );
define( 'SECURE_AUTH_SALT', 'f gM_EY.|XvvQ1t,xcJ4Q{-r#l7 =xus>V>X[m)6~Yd-Kj/T,e~[Hv S3BqiG*5K' );
define( 'LOGGED_IN_SALT',   'V+U~23=QE&UPR-`Zt&^v1,F?sCFF7O,%Guha)CJWw$S8|EBFX^f9@tKna?:(5Qu8' );
define( 'NONCE_SALT',       'IKl5JU^D),l:b[yLb]i(S^hRwa%#VyqxMoMYVgkgbwYj12.hZ_CW5U?9(aU2o6[M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rdo_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

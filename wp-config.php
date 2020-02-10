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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ssmaju' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'ZLRB0)%Lo~<S4ePyD_F0`EMYbF/o!C |liYpQbuiFr:fE[eg5aCgOfPGfCVex6?y' );
define( 'SECURE_AUTH_KEY',  'Psq]@-{:.K{nkNh9yh!pC,w0 e%WKmA4Kd_U1%N>LU1x#X5NmcAek[`Y.u!IFdO2' );
define( 'LOGGED_IN_KEY',    'jZzl.VxFW[*`JJRIm9r,6Nz>ej9y%h~A=x BiYZj4.&n3tN4e4 z->Rk195jDx_i' );
define( 'NONCE_KEY',        '5v6sc}z:~ZSr|[`7LkM)7hoAJZdDiz%Y}UDv(YZ6}X;mCy$]r1%uJr8U@FkvbM(E' );
define( 'AUTH_SALT',        'PgQb1R^{B4d_b.bOj7+/#~p1:O>s?Zf>#lX]Y%xG{~kf-zG]Y6T[ch.@3+I0!H>#' );
define( 'SECURE_AUTH_SALT', 'wb^0j>x*kXFn!r/*o&/|7g?)OKqG>Go&?Tw-/|kVp_z+$Y|M!r!#q$BmgB&H%Q<h' );
define( 'LOGGED_IN_SALT',   '?k)M:&<EA[DJ6t:%B|a(wvC@JY$Kc7uOE`+!a6q#C>Q-mK2{T3f<apm(lz4m6~TI' );
define( 'NONCE_SALT',       'pN?:RRy{@hT`:PzPL@LTnw#<-M{LB_Lh-6.Y%uV,g-#G6y=GGz/:tn_/<R&8-rl?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

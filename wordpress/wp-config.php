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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',ALWl)OCo:JMo<c8O;P<SXvz!VJvPEc|ajy!3v{]<W0ZJKo1j%nvYQUfQut4o{Wl' );
define( 'SECURE_AUTH_KEY',  'kEP}7fuKy-^ss$|cjKR|Y/hWr2pi>6HBZ5@g k`-CNlZJ_yFCs75tj<f3saWGiL=' );
define( 'LOGGED_IN_KEY',    'P6#ad#hs&Q+y?:Kh36k9vEG/Ta:F]#E)%Nr6@AL=BZA)q VBA!#wG3lO:%i3|mh~' );
define( 'NONCE_KEY',        ',>6|MO|kyZh^eW1}vhnt$;NgK[dhbE;fZTOxgkyTGsdmy3 |%x,lQO4c,7.%7e[ ' );
define( 'AUTH_SALT',        'f<]]a$J4tg]f#BD~P_Q^8J0S=*52^}G%rVvA(jMZs<J-n{{~$0]yfIr8WoD<)2g$' );
define( 'SECURE_AUTH_SALT', 'o;0o.? .^E&b6)cq,w)nCtElnfJ)A}!0D]{Hr#{1YifWRWoul@ohwjysr9>)E<9r' );
define( 'LOGGED_IN_SALT',   'yQ}99]I0=O7h77L5 HEw(LE9dKi7@b{[zPjiTf6aN)1)T0v_-r@$6(fM_Q@-=vfx' );
define( 'NONCE_SALT',       '`h=>Lb[1^1[cz5UYpffR9@ r(0fx,eVCH3cpBTP%n*ra}u,GSScFOwy!^T5<MK[m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_shop';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

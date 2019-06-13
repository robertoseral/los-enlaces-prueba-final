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
define( 'DB_NAME', 'roberto-seral-pf' );

/** MySQL database username */
define( 'DB_USER', 'roberto-seral-pf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'robertoseral' );

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
define( 'AUTH_KEY',         'egQh0,O,:mUj&%Q.~dVKn|-g55W(l%gGOeK6#fv`]nzBE`3790AZ^IX-f0k3?C7R' );
define( 'SECURE_AUTH_KEY',  'Cg>Z3ZaAc&NEln?I[5^~Aw5Pb7kGOuN+PEd{-^d0tUAMEmwY;8!&qy eNDnR+9yy' );
define( 'LOGGED_IN_KEY',    '`J:+2DRDh14hyp.s@8-D<c_EWM/%gL}~ECVXwD5(D4-];QY&q*7xDKg!USV+5U&,' );
define( 'NONCE_KEY',        'd~|<sEr*B/Hc&ULMVc9.66{2kk3Vv;XaRP&@~#~nMo*(p|5GTE&?#-R&1[iEhxAC' );
define( 'AUTH_SALT',        '%aSYiFAd*,2+|5C 1KGj-RKZ>{MrasnHH^b4:ZvXF.vr3JnSGg_:8/[&l47FUFt0' );
define( 'SECURE_AUTH_SALT', '*E@.e6zPsp6U:YLS,1:2vSw}&{NA[S_k-FaazZIH;XfLaFHGauq+C*MxIBkM1osK' );
define( 'LOGGED_IN_SALT',   'ByTG_u6[J:>0h9!._$]Z5{,[uh8g9WWsP,V6+)rS$Hz.vvk_mD8I}P| Uy0@4}]K' );
define( 'NONCE_SALT',       'lZo9ItwY7N9]6U*/1}XeB;k_hbH%_,[<8RK{B_+{0Lvbrv1Ry`O<v9sn,qLxm&S~' );

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

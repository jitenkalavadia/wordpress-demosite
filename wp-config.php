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
define( 'DB_NAME', 'demosite' );

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
define( 'AUTH_KEY',         'PV;.|b[)4:N~NJ5ea!^!xt-kU8z~DW-W!e[VZ~9hJ109ZkyjIu=;8{!>sEiQ(u$W' );
define( 'SECURE_AUTH_KEY',  'Wa{JlXXr~X^.tk43fv~Gtm7mPpU_P>!CXhtRY=C_;r<u_&(`E1^jv_NJ.@=F.`58' );
define( 'LOGGED_IN_KEY',    'E.[k/|KA@|AZ<sDovDAr+;0E(SU&i6$ys`1a$$D>~Y*/ Nqu4>2x#[e%^Gg-H,BA' );
define( 'NONCE_KEY',        '0rp`p9YWIjqEl[XdQjsuVaoZ4fo5D% h7U$Sqj?]eekl6Dw;fZrq[Tn 0iBdRHjC' );
define( 'AUTH_SALT',        'yFqKnE.^oK*5a,.[jd~71QkhbCMS&uVSh1j+r81s8gR$iA$ouoy[=e$mv$qMMGG8' );
define( 'SECURE_AUTH_SALT', 'H|,!=Ie.F.GKC>d];I>~)W]p]G;kt|,Z:/`W%>d^.aA6siH5cQpH0LG_q<) =D>h' );
define( 'LOGGED_IN_SALT',   '6dX0e4MM:~q9#G on%WY5sE`cC>V^#:RdDu42Iq>(L9YNt7g~?J*%eA#mWV>QFC9' );
define( 'NONCE_SALT',       'Nx@hMM!NT3=.8[%;8g Q;)Kl2aVINu6p!suwR0sARDXL3IL>COpp9Zl`min3&4&h' );

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

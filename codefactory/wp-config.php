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
define( 'DB_NAME', 'wp_codefactory' );

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
define( 'AUTH_KEY',         'yL{G>}>B@D6evT.f&LW/c<tr6SPD-dkA2-T)Wve<?eOaPG=VM}!2qhB^5)-lC(!^' );
define( 'SECURE_AUTH_KEY',  'Z[Yv30m[hv0M`p c_ZkH+O!-Jb),ZI>q{b%&m~~V=V5,g_.IlhJyJ`q:R0IHVAZ1' );
define( 'LOGGED_IN_KEY',    '*,I[Dh4j{/17LO%dR, 6Iq.ceBiS=5U/w!$c_9XFmo5JQ^wS<y(|l{_5Ms?#_[=U' );
define( 'NONCE_KEY',        '&3}5i[8r/SM7+sQ)t_`n^m8xn0L[-YrWB:_.PUjEZs`b{0Z6!1nsvld%y~n|;1Vh' );
define( 'AUTH_SALT',        '|emmORBfNPf!=YdWtqjfPI|K9m=F*.Zi?-k`dFG?80 o #:e<+{(9uAO!P/XN?>)' );
define( 'SECURE_AUTH_SALT', '64Q0NKF[Wu1GV.C48z70@#Z{WYOX<S12k^xtvH0_ODMW8RR6<?O*0RD_`Ug+S6y;' );
define( 'LOGGED_IN_SALT',   ' [uXD+(RKC|zVXr50=FOe=!.|vh&4Kuc]cep[29/-If:_t!kzo6H/5L7JwhY)dU^' );
define( 'NONCE_SALT',       'MSQ phQW*tak]!Zh4xA9_i#W$k.3(q*>3OPw#L[n.636bQ#h]n&fs?H1,P@3]rBe' );

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

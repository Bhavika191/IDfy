<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'idfy' );

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
define( 'AUTH_KEY',         'W6s */| Q8+GYDgz4mv`jKl$Drz:VXB6p|fHcDEf{Qb7Z0qu*$,5aV0[M{&0?w1<' );
define( 'SECURE_AUTH_KEY',  'Cy,HwD(i_O5d3[u^66Zy5pKaCvOk^m1P8*qG$qudgF=p7rR&=K;48Lx}xRLAsb -' );
define( 'LOGGED_IN_KEY',    'q&lAM1!dM.cpW*RhM04ahd QXO?~]I?*V@&U[}R;~e$jT>.$Rbv <JsZs8D95XX8' );
define( 'NONCE_KEY',        '{T|_z>&85wrh!M1Rk9R5WwT9Y~]!Xd)G]@yH>+RsXda3,Ja;Zt,1-.9>e,D6Cyqp' );
define( 'AUTH_SALT',        '5zd `yL&*BAu~ NO:4.1(#WZIfE0wH$pPS~{RT+E2Q(6*}88pf2K21 d*N]kJ6Ep' );
define( 'SECURE_AUTH_SALT', 'q7J|]iDy.HSQ_0.3+Gr]vsm,r(n m0?-D_|/c+v[Oi{Y]=a|raa-cXS5QaL$v(-w' );
define( 'LOGGED_IN_SALT',   's0_=x67}-Q|K3:PH7utm6y%yp>OXp&_1WsI5lc.<QAKVN>j 8#`$+sxlbP<8KM6=' );
define( 'NONCE_SALT',       ',3}^Fr&o|gLI?Y,K<ltX=19l[HzVS-.RJP%zxHu#[IGiS<iq!y-UaY^ yIcG]qn/' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

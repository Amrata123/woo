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
define( 'DB_NAME', 'woo' );

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
define( 'AUTH_KEY',         'WffKa}Y2?mo0aDGBWUoqPZ QxuOtlJc+vTLwG=T[LaVlFa8WdYJtS70L-M?$)Nu3' );
define( 'SECURE_AUTH_KEY',  'SH)_y/RA5[h`:Nch]n8L+j&*ue8F`YHdeuk>JL%2q^Rv40I4i>K^XV);X;7)TXQQ' );
define( 'LOGGED_IN_KEY',    'lM5uQLST=IM(xSu%|RhGmn`WPD4djq3-INV/DvVh;HL(2$240%1yt{8)4lKh`3mH' );
define( 'NONCE_KEY',        '46U={ZKQbeHHz4;uR{W%s}SJ-bpYFa2xX,ry$k5kfBLK%m:5Z9b|%ctiVrK;f{@1' );
define( 'AUTH_SALT',        '^ZUlcs2SQ8C&W1:WX:]{j}@Zv*Nbo%Y0Vc)y1F/#w+Gs31RiR0aiYv1Q[5j[@KV;' );
define( 'SECURE_AUTH_SALT', 'gj,)@+]T3Q@sN=c-1sk?zc&9fBbi)Z{T3QsY_5/yat-QQ=~oK5s ^oU*bg=4mc3i' );
define( 'LOGGED_IN_SALT',   '9z+0=dvH%9j/JzZ];LPkWJNc$mGeheEt~jktkgw|/i~hQ*q0Fqo^VIaV& g5[|9p' );
define( 'NONCE_SALT',       'qF_2cdX;{Po~~:kM8UQNV,f(Dk|i?C1t&$5$mM)tWJ4@N1fvCy!A5|_.`1Jdv&Rl' );

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
define('WP_MEMORY_LIMIT','200M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}


@ini_set( 'upload_max_size' , '20M' ); @ini_set( 'post_max_size', '13M'); @ini_set( 'memory_limit', '15M' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

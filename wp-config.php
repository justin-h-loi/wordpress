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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'jLaJ>n>D$iPqmG-4O`}n1H(-9EJeQGK(?)Q71EL$vM2TCPIOrpQS@dAT]5Y}Rob3' );
define( 'SECURE_AUTH_KEY',  'Gd( zL01kPN#igy8qLz~eHd=7+m]dcuy?<iDO23/<x/a;Gok![>Ow;kVy=17oT@h' );
define( 'LOGGED_IN_KEY',    'u6n;[zMX`WTnV$a{qr,15=>45&Z9mlc`!m]*18Tl2^{1_2[t&Xn)je-z,sjrkpmU' );
define( 'NONCE_KEY',        '3@{vv>S,5wTp)^l-@o/j&?5uRXkUx$wzEcG3>eUwX<&M/*f0}<d>ghy)v4fR5ZZu' );
define( 'AUTH_SALT',        'Zl;|Y*{)8v/ 6xhK2|AV#nm@oy2]U; ?}:[J s._,4aq6Ii9^13um_#~KplM8[*?' );
define( 'SECURE_AUTH_SALT', 'TEsCY<ROW hp|cjU_kl3f.%*{v?K}Od`N+R[bAn0z<}>&R(L659Th33N-Da/r/b>' );
define( 'LOGGED_IN_SALT',   'EP@x/JuzF8sP>3;Zh]n||?oO;pl:5)L^M//1>#^G7cRxO@g,W]X4*cdA)C# p|>0' );
define( 'NONCE_SALT',       'lF$9gcGkx0Po,|s@w;o1U<XUrn^s..Oa{Z6-Md%bXRke<^Ege?>yL4|bA,+AqUDB' );

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

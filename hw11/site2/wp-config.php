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
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'vf%tv,Ik099YC2U7d*A`&mJa78Y~(l (1,^<:4[YF0N_]N7mEY/tn?;P 0N.^m=j' );
define( 'SECURE_AUTH_KEY',  '/C=:fguaCwcSO8ASKoY<2-K+ng3Z(m^DlX S$kLR~nPh<a$dCP;`Oa96JE~LIA+Z' );
define( 'LOGGED_IN_KEY',    '<QutV$$*jZJpcYzy0Ba=rr{;t5Koreh=,;qO4obF~.W7plHXly8pr]rNYj0OZ,of' );
define( 'NONCE_KEY',        'F:r{1}QYK9sho@,Rk+DB`Mn+&`T}^f9!D>Vw.wEzH,7~;hziO5I.rae@_E[>^Rk}' );
define( 'AUTH_SALT',        'd|=utki JM%;S/WR_j7TZ2]8*~g`i3jSpJvlkbO&Le_u+@s@qeQOPb~P:QmhI,u~' );
define( 'SECURE_AUTH_SALT', '#[2 EOd+;do<Sa:&1+W;JU,eNFM7)${.N%^iOQns:OiKc{pKfybQr@]1[b-wcFE?' );
define( 'LOGGED_IN_SALT',   '?*5CZ2N5SsGog:3v+]eXh0Y=6l~{SvL?cFM|39/{+/lu89$YEhU8i%twr7TB?lrs' );
define( 'NONCE_SALT',       'y 8ji92wnm[lO6Fb-3 i-JNHtFa2l^E,3+B3%GL9R?qMLAkuy)M/~o>.>y00=6`a' );

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

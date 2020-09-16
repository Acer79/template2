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
define( 'DB_NAME', 'template2' );

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
define( 'AUTH_KEY',         'R WpkQNDCa)!*UWX(K4=@3?>!_l8Y-Q*>;uz^.w6Hmn[#?}&E$NL&o5hD !8i]@z' );
define( 'SECURE_AUTH_KEY',  'yQA3^bLbYn(Hxp4o5%cxJ;s[,BIy7O+WJJeJ<*vBG@HGD*v$I?l=Q-*5Th-bqN8v' );
define( 'LOGGED_IN_KEY',    'wwE|lsjl-q9cOE6D7@F;6CPRSrs=i>@5/*~p0`8KA-RqNQ#XAWn:LJT`7(-,}yIv' );
define( 'NONCE_KEY',        ']ock1DleRg9<VGzs!vf>!8+I3>+cEyE5xZ5dD rRGPCd<};runGo6}F?_b9FtC#J' );
define( 'AUTH_SALT',        '!M1&N OksdDZq7UyCow;h?31=F:D*)NYk&ES}1if1qDCug1c1EBs1<Zi=CJa#y*8' );
define( 'SECURE_AUTH_SALT', 'X|]TAVs!I0S?^rNHYP@jW|+?IfL+ja7f.g}c4jMq$Met`9*1A4DUQm6%ZvtS,O[p' );
define( 'LOGGED_IN_SALT',   '>[K?jYH.y%J{?Sg{ia.~h>Y@4gg[W=N+K.S0Qmo)r)@7)]*@=Xmg41bJyn(uiI_w' );
define( 'NONCE_SALT',       ',UueGsdrT$g)?GO<cA~Yd);n,.UEi!5[y{9l@+|~({sL#D~rW}1z30eiZy+9d-)X' );

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

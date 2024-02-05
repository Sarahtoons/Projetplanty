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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'so9V{/5Y@ 3XdDHu;@AgHG3u@x7a8^mN|ArPKp/z[3l3>`I!ox<2`qQs)u8#EXin' );
define( 'SECURE_AUTH_KEY',   '*6`_g-g)5C4v!CB&nXRzDp@7*I_bv+H}c&5&#LF|LbdfXkWy3tY>WF;5k-c(X$g@' );
define( 'LOGGED_IN_KEY',     'AM>~Em|Q3H%Ejf;1@0R3wCGIJ|3.@]txB12-/b_,!J^@M?Y/Zdb?-/pn_FX=l,{p' );
define( 'NONCE_KEY',         'pZ@2[Z{HLOZRfi_rBZ*UZ4_by)PT|Qkv`6ed-aFdKSIGq@2? MFXc&c@-6HG/JF`' );
define( 'AUTH_SALT',         '{^|9Yoq`;_>n4#(#(a1k4p6CQiX1RZbi!6d f8ca*C!vliQP^ciFs3mjdV4VL72l' );
define( 'SECURE_AUTH_SALT',  'WQ(f~sGpG_vFqaz/sxy4}WL9Bql? Eb*ykKQLnweY}&+ >;HPXMIQUHf2DAe1Jb&' );
define( 'LOGGED_IN_SALT',    '^mX}r;5p1*u`0z}wpMWIzJKxU7g,K]M/ hZ{Oqs6 >a5iDMRt[+tNw1O &{^gKDt' );
define( 'NONCE_SALT',        '82a&J>aqk>_Nt*e|nU0JFrMi)W9dJ+6k_r ,NHXbRkIdolMyqIMa oJLp/&6K*Fn' );
define( 'WP_CACHE_KEY_SALT', '1&%jDte+f?V1 =)C(;j-@sBGGMpB_VqI#Q|>B?eA9.cx~J<hd#*`J5eR:F$o90$S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

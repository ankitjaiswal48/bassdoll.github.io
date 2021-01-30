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
define( 'DB_NAME', 'dolls' );

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
define( 'AUTH_KEY',         '7%=_FpiWw.KOF9aclK+lQV|$i03p7MB[K7u*#<fXnx&<t!T@Va.XQf&/tscMQA4s' );
define( 'SECURE_AUTH_KEY',  '~OJrY*oJ?e.xQrt L$x;NjE0dc:;T#yc)G$2FzxxjG4CFQ2UQrP[]ko}U-.IF0Qx' );
define( 'LOGGED_IN_KEY',    '~O>|QHd+C_5?U=K,1JS?$XS(]}[n%iujuD1<|{,bq,`qt?qp8#~as|>c5?}w$<]+' );
define( 'NONCE_KEY',        '^;^jdd//?gN5ih[o,a!9 7#oNs,#!?QCj!Gi:s+/.>JV];3/g}/{S{dnt??T2%T*' );
define( 'AUTH_SALT',        'moNus!Rnh#0HE FSe;JfB$Cn.EEAdTrFWIFxjXrrg,NK:N|;_%Y}Y*$T;g*B0 [H' );
define( 'SECURE_AUTH_SALT', 'G]M^pSoD+ef?T[*ts&3-X)hh?(nENvwZP{7| 6LzJ|&Pf?:^?|e7sMt2X`)~/X5J' );
define( 'LOGGED_IN_SALT',   'sMJ^M0<U[XHmr=tjFD7L+sAdqzbIPo|)1``&7%rYW^;[uqqrqvw)eI Y2k6)3T[x' );
define( 'NONCE_SALT',       '[vv};H<$^43U},qm>WP#4w-YS.+<*`|IU-NYN=Vvl-Q+BwB+P>C}IbfrF>,Moa}v' );

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

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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '& =kerW8-Vi-N3:bNTYsb{Q 9bqQjQg?1DHG9h{f)jo4^[@tdVb,4+IH(+z-Q*t4' );
define( 'SECURE_AUTH_KEY',  '($ls1 #)s|p0`b9x9IXHt+%He>JB!?Dybs.SQuS@Wi3p<)~1F[d~Ap-)A/N_#IET' );
define( 'LOGGED_IN_KEY',    '&4?Za>zCVFkT,unDPgcV=<W#kyqsoHe.zW$n/y/jEt:B8*WpOzkArFywlHTO_<{c' );
define( 'NONCE_KEY',        '3uetXcp(,zKU~Wt!81]cBdN>zg6zhHg6)z=YrQ)Vm|p@m=VyX!/vA3QXwYb@MUhs' );
define( 'AUTH_SALT',        'taK>MMt8`MM<%rzU<cV}dS>Ffp7])<Y[O#{Z7iI?Yzs9zgm.}MVtqJKG~+[i6U@[' );
define( 'SECURE_AUTH_SALT', '#JeK Cf&0T^g-S(fd )S`TUZ2[UaPRSVF1O=g9a 7CB]B+!L1O,@Y,CIKqc*r>$S' );
define( 'LOGGED_IN_SALT',   ']Q,*x2o9Q^9aT-kq83NVg1QIe@NTxT|9L$cy5q!MU]jP#3(.H9W/kU9K91*0eH7x' );
define( 'NONCE_SALT',       '9Nl`-V~=iaojnl;X=Syv+}_;(T:iIR>_u::9t9VVU+~CS>F74T`ee]Jh=ppZ-Si]' );

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

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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'reda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'reda' );

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
define( 'AUTH_KEY',         'a;1l6j%@!1u~LzZJyi,JYH/VR{SN-};c_SKhFYKRMmm[*gv*Lpo$H!;wK>C@lpUm' );
define( 'SECURE_AUTH_KEY',  'NQpCC*4;L~S7fByw]Mb@CdmmxY)S[MbG5O$y. RO+n8C:2lDh#-i%E70,--jd~L^' );
define( 'LOGGED_IN_KEY',    ':/b_RK!I~JS.j=OD|L/({WHD[JFHo@LfqAQej-&Mk?whVWc2@&2IQSkb=#m.-|$3' );
define( 'NONCE_KEY',        '6rHgHYH.|4aa*i}g@|BN0w{UJ|w5RRI+PPzO(f=|/F^|n]u/iZ~(tE{kznA&ii.E' );
define( 'AUTH_SALT',        '_!abI< DRH_~JLm1oGOwqc(~S<xnFDWB#T!kKZwuNG>v YbJ187=JV_:XjSefzQ1' );
define( 'SECURE_AUTH_SALT', '}C/Sy]TmT4Gz?o4gXZp0*GXi:`%5GhP]62g_6$y42NG.fU(Z$k3FL0hW3Er`?=PX' );
define( 'LOGGED_IN_SALT',   'Nsm&:;wJ9(@{y*|zt/j~m);A6;;?o;7XI.!}i/o8C^}Zk&&a|i;fE{wN}x:i;XFy' );
define( 'NONCE_SALT',       'vz_uIrmG4gJz&0K].w;ZO)5%ufx4V. Mc|I;}C-&7eraxsdLHl|vzJxY&)e*t.^<' );

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

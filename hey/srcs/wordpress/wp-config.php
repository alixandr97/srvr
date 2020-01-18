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
define( 'AUTH_KEY',         'sV$BZpq!4F{LN;HBP0<xetS%Vp/u9x}GnX}FGu1Z#KIDfS`~Q*t_m sI?*lTm>8l' );
define( 'SECURE_AUTH_KEY',  'JFfZemg]T[2$&J]Zq__O8q6cz AGa!A@#%HGP9i_!_ixr>f5-uNE[]``pg/Jsh`q' );
define( 'LOGGED_IN_KEY',    '6,udf#=xRJ+/4V.gP1zfZ0-sNJR]_DsxxwG;_Ig(`+%@{DeWVI/`c~N<cn@56_r`' );
define( 'NONCE_KEY',        '8pa wPZw76n=BCAk_HaK^(|8q9&Y+op02v2JAU4BhrJI0qb@<gm.l@|GEU1J}mJj' );
define( 'AUTH_SALT',        'mpz<u>~+4Xw @7w|yNH7A`GnE9H(Cf<@pG1;3t5*Qi`1Y5?B?/CK%%l(zX/*Hg(|' );
define( 'SECURE_AUTH_SALT', '[H[Id5Cde2;kK+}y>;rX%4qCP|CLVi{PBz:<=pVf{a=tRuSTkHuf.VmqX*ntwi$U' );
define( 'LOGGED_IN_SALT',   'D]%zxThr7}NWXGd4 [k9-P%@Gq2v=pt0JwW3inH6jR9#A=DGGY:kQ;|#qVm%kTJ`' );
define( 'NONCE_SALT',       'RI?_:s*[C}QP))7[Rp3B5,R^ob`%E3NW%|6mjo#dfq4zN{DNIF0c..A1`w/fDY)s' );

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

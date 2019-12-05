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
define( 'DB_NAME', 'my_site_1' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'syamjith95' );

/** MySQL hostname */
define( 'DB_HOST', 'database-1.cp1radpbekjc.us-west-2.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '0+5_1Vt/|.|f<iG4FZ+){<ogL/UnrV,R<d|@{FqJ!zY+qT/}M~(}ZEdY(Fd*Suak');
define('SECURE_AUTH_KEY',  '?:TH~d]6|C^lz}@Q|aNnVpc^c-Q#7~fIK,~.}pM9Fwi|@fFiGT[Vhfdg/~(Q[&}~');
define('LOGGED_IN_KEY',    '{yZtr{rP|y`,uw|4Qw!k%rL.|.H1Pm-wLbUd25$p,u+G*l=E50!3=y/b +<v)=YJ');
define('NONCE_KEY',        '+;w/c?(+pAU>he^]FPn&i>Q6eJ-=}D? KLjYR,L97h-%h}J&-I:sd~}r|8^1-/{c');
define('AUTH_SALT',        '.&xU}B..-e9)7&YC1z-si?CDhTjYn^%gY+u-tBdgM.&4KMJfJzfA~X423g2H32;<');
define('SECURE_AUTH_SALT', 'q3)c#ksEg]zJ/&53C4r9`NjviIr^9UrFc+kYdA4v#`+Fa*Hd/;KwI)P--4-K0p^v');
define('LOGGED_IN_SALT',   'exZ:|d1#H0@|>oDr0}yAQ047hn(Ycz(d>6LFkJt@$g 8HH-5p[oe`XyjxDAsEB-#');
define('NONCE_SALT',       'h+<-YC)*!R<Pv%.6Omr5[QLX|{4bi8K{Y:)G3lZ>fr+:+ I2Yx }HASXB6XCtFiz');


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

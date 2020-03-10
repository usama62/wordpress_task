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
define( 'DB_NAME', 'wp_task' );

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
define( 'AUTH_KEY',         '0cL+,R>A^ea*/iS!Si(q6.@ttW^?L=Hk+#o]EV_ UPt|C`icxzoc+JG#em~Ag~%N' );
define( 'SECURE_AUTH_KEY',  'gZ0G-1rVHO2w06#[E g(.i)GAi=h{Kvoe!aoVn[|5~C@_P#6j=&F3KlwctdPE5QR' );
define( 'LOGGED_IN_KEY',    'XA,VfLOP oH}l0Q*LNimrlC$Ls4:L8p*wI(Hxw,sF -,DX|160r4GOBM94^eK<87' );
define( 'NONCE_KEY',        'diqgbm*B!}tNL.K#&~z!{B0Q06R}h~Kh+o%Rc|j3*+&OXL8iE>eD=WQgq]@;:7nx' );
define( 'AUTH_SALT',        'lrt$=H6Gz_2?Ga#Ya[ [s67d,Rr3jOGsW+%AvAfaRE//zG_B+%;8v4%YaPdu;v7B' );
define( 'SECURE_AUTH_SALT', '&B@FYUJb1P;qf7.-UG6QS@:FVeA=[!LP h%~oVpV@:D8)@97u@NZ[b%|Y)vd@1ER' );
define( 'LOGGED_IN_SALT',   'p+mA&>V52-<-mP<^=#*AwU9h?6LR{I&w^bE+NXGCvUc.HtC.Vu/)7O!hI]MbJQP^' );
define( 'NONCE_SALT',       'd9PT.QoqZB)y4}#)3aG~*aIcY/b:2Z>Vc_vIhsZe~G)%D;W+%>Q/`Pa*8,pX<1vU' );

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

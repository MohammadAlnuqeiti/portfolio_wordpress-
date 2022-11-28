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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolioo' );

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
define( 'AUTH_KEY',         '{^0{Cw_TsRj$ssU9ikLM+k0zC$yM+UZ?pA5ORj3}Y]]-ap;f.kF9:SRS4y*.oN{g' );
define( 'SECURE_AUTH_KEY',  'l7Y$kD4U78FAE7 Uvxe(]EWP++e%I^*)-U8gF^? ohceerDn<r7bmlaQ-d1Qrcy~' );
define( 'LOGGED_IN_KEY',    'St(t>T8N.]?iTQKQ>.2pJ6,P5bLnbu_clB?u0I93J[34]@,C-`!!ZP(DSaKeC(t$' );
define( 'NONCE_KEY',        '_h{s -a[a.)UN6)cnF=<`X;f]02R_R~On_jZD5<>FWobyg#1ri?//cJdc<5ou8</' );
define( 'AUTH_SALT',        ',5H;f 6WSaUW(GCxQIV0/4tebT^6k*r]PF^^?<d5:Z(ml0>zG JkLahx(Wq+EBw$' );
define( 'SECURE_AUTH_SALT', 'f9vDN5hGk*$n2v^;iO1>L]dzFK%ZO`Rd)@Y!Yge14R]`(^*EsR7qI+A@1vF4&9{#' );
define( 'LOGGED_IN_SALT',   '&14`6+!Cki{j].K ryQ<`_oE6|l]%26tk|}j++%f>^pP(|x17y*b}hHP&ZKg4]r3' );
define( 'NONCE_SALT',       'b@dU~h<s:viG##T( )oCS8YOFs_wqE j=bR*c&4KyvA-aQ16U&(uR0^(*y6y|-&t' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

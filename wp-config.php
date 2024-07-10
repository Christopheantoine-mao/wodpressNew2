<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost/' );

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
define( 'AUTH_KEY',         'o.OvXr1!G-hiT[E1s5P2d(@&]l;@UuWLnY{HP}DuT{wWDsxZGxDd):ZLu?&_^F(|' );
define( 'SECURE_AUTH_KEY',  '{Hc_>QJehK_Wh6bBi5j,w%VAM:h8lO&&7Cy`jnAf2.d{18 ]p`c_GS&9)a_nkzEp' );
define( 'LOGGED_IN_KEY',    ';Cw4#c>u68}+oKE0Qfi*C?8M|^!0s+:@R6_ZC><+/W/Nrs%nU0vBU1PAc{zieu6r' );
define( 'NONCE_KEY',        'LxC#*b$@Qi~KZo+a3]3{;<;frwqbaWJS8P/lX)=KJ~{-X:Ytf{3(wg^s;-yplV%o' );
define( 'AUTH_SALT',        '42uq=>iH?7Znk#,P2`%U4U.IAUr.M)]O;h.udP2l=m^zZd. Gq7MNFAiAapwqC,W' );
define( 'SECURE_AUTH_SALT', 'S|eaI%]%pA#L~,b>$Zs#.Z1_Z5eh:T|DPGcT.$-u~?~|SPu&X]*l/cj0v#<Zt-.D' );
define( 'LOGGED_IN_SALT',   'gN>`QoaOFnS<;eq1vBfDRBv@?e]`R0pr9! ]+obxdi;AR73*sX>FAeCh MRZ7<;m' );
define( 'NONCE_SALT',       'eHWYxR[$XP>Rt9m(.nYdEHtM@a%]w &S E98?^[2t6lBh<XGY~lu[Hp)ESKw=wzW' );

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

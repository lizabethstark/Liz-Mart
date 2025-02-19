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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopping_mart' );

/** Database username */
define( 'DB_USER', 'shopliz' );

/** Database password */
define( 'DB_PASSWORD', 'mart@spider' );

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
define( 'AUTH_KEY',         '7:Bl,Dsgb{$q5dU^+:{+-hIYbGM,3#-WdbFG&JsBTgX]B1>)bVZ244OExI$u}S?&' );
define( 'SECURE_AUTH_KEY',  'UfC=[6+7<0}8Fz#Wt#BWOWGP=il$W3N)K*p;U(j%_JS+qhAeiqa&Aa1[r|a4&+~L' );
define( 'LOGGED_IN_KEY',    '=0EKWbZEcpw+%p|&H5 %q#*9G7os[[?k`N@/7,A*R?Z?N%?W*dF)f&j4k5W6|8XP' );
define( 'NONCE_KEY',        '>SzC@)OGO_lcaA2Y#;j&w^ 8*/9@y:CzPe*0~E<fTMPfNMymm>}2AVH8K2Lpzrq7' );
define( 'AUTH_SALT',        '*#1bF%R5ZLDCuJnP z.E$*(mDtf]F+3z21>?`8ckx`%L0p4v`.!m79`L{=Sh<#H,' );
define( 'SECURE_AUTH_SALT', 'z<P`9jc_9@MKqq`&81k9]}gv>954`_0!,CMf_Tu9!j)EJIM8En~2 uflxcJ*R6CI' );
define( 'LOGGED_IN_SALT',   ')SHAv#wJ!W:OjOt-m.D#3:]Ts@MB,DU6W8w,lFn$XC`3J3^<r:Zywqg^*(u.Tcpc' );
define( 'NONCE_SALT',       '[gtk;rA&@L4]2>{F:`D);,3rE9HLG4Dv9c<m`-&]PHT(ePDEq%[DXoo1hn>YG%Vp' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

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
define( 'DB_NAME', 'Placement' );

/** Database username */
define( 'DB_USER', 'RyanPlacement' );

/** Database password */
define( 'DB_PASSWORD', 'e-lLz5Ar3UAIb/5h' );

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
define( 'AUTH_KEY',         'RSh%FJpX-)o@WAX8RR^CM=xV&)unJ` lsF|L6rf}z:6%Xk=Q^3Akrpb^Yq.$yXx.' );
define( 'SECURE_AUTH_KEY',  '#^1RZ;q9m5n?u>xnxlC~qH^h^6Ql7`Qc}rBb5JWXIXlFreo!p-IMP#PlF)vj_],w' );
define( 'LOGGED_IN_KEY',    '<RW`ixB9jjcj/%G<%o,`EMz<(`(QuwpYy<qY,*#t#nVRSp=<1JLr()rd=#}O9bCB' );
define( 'NONCE_KEY',        'xUIgn2ioyWbQgF7Il{rp3=j:F]>hL9VE*2ud;F2AO}n?`mJb1J|:NU}NGl`BSqjI' );
define( 'AUTH_SALT',        '<Wg_jDv_U$0XRZEH <MDME6Uzmc}dUas9t6-EeNgeOGRE]rQ-iVnt(PO[jFxF};d' );
define( 'SECURE_AUTH_SALT', 'I!}:%n#Q+u(:cW:];K3sZ,Wm`bT$<6VK0kabspS~s^Nb#{dL5aLMPJ& DwZ;0)Oj' );
define( 'LOGGED_IN_SALT',   'a)e`j53axE8{-i[`o1z2Udmw?V/8Yj:i<#z0[]([n4^uIVUA}7i Xvi{22roK.<(' );
define( 'NONCE_SALT',       '9Il3/7n)If=vK%ra0[1mXGy?[yLg&KDE{;g>Z3Wh$%[6<@}k]h)sISv^N^Ol.nN/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Rpb';

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

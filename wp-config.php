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
define( 'DB_NAME', 'rrblog' );

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
define( 'AUTH_KEY',         '2bjpBQYtzu1Rd/!H+u(0~#z3QZg-<P:ZF6J[5vLM3Tj b9>f27=AgZ7|>)#,h]VU' );
define( 'SECURE_AUTH_KEY',  'x%NPO~=8^>HE=3iX=8Y:+4+6+.rS}&,HCy@}(BHlS`4@1irY,^RUd1?=dh1OETw9' );
define( 'LOGGED_IN_KEY',    ' FV8W=r@;<):cr@Byr)o}hMcq5;f5HmT@a HK7MM0fi($vO!TVqTEm7B_iPp9*6r' );
define( 'NONCE_KEY',        'C~05Y;m/^`W9] wvNT@ y]o(h@[@|^GMTWk-]RS$Q.!>su&ID!F%b#e:`$&W7aFC' );
define( 'AUTH_SALT',        'ur9It{y3ZC_?-8D{@dNmn8_@2V^1Ss~wqz/87e`&;];1,VF=.OD >E&[T3^:9bS}' );
define( 'SECURE_AUTH_SALT', 'iy`?7Ff_-,2zKDmzpu-*_lD3]l,:p~!t=H[cR>-O20xog,2.rN8jZzE{;8pEUdKn' );
define( 'LOGGED_IN_SALT',   'z~2DG`8aG$9bD>_h#cup/MV-zrP&<j=r*kLlid%9()0.m!:KVh]{b4mg/XgIy8uO' );
define( 'NONCE_SALT',       'cj9$izMvTb1[+9+~7dWErJVI~Mha)_{#@(bHAv*z#Vfpm.gQaUBjTkU}A7#-uNR.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

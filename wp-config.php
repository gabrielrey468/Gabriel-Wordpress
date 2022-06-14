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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'g}zJ8+wP69,shd!D&^JvkAu?K5XU[xYpO1UL0_Ul8pM{]B<JJcJx57?,T@$D_OE9' );
define( 'SECURE_AUTH_KEY',  '(2T[yVU8=UF:ZGSzc+#9LJ#9k1!0s5faa$!*jU7#u0}muR@QWato]|pCK15C).vS' );
define( 'LOGGED_IN_KEY',    'vv,_<LTckva~4X1.@pt<%5l`>%elhrIRZ22:NHP4d|8U^e2;[2VxTu_(QrO5mhqQ' );
define( 'NONCE_KEY',        'dhC.*[E VxvbF4zm]-4e5/ HN/2R{a#3Y[1*ukawMAx79w+_RV{0pU=6vcKUIvjf' );
define( 'AUTH_SALT',        'SbiO-P54Aix4(YK3mZ#/vB/*&-6%z5vn$ :pBD2eXND1lmo+d)+9OuLYha.jkk^O' );
define( 'SECURE_AUTH_SALT', 'ZAd!Jn1`l/:l*OTe:E)(8-jZYT]5>7uzKMpGmHp !8-ef/m~9^)vZg)s#:|u3wLn' );
define( 'LOGGED_IN_SALT',   '&[L>NA`RBFv;fL~oU@8)}G9H~rd3Tp=|O89nJ:<|LweotJ:v)h+UH}Fh0a+kqCA ' );
define( 'NONCE_SALT',       'HBdE`Rk1]lU_g:A;s/xAG1mrS~V9P|X8EKxu1kF~Q-.WE_04 9|+38JS51JY.&Xh' );

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

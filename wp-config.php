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
define( 'DB_NAME', 'mcr' );

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
define( 'AUTH_KEY',         'H0u}%y80W@^ixsJc{WI#ZT%0Ap}G+zD_y*1iH:v/4<]hL#Q8fwqw|&`3${B9aitn' );
define( 'SECURE_AUTH_KEY',  'DQR$%:m TOy@q-Nk|zpNo LZ:q&EH({c.flFhne>^w7)h2sEl&l2)zai+9i`;ybn' );
define( 'LOGGED_IN_KEY',    '*<F(CAv=7=/0}@=wGj<1#&yEAm_PiDeN+Ez.v>8F#9]b!jDre{Zy9XFk1TXnbc8h' );
define( 'NONCE_KEY',        '?~+`d]LE FBx~QpGLHPfF,)vE9LWDa*s32rD8DZ2jDs(O`1?mol~QXDb+$B*z0,7' );
define( 'AUTH_SALT',        'KlX8FaSd{gL[T~p:$M3`E~%r2 KiGp.E,KDqj2n!i3=b hm~/euUW}B[TCSgLF0A' );
define( 'SECURE_AUTH_SALT', '.sf?0#8^fQfEIY/1@wrfaYxSak`klnxUrL>ZrDN>@UgaCq@@uPEasfe%Pk;Ji=AQ' );
define( 'LOGGED_IN_SALT',   'w+2SadjRQ^7N-W*e,F])7-%Nib<suo,~$z=CD3G&mUSohTfHxm]H{H,Q99?f*iG<' );
define( 'NONCE_SALT',       'PV`$U|oOt;d^i>t`I(w&X`$TbptKx7+r0r|<]ud,SW>kzCT LDuEBrsQ@aknv#._' );

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

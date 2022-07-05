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
define( 'DB_NAME', 'beehoney' );

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
define( 'AUTH_KEY',         '`E~dcLPTPT,]4jjutz%v><{^quIt|6{66xVv#(vp!Pq2?52NY7wK%Z|<,;h^pD<B' );
define( 'SECURE_AUTH_KEY',  'W5c#?r_|{f$8}0BMUT M/oQJhT1fAKIHT=Uyb~9S=@#i3qtd):B,;C)FFx0lt~40' );
define( 'LOGGED_IN_KEY',    '{|^{MZE?xaN14U(Xy*#ZJ =o1YPL@JFlvdX2kD&VoXJ1OQ{l_rvst55#u^L{D3&J' );
define( 'NONCE_KEY',        'D,>phpxsi2&.g0h~whCv5N$H&=tcPC[1_*SexM};r(Gi&Uh*kDC<K?u#sIY#_pf?' );
define( 'AUTH_SALT',        'Ep5yXY# =|z][H)$`=dA1ga(7<@SW&~?YY!UW63m/zS7+B#_GA mJF%Oh8,@?Bhk' );
define( 'SECURE_AUTH_SALT', 'N557loPWmln7jP]ir` R)Ai;#}7{oa~cqf[48))]:3HU242Xg?g}D[Yps,ABT7V+' );
define( 'LOGGED_IN_SALT',   'v<eSg4^)/Z$^gutI{y)y8s%dsc#HCk-rhjWK~8` |r.[4$R]Vy2Afe7avbD)Ur=Y' );
define( 'NONCE_SALT',       '!NiR4~~~N+L~F*)g;SwJQRyb1me$Bb LR?vbp[+<+{Oy%L)#,kdP+y Y5;6ez+BU' );

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

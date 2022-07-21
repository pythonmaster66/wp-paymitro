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
define( 'DB_NAME', 'wp_paymitro' );

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
define( 'AUTH_KEY',         ';OAHXs`XUxqu~M.c$(m9xyHavt^y,/Kcf?rBUI{29JHM}P,`Z H(x,?nCHf05v1X' );
define( 'SECURE_AUTH_KEY',  ';66cckBp{{*RZ?d}VaoEWp?<MV=U#9)Fa#qJ,3D*?+@(SbU25ysklfGCP*(`tp]S' );
define( 'LOGGED_IN_KEY',    'q6z9MGD.IShM=bxjkH0IUm(m@Y9Oq!YxE4(?D:?o5q:3W_!Y)g.AL>rE]*~Sy]X}' );
define( 'NONCE_KEY',        '=,#GJ::E(g/z.F$/-^M&#pZ4onVoqa@F)%o:4K*dSX:s`]WnCG9za+!)m/Df@%kA' );
define( 'AUTH_SALT',        'GS,p;:Qdn9 G4Nie<u315^c,i0N6I; :lijLKmHs<~,RCEe2;A|>>4^Ih+L!y2Y8' );
define( 'SECURE_AUTH_SALT', 'x:Rv#6#nA9L<x?DDxX;US/8F=s0/KDjFT nl/VM84CTomk*PZ}<YB#|}N+%Lg*D.' );
define( 'LOGGED_IN_SALT',   'vv!3d39bkDg_>]W;#{X*Rh(4L+*X%7#GqRVL;kBL)/]Jd6.9>|(^3`/)+2~j1h|<' );
define( 'NONCE_SALT',       'Cu{H0Byu(XKl>^)+3/O-a8UiRgSb6Ct-*e ZYGGq_QvK~_dUne7-c!*2tzvi^{/f' );

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

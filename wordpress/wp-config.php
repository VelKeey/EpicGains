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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME',     'epic gains');        // EXACT db name from phpMyAdmin
define('DB_USER',     'root');
define('DB_PASSWORD', '');                 // XAMPP default
define('DB_HOST',     '127.0.0.1:3306');   // replace 3306 with your real MySQL port
define('DB_CHARSET',  'utf8mb4');
define('DB_COLLATE',  '');
$table_prefix = 'wp_';

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
define( 'AUTH_KEY',         '>s/v+q31UASNj32Pf/S3it]k;)z4Au*JJHRj%w/Fc/LS<,jF*-NkTH;d;}a6^#K0' );
define( 'SECURE_AUTH_KEY',  '*x&-|OACZm8]Y4OCfXDGHveEbn6;=6M-Tp>u?+66;tr4*~72k5N]X7q:>4=rC=@E' );
define( 'LOGGED_IN_KEY',    'PHS1<T}e$~&<9v/6ZVXzoPo5M`V?NvU;?bpq2dWUo>2wW(W_PZ=r<@I1A/IlA1GZ' );
define( 'NONCE_KEY',        'Y5sENo.J4b9a.R.-0_8`{@y/.<d>,H9CsK-brh/XO;~P>4C(YVl0U3;{Qjw#iln0' );
define( 'AUTH_SALT',        'Jx.noi=PB^1L,w$)](EgSNwj,fO^lBHaZ@f<YV+6G[7/;7Dz7Nf~Fa:C$jEd~kk$' );
define( 'SECURE_AUTH_SALT', '8Xewya-_@)PRmGP|L/_K[MY[.(^|BWB]z1%gW)$d{M7XAvQ4`&g; =1K=TguAVt7' );
define( 'LOGGED_IN_SALT',   'SVac+o9z,=csb1g442|tW(_/Tz[vJsL!ZmlF>[;fpK!j/uv)65`|G]YKOpmOE2A1' );
define( 'NONCE_SALT',       'k@)@IX,cR=@PMo@%5--_&JCff2n>k+#&Yldln&bp(8phU&S(_n0op[$]ykf =RvL' );

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

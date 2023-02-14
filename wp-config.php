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
define( 'DB_NAME', 'mha' );

/** Database username */
define( 'DB_USER', 'mha' );

/** Database password */
define( 'DB_PASSWORD', 'passwordwordpress' );

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
define( 'AUTH_KEY',         '!bOt78[=SS%+!21a^^#/nue(iO%n00Wn:Lg|W%@/~!HoCYV^{3k*w(]/8-db&DpO' );
define( 'SECURE_AUTH_KEY',  'fFfzzhV!?)0hW,y4$ix:lHYYoUIdgg:3EV3K/&6yw~nU10Wo  ,>T_xg_;%^gUrB' );
define( 'LOGGED_IN_KEY',    'A+NRY+3.S:eDN<8.]wU n9AFd>0Z6l~$dN2Z8dXaFZ)ZGUBq9lW[F1N7ZJ[)W=e%' );
define( 'NONCE_KEY',        ';BxIQ.EXdA$mGa^T0PC(nf0~i/Y 5D73vqN.M2:RE99c8,Z+@}*7;5`oOHbon>}k' );
define( 'AUTH_SALT',        'NT-?:h>Ng~{)Ug}AW~iDDE*aM{~I&7]WFP4o7Ni9 k{}A62e9j@fe{+^,k0~4W(5' );
define( 'SECURE_AUTH_SALT', '@Szd=2)$Irzm;^N( `iS7_Y%*fz%NE=-mi&`ui6H>Sq}TdF{H_c`,7,5=AMq&Zmw' );
define( 'LOGGED_IN_SALT',   '5!.5Rv6AoocXR`x;(?2yEoJCLz%IzAA}?i{yS5>!i_v#cAP}BXMHo!z0}XGQ`}s ' );
define( 'NONCE_SALT',       ';p/ iDl|kZI3k6t5l2Y2zCb<ZAF1Q{&#n,2b]zVO+kp/J`G`<^9F D b,5aez/(*' );

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

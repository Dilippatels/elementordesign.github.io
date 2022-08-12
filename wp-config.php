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
define( 'DB_NAME', 'dilip' );

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
define( 'AUTH_KEY',         'd(0x4IK8~6M,oU-rDe;TCY#,5rj<g/Hh 4-NzR-6im27_x~Ri3+N#UIq20/U-DMm' );
define( 'SECURE_AUTH_KEY',  '}Dx[_}C23F*[AZ#1llE6_`(Nx7~ZDY8S7}:rF=M;}l mdhBfI0*ujAh@>$F!K@r2' );
define( 'LOGGED_IN_KEY',    'QM11yT`i7dEVCw0/We6;<]siaV*~?5S*^R=/JoA?a&cjj4/7=b9&[1i+.9^(9GP%' );
define( 'NONCE_KEY',        'rr/g,!HGab0C7P*fnMXAuneMAj9[SxD0tp:{N*]Pw&OqP Bx%B8W?];BgnLDbCe?' );
define( 'AUTH_SALT',        'H^ZO^9V$dx_>j-Q ik@xXh/R^fHfc$ eNs$F6< xy3D;83F$_Kz6O[al-ePP-JMA' );
define( 'SECURE_AUTH_SALT', '/pyDQxCQe{mx0Znrt%Y/FR_?FyTgeGChXFEYK$1mq_0cA4giFDOx]r2cT%)/=[@3' );
define( 'LOGGED_IN_SALT',   'W.c|qUM_b#W.:qK.WJ?<y&WB{-&/NdYMjye*c.Ee:~)=`UK%laq0m3gM~@[`OnDL' );
define( 'NONCE_SALT',       'F?^a{q|gsZU+OC&i,|,9AcfQ3KYGeP,c{b?dU?Wr&SHq4c[,iZsZ7vT.Cv<CCH9,' );

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

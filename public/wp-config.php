<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressBook' ); //!

/** MySQL database username */
define( 'DB_USER', 'wordpressBook' ); //!

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpressBook' ); //!

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-CfQ{oJl?Y%B]|9sA&z0=//F#+8-o#5pPj[IK+Jk,@#+HT~Qn ]JoY&~Wc,f|HT+');
	define('SECURE_AUTH_KEY',  '`B6 |L+^ANjuCx/lqZR3xA-46*$%y<#nmjrP6_7#*B9}TBnTt(>YAPL RGSHft%B');
	define('LOGGED_IN_KEY',    'Fdy(7o%BH7R9wF=]N6-PI.@VS(4%$ZN@VB1=.TGpKFs,g+x%KxkTUo?/fiB?CCd~');
	define('NONCE_KEY',        'R#t*ja+7X/z#<+n#v`D%5@U%L[aD(-4{v/r|*(|u^=lh|{VM8<Ee).d96nh*vdXZ');
	define('AUTH_SALT',        '%={3@IJ,r]h.RRX-;FP[+xQ+TgyYE&-R?W/HZRra>=K {W6h(cyuKrT8Nl5IoeR;');
	define('SECURE_AUTH_SALT', '2kXWGTYKsfg>GBN~H,oLw}ebSUo spfIb{1eNJ{Wh;VL)kgJ!Ys =M}d%~Xg~?]E');
	define('LOGGED_IN_SALT',   'I q~Sf|NV3l:4jbRx~N?J[ez];Re$Jqm^yL3Wt8^~&_>l#Qwo5dh|5mcyAnmT`7/');
	define('NONCE_SALT',       '6mM]|N!:r|C>!RRKOL9%J?0F2$|,gXaDKDETkNV!9988i_)wRB!7FA<+K*&p&p#S');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define('WP_HOME', rtrim ( 'http://localhost/neo/my-projects/wordpress-Book/public/', '/' )); //!

define('WP_SITEURL', WP_HOME . '/wp');
define('WP_CONTENT_URL', WP_HOME . '/content');
define('WP_CONTENT_DIR', __DIR__ . '/content');

define('FS_METHOD','direct');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

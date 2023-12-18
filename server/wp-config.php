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
define('DB_NAME', 'reactWP');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'm5MrGD`Ht|3Kr^)K%cNAqu@~,pE]y[>E2IS9wi:03QP44{W<iNf&7./x#||U]$_=');
define('SECURE_AUTH_KEY',  'L7>PvB(wCp}tGcyaNJbcZN_>SbtTx>/Hp,MRb&)F9#9~/)Q#JgQYiVqTll>IJPDT');
define('LOGGED_IN_KEY',    'YJtDeFZ)VtD96^KV?(Wl:D?4O2#VYd;xEm;WSBU#Krz~A6BM>zRru*Y]+Zp`!/9D');
define('NONCE_KEY',        'yoMW!w(uyCG.{ OxJRCMLF$O5-ibf0W9GnEGhp``qpZ&#x#C=`l3,aK_u0>i+.dj');
define('AUTH_SALT',        'sBS[&5]$2{deyF1n*{%0x lTOY^jbAAL !!kYK{h&3uhR5u~PSj5JMR e-gJ00(1');
define('SECURE_AUTH_SALT', 'YG=N]_gar!^XLk>C`)rPF{Xr#CXbpeGZ5ElINp1+/WsYgz2OY^i*wL~Ju1Z;91&C');
define('LOGGED_IN_SALT',   'i8m.aM(Sx%QlJA~u u[NiyVn2&X:}xhR/&xzw2gk&Ku|nl#eHbqRbxFle{Ex4Ji<');
define('NONCE_SALT',       'Cbyc8.>j-k&B0a_u|9?d2qD9O/7Y;kpM^0~S&Jlb_a<,wNkZXoF(*9g#K[-gU }V');

define('JWT_AUTH_SECRET_KEY', '#?xD}{[6Ab(:vdAtvW}3n^I0!!R/91`3SeG)cZj!$]Ld@1+.rD|f8cH~h)=-RZwS');
define('JWT_AUTH_CORS_ENABLE', true);

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

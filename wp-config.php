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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('WP_HOME','http://fotoxata');
define('WP_SITEURL','http://fotoxata');

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's}>cHM;YWK0fYQPJmexFvdjJX+:L/8VB3D@&ooYiypAX_)w(W`I!tj=OeR{B}uqM');
define('SECURE_AUTH_KEY',  'o-qYa_EDhw4sRiRTY<M{w&nSm3ik AW?,%|+/Gblh.*;9lnz41CvXz{Sl!/pC#r-');
define('LOGGED_IN_KEY',    'uo&rq+NY{yV,hFP2xN}?[YBp6/LYZow2ET0KaR-+~bi$4jP8-P4?ZzWXQ=nO)wvZ');
define('NONCE_KEY',        ']8[6OrX{f89Da`5suL/7}J_9%~BjhA;3_;bi2N6Mcn;;SZiMP6VAMsQ/X(wn<-<-');
define('AUTH_SALT',        '8Jx68]mK12[mON4<W-fF.)JjAVq3>7Ia1>mb,i]b,27aI%JBq,=dyf]B~@g23w`3');
define('SECURE_AUTH_SALT', '8NQpO=c)+QQ>zfv=E84Z.LE@:s#V$<sc XkfvDM(099.<z3Y+~><n?t}eO{+D*LA');
define('LOGGED_IN_SALT',   'Zq~z`X;~Z5RH9{A0:,k@R]1z}>5zO4<?+N:H*W*3zoXKU<?Y]DS86Xx-T@bn F_P');
define('NONCE_SALT',       'XLn@-5tYv3g0gwPQK*d5fkY^#pD5.!wq!5;}ha0kM*28bQ,k#%e<nk!>@/qgT@z0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


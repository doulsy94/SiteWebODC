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
define( 'DB_NAME', 'odc' );

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
define( 'AUTH_KEY',         'vt|piT5X.H:L+d`_-B85]{T4_Ig2#ilNT<%rM 4oir:7|{)E/FPx-Pf7X}>kD/iu' );
define( 'SECURE_AUTH_KEY',  'W*u-$CQESQ92YctEXbKP!Q|J>3gQ4muK!+xp2z4J>_r_)&Li)OFaV>:QjiW7 xrm' );
define( 'LOGGED_IN_KEY',    'Dq7q_iF$VA1;?:Q8]mPBMu/`8YO#Nj%rkbgL@J)k=AgoMk}C3tg<f/Yo8Nq) :rg' );
define( 'NONCE_KEY',        '}iE45PW THk~,RR-^Uka M{j4ZF}2>~5 cG_xVp@Q$&665dpXL2)zX.5+HF:DKaK' );
define( 'AUTH_SALT',        's;G`=.9EgOaSfD1Kq:G9p6B)hHB<N_H4}MVF_u87Lm&Yw29XnKNrxH2b~2?j8sq^' );
define( 'SECURE_AUTH_SALT', 'Fx^^j`jh2KtgxAB9u8|)F9e:>woEeNJ/_li5.#_j3JW(i_{0<7+J&!!(rT~*5`ua' );
define( 'LOGGED_IN_SALT',   'B)H|FSkT9~=**R@=y+N[,$Qo697]0DKx6+h?#G hHN#7@0sm/@s+W.P,+5E2$dhw' );
define( 'NONCE_SALT',       ':}I.U-]#0tYu)/%Mr:pmUE-LbCR#dS:z{wrY4iD[!M9(JFWCj<gI#pMq2Sic3,G ' );

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

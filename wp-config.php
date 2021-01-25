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
define('DB_NAME', 'newwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'blvckpixelaeon');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/* define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' ); */

/*
define('AUTH_KEY', 'ETGN=4G Z4?[- &^Xrh)+@PDE-px(d,GUj.%To2M%{$K(pfLYn+/=a-%m(y;2<cR');
define('SECURE_AUTH_KEY', '-5]z{q!#|UIqq3!B<tP@yPg_>5A,og%Pxn4=Z|/N @$-a6tgJ$G bOU?3;_3]6~-');
define('LOGGED_IN_KEY', '2F)4ek8Bb(wexO^N|O#!!5S!gBe)=+W:X}p|F+$R`_-xZZRNu]1Vr2giJJpuR)[=');
define('NONCE_KEY', 'Bdp2%!Fwh/2XS0k{,YfG2}e2F)ri{qV|?G(@Uab9]-*fB2TlFhv+K:]8x4]_5tFX');
define('AUTH_SALT', '>@,$xP2i8K?15n{9VyWGuZ!T+&(o+BT(nr(6O%yOp_KW$I}Gz,lIu$|75+94G8*J');
define('SECURE_AUTH_SALT', 'b-}+hXJxhq(n5iW+GUKCHxbat[A#A/pbjkp/Lup~Y_iT4,_a7>>`GmhpTdl5JUgf');
define('LOGGED_IN_SALT', 'M<m>8vNte@u6e)%LH}7C^/;x!_3ml18KJ{BG^8]V8EruLEiFp3{XZdpZy?E-+2`0');
define('NONCE_SALT', '/<~fj:O567~=;RD4oHo?+#RUt:m=>8GRl70Rm`I&Q&e^9kK?#9R+P?R64F0|Tw--');
*/



define('AUTH_KEY','+#1v#<aGeXD$PqfJj0|}`S+11S116X;j/b]R|v`X|Fk@o%lCkb8/yAM<gG.T$On');
define('SECURE_AUTH_KEY','6J:eeb,i1v.;:Ae&Dv}!Mcz*`gFs3z?M&1N:q17x]e<x J&X3=($zA1Z9:uRBOl-');
define('LOGGED_IN_KEY','|?K*6Bku]Iv{2t>Bsa|&2>++)(RoAN!NFYv& ;~jBx]<3/TZB)>Cn?b%>FR0#uS$');
define('NONCE_KEY','~v7R2`4Z3B*Vbm)~MVU}p1s9&P]`c0N0:(D^8b.yoiKEF7*MS_k1q2cT:]42&I#o');
define('AUTH_SALT','}p{FC=uI:-O-rxp#l!8B$zKHx<qHkQ?5j2SRJM _;&AQoGejM+FZs.+n|Ymy_8V');
define('SECURE_AUTH_SALT','q;#]!w9[Hdvr`[8c=-)VzsS[%hh,o$#^i1d3mfVlC?x~4a_b^[;i6|y[ZLDT2Ut');
define('LOGGED_IN_SALT','a5n{71nGgc)oIxi.*|[dr#bGw]+Z6>q2rr8!-$VI/+FhQVGhU:[+ehMGKNsh|nEd');
define('NONCE_SALT','c@oJ<8l2Y4}P!j|[w!UZGzF5m;KwB;C2{x=9Od-0GZS+(f~MEX,0QVlcid#K<?C,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');


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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

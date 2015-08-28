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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'the_same_shit');

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
define('AUTH_KEY',         'IU/Ya+WGN+;%,nYr_#Bz/d,yOCFQHbBm*es2k)1)=4zCpM[k:-z>g:q|m-WBL$az');
define('SECURE_AUTH_KEY',  ',m7V o]K Tb?dDmKmfRrjl{6@$y9Uu>hq|^ghkWu}w#g:w>ji>TCJ-#|I[F>br-@');
define('LOGGED_IN_KEY',    'S^JrZHFjg03Q&EurIYpsLWDZG[VC)cL|B|mKC%6CEdD4~b~AB*rX@CO>+e #&#Mu');
define('NONCE_KEY',        'J6+5%_nD;ma!cl[x1{[r& z[l=+GQ!;`+A6?`;#my9.-Nh44}S[qW.iq5/-|}zP1');
define('AUTH_SALT',        ')|7=&W!o]eAZn)w|1;Kw^@@[-:OpY<[q[+dM#;#u>pGEAv9Ix-_uCXEnL!@R+FUK');
define('SECURE_AUTH_SALT', '-r!53Bi^so?c6MVP=&W|<9kB9;m&qb|*Y&5FiI5I`w#k&B+)X3gOv4fK*#X,%3^r');
define('LOGGED_IN_SALT',   'yJOCUGxwjZ-W/4h|[f_{l|UHJF#af]-|D/[6|=7k<QxbY+iDJ:ILN/H0BLNXfAFg');
define('NONCE_SALT',       '$%Pv4Be;7YJ4q5#j%wT97VkZgX$&/@[)q,oEsI:HsuSbLc>0iXW0; %XA&;r}20.');

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

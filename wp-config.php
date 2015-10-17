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
define('DB_NAME', 'were');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '61SZE)5E)6Yb9#~9<l{QbJjFk-|@O6{U8WK9k* $bIg mF+Q.C-2QKMmg=L{n_In');
define('SECURE_AUTH_KEY',  'rmqw{HxaoOKV/=m:Eb!|XX#>Vn8s-.Y0?5BY[+c-+IpIajlh(ADl M}{kYV0Y+xq');
define('LOGGED_IN_KEY',    'cHb-po:aa/#g`}z[mer5hDVh(Fz}AP EUl-u%6U$uy$5<GcQA9uJqeMLd)Zq^PQW');
define('NONCE_KEY',        '-cW0CV3o-`T*4|4]FP8t1|?-3^p>M$q%mP*Y=4e^yV2?djktacGZ,?9) fA/Fr.)');
define('AUTH_SALT',        'P{<sX:yg}uu;T mH^QC$MvrL+k=)X8|IeCRb/X,$I7@3roPc2yjTLTs/TcW@e!tq');
define('SECURE_AUTH_SALT', '<Al`~G o3^L+-HdJ[:u_37 =W:+-UOU8+C]w%[4+wq${)!{@8D$yI1S>UI4 Df)?');
define('LOGGED_IN_SALT',   'b#6Rm4@2e{nP3yZS_RkVurWLNiXTNj`!!M`Cr^.B3_j!^M#eM#a;]0/e/&)/K2aj');
define('NONCE_SALT',       'CDcpHcjp%,%F^`{}zd-Dz0.+V,:+SlePW:7+^->&VIk+4DqhuaI70l][L8@^}?q1');

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

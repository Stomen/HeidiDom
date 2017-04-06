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
define('DB_NAME', 'heididom_db');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ':-aDU&nLR`W5k~hB9zMsFW~-`u2//bemj%UJXgXn2gAT$nL3(3KU~4Z w?TE&wVV');
define('SECURE_AUTH_KEY',  'f}PywOuJJ;jM6gHAJ3_!jDnyC8ZH!f4Xb0^c<*vQ7Qubs~oO*BY#(+]($t5XqIEv');
define('LOGGED_IN_KEY',    '_xM&hD#9L~b;O)JFIi<zt(2*caSj]bqyq{i;FAmM:3y`LI :<_gdTw4w`3t JE-n');
define('NONCE_KEY',        '3(VD+0+0>5UMn]!S;k5YgV8Pe!3ZpaJ8pW:P>4]W$rx;Q.EH*TPt+tjO|Mds{ @a');
define('AUTH_SALT',        'AB;]:4Z?L+|@bBaWW%J($G)UAux!*ML5vNZUNs?5w^aebGkf6qP[d(c-_y/KnC}6');
define('SECURE_AUTH_SALT', 'D951AEAb(k2xSeq60ld[/*(N*tb{(7SX#h4o5&GAc-G&,aNV0+Rc:InNUHvU{Dr}');
define('LOGGED_IN_SALT',   'LNCYX @8`QNBDL%;0LU>J25<X+8B9#|WAK4GKW_f(.&M*E1M^}5bq}N6eUYJs?O#');
define('NONCE_SALT',       '(Py,J,Wguo!!)G.)u$UFXLn1R8~R= RKfi&wOh==<)E-pp26Lul8^KG +{h1e4Mx');

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

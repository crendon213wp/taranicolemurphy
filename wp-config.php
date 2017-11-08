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
define('DB_NAME', 'tnmurphy');

/** MySQL database username */
define('DB_USER', 'Ciscor213');

/** MySQL database password */
define('DB_PASSWORD', '3edc4rfv5tgb');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');



define('SITEURL', 'http://localhost/taranicolemurphy');
define('HOMEURL', 'http://localhost/taranicolemurphy');




/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DfPdYs,b^io!gA8e!`b%X.hR;J;`=j-46G^huQxY$ASL/b^AiD*&n^)bfsgD`a~s');
define('SECURE_AUTH_KEY',  'E1b).#fpoP[qTCB`yV=%&M.,V=+u.z46]O^E~ne-v4:c]`=fV0!8pykmtfM~)LU&');
define('LOGGED_IN_KEY',    'C8LoVe]}rQzGJI-MQeL/V]2Sl><Bc`A-7(gn34SsaV}UJGi!a98qw]W(6df<iD.q');
define('NONCE_KEY',        'r9>j.y4(l@-)!C#(E[f9!a!}~)k6fp|}o>-d]X]=ji+QDcx]LVqS3=N` dP[$CVo');
define('AUTH_SALT',        'bX#3nCF5Ji8?C.]#xXG>R0fuI38&r-Kr82EHlooK-N:& SD|cS|SAO=[y}#z+y1y');
define('SECURE_AUTH_SALT', '{2+ezm%,qqA~%(W1?}yC[Ou&_A!7K$ScDS$$:a2R(aS9Fk}a5mTn_J818@]Ya#BA');
define('LOGGED_IN_SALT',   'Gs3Uw7[`oW!e|!f{[c-seBxR61$CUNFZAfAgA%bBU#qha%SHB*9Mf.D[m(Sbp)Ad');
define('NONCE_SALT',       'SG=7<Gqy ;++9B7>OiA_y;vOz9uhH])>GH9maQ{VEv9CP7H61t3:nFshlVG.9g%S');

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

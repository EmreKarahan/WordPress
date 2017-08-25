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
define('DB_NAME', 'sampledb');
/** MySQL database username */
define('DB_USER', 'userUEH');
/** MySQL database password */
define('DB_PASSWORD', 'oP2cV6csTeFTAs35');
/** MySQL hostname */
define('DB_HOST', '172.30.124.179');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
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
define('AUTH_KEY', 'tz&3+EcE78ukdfH#,`oUMc6skvZ@KUe]B((:/]}@kFT:PG2.CsqiFH  cv%O[%IR');
define('SECURE_AUTH_KEY', 'Cp/ZU^2=o<1i%(d_?@+qOaX(q2oWE`t)wzH,2H+#v&S]y{HD|U)a[b[g?WjLp7)+');
define('LOGGED_IN_KEY', '%ZdskW19Yn$D8:v1t]V6wm9@6h0^H-<,M}Zp<9[/|b2e%*$U#2`E< IG!.uxnny+');
define('NONCE_KEY', '|BZkvf0Z%]i_0L[-<EbF#-KKGj(%^ZQ>B =x~=2 ~?4>A[$B#;C4-Z-~VV}<` x1');
define('AUTH_SALT', 'H5Z4Q@`}ArB9{x4(K6_ldHj`9XO(g?5I2JMNd~=t0*LLVeB{|a[Px%s$Po g!t6~');
define('SECURE_AUTH_SALT', 'o89srRVDU$&+V/>Hv^G,#dQx/gQf}s9LwgtK%Zp<N,XXNcP(CK<;WQgLAYoBLO=t');
define('LOGGED_IN_SALT', 'Kf2Gq]>kgp1I?J_~j-aS?Flk_E&n/>gvF8@f46Sy/W)UJI ux^jLn>bq;Q-]-`>.');
define('NONCE_SALT', 'A= FbpS*~qU]5:+P:R;GdZZu9TF]f_sHCoVn4y#T]SozqKnV}Qm.n1A*W(rjH_q,');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */


define('WP_HOME','http://emrekarahan.net');
define('WP_SITEURL','http://emrekarahan.net');


define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */

if (!defined('ABSPATH')) define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once (ABSPATH . 'wp-settings.php');

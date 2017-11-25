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
define('DB_NAME', 'Movies');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{8[72Pf8H|lPc}Z>]T(_*K~r8,CWc|)%s@N-Jol)cK|,9_7;P<r@2C2@<<Yi4+tM');
define('SECURE_AUTH_KEY',  'p93=HkSD_ KfD^v1zdE@6F5dyn[6#S<TJ,1&~^cnwGO-m&qZKr^>JF3)TA|#:;>8');
define('LOGGED_IN_KEY',    '83zny|OAG/yCR~|W9~2~UKk|(di^#~>f{` ${}LBHol.|3fi]Bt[25[|}Y.%1u!J');
define('NONCE_KEY',        '&p2?e}.ZFxQ? j8>G{&U{#slI,X~d}<t?%0TlFN|:sk&-*a9~!_Pn/sed)>>PyGB');
define('AUTH_SALT',        '&4c+Y0+t1Vx5Md8]N3@|TJs|ts}/BC[XF[^OH&~?YNTlgeUz6C+j5tZOG$ha9Wpb');
define('SECURE_AUTH_SALT', '5G#,_yjN?@wgxp(PEAx9cM^&PZ:fTW+Llz!w&IV+d}(~}@Usk2*+ZqtV@H-zD8qp');
define('LOGGED_IN_SALT',   'm[6rv--MEpdE_~VYD`fuKa;4Y]}:viCS!zMfE}`(i-s$YdS5$K:>PlQg+&mxGu9^');
define('NONCE_SALT',       '.ObkJ2%78sHs;K?uw[w_DH5E30-&r?,6w Kb2.]UO?EQG()=10]]L&+g*N{z|j s');

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

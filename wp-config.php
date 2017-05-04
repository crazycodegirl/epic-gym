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
define('DB_NAME', 'epic-gym');

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
define('AUTH_KEY',         ' q0Xlbiuz9qDtLYfRRLe.k{_xF@GI8([r|VTST?(f}DO]5!URYR[k}Nc=CJY|K60');
define('SECURE_AUTH_KEY',  'W6,EzD8q#lC,S7-NAERfY;NtCpRcqClo@!tI_>]tWPoa#gLgIhhS.:dUDe_R5q{4');
define('LOGGED_IN_KEY',    '[D}WRtja.qfoi{)8{}?]>l$SAO }IklWV|hg29j;^W>g-H*v*DXkc{`ExxN5|.!G');
define('NONCE_KEY',        '^e$=?}`]S-5M5GvP*7niBL*_*6*Dhj@pT[$}pvs(e6IE2oNIr!;#^Gp!i184uy1l');
define('AUTH_SALT',        'FUda96fFLt+2J6*Nl jr>X?bW{$@57D4LH:gOai*Y/?z}CMk<pn>YF3ZHG`c@l*.');
define('SECURE_AUTH_SALT', ' cR,s 40dNZ(>.*ak=Z3bk%:<nwWjlKU68VU;;fW^zvqYmXxO1+wj#/0P)|Jtu!;');
define('LOGGED_IN_SALT',   'SgHYr=j]`tbi8jP5tDF&4kDr^JnEo<fOC884$(n<tq1O*$$%Jd:T aj8ZrBb&>z9');
define('NONCE_SALT',       'c 25Fa{9S(&RwA$/>#3&Lm9$D$h%#7*Q8B;IErhj#Ah=~{8MZj&OSWXuc<0pfW<s');

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

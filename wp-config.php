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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '8OdWT3NotQ+DNa9Vl13ejAONvCEM.bl<{NL!q-3n(/]xB%HA%^#e1niB6oe#uC:T');
define('SECURE_AUTH_KEY',  '+17*$?xW K1l#l=}m;uNno?G?#tagG+RMGLUA:2?&~F)pks+,8BTI(4ps$Qe]kxZ');
define('LOGGED_IN_KEY',    'c->Un#Vu Kr:b1&tos/hMm(+[7vYI`Ihvb:No`r_v2qD9>Z4)xL}d?Z(HH#S@D9A');
define('NONCE_KEY',        'fDCIqtB%3*r-]5QiayzW%ON])PJ/)wZ7M-MVHqXC~{[yf.k(5`lLx|s0ceI{FEPm');
define('AUTH_SALT',        '0X@|WC_>]1GXF?nGP:1y(Y;e!yLBc>($`Vi4^j9NW+APG8W}wEK^iK.&N~D~3El>');
define('SECURE_AUTH_SALT', 'ItShGtB3Ryqd0,`*QiXWLhID{&~pv!;9*X1UFo`C)`r)~^]DBjDOg {w.+BK,y Y');
define('LOGGED_IN_SALT',   'C`sp:pXL0.=Af-`3_{pH_DDFiqSt!9%tD*o{obSXCMf|?_/xx3l7z:ab@m@a#}~>');
define('NONCE_SALT',       'WDAF$ p?I8|`rdn43j!{pk{i`y:z>1#q{d,M?vSy7m;iW+|m0F5]cY>AaQG#aBwI');

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

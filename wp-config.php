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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'fgf_iFpa!+,hUw4e<(nX%$k,/_WO.HXJ6})`!p[6ODWMDmwIGUUG.= ?FdRZsaM=');
define('SECURE_AUTH_KEY',  'gjiRt`W{( b|qD3Q}h8,Q8;bKv~4Yddw>tP`*4DVSTRAdSb |z]f.<s{<OUKuUzO');
define('LOGGED_IN_KEY',    'Rza^p#NLUA(5y0Mp !BK}zo`UiY8$+wavD*,,;q#C+Rf2;cmueM9 b!*p+m={+B6');
define('NONCE_KEY',        'vylf:YIvwsb^,WjTH)H{P&S:B5xD6Sf6LDtrsiCqs%NTK?$a&LadH/+AtMi@CapS');
define('AUTH_SALT',        'M^eS-}r;0n[3|P:E}Y=Yw973cO:e?mUO0H*-9fd`)v,C1koWNEn@%)E^b;fniz8b');
define('SECURE_AUTH_SALT', 'LD/.}h4;Snc8Z^S&R5Rfh,@*sJ=|mecm4qE?Jns;,E$Ar9Hssn ,hcM*[Lv[o[pU');
define('LOGGED_IN_SALT',   'r,-X,O2cKrzc q[laR9tgm,*j @qN6P0F3UA=f1!nEGSMJZ4*I%i?U39<MK-;zK9');
define('NONCE_SALT',       '2DMDfT2rG;[*$2i5!V,t,m)~J+ea,^qFmv~}a3[yfsov{wNNWA_FAazEnf)_ -e(');

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

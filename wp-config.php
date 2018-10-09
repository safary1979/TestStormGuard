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
define('DB_NAME', 'test_stormguard_wp');

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
define('AUTH_KEY',         '9N{n4gw9ZW/{yA>`~o0SkWQm9%q[kW @!l r-`cD9q96IQrFO>G63tKVA#^= ;fA');
define('SECURE_AUTH_KEY',  'vEqbjWKT[6?#()?Y:)6{Dz8r3gZes%YrWEFW8IVe#s$GM:BwcK%2h=Ldmny$~A}J');
define('LOGGED_IN_KEY',    'pn9>mS;xIfyg{Tm@yeYmAjCyNrFiTvXd5wP+H3L@/vLdc:?rl^ve@x2w3+LPk)dA');
define('NONCE_KEY',        'b7mh=6<J;X~[b9m2I$&,Rrd& [9K_;s-zjrX7@F^eE@w G~UPbdI`cys$$G1/L~F');
define('AUTH_SALT',        'D:oE9{fV4wkW`pak:Yi.wm/nKfg_=l&{i0O}E[*[d`GTh9{p0^-5jqT#Jbf)2SK)');
define('SECURE_AUTH_SALT', 'tsx*V#S>1, [#A%[}j%ucXz]paI1vZXT3lK$}0b8m1t+y}ecC^v&I2Mp$%x?2>;c');
define('LOGGED_IN_SALT',   '$c#8jQbhQR}zWEYAZ0=:LP~_[fNL7$dj} v/x4[rm5tr@5#ZJgLRd*1j$Bn@Z9Z`');
define('NONCE_SALT',       'W*2?[HIP:V+<7pP=8cSV1r-{vq5]~8_wX@V^lz-)0xu(7U@$pB7KOJEQ:yd|<N0p');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

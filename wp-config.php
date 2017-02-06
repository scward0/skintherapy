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
define('DB_NAME', 'localwp');

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
define('AUTH_KEY',         'PG/D[gUv`%Yh@x>tGik.6ce].w}5I_z+~jd#|:Z??[!amYWwUf/mUiNu;~:K&l6e');
define('SECURE_AUTH_KEY',  'Xp,^_>Y4RnMy8=bAG8S=[NBT]8N[qH]Ed{d#IYvI,NBY6]/!cjsF5#ivp[hO_|RF');
define('LOGGED_IN_KEY',    '|[4P(O7L2px$keN`Pb#+)L2M8Nddq<eF_#;O>7~&ziV2Vms^&7$FeE+2J-rT]GF6');
define('NONCE_KEY',        'M<QQsVn~(ML2oW.aCsAS$Kqj@.DAv:lFLs>Bx%2&#z%]?{-!X{]1YE@hr9X:p_ew');
define('AUTH_SALT',        'FEo~lx,<JVCh<BLxft$,dUFUrs6hYl1UP`tv .--<AX}BD,a!=gx_ZdCgiH#!^ZS');
define('SECURE_AUTH_SALT', 'LTIGE,6JVlr_tAL4d^oHR)[wFIqHIf_|tlOY:1{JxmHD4[Q/OO}g9K(5LHw$,hz.');
define('LOGGED_IN_SALT',   'zIHG@s@qF8VIt4xjB{+~4*Sq$LrG,.uW[o*CH2^pGHE$3ec)o:.d$b#h4/;>.s(-');
define('NONCE_SALT',       'L%1UQVdDBK!]R?SCm3+0u_T)=Mt@;v,b,Pfw0ej!gPN!Fy|fW<u>r,#~s{ATf0y<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_skintherapy_';

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

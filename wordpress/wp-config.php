<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_hydeparkpaddington');

/** MySQL database username */
define('DB_USER', 'hydepa60_hpp_adm');

/** MySQL database password */
define('DB_PASSWORD', 'j8jB6cC8cRxV7EDS');

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
define('AUTH_KEY',         '&i6QO}-7w%Z >Fm3Qebt_41s&b;U}Xx1x&(+[DmV#e`ZjSbP,9%bwbTDs=p&{QnN');
define('SECURE_AUTH_KEY',  '3s%LrP,Jl8{%RLn1NF<Qvs)t%L6vc-M,SmZqYSIJQ_{.i9mhrm)ni9t&blq0!_JR');
define('LOGGED_IN_KEY',    'MUf-gd2|@Ha>[[4:(#wpVppdGmONO3C*(9+yr?-)O/;UKR)mv|w+;Z|Sy,qf5Z65');
define('NONCE_KEY',        '[wJrk*~<Z$|vgXL#tv c/fn<UoallKYSNnA+76Jl$$@VXuaTip%=9,AZVJBU<K~)');
define('AUTH_SALT',        'NG]oCDup&+vp7mKV{/|/2z>uN-x~e&g%JbG8c>5J:sbb]|fysXWwC9IL5=oNGjWp');
define('SECURE_AUTH_SALT', 'UcR.q4+#85iM}:p&fbX[l*P004VtC}e2cEq`NdZW3ep(;+^N>kV]->!CN={:B-6?');
define('LOGGED_IN_SALT',   '~ILAp|`i)+!N_zb~_I6cGAazRT-@ B@D|i!^1|S|m7s[;yeZ9w}A6VIMnh.*V1gp');
define('NONCE_SALT',       'a3mtiymzgwnjfmy2jjyjlmyzzmmjhhmjy2ywrmyzuwodkyyja4yzuxnzg5zwu2od');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_hydeparkpaddington_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

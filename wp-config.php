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
define('DB_NAME', 'ccfnlcm');

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
define('AUTH_KEY',         'vzHm$LVNG9!0S5!MVW`v =r.*Od@`6ahH*#K1N3=gFdV=G,]7mh*p:UM62q2b)OS');
define('SECURE_AUTH_KEY',  '(Dzu5Morjp+u^z=[D<`45/6MkVDsKM-Zk]C>5$!b]`^I(zTG:C8~,?@1JE;y*5F(');
define('LOGGED_IN_KEY',    'D jDmvMdso;8R~9;X=U4Q_=wo0E`cjTo4j$MJ.Nzt#W2tjTsH<l$CxeSDzh+`Yn#');
define('NONCE_KEY',        '?0Q*#6Hx.YaD#Q]|NX8[PIi.z< 2aYisQ6)pKl1z<Ja+ki_XYvg7!i *kjrlt|$&');
define('AUTH_SALT',        'SzJJTR;x0b%T!laC{KVZr#>*OWOG/))HjP9^=N@U*|G2#v?@I;$[P!c1+~XhP=-U');
define('SECURE_AUTH_SALT', 'b<InDja}eAf*;0{4,<lSIL:Dr!Yhb^nek:?=[D(,.e6:ke>6nXBWeA. y_Cbp;ZZ');
define('LOGGED_IN_SALT',   'h;sD@cT:Zbla/Wr}Y!NVVKZUPo?uoVm =z~N-FC<]{3gjnM+saFC+YPf=T<]&iEu');
define('NONCE_SALT',       '5x5NLc&+5F_+B!>|f![B[9Q8|h!g:>0ip(WE3LLJ0xXBtxAhq: ysH&sYpPf)Ea<');

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

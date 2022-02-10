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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'katartem051130040222' );

/** MySQL database username */
define( 'DB_USER', 'test_tasks' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test_tasks' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'c}:W(eYz*S.Pkg;,!AZZY^dp~eOnnC CK{@_UHpgPAau<:|YHj*wv`O*5DjriRY-' );
define( 'SECURE_AUTH_KEY',   'b- g^Y8Dd>`&32eb=MMq/sUB_?HQ E;[8FKsM_0Q$!2X;w#_ny9ZWTeBEjI1Z1y&' );
define( 'LOGGED_IN_KEY',     'TM^DM)(!{[#i@ u)T8,!:h)w|<;gZ=Bcx@iVidpx>L#23B<7,p^2#G=vO,Ab{C0J' );
define( 'NONCE_KEY',         'w:q$s&K?>!sTUf$Q`ltR<4Py45xA+f `Ujj%JhlK@:w_W:J6Y&B %69ARNB(7Hnz' );
define( 'AUTH_SALT',         '.HP%(?&l^ z.bqPl91x7G@)Jx[64 I@X|U_=VM<e=P%TBK9aF~xC;Y?&slc-yY/L' );
define( 'SECURE_AUTH_SALT',  'bThLLq5U/dY;[cgX: ak~7(5m4L-w:L]5vM+qA4q;vO1 g7bh3}wYb(C;nb$%@LB' );
define( 'LOGGED_IN_SALT',    '2$c [=<prBWSIcj=>RL/6/{A]U;Mak6mDBP~/t5vfI3|:<n}k6]VX=OX3v@oDJdY' );
define( 'NONCE_SALT',        'Y-RlcQ|6iuT2jQ^(*Bxc?mJ/W(%feC+bo}5Kd)S|dXSRJm;/57Ffy@#);>B8u@]D' );
define( 'WP_CACHE_KEY_SALT', ')prD@]h}v__G?kMU6!*b{CsRl.d059(H5GZW;9W6E4l;@su/7lt}1<+hKs^HDnb,' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define('FS_METHOD','direct');
define('ALLOW_UNFILTERED_UPLOADS', true);
define('WP_MEMORY_LIMIT','64M');
define('WP_DEBUG', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

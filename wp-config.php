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
define( 'DB_NAME', 'empresa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=Y_PMiVQuEsvk.i&UZGb-|mEv-Y7b3G: MbKZ+~~S.>qg7fj^AliOkwJ qlIEhnt' );
define( 'SECURE_AUTH_KEY',  '>t5}NZDSyb1qe1{C%1~7j,UI$H3EJi8iX;Rx?p6mO{qZTQQVtORxi$Fllun/]8gj' );
define( 'LOGGED_IN_KEY',    'O9M]? a>!?u,trxT9;0(Dh%F*8h-=,SMjw,}U@Gs!fE^5eSIFp_-2~-6??!/xN&I' );
define( 'NONCE_KEY',        'w^&1hS+WU$@.9 k^],lnMBY~3(&*]sGaT4MF-=o [ .7YP;KM2 g]{HlI@a39p.]' );
define( 'AUTH_SALT',        'CC|fHjzlJAi*`Ka[=)yya qfij^=`EHI]3?}O:al4|Y)`dM_@DrQ_2kS%{E]$n/;' );
define( 'SECURE_AUTH_SALT', 'BH6@FReE%V:|QnN7F$RPwR:%.zyYy,Z>V%d78F+Z`{jaO`fvZ<mq.]O026$Rg:,.' );
define( 'LOGGED_IN_SALT',   'P6m ] 3$$p^.=Uyz1l^J[[YpU=t=;/`*~VQU_K~~bO)vAz]0f3,1k=>>H+Q+Cg/!' );
define( 'NONCE_SALT',       'F?<2t_JGA>*mW-mLVGwIrh*^N$fRlg8;I%-;|Bx&Y8cX~ 2DB.mloZ9{.Nh%2TEr' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
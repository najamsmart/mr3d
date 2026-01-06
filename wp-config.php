<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u937814403_DBBDK' );

/** Database username */
define( 'DB_USER', 'u937814403_R4ql2' );

/** Database password */
define( 'DB_PASSWORD', 'DWEmTaOgpf' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ']jK~D>o9YuiI:xE+D+T6[Fjy^8^2-RYv>Ncx6#uoSZ~&MS>*w&~cA!Lou7{H%FDM' );
define( 'SECURE_AUTH_KEY',   'dOeWybRed[[/}Q}XmQ1F>Q^z7:$ljm XCL.jP;82p{Y@/b|jjbMXNuv$f1@nX5.s' );
define( 'LOGGED_IN_KEY',     'znM:rQW^n!JrI3pm;x8B`.g/OmP7`lwo=XpP1kVXFQ-[qbgF!0}zjQN^ja){Zz1<' );
define( 'NONCE_KEY',         '~liy|Q_`3hKMZdaV{RS]oO+nRwfwo]aE39ZK]E,qAn.rF$~# f.^1FW/bU|vmOln' );
define( 'AUTH_SALT',         'CoD^,U-v1Tj Zf0z9kfP%iXR)+AUWl`)F$BQ>nR3)}_daK]oS,=ov|)MFR`l3;PC' );
define( 'SECURE_AUTH_SALT',  'w`{22bjp6Iu5-cr)./V)O9/>[BS=~F9eQuTN,+0aLvVzfmbR,3%0Nf`:lP#Fym?v' );
define( 'LOGGED_IN_SALT',    '=c_c^>)eWm3g^g&|4oa[xGfWUP@B.mc9{~ZPSCOrr|D{]NzAZT?Q/rN)zG`1ss=.' );
define( 'NONCE_SALT',        'ft`A_;A.Ax]e~2rZZH@v,4SHHdaKKFcN^8W -V!X~PwI|WK=6?dtmN_Zdvtm,|&0' );
define( 'WP_CACHE_KEY_SALT', ']),m&jgR/!,#[7wH-47JQ*?hEM:<FFi~1V1`Src>Z*eT*u7}u$dJx1^nux5F}*A&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

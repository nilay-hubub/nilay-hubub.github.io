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
define( 'DB_NAME', 'andrewcwik51680_5i6x_lglawlwfwji' );

/** MySQL database username */
define( 'DB_USER', 'reyynjrjfkcrqjpv' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AB5zy6V4jKiqwLa' );

/** MySQL hostname */
define( 'DB_HOST', 'andrewcwik51680.domaincommysql.com' );

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
define( 'AUTH_KEY',         '<s-BH4`d-dR#DnH$rzwP;^Kx;CDT*qpqI&M72hcKn@8XuE,&yv2|60a06gFyf}uN' );
define( 'SECURE_AUTH_KEY',  'D]<ADMG[ aC5fl[{yRRawCvC+kOa(98r%;ZQ+8+{oeZTZg3e{6?&uQ|mYAp$}DX<' );
define( 'LOGGED_IN_KEY',    '.drsd;woCX]ra&.|Q/J5`BwK23OSS!CxN61nX!TN_5bm65T8V<2NoB$1xFI`S@C.' );
define( 'NONCE_KEY',        '&$KY@n+Dij)y`nMH_Y%2HMW%rZRo&vm7=$j T~$@AvkEj++mm22iXG1|g}MuinEt' );
define( 'AUTH_SALT',        'D5$$O$[8z._(W#G$TczsWL`}-&O;e+h|t9{|)qRL$Cjj5AtO.q~<=2VaO;OWeRLP' );
define( 'SECURE_AUTH_SALT', 'wyzi),0mXzivNYE{PaSxbX&j.1Gy)Un0t)Uo!dj-qmbOd|+fxqG6!5aB{s^16<r^' );
define( 'LOGGED_IN_SALT',   'C7}hOtr6YGw$u!ZW#pdZjN;c;kKv5F+==e57Qz,`E$uBT.;NeLe4g)B{LG$Ye0` ' );
define( 'NONCE_SALT',       'fr0^}hkru`0i7*-n9r_YUNWi%eVeq=6XgO9F{X2OOyv!8E,`%CJo(yVjmf&x8Jz$' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '5i6x_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');

/** Code changes by nilay 
$table_prefix = 'wp_';
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

 Code changes end */
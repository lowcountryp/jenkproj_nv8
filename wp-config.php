<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'wp_mpr56' );

/** MySQL database username */
define( 'DB_USER', 'wp_scka3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rMF81H$q2t' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'q_:bZL2/65hXW1WD(JtnY+dl@fg90+6B&x88:_71r@_-W9)064@Em8hL|g-L|Y2%');
define('SECURE_AUTH_KEY', '_u*v#4c1tbP48rL74nZ5JvIOc7Y_&Za%P]P0H5Aq0CZ-X6827&1i~hhWk;uA7K08');
define('LOGGED_IN_KEY', 'G4e]EG/4a~7tF7-3jZ0:c@frn8hPo*1Z04l%di00Z53d6b*K0zAE*10I#EJfK7FT');
define('NONCE_KEY', 'd5ld-5H738gtk3*_go3c-+o59U#aynYL5Kv56&V_C_b:Ge)d:v+00qfJO#*%%/[I');
define('AUTH_SALT', 'T[W4T@(3|W18n58[fZh+|4Lv/*Q2@tzG:74@9PbN3AD6j9_WP:eg+/*+Wkj:4:(6');
define('SECURE_AUTH_SALT', 'X#z)z[95q9m4t]#QxVNQ-*psocK;1-mIwy&R&-96i5:06:+6Wfa|8X@B29sM(b_(');
define('LOGGED_IN_SALT', '_tQytp]FTJ0+|8i#;8YOXbnInMILf#)83Z;i26k(w#d&a18b@33@DT0+:W@v67)*');
define('NONCE_SALT', 'B7#!W8*Q@EV3cbq-tHrVU5i9Cr:_:T97-h[&Qq1[OH1sOJiz4/nw]]#[q;!1i5E2');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'p47Dtvz_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_25234432_w895' );

/** MySQL database username */
define( 'DB_USER', '25234432_2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S!71BL5p]6' );

/** MySQL hostname */
define( 'DB_HOST', 'sql208.byetcluster.com' );

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
define( 'AUTH_KEY',         'lp4ep9zfpdklhyjen3hrni8wq315lrleqednfrbgqtphupkyso3kxtuy5umcvowf' );
define( 'SECURE_AUTH_KEY',  'cy0e7sg8pr4gyhnom291atkc62cfj3jmczi2qeqoigse33ico8xmytdfxiqgyurz' );
define( 'LOGGED_IN_KEY',    '0k65rraithjafcs5l0yyaz7sp33gf4barg6ajanwnh4g1d8twt9atalf9eqqwj3u' );
define( 'NONCE_KEY',        'r6h5wjykzaw9cgtt00dzgipt3fvehn5nz4ft5hglhafia1beqikgh5vse0kj0puz' );
define( 'AUTH_SALT',        'bvok90t6d0ad07i0hm4aj0h2yzyvpsm7ktjwsatlybtobjx0nvdtdyug2oyzxcdh' );
define( 'SECURE_AUTH_SALT', '0qesqeatzv0ayd7gguoh6ee477kakfru9efhtwca3fkxwqr9wugm9qcktd0g0bgb' );
define( 'LOGGED_IN_SALT',   'd7oitb33av9sy08v1veccdjjudakqnywzr9b9ksryqr5r6ayh6ljujifam3kf6io' );
define( 'NONCE_SALT',       'ovzxqusxleltvm3pb3llbld5kxmp0czmdnbur8fqcbzhkjwd0uu3inmfz76d0hrq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxb_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

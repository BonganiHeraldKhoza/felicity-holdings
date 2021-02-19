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

if(strstr($_SERVER['SERVER_NAME'],'felicity-holdings.local')){

	//Local Connection
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else{

	//Server Connection
	define( 'DB_NAME', 'felicqheqd_db1' );
	define( 'DB_USER', 'felicqheqd_1' );
	define( 'DB_PASSWORD', 'Rb8ENsA7gY19D6L7ngMZ' );
	define( 'DB_HOST', 'sql46.jnb2.host-h.net' );
}


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
define('AUTH_KEY',         '/mpKSxd+Bg3J5wuYM5o/mWmkE9R7MWxaWnISFUdGe1QNgOy+UNfvNYPl4H/9TrUhlXWrX1w/Z1TFxQjdLUuCiA==');
define('SECURE_AUTH_KEY',  'Q6T+YlnoDdT7NCnQv0rXk0fKTGOX9m4GkBexg2rLiRZqYu7OgQ7DJ0/ecX0FDKg/fm1shSnY58GcZDgpXHO42g==');
define('LOGGED_IN_KEY',    'yHoczpuD/snQ4qGAVhQ6qIQHRJ1YtK5ElyLwLh/wrOIqaudW7dbhRx+OKm/Q5EDsGA0vGXEfR0M2C78vw/aJgw==');
define('NONCE_KEY',        '5cg9JZV+WEnWxFNQ8nxcYSJHOqVs+vxza8f8zVt6U9ZoBIDoOmoqlSWnAf6MljEAn6eU45ZY5vi1P8T/f8LSMg==');
define('AUTH_SALT',        'GNACUUJsu/aI+y3OmXzTthY6vtoIbUu6nqw6zS55YiEBB4J6fCJlLjkS2xslWkOCB+P5wODq4OwabLf4nv2CVQ==');
define('SECURE_AUTH_SALT', 'spwEgTYarn83vSPLQ6VrkVEZ12dhc2JJGD6Tc7kamTGCh/Q/fuzfqt/wN72NOZLP4bTuCBXQYGoa9QFhv1W8rw==');
define('LOGGED_IN_SALT',   'yGj78C2Wh9iKsxEUdKe6nmIUIYXXxGLQcann6OD8ky2G2DgaYugsMnIWZONbbcTNXAunIpIzntrOqO1BhbkWTQ==');
define('NONCE_SALT',       'azOQ5GQUlR6DeR1bzUpdARZmjjALKxBGca02S2LwFYspmCQGQN8Q2txXqh1AI5zP/GPQKRpOFWIl4NZjceBXNg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

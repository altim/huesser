<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'huesser');

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
define('AUTH_KEY',         'Zuh~zS{e)m&5@5gI-i^vhkM),3k|F%+ZB;o59)7WmBq|)-m*0?b;Nd*/]bq(e^*r');
define('SECURE_AUTH_KEY',  'J~=Y$Ubt>wsmODybkx:8EF,|vcy6D2-s;^V~HQI6:a!?R*)foT=$LWl-Eo9f!vkR');
define('LOGGED_IN_KEY',    '7,/<)+]3C|=gZ&fU0s3A$4MLStkJKOEH=p_|y|XDi--|S-B[PK-(t0)dJv{A9Zi.');
define('NONCE_KEY',        '>IFDB6i(7bkG.6hRcXs|A3t;JfNe^q!g#7n-%n{Si4l+`@G<NhX*7ogUb&&q+L]]');
define('AUTH_SALT',        'j|T>CQ7JjJS%<*5K/C]mc)LYU,PMJMiA 27Hff>a0eY8S=j+3sFA&oLW_m%kZ]YE');
define('SECURE_AUTH_SALT', '.>bqsOz>SgVt@soBfpf|vJp{1Zjjp^U]MQvl@+ZevoWc+Z5YFOL8B.%i$^.kUR7h');
define('LOGGED_IN_SALT',   'WKRIJ,{!`1@Ad7.3&/@fLk}|V};GgO[YJru-o[]x;v-k{1@`Nx5X2#CHt@$)yCTj');
define('NONCE_SALT',       'r|Nx3l|xn?%MC-Ma}c}~-3pWD%[/%-/W}l^%,}.GcR9$KGV8a$kmQ8,oI{[0-_Iq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

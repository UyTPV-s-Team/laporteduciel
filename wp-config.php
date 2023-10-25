<?php

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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'laporteduciel');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '&@{8N!>xJMqMwpr+T#l/;A6Vf`{=RmGL!.L`.fWjIS=IJCh2<26vz~Sa*dZGN8Ui');
define('SECURE_AUTH_KEY',  'FA~29:n1t{lt.HuMe6C]j?TSN#e spo)!_T8^edq2.1[FClyE=b+9@A^&J~Kznl0');
define('LOGGED_IN_KEY',    '<}fM:jF-MP4dtr[u=|bU-dI@>JnkM!l?iU<PJ?7Jg);~lQLeX~d)@} 246=dqPfZ');
define('NONCE_KEY',        'jF|lFj)1z:W%>Uc$AMLs_;qas?vH6_`(O`l6S7cdjx+2%}Zs/RWa;pQ4qTT#v3ni');
define('AUTH_SALT',        ' |~L6E:4de;E!%f$3XYeKismKyW#ePszbTP(G;Jd&R6;y/n[Jk_9$2r^$=}+:m?@');
define('SECURE_AUTH_SALT', 'CfK2`M+/>8F:PLy[,A0zY:6><G-MIjoOH>j/dO9IS4s3 y@d@l_re%O@=.$+KC6l');
define('LOGGED_IN_SALT',   '>GjR-S| P[|5|yJoUPy[|uFi]*X/1Q&8^3P^$*18]H=h5BL@^t#`XPyvex(@kCQ2');
define('NONCE_SALT',       't5SE26[x5;IZ$:Q,I-f}g4Q-.zY#&)7EhxYtUu4|80t qAl$`jBz1:7aX_8]BReF');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

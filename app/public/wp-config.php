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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '7!{CGJ$_mU&kgBl7&TO8;O4Qco5?&=]4F3+{j7ZJ+/KFz)WP+Su4]!V)nZ8-J:RM' );
define( 'SECURE_AUTH_KEY',   'qyq&8uzDnR/:G%qVZE,=yi?c,|I`{,a}4WD4y)75ACT%d2-Er-nJTvNsY&qLRDFx' );
define( 'LOGGED_IN_KEY',     '(d::UHa!_ LQK,zxdFofVVgLM<#i(48aT,~jm/uHS%Ge;}0ntQyJ2J::q-`Do{F%' );
define( 'NONCE_KEY',         'fA;q09AkuzK^~|g5:Gc@6&sfBX`@BEM=ShA^sD-J0#?t]KYh[(.N9Q&];)j9JSD0' );
define( 'AUTH_SALT',         '^VYKHFmO!oB%K}ydL4;MD~i*o}nwfO_-?JYF=71}V,Tbi5AKrAuVh>,%M|f<-Rt6' );
define( 'SECURE_AUTH_SALT',  'W|;Z22I$twaz{WH]WLeWmyi,T_aqzI3%Bg,xH]b7-{|VIf4#!|[Yj_opVNo?0x_S' );
define( 'LOGGED_IN_SALT',    'hRn_rlF9;+SN!;:7|YNti]-njh?e;o<sB?Cbj{AXf2c_UR4$[t[(1F@ |KB/5`dj' );
define( 'NONCE_SALT',        'ZHBlH0/7P,il&A_(3gfKjs8i<=P))8q6 *iMA!%(fF`pnF.2<F%[>n5V*7E(7DUd' );
define( 'WP_CACHE_KEY_SALT', 'O6-wamQTtO9*p<X:6Dyu6R+v*!ijD.um4U<@/rt;F*cXwbFq:~J+;2cBqZf+xXnj' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

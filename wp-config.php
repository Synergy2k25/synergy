<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'synergy_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '{`BaADFYN9e{VKi#uyZg=Z!pe8[@(MUb={`-(VE&2aRMm}=ZLGRd}Po @*^@|~g(' );
define( 'SECURE_AUTH_KEY',  'Gv+*T-cyEv)4C#EYN|QanD]enm9|7!b.x~6xyeDFq{Wpi+I~>Uqpvv<G`S_nzeC|' );
define( 'LOGGED_IN_KEY',    '&+D3e?<l.W-P<ad`0skze0m{GX!(@UTBOQ>e0O>f8HBKrNOLgX~U$WGX3xQoj@c|' );
define( 'NONCE_KEY',        '8y7&TOlzn!<94Nz3L=e&[)9eH8ysD%zV_|5%d40L%]UH<cmzhIz5YmJjTnt8-c?V' );
define( 'AUTH_SALT',        ':h9PcEF%0Nh&MibN.PaXMN;D%Q!C+@Laex[8aSg1=/{AuHo)6O/$y[*Dzj.,b?@B' );
define( 'SECURE_AUTH_SALT', '.n%]Jr3(9vkAa2f)OG;Y&9/hANu+X6C>bao>ma! :-l^3tTBCU2`7j[Jet9li719' );
define( 'LOGGED_IN_SALT',   'vOhE~HWsO,}+%W,.H8Ru}q}9:U-M(|3=->V(^wH3m8c.aubw6#/0ubPdP,tD2Y!2' );
define( 'NONCE_SALT',       'E@ZhmB;WCwlO=vfk}],jB^i!UeAHb:ID~.W2J-Bu^_iVa#z7#vj<wFH6L)LeCkjc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

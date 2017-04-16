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

// wp-admin password: i3MRt@3!Z$vy5dNxjT
// HG ftp account pw: ,A)Fa(Wb^5-r
// HG ftp account user login: test@gabeneri.com
// Directory: /home3/gneri723/public_html/test

// ** MySQL settings - You can get this info from your web host ** //

if ( $_SERVER['HTTP_HOST'] == 'localhost' ) {
  /** The name of the LOCAL database for WordPress */
  define('DB_NAME', 'gabe_wp');

  /** MySQL database username */
  define('DB_USER', 'gn_wp');

  /** MySQL database password */
  define('DB_PASSWORD', 'rvsKm01VbyRX0R3I');
}else{
  /** The name of the LIVE database for WordPress */
  define('DB_NAME', 'gneri723_test');

  /** MySQL database username */
  define('DB_USER', 'gneri723_test');

  /** MySQL database password */
  define('DB_PASSWORD', 'NucB?L~94@q,');
}


/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         'Q{:F$x!P2M$m`:/iRRfv:8D%}V/ly||>krZ;ivFpUKr-LUh:BD|WeO+L$1ZmNHRD');
define('SECURE_AUTH_KEY',  'ZC^Jh87`X49r2^sl-1uLmf:;_2rYrapIrC:Z#mYv+bT? XgmXgybz1qAG7-g= L.');
define('LOGGED_IN_KEY',    '0G-d9/d|iN k9@q=H^`Y-lxP-Z(gD08fD|:60?we pp(:T2$V*)}&rBJ6TZ336TP');
define('NONCE_KEY',        '$n_vGCfxCK}m5?4@_, 7uL`-10|:6Ou+Y{?Rdv!Itw$S9mcAYE|<G6kcf,!BU/hF');
  define('AUTH_SALT',        'F]c:#c/q_<h>++|C6h(ohLvfl!^`CT,K+56k{&i5BD^:]DkFp4qZ?fd#-`7)/pSD');
    define('SECURE_AUTH_SALT', '9SWaxN_jXY;T+u-ft?5NC]X$Vn9i2+Vj#5G4Y_%f&cSUg,{1-8D[Bh%A(>(}ENa#');
    define('LOGGED_IN_SALT',   'RGo*mS|S#.<)WH!ofei|~_35$.s#UCf^Q%b_RON0s$iGlGA>t0xxL4&6zHo?))g|');
    define('NONCE_SALT',       '^C%6;mEG|[>YEb0zCDALv;`<@TFgtUDn?:h@%x)}x,MG]Zy|2{ZIs@)Y}9R@4~=B');

    /**#@-*/

    /**
    * WordPress Database Table prefix.
    *
    * You can have multiple installations in one database if you give each
    * a unique prefix. Only numbers, letters, lowercase(for live sites), and underscores please!
    */
    $table_prefix  = 'lybjhdqd9o1htylx_';

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
    define('WP_DEBUG', false);

    /* That's all, stop editing! Happy blogging. */

    /** Absolute path to the WordPress directory. */
    if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

    /** Sets up WordPress vars and included files. */
    require_once(ABSPATH . 'wp-settings.php');

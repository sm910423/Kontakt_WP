<?php
# Database Configuration
define( 'DB_NAME', 'wp_kontaktsite' );
define( 'DB_USER', 'kontaktsite' );
define( 'DB_PASSWORD', 'SQHnM9etm8Xv7yADLbWL' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '~?=~Ik-2/LfH>j#vz,O+!d;t|,T8-B]jLZ:f7h!B~J0y=SYqT5AS#Zw-*K!*EO8d');
define('SECURE_AUTH_KEY',  '^vcKNT+LYs[aS!a%W~W(.;9jj}Cn4(mRt,?YZtcSD|-|k_jD[zZ,}87,G+AA|}.X');
define('LOGGED_IN_KEY',    '` *[!ncaC?oehSi>DNb3LT,x:3K1%LKdCBnNrzOT88mk8;x$sZAY)c|rZ=WgAKV>');
define('NONCE_KEY',        '~EI[-e~ Pw{M|^q`4-K]e[lTVw!y|Lv7MsacK+`6:iI5wG$%M4i,|{eH*(uBrd##');
define('AUTH_SALT',        '+JG0td5I)O6J/Q++^ E($PBPm/-]BP,)>oF$0h]ZX7K|A}84w`FC%+XG$b.++1.:');
define('SECURE_AUTH_SALT', '$-hd`.rMQu@)Nsw[0|vA42mSur^K;jOH-<[gc>&I&rC,Vgu:KC~s<`_e59-NW]!#');
define('LOGGED_IN_SALT',   '%4WerN<rT-!*PF|k)Ly:TC/F,=DVT=HhE,4!nO@p88Um ycIIkNiJVZ~2.*Lz`C:');
define('NONCE_SALT',       ':cks2(&(=vF]fQ@L^lSmZeg.YQY:~( NP),/<mMm{lkvS=chGj O1h-&,r-Rhl-}');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'kontaktsite' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '1baf0071b7cf44bf58fcac102f114c4114f82e4d' );

define( 'WPE_CLUSTER_ID', '101082' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'kontaktsite.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101082', );

$wpe_special_ips=array ( 0 => '130.211.188.184', );

$wpe_ec_servers=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}

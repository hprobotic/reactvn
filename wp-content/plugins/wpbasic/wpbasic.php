<?php
/*
Plugin Name: WPBASIC
Plugin URI: 
Description: Plugin is written by e-Types developer. It provides all common features that use frequently.
Version: 1.0
Author: 
Author URI: 
License: GPLv2 or later
Text Domain: e-types
*/

define("WPBASIC_URI", dirname(__FILE__));
define("WPBASIC_URL", plugin_dir_url(__FILE__));

function my_autoloader($class) {
    $class = str_replace('\\', '/', $class);
  
    $fileName = WPBASIC_URI.'/src/'.$class.'.php';
   
    if (file_exists($fileName)) {
        require_once($fileName);
    }
}
spl_autoload_register('my_autoloader');

/** 
 * add css to admin
 */
add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
    wp_enqueue_style( 'admin_css', WPBASIC_URL . '/css/admin_style.css', false, '1.0.0' );
}


$option = require_once 'src/Packages/Option/Option.php';
$listFeature = $option->getListFeature();
foreach ($listFeature as $feature) {
    if ($feature['status'] == "active") {
        require_once $feature['src'];
    }
}


function jal_install() {
   global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();
    $tablePostType = $wpdb->prefix."custom_post_type";
    $tableTaxonomy = $wpdb->prefix."custom_taxonomy";
    $tablePostsToPosts = $wpdb->prefix."custom_posts_to_posts";
    $tableLanguage = $wpdb->prefix."languages";
    $tableTranslate = $wpdb->prefix."ml_translate";
    
    $sql = "
        CREATE TABLE IF NOT EXISTS `$tableTaxonomy` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `taxonomy` varchar(255) NOT NULL,
            `object_type` longtext NOT NULL,
            `labels` longtext NOT NULL,
            `args` longtext NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;";
    
    $sql1 = "
        CREATE TABLE IF NOT EXISTS `$tablePostType` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `post_name` varchar(255) NOT NULL,
            `labels` longtext NOT NULL,
            `supports` longtext NOT NULL,
            `public` tinyint(1) NOT NULL,
            `has_archive` tinyint(1) NOT NULL,
            `rewrite` longtext NOT NULL,
            `menu_icon` varchar(255) NOT NULL,
            `menu_position` int(11) NOT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `post_name` (`post_name`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;";
    $sql3 = "
        CREATE TABLE IF NOT EXISTS `$tablePostsToPosts` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `post_from` varchar(255) NOT NULL,
            `post_to` varchar(255) NOT NULL,
            `type` longtext NOT NULL,
            `args` longtext NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0;";
    $sqlLang = "CREATE TABLE IF NOT EXISTS `$tableLanguage` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `code` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
        `english_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
        `major` tinyint(4) NOT NULL DEFAULT '0',
        `active` tinyint(4) NOT NULL,
        `default_locale` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
        `tag` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
        `encode_url` tinyint(1) NOT NULL DEFAULT '0',
        PRIMARY KEY (`id`),
        UNIQUE KEY `code` (`code`),
        UNIQUE KEY `english_name` (`english_name`)
      ) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=0 ;";
    
    $sqlTranslate = "CREATE TABLE IF NOT EXISTS `$tableTranslate` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `object_type` varchar(255) NOT NULL,
        `object_id` int(11) NOT NULL,
        `language_code` varchar(255) NOT NULL,
        `source_id` int(11) NOT NULL,
        `type` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    dbDelta( $sql1 );
    dbDelta( $sql3 );
    dbDelta( $sqlLang );
    dbDelta( $sqlTranslate );
}

add_action('init', 'jal_install');
register_activation_hook( __FILE__ , 'jal_install' );


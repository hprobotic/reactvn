<?php
function jal_install () {
   global $wpdb;

   $table_name = $wpdb->prefix . "liveshoutbox"; 
   global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();
    $tablePostType = $wpdb->prefix."custom_post_type";
    $tableTaxonomy = $wpdb->prefix."custom_taxonomy";
    
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


    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    dbDelta( $sql1 );
}
register_activation_hook( __FILE__, 'jal_install' );
<?php
namespace Packages\PostType;

class PostTypeModel {
    public function __construct () {
        global $table_prefix;
        $this->tableName = $table_prefix.'custom_post_type';
    }
    
    public function findById($id) {
        global $wpdb;
       
        $note = $wpdb->get_row( $wpdb->prepare(
	"
            SELECT * FROM $this->tableName WHERE id = %d  
	", $id));
        
        return $note;
    }
    
    public function getList($start, $limit) {
       global $wpdb;
       
        $list = $wpdb->get_results( $wpdb->prepare(
	"
            SELECT * FROM $this->tableName LIMIT %d, %d
	", $start, $limit));
     
        return $list;
    }
    
    public function getAll() {
       global $wpdb;
        $list = $wpdb->get_results(" SELECT * FROM $this->tableName");
        
        return $list;
    }
    
    
    public function insert($args = array()) {
        global $wpdb;

        $wpdb->insert( 
            $this->tableName, 
            array( 
                'post_name' => $args['post_name'], 
                'labels' => $args['labels'],
                'supports' => $args['supports'],
                'public' => $args['public'],
                'has_archive' => $args['has_archive'],
                'rewrite' => $args['rewrite'],
                'menu_icon' => $args['menu_icon'],
                'menu_position' => $args['menu_position']
            ), 
            array( '%s', '%s', '%s', "%d", "%d", "%d", '%s', '%s', "%d" )
        );
    }
    
    public function update($id, $args = array()) {
        global $wpdb;
        $wpdb->update( 
            $this->tableName, 
            array( 
                'post_name' => $args['post_name'], 
                'labels' => $args['labels'],
                'supports' => $args['supports'],
                'public' => $args['public'],
                'has_archive' => $args['has_archive'],
                'rewrite' => $args['rewrite'],
                'menu_icon' => $args['menu_icon'],
                'menu_position' => $args['menu_position']
            ), 
            array(
                'id' => $id
            ),
            array( '%s', '%s', '%s', "%d", "%d", '%s', '%s', "%d" ),
            array( '%d' )
        );
    }
    
    
    
    
    public function delete($id) {
        global $wpdb;
        $wpdb->delete(
            $this->tableName,
            array(
                'id' => $id
            ),
            array( '%d' ) 
        );
    }
    
    public function getTotal() {
        global $wpdb;
        $result = $wpdb->get_var( "SELECT COUNT(*) FROM $this->tableName");
        
        return $result;
    }

}


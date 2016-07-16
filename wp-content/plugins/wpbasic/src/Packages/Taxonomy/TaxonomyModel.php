<?php
namespace Packages\Taxonomy;

use Packages\Model\Model;

class TaxonomyModel extends \Packages\Model\Model {
    
    
    public function __construct () {
        global $table_prefix;
        $this->tableName = $table_prefix.'custom_taxonomy';
    }
    
    
    public function insert($args = array()) {
        global $wpdb;

        $wpdb->insert( 
            $this->tableName, 
            array( 
                'taxonomy' => $args['taxonomy'], 
                'object_type' => $args['object_type'],
                'labels' => $args['labels'],
                'args' => $args['args']
            ), 
            array( '%s', '%s', '%s', '%s')
        );
    }
    
    public function update($id, $args = array()) {
        global $wpdb;
        $wpdb->update( 
            $this->tableName, 
            array( 
                'taxonomy' => $args['taxonomy'], 
                'object_type' => $args['object_type'],
                'labels' => $args['labels'],
                'args' => $args['args'],
            ), 
            array(
                'id' => $id
            ),
            array( '%s', '%s', '%s', '%s'),
            array( '%d' )
        );
    }

}


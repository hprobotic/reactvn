<?php
namespace Packages\PostsToPosts;
use Packages\Model\Model;

class PostsToPostsModel extends Model {
    
    public function __construct () {
        global $table_prefix;
        $this->tableName = $table_prefix.'custom_posts_to_posts';
    }
    
    public function insert($args = array()) {
        global $wpdb;

        $wpdb->insert( 
            $this->tableName, 
            array( 
                'post_from' => $args['post_from'], 
                'post_to' => $args['post_to']
            ), 
            array( '%s', '%s' )
        );
    }
    
    public function update($id, $args = array()) {
        global $wpdb;
        $wpdb->update( 
            $this->tableName, 
            array( 
                'post_from' => $args['post_from'], 
                'post_to' => $args['post_to']
            ), 
            array(
                'id' => $id
            ),
            array( '%s', '%s' ),
            array( '%d' )
        );
    }
}


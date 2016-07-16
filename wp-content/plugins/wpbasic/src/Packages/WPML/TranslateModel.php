<?php
namespace Packages\WPML;
use Packages\Model\Model;

/**
 * model for name language and code
 */
class TranslateModel extends Model {
    
    public function __construct () {
        global $table_prefix;
        $this->tableName = $table_prefix.'ml_translate';
        add_action('delete_post', array($this, 'delete'));
    }
    
    public function checkExist($args) {
        global $wpdb;
        $listPostType = get_post_types();
        if (in_array($args['object_type'], $listPostType)) {
            $sql = "SELECT COUNT(*) FROM $this->tableName WHERE object_id = %d AND object_type = %s AND type='post'";
        } else {
            $sql = "SELECT COUNT(*) FROM $this->tableName WHERE object_id = %d AND object_type = %s AND type='taxonomy'";
        }
        $result = $wpdb->get_var($wpdb->prepare($sql, $args['object_id'], $args['object_type']));

        if ($result >0 ) {
            return true;
        } else {
            return false;
        }        
    }
    
    public function getAllPostByLang($langCode, $postType) {
        global $wpdb;
        $sql = "SELECT p.ID, p.post_title FROM $this->tableName t LEFT JOIN {$wpdb->prefix}posts p ON t.object_id = p.ID WHERE language_code = %s AND object_type = %s AND type='post'";
        $result = $wpdb->get_results($wpdb->prepare($sql, $langCode, $postType));
        
        return $result;
    }
    
    
    public function getIdSourcePost($objectId) {
        global $wpdb;
        $sql = "SELECT source_id FROM $this->tableName WHERE object_id = %d AND type='post' LIMIT 0, 1";
        $result = $wpdb->get_var($wpdb->prepare($sql, $objectId));
        
        return $result;
    }
    
    public function getIdbySource($objectId, $lang) {
        global $wpdb;
        $sql = "SELECT object_id FROM $this->tableName WHERE source_id = %d AND language_code=%s LIMIT 0, 1";
        $result = $wpdb->get_var($wpdb->prepare($sql, $objectId, $lang));
        
        return $result;
    }
    
    public function getPostCountLanguage($args) {
        global $wpdb, $table_prefix;
        $sql = "SELECT COUNT(*) FROM $this->tableName t LEFT JOIN ".$table_prefix."posts p ON p.ID = t.object_id WHERE object_type = %s AND language_code = %s AND type='post' ";
        if (isset($_GET['post_status'])) {
            $sql .= " AND p.post_status = %s ";
        }

        
        return $wpdb->get_var($wpdb->prepare($sql, $args['object_type'], $args['language_code'], $_GET['post_status']));
    }
    
    public function getTaxonomyCountLanguage($args) {
        global $wpdb, $table_prefix;
        $sql = "SELECT COUNT(*) FROM $this->tableName t LEFT JOIN ".$table_prefix."terms p ON p.term_id = t.object_id WHERE object_type = %s AND language_code = %s AND type='taxonomy' ";
        
        return $wpdb->get_var($wpdb->prepare($sql, $args['object_type'], $args['language_code']));
    }
            
           
    
    public function getPostObjectLanguages($object_id) {
        global $wpdb;
        $sql = "SELECT * FROM $this->tableName WHERE object_id = %d AND type='post' ";
        $row = $wpdb->get_row( $wpdb->prepare($sql, $object_id));
        
        return $row;
    }
    
    public function getTaxonomyObjectLanguages($object_id) {
        global $wpdb;
        $sql = "SELECT * FROM $this->tableName WHERE object_id = %d AND type='taxonomy' ";
        $row = $wpdb->get_row( $wpdb->prepare($sql, $object_id));
        
        return $row;
    }
    
    public function update($args) {
        global $wpdb;
        if (!$this->checkExist($args)) {
            $wpdb->insert( 
                $this->tableName, 
                array(
                    'object_type' => $args['object_type'],
                    'object_id' => $args['object_id'], 
                    'type' => $args['type'],
                    'language_code' => $args['language_code'],
                    'source_id' => $args['source_id']
                ), 
                array( '%s', '%s', '%s', '%s', "%d")
            );
        } else {
            $wpdb->update( 
                $this->tableName, 
                array( 
                    'language_code' => $args['language_code'],
                    'source_id' => $args['source_id']
                ), 
                array(
                    'object_id' => $args['object_id'], 
                    'type' => $args['type'],
                ),
                array( '%s', "%d"),
                array( '%d', '%s')
            );
        }

    }
    
    public function deletePostById($post_id) {
        global $wpdb;
        $wpdb->delete(
            $this->tableName,
            array(
                'object_id' => $post_id,
                'type' => 'post'
            ),
            array( '%d', '%s') 
        );
    }
    
    public function delete($post_id) {
        $this->deletePostById($post_id);
    }
    
    
}

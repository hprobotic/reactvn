<?php
namespace Packages\WPML;
use Packages\Model\Model;

/**
 * model for name language and code
 */
class LanguagesModel extends Model {
    public function __construct () {
        global $table_prefix;
        $this->tableName = $table_prefix.'languages';
    }
    
    public function getListAllActive() {
        global $wpdb;

        $list = $wpdb->get_results(
        "
            SELECT * FROM $this->tableName WHERE active = 1
        ");

        return $list;
    }
    
    public function insert($args = array()) {
        global $wpdb;

        $wpdb->insert( 
            $this->tableName, 
            array( 
                'code' => $args['code'], 
                'english_name' => $args['english_name'],
                'active' => (int) $args['active']
            ), 
            array( '%s', '%s', "%d" )
        );
    }
    
    public function update($id, $args = array()) {
        global $wpdb;
        $wpdb->update( 
            $this->tableName, 
            array( 
                'code' => $args['code'], 
                'english_name' => $args['english_name'],
                'active' => $args['active']
            ), 
            array(
                'id' => $id
            ),
            array( '%s', '%s', "%d" ),
            array( '%d' )
        );
    }
    
    public function changeStatus($status, $lang_code) {
        global $wpdb;
        $wpdb->update( 
            $this->tableName, 
            array( 
                'active' => $status
            ), 
            array(
                'code' => $lang_code,
            ),
            array( '%d' ),
            array( '%s' )
        );
    }
}

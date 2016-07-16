<?php
namespace Packages\Model;

class Model {
    public $tableName; 
    public function __construct () {
        //global $table_prefix;
       // $this->tableName = $table_prefix.'contact_region';
    }
    
    public function findById($id) {
        global $wpdb;
       
        $contact = $wpdb->get_row( $wpdb->prepare(
	"
            SELECT * FROM $this->tableName WHERE id = %d
	", $id));
        
        return $contact;
    }
    
    public function getList($start, $limit, $order = null) {
       global $wpdb;
        if (isset($order['orderby']) && isset($order['order'])) {
            $list = $wpdb->get_results( $wpdb->prepare(
            "
                SELECT * FROM $this->tableName ORDER BY ".$order['orderby']." ". $order['order']."  LIMIT %d, %d
            ", $start, $limit));
        } else  {
            $list = $wpdb->get_results( $wpdb->prepare(
            "
                SELECT * FROM $this->tableName  LIMIT %d, %d
            ", $start, $limit));
        } 
        
        return $list;
    }
    
    public function getAll() {
       global $wpdb;
        $list = $wpdb->get_results(" SELECT * FROM $this->tableName ");
        
        return $list;
    }
    
    public function delete($id) {
        global $wpdb;
        $wpdb->delete(
            $this->tableName,
            array(
                'id' => $id,
            ),
            array( '%d') 
        );
    }
    
    public function getTotal() {
        global $wpdb;
        $result = $wpdb->get_var( "SELECT COUNT(*) FROM $this->tableName");
        
        return $result;
    }
}

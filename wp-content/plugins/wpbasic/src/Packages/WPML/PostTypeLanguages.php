<?php

namespace Packages\WPML;

use Packages\WPML\Translate;
use Packages\WPML\Config;
use Packages\Lib\Utilities;
use Packages\Form\Form;

/**
 * Manage language for post type
 *
 * @author khaivo
 */
class PostTypeLanguages {
    
    public function __construct() {
        add_action( 'add_meta_boxes', array($this, 'addBoxLanguages'));
        // Add extra infor to admin post type
        add_action('init', array($this, 'addLanguageColumnsPostType'));
        // save language when save post
        add_action( 'save_post', array($this, 'savePostLanguages'), 10, 2 );
        // add join table language
        add_filter('posts_join', array($this, 'addCondJoin'), 10, 2);
        // add where condition when filter by language 
        add_filter('posts_where', array($this, 'addCondWhere'), 10, 2 );
    }
    
    /**
     * Add meta box to select language.
     */
    public function addBoxLanguages() {
        $listPostType = Config::getListTranslatePostType();
        foreach ( $listPostType as $screen ) {
            add_meta_box('languages', __( 'Languages', 'etypes' ), array($this, 'boxLanguageCallback'), $screen, 'side', 'high');
        }
    }
    
    /**
     * Prints the box content.
     * 
     * @param WP_Post $post The object for the current post/page.
     */
    public function boxLanguageCallback( $post ) {

        // Add a nonce field so we can check for it later.
        wp_nonce_field( 'languages_nonce', 'languages_nonce' );

        $data = (array) unserialize(get_option("etypes_ml_setting"));
        $form = new Form();

        echo "Language of this post<br/><br/>";
        echo $form->get_select_input(array(
            'id' => 'languages',
            'name' => 'languages',
            'selected' => Translate::getPostLanguages($post->ID, $post->post_type),
            'options' => Languages::getArrayLangs()
        ));

        echo "<script>jQuery('#languages').change(function() { jQuery('#publish').click(); });</script>";
    //        echo "<br /><br/>This is a translation of:<br />";
    //        echo $form->get_select_input(array(
    //            'id' => 'source_post',
    //            'name' => 'source_post',
    //            'selected' => Translate::getIdSourcePost($post->ID),
    //            'options' => Translate::getArrayAllPostByLang($data['defaultLanguage'], $post->post_type)
    //        ));

    }
    
    
    /**
    * When the post is saved, saves our custom data.
    *
    * @param int $post_id The ID of the post being saved.
    */
    function savePostLanguages( $post_id, $post ) {
     
       if ($_SERVER['REQUEST_METHOD'] == "POST") {

           // Check if our nonce is set.
           if ( ! isset( $_POST['languages_nonce'] ) ) {
               return;
           }

               // Verify that the nonce is valid.
           if ( ! wp_verify_nonce( $_POST['languages_nonce'], 'languages_nonce' ) ) {
               return;
           }

           // If this is an autosave, our form has not been submitted, so we don't want to do anything.
           if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
               return;
           }
           
           $translate_model = new TranslateModel();
           $args = array(
               'object_id' => $post_id,
               'object_type' => $post->post_type,
               'type' => 'post',
               'language_code' => $_POST['languages'],
               'source_id' => (int) $_POST['source_post']
           );
      
           $translate_model->update($args);
           update_post_meta( $post_id, 'languages', $_POST['languages'] );
       }
    }


    
    /**
     * Add Column language for all type post type setting multiple language
     */
    public function addLanguageColumnsPostType() {
        $listPostType = Config::getListTranslatePostType();
        foreach ($listPostType as $post_type) {
            add_filter('manage_edit-'.$post_type.'_columns', array($this, 'addPostTypeLanguageColumns'));
            add_action('manage_'.$post_type.'_posts_custom_column', array($this, 'managePostTypeLanguageColumns'), 10, 2);
        }
    }
    
    /**
     * add name for column language 
     * @param Array $columns
     * @return Array
     */
    public function addPostTypeLanguageColumns($columns) {
        $newColumns = array('language' => __("Language", "etypes"));

        return Utilities::insertToPositionArray(1, $columns, $newColumns);
    }
    
    /**
     * Echo language code for each post
     * @param String $columnName
     * @param String $postId
     */
    public function managePostTypeLanguageColumns($columnName, $postId) {
        switch ($columnName) {
            case 'language':
                echo Translate::getPostLanguages($postId);
                break;
        }
    }
    
    /**
     * 
     * @global type $wpdb
     * @param string $join
     * @param type $wp_query_object
     * @return string
     */
    public function addCondJoin($join, $wp_query_object) {
        if (isset($wp_query_object->query_vars['lang_code'])) {
            global $wpdb;
            $lang_table = $wpdb->prefix."ml_translate";
            $join .= " LEFT JOIN $lang_table lang ON " . $wpdb->posts . ".ID = lang"  . ".object_id ";
        }

        return $join;
    }
    
    /**
     * 
     * @param string $where
     * @param type $wp_query_object
     * @return string
     */
    public function addCondWhere( $where, $wp_query_object) {
        if (isset($wp_query_object->query_vars['lang_code'])) {
            $where .= " AND lang.language_code = '".$wp_query_object->query_vars['lang_code']."' AND lang.type='post'";
        }

        return $where;
    }

}

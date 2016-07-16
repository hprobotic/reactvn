<?php
namespace Packages\WPML;

use Packages\Lib\Utilities;
use Packages\WPML\Languages;
use Packages\WPML\Translate;
use Packages\WPML\Config;
use Packages\Form\Form;

/**
 * Description of TaxonomyLanguage
 *
 * @author khaivo
 */
class TaxonomyLanguage {
    public function __construct() {
        add_action('init', array($this, 'addLanguageTaxonomy'));
    }
    
    public function addLanguageTaxonomy() {
        // Filter Term by language when edit or edit a post type
        add_filter('get_terms', array($this, 'filterTermInPost'), 20, 3);
        //Add filter by language for all taxonomy, when list term in admin
        add_filter( 'terms_clauses', array($this, 'getTermbyLanguage'), 10, 3 );
        
        $list_taxonomy = Config::getListTranslateTaxonomy();
        foreach ($list_taxonomy as $taxonomy) {
            add_action($taxonomy.'_add_form_fields', array($this, 'taxonomyFormLanguageAdd'), 10 );
            add_action($taxonomy.'_edit_form_fields', array($this, 'taxonomyFormLanugageEdit'), 10, 2 );
            /** Save Custom Field Of Category Form */
            add_action('created_'.$taxonomy, array($this, 'taxonomyFormLanguageSave'), 10, 2 ); 
            add_action('edited_'.$taxonomy, array($this, 'taxonomyFormLanguageSave'), 10 );
            // ADDS EXTRA INFO TO ADMIN MENU FOR PRODUCT POST TYPE
            add_filter("manage_edit-".$taxonomy."_columns", array($this, "taxonomyLanguageNameColumns"));
            add_action("manage_".$taxonomy."_custom_column",  array($this, "taxonomyLanguageVauleColumns"), 10, 3);   
        }
    }
    
    public function filterTermInPost($terms, $taxonomies, $args) {
        /**
        * This codition will filter term by language when edit a post.
        */
        if (is_admin()) {
           global $post;
           if (is_object($post)) {
               $postLangCode = Translate::getPostLanguages($post);
               if (!$postLangCode) {
                   $postLangCode = 'en';
               }

               $taxonomy = array_shift($taxonomies);
               $listTaxonomyTranslate = Config::getListTranslateTaxonomy();
               foreach ($terms as $key => $value) {
                   if (in_array($taxonomy, $listTaxonomyTranslate)) {
                       $taxonomyLangCode = Translate::getTaxnomyLanguage($value->term_id);
                       if ($taxonomyLangCode != $postLangCode) {
                           unset($terms[$key]);
                       }
                   }
               }
           }
        }

        /**
        * This condition for filter by language when using hook get_terms
        * Using by add new params lang_code is current language
        */
        if (isset($args['lang_code'])) {
           foreach ($terms as $key => $value) {
               $taxonomyLangCode = Translate::getTaxnomyLanguage($value->term_id);
               if ($taxonomyLangCode != $args['lang_code']) {
                   unset($terms[$key]);
               }
           }
        }

        return $terms;
    }
    
    public function getTermbyLanguage( $args, $taxonomies, $k ) {
        global $pagenow, $wpdb;

        if ($pagenow == 'edit-tags.php') {
            if (isset($_GET['lang']) && ($_GET['lang'] != "All")) {
                $args['join'] .= " LEFT JOIN {$wpdb->prefix}ml_translate ml ON tt.term_id = ml.object_id";
                $args['where'] .= " AND ml.type = 'taxonomy' AND ml.language_code = '".$_GET['lang']."'";

                return $args;
            } 
        }

        return $args;
    }

    
    function taxonomyFormLanguageAdd() {
        ?>
        <div class="form-field">
            <label for="language">Language</label>
            <?php $form = new Form();
                echo $form->get_select_input(array(
                    'id' => 'languages',
                    'name' => 'languages',
                    'selected' => '',
                    'options' => Languages::getArrayLangs()
                ));
            ?>
        </div>
        <?php
    }
    
    function taxonomyFormLanugageEdit( $taxonomy ) {
        ?>
        <table class="form-table">
            <tr>
                <th>Language</th>
                <td>
                    <?php 
                        $form = new Form();
                        echo $form->get_select_input(array(
                            'id' => 'languages',
                            'name' => 'languages',
                            'selected' => Translate::getTaxnomyLanguage($taxonomy->term_id),
                            'options' => Languages::getArrayLangs()
                        ));
                    ?>
                </td>
            </tr>
        </table>
        <?php
    }
    
     
    function taxonomyFormLanguageSave( $term_id, $tt_id ) {

        if ( isset( $_POST['languages'] ) ) {
            $transModel = new TranslateModel();
            $args = array(
                'object_type' => $_POST['taxonomy'],
                'object_id' => $term_id,
                'type' => 'taxonomy',
                'language_code' => $_POST['languages'],
                'source_id' => 0
            );
            $transModel->update($args);
        }
    }
    
    /**
     * Add column for language in list
     * @param Array $columns
     * @return Array
     */
    function taxonomyLanguageNameColumns($columns) {
        $newColumns = array('language' => __("Language", "etypes"));

        return Utilities::insertToPositionArray(1, $columns, $newColumns);
    }   
    
    /**
     * 
     * @param String $columnNone
     * @param Integer $column
     * @param String $termId
     */
    function taxonomyLanguageVauleColumns($columnNone, $column, $termId){
        switch ($column) {
            case "language":
               echo Translate::getTaxnomyLanguage($termId);
               break;
        }
    }
}

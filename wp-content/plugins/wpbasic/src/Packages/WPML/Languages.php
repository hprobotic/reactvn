<?php
namespace Packages\WPML;
use Packages\WPML\LanguagesModel;
use Packages\WPML\TranslateModel;
use Packages\WPML\Config;

class Languages {
    public $curentLang;
    public function __construct() {
        global $pagenow;
  
        $this->curentLang = isset( $_GET[ 'lang' ] ) ? $_GET[ 'lang' ] : 'all';
        if ( $pagenow == 'edit.php' ) {
            add_action( 'admin_footer', array( $this, 'languagesPostFilter' ) );
        }
        if ( $pagenow == "edit-tags.php") {
            add_action( 'admin_footer', array( $this, 'languagesTaxonomyFilter' ) );
        }
        // for filter language post type
        add_filter( 'posts_clauses', array($this, 'filter_post_by_language'), 10, 2 );
    }
    

    public function filter_post_by_language( $clauses, $query_object ) {
        global  $pagenow, $wpdb;
        // add language for post
        if ( $pagenow == "edit.php") {
            if(isset($_GET['lang'])) {
                $join = &$clauses['join'];
                if (! empty( $join ) ) $join .= ' '; // add a space only if we have to (for bonus marks!)
                $join .= "LEFT JOIN {$wpdb->prefix}ml_translate t ON {$wpdb->prefix}posts.ID = t.object_id";

                $where = &$clauses['where'];

                $where .= " AND t.language_code='".$_GET['lang']."' AND t.type='post' ";
            }
        }
        // add language for category
        if ( $pagenow == "edit-tags.php") {
            if(isset($_GET['lang'])) {
                $join = &$clauses['join'];
                if (! empty( $join ) ) $join .= ' '; // add a space only if we have to (for bonus marks!)
                $join .= "LEFT JOIN {$wpdb->prefix}ml_translate t ON {$wpdb->prefix}posts.ID = t.object_id";

                $where = &$clauses['where'];

                $where .= " AND t.language_code='".$_GET['lang']."' AND t.type='taxonomy'";
            }
        }

        return $clauses;
    }


    public function languagesPostFilter() {
        $listTransPost = Config::getListTranslatePostType();
        $currentPostType = isset( $_GET[ 'post_type' ] ) ? $_GET[ 'post_type' ] : 'post';
        if (in_array($currentPostType, $listTransPost)) {
            $allas = $this->renderPostLanguagesFilter();
            ?>
            <script type="text/javascript">
                    jQuery(".subsubsub").append('<br /><span id="icl_subsubsub"><?php echo $allas ?></span><br />')
            </script>
            <?php
        }
    }
    public function languagesTaxonomyFilter() {
        $allas = $this->renderTaxonomyLanguagesFilter();
        ?>
        <script type="text/javascript">
                jQuery("#col-right").prepend('<br /><span id="icl_subsubsub"><?php echo $allas ?></span><br />')
        </script>
        <?php
    }
    
    public function renderPostLanguagesFilter() {
        $langModel = new LanguagesModel();
        $translateModel = new TranslateModel();
        $listActive = $langModel->getListAllActive();
        $postStatus = get_query_var( 'post_status' );
        $type = isset( $_GET[ 'post_type' ] ) ? $_GET[ 'post_type' ] : 'post';
        $result = array();
        
        foreach ($listActive as $lang) {
            if ( $postStatus ) {
                    $px = '<a href="?post_type=' . $type . '&post_status=' . $postStatus . '&lang=' . $lang->code . '">';
            } else {
                    $px = '<a href="?post_type=' . $type . '&lang=' . $lang->code . '">';
            }
            
            $sx = "(".$translateModel->getPostCountLanguage(array('language_code' => $lang->code, 'type' => 'post', 'object_type' => $type)).")</a>";
            if ($lang->code == $this->curentLang) {
                $px .= "<strong>";
                $sx = "</strong>".$sx;
            }
            
            $result[] = $px.$lang->english_name.$sx;
        }
        
        
        return implode(" | ", $result);
    }
    
    public function renderTaxonomyLanguagesFilter() {
        $langModel = new LanguagesModel();
        $translateModel = new TranslateModel();
        $listActive = $langModel->getListAllActive();
        $postStatus = get_query_var( 'post_status' );
        $type = isset( $_GET[ 'taxonomy' ] ) ? $_GET[ 'taxonomy' ] : 'category';
        $listTaxonomyTranslate = (array) Config::getListTranslateTaxonomy();
        if (!in_array($type, $listTaxonomyTranslate)) {
            return '';
        }

        $result = array();
        if (count($listActive) >1) {
            $result[] = '<a href="?taxonomy=' . $type .'">All</a>';
        }
        foreach ($listActive as $lang) {
            
            $px = '<a href="?taxonomy=' . $type . '&lang=' . $lang->code . '">';
        
            
            $sx = "(".$translateModel->getTaxonomyCountLanguage(array('language_code' => $lang->code, 'type' => 'taxonomy', 'object_type' => $type)).")</a>";
            if ($lang->code == $this->curentLang) {
                $px .= "<strong>";
                $sx = "</strong>".$sx;
            }
            
            $result[] = $px.$lang->english_name.$sx;
        }

        return implode(" | ", $result);
    }
    
    public static function getArrayLangs() {
        $lang_model = new LanguagesModel();
        $list_lang = $lang_model->getListAllActive();
        $options = array();
        foreach ($list_lang as $lang) {
            $options[$lang->code] = $lang->english_name;
        }
        
        return $options;
    }
    
}

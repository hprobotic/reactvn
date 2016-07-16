<?php
namespace Packages\WPML;
use Packages\WPML\LanguagesModel;
use Packages\WPML\Languages;
use Packages\Form\Form;
use Packages\Lib\Utilities;
   
/**
 * Description of Config
 *
 * @author khaivo
 */
class Config {
    function __construct() {
        if (is_admin()) {
            add_action( 'admin_menu', array($this, 'addMenu' ));
            add_action( 'admin_init', array($this, 'redirect_to_site'), 1);
        }
    }
    
    public function addMenu() {
        add_submenu_page( 'wpml', 'Language Setting', 'Language Setting', 'manage_options', 'wpml-setting', array($this, 'setting') );
    }
    
    public function setting() {
        $data = (array) unserialize(get_option("etypes_ml_setting"));
        $data['listLanguage'] = Languages::getArrayLangs();
        // get list post type
        $data['listPostType'] = Utilities::getPublicPostType();
        $data['listTaxonomy'] = Utilities::getPublicTaxonomy();
        // create form object
        $data['form'] = new Form();
        \Packages\View\ViewPackage::render("WPML/views/config", $data);
    }
    
    public function redirect_to_site() {
        if ( isset($_GET['page']) ) {
            switch ($_GET['page']) {
                case "wpml-setting":
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        update_option("etypes_ml_setting", serialize($_POST));
                    }
                    break;
            }
        }
        
    }
    
    public static function getListTranslatePostType() {
        $data = (array) unserialize(get_option("etypes_ml_setting"));
        if (isset($data['translatePostType'])) {
            return (array) $data['translatePostType'];
        } else {
            return array(); 
        }
    }
    
    public static function getListTranslateTaxonomy() {
        $data = (array) unserialize(get_option("etypes_ml_setting"));
        if (isset($data['translateTaxonomy'])) {
            return (array) $data['translateTaxonomy'];
        } else {
            return array(); 
        }
    }
    
    
    
            
}

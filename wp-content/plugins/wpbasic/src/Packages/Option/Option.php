<?php namespace Packages\Option;

/**
 * Option for wpbasic
 */
class Option {
    public $config = array();
    public function __construct() {
        $this->config['listFeature'] = array(
            'PostType' => array(
                'name' => 'Post Type', 
                'src' => 'src/Packages/PostType/AdminPostType.php',
                'status' => '',
                'description' => 'Create and Manage custom post type'
            ),
            'Taxonomy' => array(
                'name' => 'Taxonomy', 
                'src' => 'src/Packages/Taxonomy/AdminTaxonomy.php',
                'status' => '',
                'description' => 'Create and Manage custom taxonomy'
            ),
            'PostTypeOrder' => array(
                'name' => 'Post Order', 
                'src' => 'src/Packages/PostTypeOrder/simple-custom-post-order.php',
                'status' => '',
                'description' => 'Post can reorder by drag and drop'
            ),
            'ACF' => array(
                'name' => 'ACF', 
                'src' => 'src/Packages/ACF/acf.php',
                'status' => '',
                'description' => 'Advanced Custom Fields Plugin'
            ),
            'PostsToPosts' => array(
                'name' => 'PostsToPosts', 
                'src' => 'src/Packages/PostsToPosts/posts-to-posts.php',
                'status' => '',
                'description' => 'Manage relation between two post type'
            ),
            'SEO' => array(
                'name' => 'SEO', 
                'src' => 'src/Packages/SEO/wp-seo.php',
                'status' => ''
            ),
            'WMPL' => array(
                'name' => 'WPML', 
                'src' => 'src/Packages/WPML/wpml.php',
                'status' => ''
            ),
            
        );
        add_action( 'admin_menu', array($this, 'addMenu'));
        
        add_action( 'wp_before_admin_bar_render', array($this, 'adminBar'), 0);
        add_action( 'init', array($this, 'hideAdminBar'));
        add_action('wp_dashboard_setup', array($this, 'removeDashboardWidgets'), 999);
        if (!is_admin()) {
            add_action('after_setup_theme', array($this, 'removeCoreUpdates'));
        }
        
        add_action( 'admin_menu', array($this, 'removeDashboardMenu' ));

    }
    
    /**
     * remove dashboar menu in admin menu
     */
    function removeDashboardMenu() {
        $data = (array) unserialize(get_option('wpbasic_option_setting'));
        if (isset($data['dashboard'])) {
            if (isset($data['dashboard']['menu'])) {
                remove_menu_page( 'index.php' );
            }
        }
    }
    /**
     * remove core wordpres update
     * 
     * @global type $wp_version
     * @return Object
     */
    function removeCoreUpdates() {
	if (!current_user_can('update_core')) {
		return;
	}
	add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2);
        add_filter( 'auto_update_core', '__return_false' );

	add_filter('pre_option_update_core', '__return_null');
	add_filter('pre_site_transient_update_core', '__return_null');
	if (!current_user_can('activate_plugins')) {
		add_filter('pre_site_transient_update_core', 'remove_core_updates');
		add_filter('pre_site_transient_update_plugins', 'remove_core_updates');
		add_filter('pre_site_transient_update_themes', 'remove_core_updates');
	}
	global $wp_version;

	return(object) array('last_checked' => time(), 'version_checked' => $wp_version,);
    }

    /**
     * remove dashboard widget on home page admin
     * @global type $wp_meta_boxes
     */
    public function removeDashboardWidgets() {
        global $wp_meta_boxes;
        $data = (array) unserialize(get_option('wpbasic_option_setting'));
        if (isset($data['dashboard'])) {
            // remove dashboard_quick_press
            if (isset($data['dashboard']['remove_dashboard_quick_press'])) {
                unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
            }
            // remove remove_dashboard_news
            if (isset($data['dashboard']['remove_dashboard_news'])) {
                unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
            }
            // remove_dashboard_activity
            if (isset($data['dashboard']['remove_dashboard_activity'])) {
                unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
            }
            // dashboard_right_now
            if (isset($data['dashboard']['remove_dashboard_right_now'])) {
                unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
            }
            // remove_dashboard_activity
            if (isset($data['dashboard']['remove_dashboard_activity'])) {
                unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
            }
        }
    }
    /**
     * 
     */
    public function hideAdminBar() {
        $data = (array) unserialize(get_option('wpbasic_option_setting'));
        if (isset($data['admin_bar'])) {
            if (isset($data['admin_bar']['hide_bar'])) {
                add_filter('show_admin_bar', '__return_false');
            }
        }
        
        
    }
    
    // remove some icon in admin bar
    public function adminBar() {
        global $wp_admin_bar;
        $data = (array) unserialize(get_option('wpbasic_option_setting'));
        if (isset($data['admin_bar'])) {
            
            // remove updffate icon
            if (isset($data['admin_bar']['remove_wp_update'])) {
                $wp_admin_bar->remove_menu('updates');
            }
            
            //remove logo wordpress
            if (isset($data['admin_bar']['remove_wp_logo'])) {
                $wp_admin_bar->remove_menu('wp-logo');
            }
            
            //remove comment status
            if (isset($data['admin_bar']['remove_wp_comment'])) {
                $wp_admin_bar->remove_menu('comments');
            }
        }
     
    }
    
    function addMenu() {
        add_menu_page( 'WPBasic Option', 'WPBasic Option', 'manage_options', 'wp-basic-option', array($this, 'manageFeature') );
        add_submenu_page( 'wp-basic-option', 'Manage Setting', 'Manage Setting', 'manage_options', 'wp-basic-option-setting', array($this, 'manageSetting') );
    }
    
    
    function manageSetting() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            update_option('wpbasic_option_setting', serialize($_POST));
        }
        $data = (array) unserialize(get_option('wpbasic_option_setting'));
        \Packages\View\ViewPackage::render('Option/views/Setting', array(
            'data' => $data
        ));
    }
    
    
    function manageFeature() {
        $temp = (array) unserialize(get_option('wpbasic_option_features'));
        foreach ($temp as $key => $value) {
            if (isset($this->config['listFeature'][$key])) {
                if (isset($value['status']))
                $this->config['listFeature'][$key]['status'] =  $value['status'];
            }
        }
        $listFeature = $this->config['listFeature'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($listFeature[$_POST['feature']])) {
                $listFeature[$_POST['feature']]['status'] = $_POST['status'];
                update_option('wpbasic_option_features', serialize($listFeature));
            }
        }

        \Packages\View\ViewPackage::render('Option/views/listFeature', array(
            'listFeature' => $listFeature
        ));
    }
    
    public function getListFeature() {
        return (array) unserialize(get_option('wpbasic_option_features'));
    }
}

$option = new Option();
return $option;

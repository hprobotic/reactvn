<?php
namespace Packages\WPML;

use Packages\WPML\LanguagesModel;
use Packages\Form\FormValidator;
use Packages\View\ViewPackage;

// WP_List_Table is not loaded automatically so we need to load it in our application
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
//global $pagenow
//var_dump($pagenow);
//exit;
/**
 * Create a new table class that will extend the WP_List_Table
 */
class Language_List_Table extends \WP_List_Table
{
/**
     * Prepare the items for the table to process
     *
     * @return Void
     */
    public function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();
        
        $objectModel = new LanguagesModel();
        $perPage = 25;
        $currentPage = $this->get_pagenum();
        $start = ($currentPage-1)*$perPage;
        $data = $this->table_data($start, $perPage);
                
        $this->set_pagination_args( array(
            'total_items' => $objectModel->getTotal(),
            'per_page'    => $perPage
        ) );
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }
    
    function get_sortable_columns() {
        $sortable_columns = array(
          'active'  => array('active',false),
          'name' => array('english_name',false)
        );
        
        return $sortable_columns;
    }
    
    /**
     * get Column name
     *
     * @return Array
     */
    public function get_columns()
    {
        $columns = array(
            'id'    =>  __("ID", 'etypes'),
            'code'    => __('Code', 'etypes'),
            'name'    => __('Name', 'etypes'),
            'active'    => __("Active", 'etypes')
        );

        return $columns;
    }
    
    /**
     * Define which columns are hidden
     *
     * @return Array
     */
    public function get_hidden_columns()
    {
        return array();
    }
    /**
     * Define what data to show on each column of the table
     *
     * @param  Array $item        Data
     * @param  String $column_name - Current column name
     *
     * @return Mixed
     */
    public function column_default( $item, $column_name )
    {
        switch( $column_name ) {
            case 'id':
            case 'code':
            case 'name':
            case 'active':
                return $item[ $column_name ];
            default:
                return print_r( $item, true ) ;
        }
    }
    /**
     * Get the table data
     *
     * @return Array
     */
    private function table_data($start, $limit)
    {
        $data = array();
        $objectModel = new LanguagesModel();
        $result = $objectModel->getLIst($start, $limit, $_GET);
        
        foreach ($result as $value) {
            $active = ($value->active)? __("Yes", "etypes") : __("No", "etypes");
            $data[] = array(
                'id' => $value->id,
                'code' => $value->code,
                'name' => "<a href=\"".admin_url()."admin.php?page=ml-add-language&id=$value->id"."\">".$value->english_name."</a>",
                'active' => "<a href=\"".admin_url()."admin.php?page=wpml&lang_code=".$value->code."&status=".!($value->active)."\">".$active."</a>",
                'taxonomy' => "<a href=\"".admin_url()."admin.php?page=custom-taxonomy-add&id=$value->id"."\">".$value->taxonomy."</a>",
                'object_type' => implode(", ", (array) unserialize($value->object_type))
            );
        }

        return $data;
    }
}

class AdminLanguages
{
    public $data;
    /**
     * Constructor will create the menu item
     */
    public function __construct()
    {
        add_action( 'admin_menu', array($this, 'add_menu' ));
        add_action( 'admin_init', array($this, 'redirect_to_site'), 1);
        $this->data = array();
    }
    
    /**
     * Menu item will allow us to load the page to display the table
     */
    public function add_menu()
    {
        add_menu_page( 'Languages', 'Languages', 'manage_options', 'wpml', array($this, 'list_table_page') );
        add_submenu_page( null, 'Manage Taxonomy', 'Manage Taxonomy', 'manage_options', 'ml-add-language', array($this, 'add') );
        add_submenu_page( null, "Add Post Type", "Add Post Type", "manage_options", "wpml-languages-change-status", array($this, "changeStatus"));
    }
    
    public function changeStatus() {
        // do nothing;
    }
    /**
     * Display the list table page
     *
     * @return Void
     */
    public function list_table_page()
    {
        $exampleListTable = new Language_List_Table();
        $exampleListTable->prepare_items();
        ?>
            <div class="wrap">
                <div id="icon-users" class="icon32"></div>
                <h2>List Languages</h2>
                <a href="<?php echo admin_url()."admin.php?page=ml-add-language"; ?>">Add New Languages</a>
                <?php $exampleListTable->display(); ?>
            </div>
        <?php
    }
    
    function add() {
        $this->initData();
        ViewPackage::render('WPML/views/addNewLanguages', $this->data);
    }
    
    public function initData() {
        if (isset($_GET['id']) && (($_GET['id'] != null))) {
            $langModel = new LanguagesModel();
            $langObject = $langModel->findById($_GET['id']);
            if (!isset($this->data['object']) || !is_object($this->data['object'])) 
                $this->data['object'] = $langObject;
            $this->data['title'] = __('Edit Languages', 'etypes');
            $this->data['name_submit_btn'] = __('Edit Languages', 'etypes');
        } else {
            $this->data['title'] = __('Add New Languages', 'etypes');
            $this->data['name_submit_btn'] = __('Add New Languages',  'etypes');
        }
        if (!isset($this->data['formValidator']) || !is_object($this->data['formValidator'])) 
            $this->data['formValidator'] = new FormValidator();
        
    }
    
    public function redirect_to_site() {
        if ( isset($_GET['page']) ) {
            switch ($_GET['page']) {
                case 'wpml':
                  
                    if (isset($_GET['lang_code']) && isset($_GET['status'])) {
                        $langModel = new LanguagesModel();
                        $langModel->changeStatus((int) $_GET['status'], $_GET['lang_code']);
                        $page = "";
                        if (isset($_GET['paged'])) {
                            $page = "&paged=".$_GET['paged'];
                        }
                        wp_redirect( admin_url()."admin.php?page=wpml".$page );  
                        exit();
                    }
                    break;
                
                case 'ml-add-language': 
                    $langModel = new LanguagesModel();
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $formValidator = new FormValidator();
                        $rules = array(
                            'code' => array('required' => 'This field is required'),
                            'english_name' => array('required' => 'This field is required'),
                        );
                        
                        $formValidator->setRules($rules);
                        if (!$formValidator->ValidateForm()) {
                            $this->data['formValidator'] = $formValidator;
                            $this->data['object'] = (object) $_POST;
                            return;
                        }
                        
                        $data = array(
                            'code' => $_POST['code'], 
                            'english_name' => $_POST['english_name'],
                            'active' => isset($_POST['active'])? true: false
                        );
                        
                        if (isset($_GET['id']) && (($_GET['id'] != null))) {
                            $langModel->update($_GET['id'], $data);
                        } else {
                            $langModel->insert($data);
                        }
                        wp_redirect( admin_url()."admin.php?page=wpml" );  
                        exit();
                    }
                    break;
            }
        }
    }
}


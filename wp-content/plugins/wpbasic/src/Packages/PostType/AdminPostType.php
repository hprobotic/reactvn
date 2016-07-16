<?php
use Packages\PostType\PostType;
use Packages\PostType\PostTypeModel;
use Packages\Form\FormValidator;
use Packages\View\ViewPackage;

// WP_List_Table is not loaded automatically so we need to load it in our application
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

/**
 * Create a new table class that will extend the WP_List_Table
 */
class PostType_List_Table extends WP_List_Table
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
        
        $postTypeModel = new PostTypeModel();
        $perPage = 25;
        $currentPage = $this->get_pagenum();
        $start = ($currentPage-1)*$perPage;
        $data = $this->table_data($start, $perPage);
                
        $this->set_pagination_args( array(
            'total_items' => $postTypeModel->getTotal(),
            'per_page'    => $perPage
        ) );
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
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
            'post_name'    => __('Post Name', 'etypes'),
            'menu_icon'    => __('Menu Icon', 'etypes'),
            'action' => __('Action', 'etypes')
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
            case 'post_name':
            case 'menu_icon':
            case 'action':
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
        $postTypeModel = new PostTypeModel();
        $result = $postTypeModel->getLIst($start, $limit);
        foreach ($result as $value) {
            $data[] = array(
                'id' => $value->id,
                'post_name' => "<a href=\"".admin_url()."admin.php?page=custom-post-type-add&id=$value->id"."\">".$value->post_name."</a>",
                'menu_icon' => $value->menu_icon,
                'action' => "<a href=\"".admin_url()."admin.php?page=custom-post-type-add&id=$value->id"."\">".__("Edit", "etypes")."</a>&nbsp"
                . "<a href=\"".admin_url()."admin.php?page=custom-post-type-delete&id=$value->id"."\">".__("Delete", "etypes")."</a>",
            );
        }

        return $data;
    }
}

class AdminPostType
{
    public $data;
    /**
     * Constructor will create the menu item
     */
    public function __construct()
    {
        add_action( 'admin_menu', array($this, 'add_menu_post_type' ));
        add_action( 'admin_init', array($this, 'redirect_to_site'), 1);
        $this->data = array();
    }
    
    /**
     * Menu item will allow us to load the page to display the table
     */
    public function add_menu_post_type()
    {
        add_submenu_page( 'wp-basic-option', 'Manage Post Type', 'Manage Post Type', 'manage_options', 'post-type-list', array($this, 'list_table_page') );
        add_submenu_page( 'Post Type', "Add Post Type", "Add Post Type", "manage_options", "custom-post-type-add", array($this, "add_custom_post"));
        add_submenu_page( 'Post Type', "Add Post Type", "Add Post Type", "manage_options", "custom-post-type-delete", array($this, "delete_custom_post"));
    }
    
    /**
     * Display the list table page
     *
     * @return Void
     */
    public function list_table_page()
    {
        $exampleListTable = new PostType_List_Table();
        $exampleListTable->prepare_items();
        ?>
            <div class="wrap">
                <div id="icon-users" class="icon32"></div>
                <h2>List Custom Post</h2>
                <a href="<?php echo admin_url()."admin.php?page=custom-post-type-add"; ?>">Add New Custom Post</a>
                <?php $exampleListTable->display(); ?>
            </div>
        <?php
    }
    
    function add_custom_post() {
        $this->initData();
        ViewPackage::render('PostType/views/addNew', $this->data);
    }
    
    public function initData() {
        if (isset($_GET['id']) && (($_GET['id'] != null))) {
            $postTypeModel = new PostTypeModel();
            $postType = $postTypeModel->findById($_GET['id']);
            if (!isset($this->data['post_type']) || !is_object($this->data['post_type'])) 
                $this->data['post_type'] = $postType;
            $this->data['title'] = __('Edit Post Type', 'etypes');
            $this->data['name_submit_btn'] = __('Edit Post Type', 'etypes');
        } else {
            $this->data['title'] = __('Add New Post Type', 'etypes');
            $this->data['name_submit_btn'] = __('Add New Post Type',  'etypes');
        }
        if (!isset($this->data['formValidator']) || !is_object($this->data['formValidator'])) 
            $this->data['formValidator'] = new FormValidator();
        
    }
    
    public function redirect_to_site() {
        if ( isset($_GET['page']) ) {
            switch ($_GET['page']) {
                case 'custom-post-type-add': 
                    $postTypeModel = new PostTypeModel();
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $formValidator = new FormValidator();
                        $rules = array(
                            'post_name' => array('required' => 'This field is required'),
                        );
                        
                        $formValidator->setRules($rules);
                        if (!$formValidator->ValidateForm()) {
                            $this->data['formValidator'] = $formValidator;
                            $this->data['post_type'] = (object) $_POST;

                            return;
                        }
                        
                        $data = array( 
                            'post_name' => $_POST['post_name'], 
                            'labels' => serialize($_POST['labels']),
                            'menu_icon' => $_POST['menu_icon'],
                            'supports' => serialize($_POST['supports']),
                            'public' => true,
                            'has_archive' => false,
                            'rewrite' => '',
                            'menu_position' => '',
                        );

                        if (isset($_GET['id']) && (($_GET['id'] != null))) {
                            $postTypeModel->update($_GET['id'], $data);
                        } else {
                            $postTypeModel->insert($data);
                        }
                        wp_redirect( admin_url()."admin.php?page=post-type-list" );  
                        exit();
                    }
                    break;
                case 'custom-post-type-delete':
                    $postTypeModel = new PostTypeModel();
                    if (isset($_GET['id'])) {
                        $postTypeModel->delete($_GET['id']);
                        
                    }
                    wp_redirect( admin_url()."admin.php?page=post-type-list" );  
                    exit();
                    break;
            }
        }
    }
}

new AdminPostType();

$postType = new Packages\PostType\PostType();



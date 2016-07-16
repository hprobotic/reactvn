<?php
namespace Packages\Option;
use Packages\PostsToPosts\PostsToPostsModel;
use Packages\Form\FormValidator;
use Packages\View\ViewPackage;

// WP_List_Table is not loaded automatically so we need to load it in our application
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

/**
 * Create a new table class that will extend the WP_List_Table
 */
class PostToPost_List_Table extends \WP_List_Table
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
        
        $postTypeModel = new PostsToPostsModel();
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
            'from'    => __('From', 'etypes'),
            'to'    => __('To', 'etypes'),
            'type'    => __('Type', 'etypes'),
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
            case 'from':
            case 'to':
            case 'type':
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
        $postTypeModel = new PostsToPostsModel();
        $result = $postTypeModel->getLIst($start, $limit);
        foreach ($result as $value) {
            $data[] = array(
                'id' => $value->id,
                'from' => $value->post_from,
                'to' => $value->post_to,
                'type' => $value->type,
                'action' => "<a href=\"".admin_url()."admin.php?page=manage-post-to-post-add&id=$value->id"."\">".__("Edit", "etypes")."</a>&nbsp"
                . "<a href=\"".admin_url()."admin.php?page=manage-post-to-post-delete&id=$value->id"."\">".__("Delete", "etypes")."</a>",
            );
        }

        return $data;
    }
}

class PostToPostsAdmin {
    /**
     * Constructor will create the menu item
     */
    public function __construct()
    {
        add_action( 'admin_menu', array($this, 'add_menu_post_type' ));
        add_action( 'admin_init', array($this, 'redirect_to_site'), 1);
    }
    
    /**
     * Menu item will allow us to load the page to display the table
     */
    public function add_menu_post_type()
    {
        add_submenu_page( 'wp-basic-option', "Manage Post To Post", "Manage Post To Post", "manage_options", "manage-post-to-post", array($this, "manage"));
        add_submenu_page( null, "Manage Post To Post", "Manage Post To Post", "manage_options", "manage-post-to-post-add", array($this, "add"));
        add_submenu_page( null, "Manage Post To Post", "Manage Post To Post", "manage_options", "manage-post-to-post-delete", array($this, "delete"));
    }
    public function redirect_to_site() {
        if ( isset($_GET['page']) ) {
            switch ($_GET['page']) {
                case 'manage-post-to-post-add': 
                    $postsToPostsModel = new PostsToPostsModel();
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
                        $formValidator = new FormValidator();
                        $rules = array(
                            'post_from' => array('required' => 'This field is required'),
                            'post_to' => array('required' => 'This field is required'),
                        );
                        
                        $formValidator->setRules($rules);
                        if (!$formValidator->ValidateForm()) {
                            $this->data['formValidator'] = $formValidator;
                            $this->data['post_type'] = (object) $_POST;

                            return;
                        }
                        
                        $data = array( 
                            'post_from' => $_POST['post_from'], 
                            'post_to' => $_POST['post_to']
                        );

                        if (isset($_GET['id']) && (($_GET['id'] != null))) {
                            $postsToPostsModel->update($_GET['id'], $data);
                        } else {
                            $postsToPostsModel->insert($data);
                        }
                        wp_redirect( admin_url()."admin.php?page=manage-post-to-post" );
                    }
                    break;
                case 'manage-post-to-post-delete':
                    $postTypeModel = new PostsToPostsModel();
                    if (isset($_GET['id'])) {
                        $postTypeModel->delete($_GET['id']);
                        
                    }
                    wp_redirect( admin_url()."admin.php?page=manage-post-to-post" );
                    exit();
                    break;

            }
        }
    }
    
    /**
     * Display the list table page
     *
     * @return Void
     */
    public function manage()
    {
        $exampleListTable = new PostToPost_List_Table();
        $exampleListTable->prepare_items();
        ?>
            <div class="wrap">
                <div id="icon-users" class="icon32"></div>
                <h2>List Post To Post</h2>
                <a href="<?php echo admin_url()."admin.php?page=manage-post-to-post-add"; ?>">Add New Post To Post</a>
                <?php $exampleListTable->display(); ?>
            </div>
        <?php
    }
    
    function add() {
        $this->initData();
        ViewPackage::render('PostsToPosts/views/addNew', $this->data);
    }
    
    function delete() {
        
    }
    
    public function initData() {
        if (isset($_GET['id']) && (($_GET['id'] != null))) {
            $postTypeModel = new PostsToPostsModel();
            $postType = $postTypeModel->findById($_GET['id']);
            if (!isset($this->data['post_type']) || !is_object($this->data['post_type'])) 
                $this->data['post_type'] = $postType;
            $this->data['title'] = __('Edit Post To Post', 'etypes');
            $this->data['name_submit_btn'] = __('Edit Post To Post', 'etypes');
        } else {
            $this->data['title'] = __('Add New Post To Post', 'etypes');
            $this->data['name_submit_btn'] = __('Add New Post To Post',  'etypes');
        }
        if (!isset($this->data['formValidator']) || !is_object($this->data['formValidator'])) 
            $this->data['formValidator'] = new FormValidator();
        
    }

}

new PostToPostsAdmin();


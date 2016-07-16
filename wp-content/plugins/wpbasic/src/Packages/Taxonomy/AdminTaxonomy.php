<?php
use Packages\Taxonomy\TaxonomyModel;
use Packages\Form\FormValidator;
use Packages\View\ViewPackage;

// WP_List_Table is not loaded automatically so we need to load it in our application
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

/**
 * Create a new table class that will extend the WP_List_Table
 */
class Taxonomy_List_Table extends WP_List_Table
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
        
        $objectModel = new TaxonomyModel();
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
    
    /**
     * get Column name
     *
     * @return Array
     */
    public function get_columns()
    {
        $columns = array(
            'id'    =>  __("ID", 'etypes'),
            'taxonomy'    => __('Taxonomy Name', 'etypes'),
            'object_type'    => __('Post Type', 'etypes'),
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
            case 'taxonomy':
            case 'object_type':
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
        $objectModel = new TaxonomyModel();
        $result = $objectModel->getLIst($start, $limit);
        foreach ($result as $value) {
            $data[] = array(
                'id' => $value->id,
                'taxonomy' => "<a href=\"".admin_url()."admin.php?page=custom-taxonomy-add&id=$value->id"."\">".$value->taxonomy."</a>",
                'object_type' => implode(", ", (array) unserialize($value->object_type)),
                'action' => "<a href=\"".admin_url()."admin.php?page=custom-taxonomy-add&id=$value->id"."\">".__("Edit", "etypes")."</a>&nbsp"
                . "<a href=\"".admin_url()."admin.php?page=custom-taxonomy-delete&id=$value->id"."\">".__("Delete", "etypes")."</a>",
            );
        }

        return $data;
    }
}

class AdminTaxonomy
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
        add_submenu_page( 'wp-basic-option', 'Manage Taxonomy', 'Manage Taxonomy', 'manage_options', 'taxonomy-list', array($this, 'list_table_page') );
        add_submenu_page( 'Taxonomy', "Add Post Type", "Add Post Type", "manage_options", "custom-taxonomy-add", array($this, "add_custom_taxonomy"));
        add_submenu_page( 'Taxonomy', "Add Post Type", "Add Post Type", "manage_options", "custom-taxonomy-delete", array($this, "delete_custom_post"));
    }
    
    public function delete_custom_post() {
        
    }
    
    /**
     * Display the list table page
     *
     * @return Void
     */
    public function list_table_page()
    {
        $exampleListTable = new Taxonomy_List_Table();
        $exampleListTable->prepare_items();
        ?>
            <div class="wrap">
                <div id="icon-users" class="icon32"></div>
                <h2>List Taxonomy</h2>
                <a href="<?php echo admin_url()."admin.php?page=custom-taxonomy-add"; ?>">Add New Taxonomy</a>
                <?php $exampleListTable->display(); ?>
            </div>
        <?php
    }
    
    function add_custom_taxonomy() {
        $this->initData();
        ViewPackage::render('Taxonomy/views/addNew', $this->data);
    }
    
    public function initData() {
        if (isset($_GET['id']) && (($_GET['id'] != null))) {
            $postTypeModel = new TaxonomyModel();
            $postType = $postTypeModel->findById($_GET['id']);
            if (!isset($this->data['object']) || !is_object($this->data['object'])) 
                $this->data['object'] = $postType;
            $this->data['title'] = __('Edit Taxonomy', 'etypes');
            $this->data['name_submit_btn'] = __('Edit Taxonomy', 'etypes');
        } else {
            $this->data['title'] = __('Add New Taxonomy', 'etypes');
            $this->data['name_submit_btn'] = __('Add New Taxonomy',  'etypes');
        }
        if (!isset($this->data['formValidator']) || !is_object($this->data['formValidator'])) 
            $this->data['formValidator'] = new FormValidator();
        
    }
    
    public function redirect_to_site() {
        if ( isset($_GET['page']) ) {
            switch ($_GET['page']) {
                case 'custom-taxonomy-add': 
                    $taxonomyModel = new TaxonomyModel();
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $formValidator = new FormValidator();
                        $rules = array(
                            'taxonomy' => array('required' => 'This field is required'),
                        );
                        
                        $formValidator->setRules($rules);
                        if (!$formValidator->ValidateForm()) {
                            $this->data['formValidator'] = $formValidator;
                            $this->data['object'] = (object) $_POST;
                            return;
                        }
            
                        $data = array( 
                            'taxonomy' => $_POST['taxonomy'], 
                            'args' => serialize($_POST['args']),
                            'labels' => serialize($_POST['labels']),
                            'object_type' => serialize($_POST['object_type'])
                        );
                    

                        if (isset($_GET['id']) && (($_GET['id'] != null))) {
                            $taxonomyModel->update($_GET['id'], $data);
                        } else {
                            $taxonomyModel->insert($data);
                        }
                        wp_redirect( admin_url()."admin.php?page=taxonomy-list" );  
                        exit();
                    }
                    break;
                case 'custom-taxonomy-delete':
                    $taxonomyModel = new TaxonomyModel();
                    if (isset($_GET['id'])) {
                        $taxonomyModel->delete($_GET['id']);
                        
                    }
                    wp_redirect( admin_url()."admin.php?page=taxonomy-list" );  
                    exit();
                    break;
            }
        }
    }
}

new AdminTaxonomy();

$taxonomy = new Packages\Taxonomy\Taxonomy();



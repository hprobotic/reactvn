<?php
namespace Packages\Taxonomy;

use Packages\Taxonomy\TaxonomyModel;

class Taxonomy {
    public function __construct() {
        add_action('setup_theme', array($this, 'register_taxonomy'), 0 );
    }
    
    public function register_taxonomy() {
        $taxonomyModel = new TaxonomyModel();
        $listTaxonomy = $taxonomyModel->getAll();
       
        foreach ($listTaxonomy as $value) {
            $argsTaxonomy = (array) unserialize($value->args);
            $args = array(
                'labels' => (array) unserialize($value->labels),
                'public' => true,
                'rewrite' => true,
                'show_admin_column' => (isset($argsTaxonomy['show_admin_column']))? true : false,
                'hierarchical' => (isset($argsTaxonomy['hierarchical']))? true : false,
                'sort' => true
            );
            
            register_taxonomy(
                $value->taxonomy,
                (array) unserialize($value->object_type),
                $args
            );
        }
        
    }
}

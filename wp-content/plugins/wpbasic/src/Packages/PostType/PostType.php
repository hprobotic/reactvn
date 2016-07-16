<?php
namespace Packages\PostType;

use Packages\PostType\PostTypeModel;

class PostType {
    public function __construct() {
        add_action('init', array($this, 'register_post_type'));
    }
    public function register_post_type() {
        $postTypeModel = new PostTypeModel();
        $listPostType = $postTypeModel->getAll();
        foreach ($listPostType as $value) {
            $textTabels = unserialize($value->labels);
            register_post_type($value->post_name, array(
                'labels' => $textTabels,
                'supports' => (array) unserialize($value->supports),
                'public' => TRUE,
                'has_archive' => TRUE,
                'rewrite' => array('slug' => $value->post_name),
                'menu_icon' => $value->menu_icon,
								'menu_position' => 6
            ));
        }
    }
}

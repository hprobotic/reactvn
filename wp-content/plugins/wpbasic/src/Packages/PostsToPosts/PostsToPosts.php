<?php
namespace Packages\PostsToPosts;

use Packages\PostsToPosts\PostsToPostsModel;

class PostsToPosts {
    public function __construct() {
        add_action( 'p2p_init', array($this, 'register_post_to_post' ));
        
    }
    public function register_post_to_post() {
        $postsToPostsModel = new PostsToPostsModel();
        $listPostType = $postsToPostsModel->getAll();
        foreach ($listPostType as $value) {
            p2p_register_connection_type( array(
                'name' => $value->post_from.'_to_'.$value->post_to,
                'from' => $value->post_from,
                'to' => $value->post_to
            ));
        }
    }

}
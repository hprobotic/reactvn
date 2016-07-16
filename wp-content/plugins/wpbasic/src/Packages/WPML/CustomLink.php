<?php

namespace Packages\WPML;

/**
 * Description of CustomLink
 * This Class will change link of custom post type or page in admin, it will add
 * language to link.
 *
 * @author khaivo
 */
class CustomLink {
    
    public function __construct() {
        add_filter('post_type_link', array($this, 'append_query_string'), 10, 2);
        add_filter('page_link',  array($this, 'append_page_query_string'), 10, 2);
        add_filter('post_link',  array($this, 'append_query_string'), 10, 2);
    }
    
    /**
     * add prefix language to post type
     * 
     * @param String $url
     * @param Post_Object $post
     * 
     * @return String
     */
    function append_query_string($url, $post) {
        $list_post_type = Config::getListTranslatePostType();

        if (in_array($post->post_type, $list_post_type)) {
            $position = strpos($url, get_site_url());
            if ($position !== false) {
                $portin = substr($url, $position + strlen(get_site_url()));
                $lang_code = Translate::getPostLanguages($post);
                if ($lang_code) {
                        $url = '/' . $lang_code . '/' . $portin;
                        $url = str_replace('//', '/', $url);
                        $post_type = $post->post_type;
                        if ($post_type != "post") {
                            //$url = str_replace('/' . $post_type . '/', '/' . $lang_map[$first_term->slug][$post_type] . "/", $url);
                        }

                        return get_site_url() . $url;
                }
            }
        }

        return $url;
    }
    
    static function get_post_link($post, $showLanguage = true) {
        $link = site_url()."/";
        if ($showLanguage) {
          $lang_code = Translate::getPostLanguages($post);
          $link .= $lang_code."/";
        }
        $link .= $post->post_type."/";
        $link .= $post->post_name;
        
        return $link;
    }
    
    /**
     * add prefix language to post type
     * 
     * @param String $url
     * @param Post_Object $post
     * 
     * @return String
     */
    function append_page_query_string($url, $post) {
        $list_post_type = array('page');
        if (in_array(get_post_type($post), $list_post_type)) {
            $position = strpos($url, get_site_url());
            if ($position !== false) {
                $portin = substr($url, $position + strlen(get_site_url()));
                $lang_code = Translate::getPostLanguages($post);
                if ($lang_code) {
                        $url = '/' . $lang_code . '/' . $portin;
                        $url = str_replace('//', '/', $url);
                        $post_type = get_post_type($post);
                        if ($post_type != "post") {
                            $url = str_replace('/' . $post_type . '/', '/' . $lang_map[$first_term->slug][$post_type] . "/", $url);
                        }

                        return get_site_url() . $url;
                }
            }
        }

        return $url;
    }   
}

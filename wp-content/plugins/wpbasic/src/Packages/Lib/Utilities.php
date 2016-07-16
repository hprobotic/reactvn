<?php

namespace Packages\Lib;

/**
 * Description of Lib
 *
 * @author khaivo
 */
class Utilities {
    public static function insertToPositionArray($position, $array, $input) {

        $first = array_slice($array, 0, $position);
        $last = array_slice($array, $position, count($array));

        return array_merge($first, $input, $last);
    }
    
    
    public static function getPublicPostType() {
        $listPostType = get_post_types( array('public' => true) );
        if (isset($listPostType['attachment'])) {
            unset($listPostType['attachment']);
        }
        
        return $listPostType;
    }
    
    public static function getPublicTaxonomy() {
        $args = array('public'   => true);
        $listTaxonomy = get_taxonomies($args);
        
        return array_diff($listTaxonomy, array('post_tag', 'post_format'));
    }
    
}

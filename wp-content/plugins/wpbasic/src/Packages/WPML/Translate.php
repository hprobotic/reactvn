<?php
namespace Packages\WPML;
use Packages\WPML\TranslateModel;

/**
 * Description of Translate
 *
 * @author khaivo
 */
class Translate {
    
    /**
     * 
     * @param type $langCode
     * @param type $postType
     * @return Array
     */
    public static function getArrayAllPostByLang($langCode, $postType) {
        $transModel = new TranslateModel();
        $listPost = $transModel->getAllPostByLang($langCode, $postType);
        $options = array();
        $options[0] = __("-- None --", "etypes");
        foreach ($listPost as $post) {
            $options[$post->ID] = $post->post_title;
        }
        
        return $options;
    }
    
    /**
     * get languages for post type
     * 
     * @param Integer $object_id
     * 
     * @return String 
     */
    public static function getPostLanguages($object_id) {
        $translate = new TranslateModel();
        if (is_object($object_id)) {
            $object_id = $object_id->ID;
        }
        $result = $translate->getPostObjectLanguages($object_id);
        if ($result) {
            return $result->language_code;
        }
        
        return null;
    }
    
    /**
     * get language code for taxonomy base on term id
     * @param String $objectId
     * @return String
     */
    public static function getTaxnomyLanguage($objectId) {
        $translate = new TranslateModel();
        $result = $translate->getTaxonomyObjectLanguages($objectId);
        if ($result) {
            return $result->language_code;
        }
        
        return null;
    }
    
    public static function getIdSourcePost($objectId) {
        $translate = new TranslateModel();
        
        return $translate->getIdSourcePost($objectId);
    }
    
    /**
     * get language code for post base on post id
     * @param String $objectId
     * @return String
     */
    public static function getPostLangCode($objectId) {
        $translate = new TranslateModel();
        $value = $translate->getPostObjectLanguages($objectId);
        if ($value) {
            return $value->language_code;
        } else {
            return null;
        }
    }
}

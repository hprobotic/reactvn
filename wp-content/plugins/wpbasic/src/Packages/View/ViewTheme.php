<?php
namespace Packages\View;
/**
 * Class View
 */
class ViewTheme {
    static function render($file, $data, $echo =true) {
        extract($data);
        ob_start();
        $linkFile = get_template_directory()."/src/".$file.".php";
        if (!file_exists($linkFile)) {
            echo "file $linkFile not found";
            return;
        }
        
        include $linkFile;
        $content = ob_get_contents();
        ob_clean();
        if ($echo) {
            echo $content;
        } else {
            return $content;
        }
    }
}
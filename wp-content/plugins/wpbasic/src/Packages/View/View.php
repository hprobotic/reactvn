<?php
namespace Packages\View;
/**
 * Class View
 */
class View {
    static function render($file, $data, $echo =true) {
        extract($data);
        ob_start();
        include WPBASIC_URI."/src/Packages/".$file.".php";
        $content = ob_get_contents();
        ob_clean();
        if ($echo) {
            echo $content;
        } else {
            return $content;
        }
    }
}
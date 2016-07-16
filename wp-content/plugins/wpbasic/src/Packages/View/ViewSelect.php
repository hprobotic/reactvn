<?php
namespace Packages\View;

Class ViewSelect {
    public static function loadView($viewFile) {
        if (isset($_GET['dataType']) && ($_GET['dataType'] == "json")) {
            $pathViewFile = __DIR__.'/../../../views/json/'.$viewFile.".php";
            if (file_exists($pathViewFile)) {
                require_once $pathViewFile;
            }
        } else {
            $pathViewFile = __DIR__.'/../../../views/htm/'.$viewFile.".php";
            if (file_exists($pathViewFile)) {
                require_once $pathViewFile;
            }
        } 
    }
}

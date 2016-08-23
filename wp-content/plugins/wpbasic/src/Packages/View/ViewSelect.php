<?php
namespace Packages\View;

Class ViewSelect {
    public static function loadView($viewFile, $dir = null) {
      $pathViewFile = __DIR__.'/../../../views/htm/'.$viewFile.".php";
            
        if ($dir == null) {
            $dirPath = __DIR__.'/../../../';
        } else {
          $dirPath = $dir;
        }
        if (isset($_GET['dataType']) && ($_GET['dataType'] == "json")) {
            $pathViewFile = $dirPath.'/views/json/'.$viewFile.".php";
            if (file_exists($pathViewFile)) {
                require_once $pathViewFile;
            }
        } else {
            $pathViewFile = $dirPath.'/views/html/'.$viewFile.".php";
       
            if (file_exists($pathViewFile)) {
                require_once $pathViewFile;
            }
        } 
    }
}

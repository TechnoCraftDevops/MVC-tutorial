<?php

use App\Controller\IndexController;

require_once '../vendor/autoload.php';
require_once '../config/config.php';

if(isset($_SERVER['PATH_INFO'])){
    $url = explode('/', ltrim($_SERVER['PATH_INFO'],'/'));
}else{
    $url = '/';
}

if($url == '/'){
        // require_once __DIR__.'/src/Controller/indexController.php';
        // require_once __DIR__.'/Views/index_view.php';

        $indexController = New IndexController();

        dump($indexController);
        return $indexController->index();
}


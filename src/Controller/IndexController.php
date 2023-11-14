<?php

namespace App\Controller;

use Exception;

class IndexController
{
    function __construct()
    {
    }

    public function index()
    {
        try {
            $indexView = __DIR__ . '/..' . '/View/index.html';
            dump('controller', $indexView);

            if (file_exists($indexView)) {
                $content = file_get_contents($indexView);
                echo $content;
            } else {
                throw new Exception();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

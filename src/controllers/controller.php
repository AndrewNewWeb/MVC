<?php

namespace Dev\Mvc\controllers;

use Exception;
use Jenssegers\Blade\Blade;

class controller{
    
    public function __call($name, $params){
        throw new Exception("method " . $name . " is not found");
        // echo "method " . $name . " is not found";
    }

    protected function view($page, $data){
        $blade = new Blade($_ENV['VIEW_FOLDER'], $_ENV['VIEW_CACHE']);
        echo $blade->render($page, $data);
    }
}
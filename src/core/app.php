<?php

namespace Dev\Mvc\core;

use Exception;

class app{

    private $controller;
    private $method;
    private $params = [];

    public function __construct(){
        $this->url();
        $this->run();
    }

    private function url(){
        $url = $_SERVER['QUERY_STRING'];

        // $url = explode("/", $url);

        // $this->controller = (!empty($url[0]) > 0 ? $url[0] : $_ENV['DEFAULT_CLASS']);
        // $this->method = (!empty($url[1]) > 0 ? $url[1] : $_ENV['DEFAULT_METHOD']);

        // unset($url[0], $url[1]);
        // $this->params = $url;

        if(array_key_exists($url, route::$routes)){
            $this->controller = route::$routes[$url][0];
            $this->method = route::$routes[$url][1];
        }

    }

    private function run(){
        $controller = "Dev\\Mvc\\controllers\\" . $this->controller;

        // $controller = new Dev\Mvc\controllers\users();
        // $controller -> index();

        if(class_exists($controller)){
            call_user_func_array([new $controller, $this->method], $this->params);
        }else{
            // echo "Class Not Found";
            throw new Exception("Class Not Found");
        }
    }
}
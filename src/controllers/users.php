<?php
namespace Dev\Mvc\controllers;

class users extends controller{
    
    public function index(){
        $name = "Ahmed";
        $colors = ["red", "blue", "green"];
        $this->view("home", compact("name", "colors"));
    }

    public function edit($id){
        echo "user edit $id";
    }

}
<?php
namespace MVC\core;
class app
{
    private $controller = 'home';
    private $method = 'index'; 
    private $params = [];


    public function __construct(){
        $this->url();
        $this->render();
    }

    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){

            $url= explode('/',$_SERVER['QUERY_STRING']);
            // echo '<pre>';
            // print_r($url);

            $this->controller = isset($url[0]) ? $url[0]."controller" :  "homecontroller";
            $this->method = isset($url[1]) ? $url[1] : "index";

            unset($url[0],$url[1]);
            // echo $this->controller;
            // echo '<br>';
            // echo $this->method;

            // params 
            $this->params = array_values($url);
            // print_r($this->params);

        }else{
            $this->controller = "homecontroller";
            $this->method = "index";
            // echo $this->controller;
            // echo $this->method;
        }
    }


    private function render(){
        $controller = "MVC\controllers\\".$this->controller;
        // echo $controller;
        if(class_exists($controller)){
             $controller = new $controller;
            if(method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method],$this->params);
            }
            else{
                echo 'not exists';
            }
        }
        else{
            echo 'class not exists';
        }

    }
}
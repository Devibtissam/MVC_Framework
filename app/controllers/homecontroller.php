<?php
namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\dataProvider;
use GUMP;
class homecontroller extends controller{

    public function index(){
        $data = new dataProvider();
        $data = $data->getAllUser();
        $title = 'home index';
        $this->view('home/index', ['title' => $title, 'data'=>$data]); 
    }

    public function login(){
        $this->view('home/login', []);
    }

    public function postlogin(){
        $isValid = GUMP::is_valid(array_merge($_POST), ['email'=> 'required']);
        if($isValid === true){
            echo 'submitted';
        }else{
            echo 'not';
        }
    }

}

?>
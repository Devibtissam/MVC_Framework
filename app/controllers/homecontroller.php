<?php
namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\dataProvider;
class homecontroller extends controller{

    public function index(){
        $data = new dataProvider();
        $data = $data->getAllUser();
        $title = 'home index';
        $this->view('home/index', ['title' => $title, 'data'=>$data]); 
    }

}

?>
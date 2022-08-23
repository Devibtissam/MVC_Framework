<?php
namespace MVC\controllers;

use MVC\core\controller;

class homecontroller extends controller{

    public function index(){
        $db = $this->db();
        $data = $db->run("select * FROM account")->fetchAll();
        print_r($data);
        echo '<pre>';
        $title = 'home index';
        $this->view('home/index', ['title' => $title]);
        
    }

   


}

?>
<?php
namespace MVC\models;
use MVC\core\model;

class dataProvider extends model{

    public function getAllUser(){
        $db = model::db();
        $data = $db->run("select * FROM account")->fetchAll();
        return $data;
    }

}
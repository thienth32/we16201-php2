<?php
require_once './models/Product.php';
class HomeController{
    public function index(){
        $products = product::getAll();
        include_once './views/home/index.php';
    }

    public function test(){
        return "ThienTH dep trai";
    }
}


?>
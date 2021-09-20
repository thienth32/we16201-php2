<?php
require_once './models/Product.php';
class ProductController{
    public function detail(){
        $id = $_GET['id'];
        $product = Product::find($id);
        include_once './views/home/detail.php';
    }
}
<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class CategoryController extends BaseController{
    public function detail($id){
        // $products = Product::all();
        var_dump($id);
        die;

        $this->render('admin.product.index', compact('products'));
    }
}

?>
<?php

$url = isset($_GET['url']) ? $_GET['url'] : '/';
require_once './vendor/autoload.php';
use App\Controllers\HomeController;
use App\Controllers\ProductController;
switch ($url) {
    case '/':
        $ctrl = new HomeController();
        echo $ctrl->index();
        break;
    case 'about':
        $ctrl = new HomeController();
        echo $ctrl->about();
        break;
    case 'san-pham':
        $ctrl = new ProductController();
        echo $ctrl->index();
        break;
    default:
        # code...
        break;
}

?>
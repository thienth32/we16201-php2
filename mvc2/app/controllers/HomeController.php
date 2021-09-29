<?php
namespace App\Controllers;


class HomeController extends BaseController{
    public function index(){
        $users = [
            ['id' => 1, 'name' => 'Bùi Ngọc Hoàng', 'gender' => 1, 'age' => 20, 'bio' => '<h2>Hello</h2>'],
            ['id' => 2, 'name' => 'Trần Tiến', 'gender' => 2, 'age' => 19],
            ['id' => 3, 'name' => 'Trần Tiến Thành', 'gender' => 1, 'age' => 19],
        ];
        $this->render('home.index', compact('users'));
    }

    public function about(){
        $this->render('home.about');
    }
}


?>
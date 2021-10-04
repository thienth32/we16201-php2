<?php
namespace App\Controllers;
use App\Models\User;

class HomeController extends BaseController{
    public function index(){
        $users = User::all();
        $this->render('home.index', compact('users'));
    }

    public function about(){
        $this->render('home.about');
    }

    public function addUserForm(){
        $this->render('users.add-form');
    }
}


?>
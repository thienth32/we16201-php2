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
    public function saveAddUser(){
        $model = new User();
        $model->name = $_POST['name'];
        $model->email = $_POST['email'];
        $model->gender = $_POST['gender'];
        $model->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $model->save();
        header('location: ' . BASE_URL);
        die;
    }
}


?>
<?php

require_once './models/BaseModel.php';
class User extends BaseModel{
    var $table = 'users';

    function convertGender(){
        switch($this->gender){
            case 1:
                return "Nam";
            case 2:
                return "Nữ";
            default:
                return "Khác";
        }
    }
}

?>
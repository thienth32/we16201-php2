<?php
# Hằng số: biến chứa dữ liệu & không thể gán lại giá trị cho biến này
# const NAME = "FPT Poly";
# define("NAME", "FPT Poly");

class Animal{
    const DB_TABLE = 'animals';
    static $name = 'poly animal';
    var $age = 100;
    #static method
    static function getName(){
        echo static::DB_TABLE;
    }
}


class Dog{
    const DB_TABLE = 'dogs';


    static function demo(){
        $model = new static();
        $model->name= 'rex';
        $model->age = 23;
        return $model;
    }

    function addAge(){
        $this->age++;
        return $this;
    }

    function sayHello(){
        return "My name " . $this->name . ". what your name?";
    }

    function xx(){
        return 1;
    }
}
// echo Dog::DB_TABLE;
// echo Animal::$name;
// Animal::$name = "Thienth dep trai";
// echo "<br>";
// echo Animal::$name;
// Animal::getName();

// $rex = new Dog();
$rex = Dog::demo()->addAge()->sayHello();
var_dump($rex);

?>
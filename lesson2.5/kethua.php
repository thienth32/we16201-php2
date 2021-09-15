<?php
# Lớp B có thể kế thừa lớp A (extends), thì các object được tạo ra từ lớp B
# có thể truy cập đến các thuộc tính/phương thức của lớp A

class Animal{
    var $name;
    var $age;

    function sayHello(){
        return "My name is " . $this->name;
    }
}

class Dog extends Animal{
    
}
$miu = new Dog();
$miu->name = "Nguyen Van Miu";
var_dump($miu);
echo $miu->sayHello();

?>
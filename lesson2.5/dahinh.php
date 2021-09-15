<?php
# Các lớp con (lớp thực thi extends) thì hoàn toàn có thể ghi đè (overwrite) giá trị các thuộc 
# tính hoặc nội dung của các method đã được định nghĩa ở lớp cha
class Animal{
    var $name = "Dong vat";
    var $age = 0;

    function sayHello(){
        return "My name is " . $this->name;
    }
}

class Dog extends Animal{
    var $name = "Nguyen Van Dog";

    function sayHello()
    {
        return "Gau gau gau";
    }
}


$x = new Dog();
echo $x->sayHello();

?>
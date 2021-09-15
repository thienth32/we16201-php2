<?php
class MayTinh{
    
    function sell(){
        echo $this->name . ' đã được bán';
    }
}

$asus = new MayTinh();
$asus->name = "Laptop ASUS M002";
$asus->price = 13000000;

$hp = new MayTinh();
$hp->name = "HP envy";
$hp->price = 26000000;


var_dump($asus);
echo "<br>";
var_dump($hp);


?>
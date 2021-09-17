<?php

class A{
    public $a = 1;
    protected $b = 2;
    private $c = 3;
    function getC(){
        return $this->c;
    }

    function setC($val){
        $this->c = $val;
    }
    function getB(){
        return $this->b;
    }

}

class B extends A{
    function getC(){
        return $this->c;
    }
    function getB(){
        return $this->b;
    }

    function setB($val){
        $this->b = $val;
    }

}

$x = new B();

echo $x->a;

?>
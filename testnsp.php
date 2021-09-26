<?php
namespace A;
function x1(){
    echo 1;
}
class Home{
    public function index(){
        echo "Home->index1()";
    }
}

namespace B;
function x1(){
    echo 2;
}
class Home{
    public function index(){
        echo "Home->index2()";
    }
}

namespace C;
use A\Home;
use B\Home as BHome;
\A\x1();
echo "<br>";
\B\x1();
echo "<br>";
$ctr = new Home();
$ctr->index();
$ctr2 = new BHome();
echo "<br>";
$ctr2->index();


?>
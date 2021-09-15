<?php
 class People{
     var $name;
     var $old;
     var $address;
     var $company;
     var $sex;
     
     function UpdateCompany(){
        echo $this->company = 'Công ty B';
     }

     function UpdateAddress(){
        echo $this->address = 'Hà Nội';
     }
     
 }

 $People1 = new People();
 $People1->name = 'Trần Tiến';
 $People1->old = 23;
 $People1->address = 'Quảng ninh';
 $People1->company = 'Công ty A';
 $People1->sex = 'Nam';

var_dump($People1);
echo '<br>';

// echo $People1
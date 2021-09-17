<?php

$ctrl = $_GET['ctrl'];
$act = $_GET['action'];
require_once './controllers/' . $ctrl . '.php';
$controller = new $ctrl();
echo $controller->$act();


?>
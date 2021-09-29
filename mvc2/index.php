<?php

$url = isset($_GET['url']) ? $_GET['url'] : '/';
require_once './vendor/autoload.php';
const BASE_URL = "http://localhost/we16201-php2/mvc2/";
const PUBLIC_PATH = BASE_URL . "public/";
\Utils\Routing::start($url);

?>
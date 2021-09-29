<?php

$url = isset($_GET['url']) ? $_GET['url'] : '/';
require_once './vendor/autoload.php';
\Utils\Routing::start($url);

?>
<?php

$username = $_POST['username'];
$password = $_POST['password'];
$detail = $_POST['detail'];
$gender = $_POST['gender'];

echo $username . '-' . md5($password) . '-' . $detail . '-' . $gender;
?>


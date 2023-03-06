<?php
include 'connect.php';

$login = filter_var(trim( $_POST['login']), FILTER_SANITIZE_STRING);
$email = $_POST['email'];
$password = $_POST['password'];
var_dump($password);

$connect->query("INSERT INTO `users` (`login`, `email`, `password`, `usertype`) 
VALUES ('$login', '$email', '$password', 'user') ");

$connect->close();
header('Location: /');
?>
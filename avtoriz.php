<?php
    include 'connect.php';

    $login = filter_var(trim( $_POST['login']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    $result = $connect->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");

    $user = $result->fetch_assoc();

    if (count($user)==0) {
        echo "Пользователь не найден";
        exit();
    }

    setcookie('user', $user['usertype'], time() + 3600 * 24, "/");

    header('Location: account.php');

    $mysqli->close();
?>
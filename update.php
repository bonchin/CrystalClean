<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$fname = $_POST['fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$id_services = $_POST['id_services'];
$description = $_POST['description'];
$date = $_POST['date'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `offer` 
SET `fname` = '$fname', `phone` = '$phone', `email` = '$email', `id_services` = '$id_services', `description` = '$description', `date` = '$date' WHERE `offer`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location:../admin-panel.php');
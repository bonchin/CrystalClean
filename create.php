<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$title = $_POST['fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$id_services = $_POST['id_services'];
$description = $_POST['subject'];
$date = $_POST['date'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `offer` (`id_offer`, `fname`, `phone`, `email`, `id_services`, `subject`, `date`) 
VALUES (NULL, '$title', '$phone', '$email', '$id_services', '$description', '$date')");

/*
 * Переадресация на главную страницу
 */

header('Location:index.php');
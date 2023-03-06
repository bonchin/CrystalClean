<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

     $product_id = $_GET['id'];

     /*
      * Делаем выборку строки с полученным ID выше
      */
 
     $product = mysqli_query($connect, "SELECT * FROM `offer` WHERE `id` = '$product_id'");
 
     /*
      * Преобразовывем полученные данные в нормальный массив
      * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
      */
 
     $product = mysqli_fetch_assoc($product);
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменить продукт</title>
</head>
<body>
    <h3>Изменить продукт</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Имя</p>
        <input type="text" name="fname" value="<?= $product['fname'] ?>">
        <p>Телефон</p>
        <input type="phone" name="phone" value="<?= $product['phone'] ?>">
        <p>Почта</p>
        <input type="email" name="email" value="<?= $product['email'] ?>">
        <p>Айди Услуги</p>
        <input type="text" name="id_services" value="<?= $product['id_services'] ?>">
        <p>Комментарий</p>
        <textarea name="description"><?= $product['description'] ?></textarea>
        <p>Дата</p>
        <input type="date" name="date" value="<?= $product['date'] ?>"> <br> <br>

        <button type="submit">Изменить</button>
    </form>
</body>
</html>
<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Заказ</title>
    <link rel="stylesheet" href="css/headers.css">
    <link rel="stylesheet" href="css/footer3.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<style>
    th, td {
        padding: 10px;
        background-color: blue;
    }

    th {
        background-color: #5d6be6;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
    table{
        margin: 20px;
        width: 90%;
    }
    .crea{
        margin: 20px;
    }
    h3{
        margin-left: 20px;
    }
</style>
<body>
    <header>
    <?php
    require("header.php");
    ?>
    </header>
    <table>
        <tr>
            <th>ID заказа</th>
            <th>Имя заказчика</th>
            <th>Телефон заказчика</th>
            <th>Почта заказчика</th>
            <th>Айди услуги</th>
            <th>Комментарий</th>
            <th>Дата</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $products = mysqli_query($connect, "SELECT * FROM `offer`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id_offer
             * Ключ 1 - fname
             * Ключ 2 - phone
             * Ключ 3 - email
             * Ключ 4 - id_services
             * Ключ 5 - subject
             * Ключ 6 - date
             */

            foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[2] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[4] ?></td>
                        <td><?= $product[5] ?></td>
                        <td><?= $product[6] ?></td>
                        <td><a href="update.php?id=<?= $product[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Добавить новый продукт</h3>
    <form action="vendor/create.php" method="post" class="crea">
        <p>Имя</p>
        <input type="text" name="fname">
        <p>Телефон</p>
        <input name="phone"></input>
        <p>Почта</p>
        <input type="email" name="email">
        <p>Айди Услуги</p>
        <input type="text" name="id_services">
        <p>Комментарий</p>
        <textarea name="subject"></textarea>
        <p>Дата</p>
        <input type="date" name="date"> <br> <br>
        <button type="submit">Добавить новый заказ
    </form>

    <footer>
    <?php
    require("footer.php");
    ?>    
    </footer>
</body>
</html>

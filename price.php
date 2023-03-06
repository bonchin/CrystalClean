<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказ</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/headers.css">
</head>
    <body class="Site">
        <header>
        <?php
        require("header.php");
        ?>
        </header>
        <main class="Site-content">
        <?php
        require("dann.php");
        ?>
        <?php
        require("pricecontent.php");
        ?>
        </main>
        <footer>
        <?php
        require("footer.php");
        ?>
        </footer>
    </body>
</html>
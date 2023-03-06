<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/footer2.css">
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
    require("contentindex.php");
    ?>
    </main>
    <footer>
    <?php
    require("footer.php");
    ?>
    </footer>
    <script src="js/index.js"></script>
</body>
</html>
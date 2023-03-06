<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/footer3.css">
    <link rel="stylesheet" href="css/headers.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
</head>
<body >
    <header>
    <?php
    require("header.php");
    ?>
    </header>
    <main class="Site-content">
    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
     <div class="card user-card-full">
            <div class="row m-l-0 m-r-0">
                <div class="col-sm-4 bg-c-lite-green user-profile">
                    <div class="card-block text-center text-white">
                        <div class="m-b-25">
                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                        </div>
                        <h6 class="f-w-600">Админ</h6>
                        <p>Admin</p>
                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                        </div>
                        </div>
                        <div class="col-sm-8">
                        <div class="card-block">
                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Информация</h6>
                                    <div class="row">
                                    <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Почта</p>
                                    <h6 class="text-muted f-w-400">Нету</h6>
                                    </div>
                                    <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Телефон</p>
                                    <h6 class="text-muted f-w-400">Нету</h6>
                                    </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                    <div class="row">
                                    <div class="btn"><a class="aaa" href="exit.php">Выход</div></a>
                                    <div class="btn"><a class="aaa" href="admin-panel.php">Админ Панель</div></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
    </main>
    <footer>
    <?php
    require("footer.php");
    ?>
    </footer>
</body>
</html>
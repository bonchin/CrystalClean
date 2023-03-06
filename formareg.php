
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/stylereg.css">
</head>
<body>
<div class="container" id="container">
	<?php
		if ($_COOKIE['user'] == ''):
	?>
	<div class="form-container sign-up-container">
		<form method="post" action="registr.php">
            <h1>Регистрация</h1>
			<input name="login" type="text" placeholder="Логин" required="">
			<input name="email" type="email" placeholder="Почта" required="">
			<input name="password" type="password"  placeholder="Пароль" required="">
			<button type="submit">Зарегистрироваться</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="avtoriz.php" method="POST">
			<h1>Авторизация</h1>
			<input name="login" type="text" placeholder="Логин" required="">
			<input name="password" type="password" placeholder="Пароль" required="">
			<button>Зайти</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>У вас уже есть аккаунт?</h1>
				<p>Тогда заходи скорее!</p>
				<button class="ghost" id="signIn">Авторизуйся</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Привет!</h1>
				<p>Нету аккаунта? Регестрируйся скорее!</p>
				<button class="ghost" id="signUp">Зарегистрироваться</button>
			</div>
		</div>
	</div>
<?php else: 
	if ( $_COOKIE['user'] == 'admin'){
		header('Location: admin.php');
	}
	else{
		header('Location: account.php');
	}
		?>
	<?php endif;?>
</div>
    <script src="js/reg.js"></script>
</body>
</html>
<?php

session_start();

if(isset($_SESSION['username'])){
	header("location: profile.php");
};

?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
	<meta charset="utf-8">
	<title>Iniciar Sesión</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/icon" href="./images/logo-v1.png">
	<meta name="author" content="luisrmrz16">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="./styles/login.css" rel="stylesheet" type="text/css"/>
</head>

<body>

	<header>
		<img onclick="location.href='./index.html'" id="logo" src="./images/logo-v2.png"/>
	</header>

	<main>
		<div class="login-box">
			<form action="php/login_back.php" method="POST">
				<img id="user" src="images/user-2.png"/>
				<br>
				<h1>Iniciar Sesión</h1>
				<div id="form">
					<div>
						<label id="user-text" for="user">Usuario</label>
						<input id="textbox" type="text" required name="username"><br>
					</div>
					<div>
						<label id="pass-text" for="password">Contraseña</label>
						<input input id="textbox" type="password" required name="password"><br>
					</div>
				</div>
				<a id="forgot" href="#">Olvide mi contraseña</a><br>
				<div id="access">
					<button>Acceder</button>
				</div>
				<div id="register">
					<span>¿No tienes cuenta?</span>
					<button onclick="location.href='register.php'">Crear cuenta</button>
				</div>
			</form>
		</div>
	</main>

	<footer>

	</footer>

</body>

</html>
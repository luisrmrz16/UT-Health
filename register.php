<!DOCTYPE html>
<html lang="es-MX">

<head>
	<meta charset="utf-8">
	<title>Registrarse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/icon" href="./images/logo-v1.png">
	<meta name="author" content="luisrmrz16">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="./styles/register.css" rel="stylesheet" type="text/css"/>
</head>

<body>

	<header>
		<img onclick="location.href='./index.html'" id="logo" src="./images/logo-v2.png"/>
	</header>

	<main>
		<div class="login-box">
			<img id="user" src="images/user-2.png"/>
			<form action="php/register_back.php" method="POST">
				<h1>Registrarse</h1>
				<div class="formulario">
					<input type="email" id="email" name="email" placeholder="Email" required>
					<input type="text" id="username" name="username" placeholder="Nombre de usuario" required>
					<input type="password" id="password" name="password" placeholder="Contraseña" required>
					<input type="text" id="name" name="name" placeholder="Nombre(s)" required>
					<input type="text" id="surname" name="surname" placeholder="Apellidos" required>
					<input type="text" id="school_control_number" name="school_control_number" placeholder="Matrícula">
				</div>
				<div id="register">
					<button>Crear cuenta</button>
				</div>
				<div id="access">
					<label>¿Ya tienes cuenta?</label>
					<button onclick="location.href='login.php'">Acceder</button>
				</div>
			</form>
		</div>
	</main>

	<footer>
		
	</footer>

</body>

</html>
<?php

session_start();

if(!isset($_SESSION['username'])){
	echo '
		<script>
			alert("No a iniciado sesión");
			window.location = "login.php";
		</script>';
	session_destroy();
	die();
};

?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
	<meta charset="utf-8">
	<title>Perfil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/icon" href="./images/logo-v1.png">
	<meta name="author" content="luisrmrz16">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="./styles/profile.css" rel="stylesheet" type="text/css"/>
</head>

<body>

	<header>
		<div class="barra-nav">
			<img onclick="location.href='./daily.html'" src="https://img.icons8.com/ios-filled/50/ffffff/circled-r.png"/>
			<img onclick="location.href='./info.html'" src="https://img.icons8.com/ios-glyphs/30/ffffff/info.png"/>
			<img onclick="location.href='./notifi.html'" src="https://img.icons8.com/material-sharp/24/ffffff/bell.png"/>
			<img onclick="location.href='./config.html'" src="https://img.icons8.com/material-rounded/24/ffffff/settings.png"/>
			<a id="bn1" href="daily.html">Registro</a>
			<a id="bn2" href="info.html">Información</a>
			<a id="bn3" href="notifi.html">Notificaciones</a>
			<a id="bn4" href="config.html">Configuración</a>
		</div>
	</header>
	
	<main>
		<img id="logo" src="./images/logo-v2.png"/>
		<h1><b>PERFIL</b></h1>
		<div class="info">
			<ul>
				<li>USUARIO</li>
				<li>NOMBRE</li>
				<li>APELLIDOS</li>
				<li>EDAD</li>
				<li>NÚMERO DE CONTROL</li>
				<li>FICHA MÉDICA<img onclick="location.href='ficha-med.html'" id="flecha" src="https://img.icons8.com/material-outlined/24/000000/expand-arrow--v2.png"/></li>
			</ul>
		</div>
	</main>
	
	<footer>
		<button onclick="location.href='php/exit.php'" id="out">CERRAR SESIÓN</button>
	</footer>
	
</body>

</html>
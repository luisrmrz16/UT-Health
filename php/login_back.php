<?php

session_start();

include './conection_back.php';

$username  = $_POST['username'];
$password = $_POST['password'];
$password = hash('sha512', $password);

$check_login = mysqli_query($conection, "SELECT * FROM users WHERE user_name = '$username' and password = '$password'");

if(mysqli_num_rows($check_login) > 0){
	$_SESSION['username'] = $username;
	header("location: ../profile.php");
}
else{
	echo '
	<script>
		alert("Usuario o contraseña incorrectos, por favor verifique su información.");
		window.location = "../login.php";
	</script>';
	exit;
};

?>
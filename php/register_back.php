<?php

include './conection_back.php';

// VARIABLES
$email = $_POST['email'];
$user_name = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$last_name = $_POST['surname'];
$school_id = $_POST['school_control_number'];
$password = hash('sha512', $password);

// INSERTAR DATOS
$registro_users = "INSERT INTO users (email, user_name, password, name, last_name, school_id) 
					VALUES ('$email', '$user_name', '$password', '$name', '$last_name', '$school_id')";

// VERIFICAR QUE NO SE REPITA EL CORREO
$verify_email = mysqli_query($conection, "SELECT * FROM users WHERE email='$email'");
if(mysqli_num_rows($verify_email) > 0){
	echo '
		<script>
			alert("Este correo ya a sido utilizado.");
			window.location = "../register.php";
		</script>';
		exit();
		mysqli_close($conection);
};

// VERIFICAR QUE NO SE REPITA EL USUARIO
$verify_user = mysqli_query($conection, "SELECT * FROM users WHERE user_name='$user_name'");
if(mysqli_num_rows($verify_user) > 0){
	echo '
		<script>
			alert("Este usuario ya esta en uso.");
			window.location = "../register.php";
		</script>';
		exit();
		mysqli_close($conection);
};

// EJECUCIÓN DEL SRIPT PRINCIPAL
$run = mysqli_query($conection, $registro_users);

if($run){
	echo '
		<script>
			alert("Cuenta creada con exito, inicie sesión por favor.");
			window.location = "../login.php";
		</script>';
}
else{
	echo '
		<script>
			alert("¡ERROR!");
			window.location = "../register.php";
		</script>';
};

mysqli_close($conection);

?>
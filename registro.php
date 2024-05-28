<?php
	
	include_once('db.php');

	//obtenemos los valores del formulario
	$nombres = $_POST['nombreuser'];
	$apellidos = $_POST['apellidosuser'];
	$email = $_POST['emailuser'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];

	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas ingresadas no coinciden. Verificar.<br><br><a href="registro.htm">Volver</a>');
	}
	//se encripta la contraseña
	$contrasenaUser = md5($pass);

	$conectar = usuariosregconn();

	$consultasql = "INSERT INTO datos (nombres, apellidos, email, password) 
			 VALUES ('$nombres','$apellidos','$email','$contrasenaUser')";
	$resultado = mysqli_query($conectar, $consultasql)
		or trigger_error("Consulta registracion SQL fallo - Error: ".mysqli_error($conectar), E_USER_ERROR);


	//echo "los datos registrados son: <br>";
	//echo "$nombres, $apellidos, $email";

?>

<?php 

	$link = mysqli_connect("localhost", "root", "", "mar_informa") or die ("Error de conexión");


	$solicitud = mysqli_query($link,"SELECT MAX(idUsuario) FROM usuario");
	//$solicitud = mysql_query("Select nombre From 'cliente' Where email = '$email'");

	$idMayor = 0;
	//echo $solicitud;

	if ($reg = mysqli_fetch_array($solicitud)) {
		session_start();
		$idMayor = $reg['MAX(idUsuario)'] + 1;
	}else{
		echo "Error";
	}


	$idPersona = $idMayor;
	$nombre = $_POST['Nombrep'];
	$apellido = $_POST['Apellido'];
	$correo = $_POST['correo'];
	$tipo = "l";

	$idUsuario = $idMayor;
	$username = $_POST['username'];
	$password = $_POST['password'];

	mysqli_query($link, "INSERT INTO persona VALUES ($idPersona, '$nombre', '$apellido', '$correo', '$tipo')");

	mysqli_query($link, "INSERT INTO usuario VALUES ('$idUsuario', $idPersona, '$username', '$password')");

	header("Location: ..\index.php");
?>
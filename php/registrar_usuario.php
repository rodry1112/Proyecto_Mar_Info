<?php 

	$link = mysqli_connect("localhost", "root", "", "mar_informa") or die ("Error de conexión");

	//Mejorar la defensa de esta madre

	$idPersona = 5;
	$nombre = $_POST['Nombrep'];
	$apellido = $_POST['Apellido'];
	$correo = $_POST['correo'];
	$tipo = "l";

	$idUsuario = 1;
	$username = $_POST['username'];
	$password = $_POST['password'];

	mysqli_query($link, "INSERT INTO persona VALUES ($idPersona, '$nombre', '$apellido', '$correo', '$tipo')");

	mysqli_query($link, "INSERT INTO usuario VALUES ('$idUsuario', $idPersona, '$username', '$password')");

	header("Location: ..\index.html");
?>
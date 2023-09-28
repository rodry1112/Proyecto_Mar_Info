<?php  
	$link = mysqli_connect("localhost", "root", "", "mar_informa") or die ("Error de conexión");

	//mysql_select_db("db_donpapi", $link) or die ("Problema de conexión");

	$nombre = $_POST['nombre'];
	$codigo = $_POST['codigo'];

	//$req = (strlen($password) * strlen($email));

	$solicitud = mysqli_query($link,"SELECT nombre, idUsuario FROM usuario WHERE nombre = '$nombre' AND codigo = '$codigo'");
	//$solicitud = mysql_query("Select nombre From 'cliente' Where email = '$email'");

	//echo $solicitud;

	if ($reg = mysqli_fetch_array($solicitud)) {
		session_start();
		$_SESSION["nombre"] = $reg['nombre'];
		$_SESSION["id_usuario"] = $reg['idUsuario'];
	}else{
		echo "Error";
	}

	header("location: ../index.php");
?>
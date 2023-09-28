<?php 
    session_start();
	$link = mysqli_connect("localhost", "root", "", "mar_informa") or die ("Error de conexión");


    $solicitud = mysqli_query($link,"SELECT MAX(idComentario) FROM comentario");

	$idMayor = 0;
	//echo $solicitud;

	if ($reg = mysqli_fetch_array($solicitud)) {
		$idMayor = $reg['MAX(idComentario)'] + 1;
	}else{
		echo "Error";
	}

	$comentario = $_POST['comentario'];
    $fecha = date("Y-m-d");
    $idUsuario = $_SESSION['id_usuario'];
    $idNoticia = $_SESSION['id_noticia'];

    $solicitud = "INSERT INTO comentario VALUES ($idMayor, $idUsuario, $idNoticia, '$comentario', '$fecha')";

    mysqli_query($link, $solicitud);

	header("location: ../pages/noticia.php");
?>
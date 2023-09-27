<?php

    session_start();
    
    if (isset($_GET["nombreNoticia"])) {
        // asignar w1 y w2 a dos variables
        $nombre = $_GET["nombreNoticia"];
    
        // mostrar $phpVar1 y $phpVar2
        echo "<p>Parameters: " . $nombre . "</p>";
    } else {
        echo "<p>No parameters</p>";
    }

    $link = mysqli_connect("localhost", "root", "", "mar_informa") or die ("Error de conexión");

    $seleccionar = 'SELECT * FROM noticia WHERE nombre =' . "'" . $nombre . "'";
    
    //echo ($seleccionar);

    $nombreNoticia = mysqli_query($link, $seleccionar);      
?>

<?php foreach ($nombreNoticia as $noticia):?>

    <p> <?php echo($noticia['descripcion']); ?> </p>

<?php endforeach ?>
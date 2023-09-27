<?php 
  session_start();
  if (isset($_GET["noticia"])) {
    // asignar w1 y w2 a dos variables
    $noticia = $_GET["noticia"];
 
    // mostrar $phpVar1 y $phpVar2
    //echo "<p>Parameters: " . $noticia . "</p>";
  } else {
      //echo "<p>No parameters</p>";
  }

  $link = mysqli_connect("localhost", "root", "", "mar_informa") or die ("Error de conexión");

  $seleccionar = 'SELECT * FROM noticia WHERE tipo =' . "'" . $noticia . "'";
  
  //echo ($seleccionar);
  $catalogoNoticia = mysqli_query($link, $seleccionar);
?>

<form action="../noticiaE.php" metod="GET">
  <?php foreach ($catalogoNoticia as $catalogo):?>

    <input type="submit" name="nombreNoticia" value="<?php echo($catalogo['nombre']);?>">

  <?php endforeach ?>
</form>


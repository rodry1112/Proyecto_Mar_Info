<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>MAR INFORMA</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="../layout/styles/layoutnoticia.css" type="text/css" />
  <link rel="stylesheet" href="../layout/styles/images/botonn.css" type="text/css"/>
  <script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
  <!-- Waterwheel Carousel -->
  <script type="text/javascript" src="../layout/scripts/carousel/jquery.waterwheelCarousel.min.js"></script>
  <script type="text/javascript" src="../layout/scripts/carousel/jquery.waterwheelCarousel.setup.js"></script>
  <!-- / Waterwheel Carousel -->
</head>

<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.html">MAR INFORMA</a></h1>
    </div>
    <div class="fl_rightsup">
    <?php
        session_start();
        
        if(!empty($_SESSION["nombre"])){
          $nombre = $_SESSION["nombre"];

          echo "<button class='ripple'> $nombre </button>";

        }else{
          print "<button class='ripple'>Inicia Sesion</button>";
        }
      ?>
    <script src="../animaciones/botonini.js"></script>
   </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="../index.php">INICIO</a></li>
        <li><a href="./noticia_catalogo.php?noticia=politica">POLITICA</a></li>
        <li><a href="./noticia_catalogo.php?noticia=deportes">DEPORTES</a></li>
        <li><a href="./noticia_catalogo.php?noticia=receta">RECETAS</a></li>
        <li class="last"><a href="./noticia_catalogo.php?noticia=tecnologia">TECNOLOGIA</a></li>
        <li><a href="./noticia_catalogo.php?noticia=cultura">CULTURA</a></li>
        <li><a href="./noticia_catalogo.php?noticia=farandula">FARANDULA</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="BUSCAR CONTENIDO &hellip;"  onfocus="this.value=(this.value=='BUSCAR CONTENIDO &hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Buscar" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="content">

        <?php
            
            if (isset($_GET["nombreNoticia"])) {
                // asignar w1 y w2 a dos variables
                $_SESSION['noticia'] = $_GET["nombreNoticia"];
            
                // mostrar $phpVar1 y $phpVar2
                
            }
            $noticia = $_SESSION['noticia'];

            echo "<h1>" . $noticia . "</h1>";

            $link = mysqli_connect("localhost", "root", "", "mar_informa") or die ("Error de conexión");

            $seleccionar = 'SELECT * FROM noticia WHERE nombre =' . "'" . $noticia  . "'";
            
            //echo ($seleccionar);

            $nombreNoticia = mysqli_query($link, $seleccionar);

            if ($reg = mysqli_fetch_array($nombreNoticia)) {
              echo($reg['descripcion']);
              $_SESSION['id_noticia'] = $reg['idNoticia'];
              $idNotcia = $_SESSION['id_noticia'];
            }
        ?>
      <p></p>
      <div id="comments">
        <h2>COMENTARIOS</h2>

        <?php 
          $comentario = 'SELECT contenido, fecha, nombre FROM comentario INNER JOIN usuario ON usuario.idUsuario = comentario.idUsuario WHERE idNoticia =' . $idNotcia;
            
          //echo ($seleccionar);

          $comentarios = mysqli_query($link, $comentario);
        ?>

        <ul class="commentlist">

          <?php foreach ($comentarios as $com):?>
          
            <li class="comment_odd">
              <div class="author"><p><?php echo($com['nombre']);?></p></div>
              <div class="submitdate"><p><?php echo($com['fecha']);?></p></div>
              <p><?php echo($com['contenido']);?></p>
            </li>

          <?php endforeach ?>
        </ul>

      </div>
      <h2>AGREGA UN COMENTARIOS</h2>
      <div id="respond">
        <form action="../php/registrar_comentario.php" method="post">

          <p>
            <textarea name="comentario" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comentario</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Comentar" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Borrar" />
          </p>
        </form>

      </div>
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Secondary Navigation</h2>
        <ul>
          <li><a href="#">Navigation - Level 1</a></li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title"><img src="../images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div id="featured">
        <ul>
          <li>
            <h2>Indonectetus facilis leonib</h2>
            <p class="imgholder"><img src="../images/demo/240x90.gif" alt="" /></p>
            <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
      </div>
      <div class="holder">
        <h2>Lorem ipsum dolor</h2>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li>Etiam vel sapien et</li>
          <li><a href="#">Etiam vel sapien et</a></li>
        </ul>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div class="wrapper col5">
    <div id="footer">
      <div class="footbox twitter">
        <h2>PAGINAS PERSONALES</h2>
        <ul>
          <li><a href= "https://www.facebook.com/miguel.callelinares">>Facebook = MIGUEL ANGEL CALLE LINARES</a></li>
          <li><a href= "https://www.facebook.com/rodrigomario.barahonayali">>Facebook = RODRIGO MARIO BARAHONA YALI</li>
            <li><a href= "https://www.facebook.com/adrifu.adrifu">>Facebook = ALISSON ADRIANA FUNES LIMACHI</li>
          
        </ul>
      </div>
      <div class="footbox flickr">
        <h2>UN POCO SOBRE NOSOTROS</h2>
        <ul>
          <li><a href="#"><img src="../images/demo/RODRI.jfif" alt="" width="80" height="80"/></a></li>
          <li><a href="#"><img src="../images/demo/MIGUEL.jfif" alt="" width="80" height="80"/></a></li>
          <li><a href="#"><img src="../images/demo/ADRIANA.jfif" alt="" width="80" height="80"/></a></li>
        </ul>
        <br class="clear" />
      </div>
      <div class="footbox posts">
        <h2>NOTICIAS INTERNACIONALES</h2>
        <ul>
          <li><a href="index.html">PERU</a></li> 
          <li><a href="index.html">CHILE</a></li>
          <li><a href="index.html">ARGENTINA</a></li>
          <li><a href="index.html">EL SALVADOR</a></li>
          <li><a href="index.html">MEXICO</a></li>
          <li><a href="index.html">ESTADOS UNIDOS</a></li>
          <li><a href="index.html">INDIA</a></li>
          <li><a href="index.html">ECUADOR</a></li>
          <li><a href="index.html">COLOMBIA</a></li>
        </ul>
      </div>
      <div class="footbox banners last">
        <h2>EL EQUIPO DE MAR INFORMA</h2>
        <ul>
          <li><a href="#"><img src="../images/demo/23.jfif" alt="" width="200" height="150"/></a></li>
          <li><a href="#"><img src="../images/demo/323.jfif" alt="" width="200" height="150" /></a></li>
        </ul>
      </div>
      <br class="clear" />
    </div>
  </div>
  <!-- ####################################################################################################### -->
  <div class="MAR INFORMA">
    <div id="copyright">
      <p class="fl_left">Copyright &copy; 2023 - Derechos Reservados - <a href="#">MAR INFORMA</a></p>
      <p class="fl_right">SIGUENOS EN NUESTRAS REDES SOCIALES <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
      <br class="clear" />
    </div>
  </div>
  </body>
  </html>
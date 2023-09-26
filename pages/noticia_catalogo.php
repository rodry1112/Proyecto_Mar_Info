<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>MAR INFORMA</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
  <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
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
      <p>EL SIGUIENTE SITIO WEB ES TOTALMENTE GRATIS</p>
    </div>
    <div class="fl_right"><a href="#"><img src="images/demo/LOGO1.jfif" alt="" width="300" height="50" /></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="../index.html">INICIO</a></li>
        <li><a href="politica.html">POLITICA</a></li>
        <li><a href="deporte.html">DEPORTES</a></li>
        <li><a href="recetas.html">RECETAS</a>
          <ul>
            <li><a href="#">NACIONAL</a></li>
            <li><a href="#">INTERNACIONAL</a></li>
            <li><a href="#">RECETAS EN 5 MIN</a></li>
          </ul>
          <li class="last"><a href="tecnologia.html">TECNOLOGIA</a></li>
          <li><a href="cultura.html">CULTURA</a></li>
          <li><a href="farandula.html">FARANDULA</a></li>
        </li>
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
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">Mira lo Ultimo</li>
      <li>&#187;</li>
      <li><a href="#">Inicio</a></li>
      <li>&#187;</li>
      <li><a href="#">Politica</a></li>
      <li>&#187;</li>
      <li><a href="#">Bolivia</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">MAS</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="content">

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

    <form action="./noticia.php" metod="GET">
      <?php foreach ($catalogoNoticia as $catalogo):?>

        <input type="submit" name="nombreNoticia" value="<?php echo($catalogo['nombre']);?>">

      <?php endforeach ?>
    </form>
    
      <div id="comments">
        <h2>COMENTARIOS</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="../images/demo/RODRI.jfif" width="32" height="32" alt="" /><span class="name"><a href="#">RODRIGO</a></span> <span class="wrote">RODRI@GMAIL.COM</span></div>
            <div class="submitdate"><a href="#">13 de Septiembre de 2023</a></div>
            <p>Esta noticia revela una creciente tensión entre el expresidente Evo Morales y el actual presidente Luis Arce en Bolivia. Ambos líderes del Movimiento al Socialismo (MAS) se acusan mutuamente de complicidad con el narcotráfico, lo que ha generado una división interna en el partido gobernante.</p>
          </li>
          <li class="comment_even">
            <div class="author"><img class="avatar" src="../images/demo/ADRIANA.jfif" width="32" height="32" alt="" /><span class="name"><a href="#">ADRIANA</a></span> <span class="wrote">ADRI@GMAIL.COM</span></div>
            <div class="submitdate"><a href="#">13 de Septiembre de 2023</a></div>
            <p>El presidente Arce ha negado rotundamente las acusaciones de encubrimiento al narcotráfico y ha propuesto una estrategia de regionalización de la lucha contra esta actividad ilícita. Según Arce, existe una coincidencia con países como Brasil, Colombia, Paraguay y Uruguay para intercambiar información y llevar a cabo operativos conjuntos.</p>
          </li>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="../images/demo/MIGUEL.jfif" width="32" height="32" alt="" /><span class="name"><a href="#">MIGUEL ANGEL</a></span> <span class="wrote">MIGUEL@GMAIL.COM</span></div>
            <div class="submitdate"><a href="#">13 de Septiembre de 2023</a></div>
            <p>La presencia de narcotraficantes en Bolivia es un problema real, como lo demuestra la búsqueda del narcotraficante uruguayo Sebastián Marset en el país. Marset logró establecerse en Bolivia con identidad falsa y operar sin levantar sospechas durante un tiempo. Estos casos ponen en evidencia la necesidad de fortalecer los esfuerzos de las autoridades para combatir el narcotráfico y evitar la percepción negativa de Bolivia como un exportador de cocaína.</p>
          </li>
        </ul>
      </div>
      <h2>AGREGA UN COMENTARIOS</h2>
      <div id="respond">
        <form action="#" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>NOMBRE (REQUERIDO)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>CORREO ELECTRONICO (REQUERIDO)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
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
          <li><a href="#"><img src="images/demo/RODRI.jfif" alt="" width="80" height="80"/></a></li>
          <li><a href="#"><img src="images/demo/MIGUEL.jfif" alt="" width="80" height="80"/></a></li>
          <li><a href="#"><img src="images/demo/ADRIANA.jfif" alt="" width="80" height="80"/></a></li>
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
          <li><a href="#"><img src="images/demo/23.jfif" alt="" width="200" height="150"/></a></li>
          <li><a href="#"><img src="images/demo/323.jfif" alt="" width="200" height="150" /></a></li>
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
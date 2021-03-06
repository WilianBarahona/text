<?php
  session_start();
  // Si no se ha declarado esta variable es porque no se ha iniciado sesion.
  if (!isset($_SESSION["permiso"])){ 
    header("Location: login.php");
    // Si se inicio pero el permiso no es correcto. 
  } else if (!($_SESSION["permiso"] == "cliente"))
    header("Location: admin/index.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Aerolinea</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    
    <?php 
      include("admin/nav-bar-home.php");
     ?>

    <div class="jumbotron">
      <div class="container">
        <center><h1>Bienvenidos a AEROLINEAS SOSA</h1></center>
        <center><p>Somos una Agencia de viajes especializada en viajeros que buscan vivir una experiencia diferente. Contamos con una sucursal en Tegucigalpa.</p>
        </center>
      </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <a href="reservaciones.html"><img class="img-circle" src="img/reservaciones.png" alt="Generic placeholder image" width="140" height="140"></a>
          <h2>Reservaciones</h2>
          <p>Puedes hacer tus reservaciones a cualquien destido que desees de forma facil y rapido.</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="destinos.html"><img class="img-circle" src="img/destino.png" alt="Generic placeholder image" width="140" height="140"></a>
          <h2>Destinos</h2>
          <p>Tenemos una gran lista de Destinos turistico que puedes ir a visitar con tu familia.</p>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="reservaciones.html"><img class="img-circle" src="img/facturacion.png" alt="Generic placeholder image" width="140" height="140"></a>
          <h2>Facturacion</h2>
          <p>Realiza tus comprar online de forma facil y segura con tu tarjeta.</p>
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Bases de Datos I</a></p>
        <p>&copy; 2018 W&JC, Company. &middot; Todos los derechos &middot; Reservados</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

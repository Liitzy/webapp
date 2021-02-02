<?php require"../controller/seguridad.class.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Webapp | Aplicación para autentificarse.</title>
    <!-- Bootstrap core CSS -->
    <link href="../resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../resources/bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="../resources/bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Webapp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca</a>
            </li>          
          </ul> 
         <span class="text-white">
          Bienvenido: <?php echo $_SESSION['miSesion']['nombre']?>
          </span> &nbsp;
          <a class="btn btn-secondary" href="../controller/salir.class.php">Cerrar Sesión</a>
        </div>
      </nav>
    </header>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          
        </div>
      </div>
      <hr>

      <div class="container"> 

      <!---------  *****************----------->
      <div class="card-footer">
        <small class="text-muted"> <center> GRACIAS POR TU COMPRA</center></small>
      </div>
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../resources/images/bufandas.jpg" width='230px' alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><center>Pedido</h5></center>
        <p class="card-text"><center>***Bufanda*** <br> Color:Verde <br>Entrega: 1-febrero-2021 <br> Envio: DHL <br> Total: $120.</p>
        </p>
      </div>
    </div>
  </div>
</div>
     <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../resources/images/playera.jpg" width='230px' alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><center>Pedido</h5></center>
        <p class="card-text"><center>***Playera*** <br> Color: Nutella <br>Entrega: 1-febrero-2021  <br> Envio: DHL <br> Total: $150 .</p>
        </p>
      </div>
    </div>
  </div>
</div>
     <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../resources/images/faldaaa.jpg" width='200px' alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><center>Pedido </h5></center>
        <p class="card-text"><center>***Falda*** <br> Color:Rosa <br>Entrega: 5-febrero-2021  <br> Envio: DHL <br> Total: $180 .</p>
        </p>
      </div>
    </div>
  </div>
</div>
<!--------*****************************************************------>
        <form method="post" action="productos.class.php">
          <center><button class="btn btn-lg btn-primary" 
                  type="submit" name="pedido" value="login">Regresar</button></center>
                  
		  <hr>	
      </div> <!-- /container -->

    </main>

    <footer class="footer">
      <div class="container">
        <p>
          &copy; 2021 Webapp
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="resources/bootstrap/js/jquery-3.5.1.js"></script> 
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

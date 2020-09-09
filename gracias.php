<?php  
session_start();

if (!$_SESSION) {
    header('Location:index.php');
}

session_destroy();

?>

<!doctype html>
<html lang="es">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--FAVICON-->

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <title>VENICE</title>


  </head>
  <body>

    
  		<section id="section1" class="section">
    		<div class="container-fluid">
                <div class="row content_gracias">

    			    <div class="col-sm-12 col-md-12 col-xl-12 logo-main mx-auto d-block text-center"><img src="images/logo.png" alt="logo-Venice"></div>
                    <div class="w-100"></div>
                 
                    <div class="col-sm-12 col-md-12 col-xl-12 text-center">
                        <h2 class="blanco copy">¡GRACIAS! TU INFORMACIÓN FUE ENVIADA CON<span class="b-medium"> ÉXITO</h2>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center volver">
                        <a href="index.php" class="b-bold hvr-grow">VOLVER</a>
                    </div>
                    
                </div>

    			</div>

                <div class="row footer fixed-bottom">
                    
                        <div class="info1 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="text-center mx-auto d-block"><img src="images/logo.png" alt="logo-venice"></div>
                            <div class="text-center"><i class="fa fa-envelope-o"></i><a href="mailto:ventas@venice.com.ar">ventas@venice.com.ar</a></div>
                            <div class="text-center"><i class="fa fa-mobile"></i>0800 345 3001</div>
                        </div>
                        <div class="info2 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="text-center"><i class="fa fa-map-marker"></i>Solis y Rio Lujan, TIGRE</div>
                            <div class="text-center">Lunes a Sábados de 10 a 18hs</div>
                            <div class="text-center"><i class="fa fa-whatsapp"></i>(+54 911) 5842 1408</div>
                        </div>
                        <div class="info3 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                            <div>DESARROLLAN</div>
                            <div><img src="images/logo-metro.png" alt="logo-metro21"><img src="images/logo-tglt.png" id="logo-tglt" alt="logo-tglt"></div>
                        </div>
                        <div class="info4 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center">
                            <div>COMERCIALIZA</div>
                            <div><img src="images/logo-achaval.jpg" alt="logo-achaval"></div>
                        </div>
                    
                </div>
                
    		
    	</section>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
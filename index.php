<?php include('dBconnection.php');?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Préparation Physique</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <!--Barre de navigation-->
            <?php include('navbar.php'); ?>
            <!--Fin barre de navigation-->
            <!--Contenu-->
            <div class="jumbotron">
                <h1> Hello, world !</h1>
                <p>Consectetuer et vero voluptates. Odio diam, habitasse iusto suspendisse, fugiat augue sociosqu! Felis, deserunt ac senectus inceptos inventore. Rhoncus leo, eveniet do. Duis bibendum cras, quis, lectus, hic quisquam minus.</p>

                <p>Autem hac doloremque, totam vel, aliquam nulla exercitationem quibusdam malesuada erat molestie? Expedita elementum consequat sed turpis. Iaculis, vehicula curabitur curabitur nullam dignissim praesent? Neque? Placerat omnis justo. Turpis senectus.</p>
                <? date_default_timezone_set('UTC+1');
                   echo date(DATE_ATOM, mktime());?>
            </div>
        </div>
       
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>

<?php define("BASE_ASSETS", base_url().'assets/') ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Five Pixel Studio</title>
    <!-- Bootstrap -->
    <link href="<?php echo BASE_ASSETS; ?>bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_ASSETS; ?>font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_ASSETS; ?>plantillas/plantilla_base/style.css">
    <link rel="shortcut icon" href="<?php echo BASE_ASSETS; ?>plantillas/plantilla_base/img/favicon.ico" type="image/x-icon" />
  </head>
  <body>
      <!--Base sin css -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a  href="<?php echo base_url(); ?>">
        <img src="<?php echo BASE_ASSETS; ?>plantillas/plantilla_base/img/logo_menu.png" class="img-responsive" alt="Image">
      </a>
    </div>

    </div>
  </div>
</nav>
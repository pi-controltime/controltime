<!DOCTYPE html>
<html>
<head lang ="es">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title><?php echo $title_page ?></title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-deep_orange.min.css" />
    <!--<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url (); ?>tools/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    .titlemenu{
      background-color: black;
      /* color: white;*/
    }
    </style>
  </head>
  <body>

  	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

  	  <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
  	    <div class="mdl-layout__header-row">
  	      <span class="android-title mdl-layout-title">
  	        <!--<img class="android-logo-image" src="images/android-logo.png">-->
  	      </span>
  	      <!-- Add spacer, to align navigation to the right in desktop -->
  	      <div class="android-header-spacer mdl-layout-spacer"></div>
  
  	      <!-- Navigation -->
  	      <div class="android-navigation-container">
  	        <nav class="android-navigation mdl-navigation">

  	          <!--<div class="material-icons mdl-badge mdl-badge--overlap" data-badge="5">account_box</div>-->

  	           <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url() ?>index.php/login/cerrarSesion">Cerrar Sesion</a>
            </nav>
  	      </div>
          <!--
  	      <span class="android-mobile-title mdl-layout-title">
  	        <img class="android-logo-image" src="images/android-logo.png">
  	      </span>


  	      <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
  	        <li class="mdl-menu__item">5.0 Lollipop</li>
  	        <li class="mdl-menu__item">4.4 KitKat</li>
  	        <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
  	        <li class="mdl-menu__item">Android History</li>
  	      </ul>-->
  	    </div>
  	  </div>

  	  <div class="android-drawer mdl-layout__drawer">
  	    <span class="mdl-layout-title">
  	      <img class="android-logo-image" src="<?php echo base_url();?>tools/img/logo.png" style="width: 180px; height: 70px;">
  	    </span>
        <hr>
  	    <nav class="mdl-navigation">
  	      <a class="mdl-navigation__link" href="<?php echo base_url();?>index.php/Principal">Principal</a>
          <a class="mdl-navigation__link" href="<?php echo base_url() ?>index.php/login/cerrarSesion">Cerrar sesion</a>
  	      
          <hr>
  	      <div class="android-drawer-separator"></div>

          <span class="mdl-navigation__link " href="">
          <i class="material-icons">settings</i> Administrar
          </span>
          <hr>
          <a class="mdl-navigation__link" href="<?php echo base_url();?>index.php/Personas">Personas</a>
          <a class="mdl-navigation__link" href="<?php echo base_url(); ?>index.php/Instituciones">Instituciones</a>

          <a class="mdl-navigation__link" href="<?php echo base_url(); ?>index.php/areas"">Areas</a>
          <a class="mdl-navigation__link" href="<?php echo base_url(); ?>index.php/subareas"">SubAreas</a>

          <a class="mdl-navigation__link" href="<?php echo base_url(); ?>index.php/eps">EPS</a>
          <hr>
  	      <span class="mdl-navigation__link " href="">
            <i class="material-icons">show_chart</i> Reportes
          </span>
          <hr>
  	      <a class="mdl-navigation__link" href="<?php echo base_url();?>index.php/Certlistos">Horas acumuladas</a>
  	      <a class="mdl-navigation__link" href="">Gastos ahorrados</a>

  	    </nav>
  	  </div>
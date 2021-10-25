<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Sistema de control de tarifarios SGTRT - Canvia">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ronald Chinchay Zelada">
    <!--color del front end-->
    <meta name="theme-color" content="#009688">
    <!--ícono del title-->
    <link rel="shortcut icon" href="<?= media();?>/images/canvia.ico">
    <title><?= $data['page_tag'] ?></title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <!--estilos personalizados-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
    
  </head>
  <body class="app sidebar-mini">
    <!-- Barra superior izquierda -->
    <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/dashboard">Sistema Tarifario</a>
      <!-- Botón de despliege de pantalla a la izquierda --><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
        <!-- Menú de la sesión iniciada -->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="fa fa-sign-out fa-lg"></i>Salir</a></li>
          </ul>
        </li>
      </ul>
    </header>
<?php require_once("nav_admin.php"); ?>
<?php
/* Smarty version 3.1.30, created on 2020-03-12 17:16:14
  from "/home/palencia/public_html/proyecto4/uptt/templates/cabecera_interna.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6aa69e3b9c09_01636046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210571c39c0b429aedaff03d499f712a57eaac8f' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/cabecera_interna.html',
      1 => 1584047659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6aa69e3b9c09_01636046 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">

<!--Comienzo de la Cabecera-->
<head>
  <meta charset="utf-8"/>

  <link href="./vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./estilos/personal.css">
  <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <!--Estilo de los iconos-->
  <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <title>Repositorio</title>
</head>

<body>
    <nav class="navbar fixed-top  navbar-expand-lg navbar-dark cab">
        <a class="navbar-brand" href="inicio_interno.php">Repositorio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-gears"></i> Administrador</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
              <i class="fa fa-university"></i> Operador Nucleo</a>
            </li>

            <li class="nav-item"><a class="nav-link" href="#">
            <i class="fa fa-leanpub"></i> Operador PNF</a>
            </li>
            
            <li class="nav-item"><a class="nav-link" href="#">
            <i class="fa fa-object-group"></i> Comite Tecnico</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
            <i class="fa fa-suitcase"></i> Profesor</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
            <i class="fa fa-graduation-cap"></i> Estudiante</a>
            </li>
            
    </ul>
    <a href="#" class="btn btn-link usuario"><i class="fa fa-user fa-fw"></i>Pedro Paredes</a>
    <a href="#" class="btn btn-outline-danger">Salir</a>
  </div>
</nav>
<br><br><?php }
}

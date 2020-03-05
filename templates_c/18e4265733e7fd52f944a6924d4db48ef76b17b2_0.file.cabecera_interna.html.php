<?php
/* Smarty version 3.1.30, created on 2020-03-04 20:47:47
  from "/home/jose/public_html/proyecto_iv/uptt/templates/cabecera_interna.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e604c33435570_53506143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18e4265733e7fd52f944a6924d4db48ef76b17b2' => 
    array (
      0 => '/home/jose/public_html/proyecto_iv/uptt/templates/cabecera_interna.html',
      1 => 1583369265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e604c33435570_53506143 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a class="nav-link" href="#">Administrador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">operador Carrera</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Operador Sede</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Comite Tecnico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profesor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">estudiante</a>
            </li>
            
    </ul>
    <a href="#" class="btn btn-link usuario"><i class="fa fa-user fa-fw"></i>Pedro Paredes</a>
    <a href="#" class="btn btn-outline-danger">Salir</a>
  </div>
</nav>

<br>
<br>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2020-03-19 15:08:00
  from "/home/veronica/public_html/uptt/templates/cabecera_interna.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e73c310888d93_41316284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf79da9b1c1914b33bd6e839d11ba0adbe598d2e' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/cabecera_interna.html',
      1 => 1584644878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e73c310888d93_41316284 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">

<!--Comienzo de la Cabecera-->
<head>
  <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                <a class="nav-link" href="#"> Administrador</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
              Operador Nucleo</a>
            </li>

            <li class="nav-item"><a class="nav-link" href="#">
             Operador PNF</a>
            </li>
            
            <li class="nav-item"><a class="nav-link" href="#">
            Comite Tecnico</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
            Profesor</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
            Estudiante</a>
            </li>
            
    </ul>
    <a href="personas_datos.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" class="btn btn-link usuario"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION["u"]["correo"];?>
</a>
    <a href="proc_exit.php" class="btn btn-outline-danger">Salir</a>
  </div>
</nav>
<?php }
}

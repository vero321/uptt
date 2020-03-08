<?php
/* Smarty version 3.1.30, created on 2020-03-07 00:43:50
  from "/home/palencia/public_html/proyecto4/uptt/templates/cabecera_mensaje.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6326866d9b74_52315324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e419fe5cd3a555cacb0a2f78b7e7ab7498b9d6b' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/cabecera_mensaje.html',
      1 => 1559575245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6326866d9b74_52315324 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <link href="./vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./estilos/personal.css">
	<title>Repositorio</title>

  <style >
    .bg-dark{
      background-color: <?php echo @constant('color_barra_menu');?>
!important ;
      
      }
    .pie{
      background-color: <?php echo @constant('color_pie');?>
!important;
    } 
    body{
      background-color: <?php echo @constant('color_fondo_app');?>
!important;
    }
    a.enlace-claro{
      color: <?php echo @constant('color_enlace_claro');?>
!important;
    }
  </style>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['cab']->value)===null||$tmp==='' ? '' : $tmp);?>

</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="index.php"><img src="./<?php echo @constant('logo_peq');?>
"></a>
</nav>

<?php }
}

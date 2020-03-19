<?php
/* Smarty version 3.1.30, created on 2020-03-18 23:59:25
  from "/home/palencia/public_html/proyecto4/uptt/templates/cabecera_mensaje.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e72ee1d19d4e2_99355926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e419fe5cd3a555cacb0a2f78b7e7ab7498b9d6b' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/cabecera_mensaje.html',
      1 => 1583782345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e72ee1d19d4e2_99355926 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <link href="./vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./estilos/personal.css">
	<title>Repositorio</title>

  

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['cab']->value)===null||$tmp==='' ? '' : $tmp);?>

</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
<nav class="navbar  navbar-expand-lg navbar-dark cab ">
  <a class="navbar-brand" href="index.php"><img src="./imagenes/logo.png"></a>
</nav>

<?php }
}

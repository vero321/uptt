<?php
/* Smarty version 3.1.30, created on 2020-03-08 22:14:21
  from "/home/veronica/public_html/uptt/templates/cabecera_mensaje.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e65a67d985c98_83825251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e109f1da5f06871836bedae3d24234d8b8a536' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/cabecera_mensaje.html',
      1 => 1583720051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e65a67d985c98_83825251 (Smarty_Internal_Template $_smarty_tpl) {
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

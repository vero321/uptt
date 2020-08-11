<?php
/* Smarty version 3.1.30, created on 2020-08-10 23:26:31
  from "/home/palencia/public_html/proyecto4/uptt/modulos/inicio/templates/inicio_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f320fe7bddd16_12203240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e4611be39c6ddbf4db24a71ea10c4e7b69ce8e' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/inicio/templates/inicio_interno.html',
      1 => 1596467858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../pie/pie_interno2.html' => 1,
  ),
),false)) {
function content_5f320fe7bddd16_12203240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<incluye menu y agrega el espasio de trbajo>
<div class="container" >
    <img src="../../imagenes/logo1.png"  class="img-rounded img-fluid mx-auto d-block img_inicio" alt="logo">
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

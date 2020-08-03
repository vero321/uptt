<?php
/* Smarty version 3.1.30, created on 2020-08-03 10:23:35
  from "/home/veronica/public_html/uptt/modulos/inicio/templates/inicio_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f281de73a3b47_81366241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0097e900a6928ce92b43ddf96d2a3e57d6d34087' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/inicio/templates/inicio_interno.html',
      1 => 1596464415,
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
function content_5f281de73a3b47_81366241 (Smarty_Internal_Template $_smarty_tpl) {
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

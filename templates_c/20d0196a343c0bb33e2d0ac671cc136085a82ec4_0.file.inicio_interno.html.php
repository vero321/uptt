<?php
/* Smarty version 3.1.30, created on 2020-04-01 18:49:36
  from "/home/jose/public_html/proyecto4/uptt/templates/inicio_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e851a80e309c3_88659743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d0196a343c0bb33e2d0ac671cc136085a82ec4' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/inicio_interno.html',
      1 => 1585762524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5e851a80e309c3_88659743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<incluye menu y agrega el espasio de trbajo>
<div class="container" >
    <img src="./imagenes/logo1.png"  class="img-rounded img-fluid mx-auto d-block img_inicio" alt="logo">
</div>

<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

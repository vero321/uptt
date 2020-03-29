<?php
/* Smarty version 3.1.30, created on 2020-03-28 20:28:25
  from "/home/palencia/public_html/proyecto4/uptt/templates/inicio_interno.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7feba9bacee7_85007281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa1e21777d16b2533c5914607500ac49c54a232c' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/inicio_interno.html',
      1 => 1585441703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5e7feba9bacee7_85007281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<incluye menu y agrega el espasio de trbajo>
<div class="container" >
    <img src="./imagenes/logo1.png" style="padding-top: 10%; padding-left: 20%; " class="img-rounded img-responsive" alt="logo">
</div>

<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2020-03-10 22:14:28
  from "/home/jose/public_html/proyecto4/uptt/templates/mensaje_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e68498407e456_51313615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b02c4be2dca47af3c8b6d7a3707177048e504d6e' => 
    array (
      0 => '/home/jose/public_html/proyecto4/uptt/templates/mensaje_eliminar.html',
      1 => 1583863538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_mensaje.html' => 1,
    'file:pie_mensaje.html' => 1,
  ),
),false)) {
function content_5e68498407e456_51313615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_mensaje.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="jumbotron" style="margin-bottom: 0;">

            <div class="alert alert-dark" style="font-size: 1.4rem;">
                Esta seguro que desea Eliminar <?php echo $_smarty_tpl->tpl_vars['e']->value;?>

            </div>
            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['si']->value;?>
">
            	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            	<button  class="btn btn-dark" type="submit" name="enviar" value="Eliminar">SI</button>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
" class="btn btn-dark" >NO</a>
            </form>
	</div>
<?php $_smarty_tpl->_subTemplateRender("file:pie_mensaje.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
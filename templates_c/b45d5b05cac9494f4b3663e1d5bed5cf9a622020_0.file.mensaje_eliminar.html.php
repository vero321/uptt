<?php
/* Smarty version 3.1.30, created on 2020-04-24 23:09:25
  from "/home/veronica/public_html/uptt/templates/mensaje_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea3a9e5c81997_42692908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b45d5b05cac9494f4b3663e1d5bed5cf9a622020' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/mensaje_eliminar.html',
      1 => 1584988766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5ea3a9e5c81997_42692908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="margin-top: 90px;">
  <div class="row">
    <div class="col-md-8 offset-md-2 "  >
	    <div class="jumbotron" style=" background: #fff;!important">

            <div class="alert alert-dark" style="font-size: 1.4rem;">
              <hr class="my-4">
                Esta seguro que desea eliminar <?php echo $_smarty_tpl->tpl_vars['e']->value;?>

              <hr class="my-4">
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
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

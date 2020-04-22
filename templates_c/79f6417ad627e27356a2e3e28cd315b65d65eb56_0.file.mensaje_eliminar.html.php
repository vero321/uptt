<?php
/* Smarty version 3.1.30, created on 2020-04-21 17:24:07
  from "/home/palencia/public_html/proyecto4/uptt/templates/mensaje_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e9f6477990b44_04428342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f6417ad627e27356a2e3e28cd315b65d65eb56' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/mensaje_eliminar.html',
      1 => 1586641863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5e9f6477990b44_04428342 (Smarty_Internal_Template $_smarty_tpl) {
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

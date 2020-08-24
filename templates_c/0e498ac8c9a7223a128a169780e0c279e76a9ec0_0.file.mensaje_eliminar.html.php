<?php
/* Smarty version 3.1.30, created on 2020-08-24 16:32:12
  from "/home/veronica/public_html/uptt/modulos/mensaje/templates/mensaje_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f4423cc2dd857_74501849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e498ac8c9a7223a128a169780e0c279e76a9ec0' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/mensaje/templates/mensaje_eliminar.html',
      1 => 1596456106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f4423cc2dd857_74501849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="margin-top: 90px;">
  <div class="row">
    <div class="col-md-8 offset-md-2 "  >
	    <div class="jumbotron" style=" background: #fff;!important">

            <div class="alert alert-dark alerta" style="font-size: 1.4rem;">
              <hr class="my-4">
                Esta seguro que desea eliminar <?php echo $_smarty_tpl->tpl_vars['e']->value;?>

              <hr class="my-4">
            </div>
            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['si']->value;?>
">
            	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
              <input type="hidden" name="nivel" value="<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
">
              <input type="hidden" name="rol_listar" value="<?php echo $_smarty_tpl->tpl_vars['rol_listar']->value;?>
">
              <?php if (isset($_smarty_tpl->tpl_vars['rol']->value)) {?>
                <input type="hidden" name="rol" value="<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
">
              <?php }?>
            	<button  class="btn btn-dark" type="submit" name="enviar" value="Eliminar">SI</button>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['no']->value;?>
" class="btn btn-dark" >NO</a>
            </form>
	    </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

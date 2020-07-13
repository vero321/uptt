<?php
/* Smarty version 3.1.30, created on 2020-07-08 14:53:33
  from "/home/veronica/public_html/uptt/templates/mensaje_ingreso.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f06162dec70e4_12294488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49759bb403d5a418908f8084a0f47af694812f87' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/mensaje_ingreso.html',
      1 => 1594234411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modulos/cabecera/cabecera.html' => 1,
    'file:modulos/pie/pie_mensaje.html' => 1,
  ),
),false)) {
function content_5f06162dec70e4_12294488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modulos/cabecera/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="margin-top: 90px;">
  <div class="row">
  	<div class="col-md-8 offset-md-2 "  >
			<div class="jumbotron" style=" background: #fff;!important">
            <div class="alert alert-dark" style="font-size: 1.4rem; text-align: center;">
            		<hr class="my-4">
                <?php echo $_smarty_tpl->tpl_vars['m']->value;?>

                <hr class="my-4">
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['d']->value;?>
" class="btn btn-dark" >Continuar</a>
		
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:modulos/pie/pie_mensaje.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

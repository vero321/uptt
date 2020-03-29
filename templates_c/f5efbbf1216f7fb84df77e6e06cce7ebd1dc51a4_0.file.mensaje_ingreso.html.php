<?php
/* Smarty version 3.1.30, created on 2020-03-29 00:05:55
  from "/home/palencia/public_html/proyecto4/uptt/templates/mensaje_ingreso.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e801ea33330a3_03521293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5efbbf1216f7fb84df77e6e06cce7ebd1dc51a4' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/mensaje_ingreso.html',
      1 => 1585357979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5e801ea33330a3_03521293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

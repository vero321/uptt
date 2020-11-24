<?php
/* Smarty version 3.1.30, created on 2020-11-18 16:53:23
  from "/home/palencia/public_html/proyecto4/uptt/modulos/mensaje/templates/mensaje_ingreso.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fb589c3cdeb91_22010627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36bb69179328face3233f587e310f21ae730a52f' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/mensaje/templates/mensaje_ingreso.html',
      1 => 1594666706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5fb589c3cdeb91_22010627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

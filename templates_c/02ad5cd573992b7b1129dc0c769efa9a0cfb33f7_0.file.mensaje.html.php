<?php
/* Smarty version 3.1.30, created on 2020-03-23 14:33:08
  from "/home/veronica/public_html/uptt/templates/mensaje.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7900e4c64e71_01932260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02ad5cd573992b7b1129dc0c769efa9a0cfb33f7' => 
    array (
      0 => '/home/veronica/public_html/uptt/templates/mensaje.html',
      1 => 1584988387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5e7900e4c64e71_01932260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

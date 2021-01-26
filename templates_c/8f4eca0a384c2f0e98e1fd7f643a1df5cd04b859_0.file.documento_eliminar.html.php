<?php
/* Smarty version 3.1.30, created on 2021-01-26 11:41:10
  from "/home/veronica/public_html/uptt/modulos/documentos/templates/documento_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_601038164df0e7_79268903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f4eca0a384c2f0e98e1fd7f643a1df5cd04b859' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/documentos/templates/documento_eliminar.html',
      1 => 1611664959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601038164df0e7_79268903 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-2 py-3">
	<div class="d-flex justify-content-center">
		<h3 class="font-weight-bold text-gray-900">¿Dese eliminar el documento?</h3>	
	</div>
	<div class="d-flex justify-content-center">
		 	<a  href="../documentos/proc_documento_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  class="btn btn-primary rounded-pill">SI</a>
			<a  href="#" data-dismiss="modal" class="btn btn-secondary rounded-pill ml-2">NO</a>	
	</div>
</div><?php }
}

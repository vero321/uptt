<?php
/* Smarty version 3.1.30, created on 2021-01-26 11:22:49
  from "/home/veronica/public_html/uptt/modulos/documentos/templates/documento_enviar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_601033c92a6ba8_88019074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8df9a94e16490698d6b82123625015906289030' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/documentos/templates/documento_enviar.html',
      1 => 1611664959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601033c92a6ba8_88019074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-2 py-3">
	<div class="d-flex justify-content-center">
		<h3 class="font-weight-bold text-gray-900">¿Dese enviar el documento?</h3>	
	</div>
	<div class="d-flex justify-content-center">
		 	<a  href="../documentos/proc_documento_enviar.php?id=<?php echo $_smarty_tpl->tpl_vars['datos']->value['i'];?>
&t=<?php echo $_smarty_tpl->tpl_vars['datos']->value['t'];?>
"  class="btn btn-primary rounded-pill">SI</a>
			<a  href="#" data-dismiss="modal" class="btn btn-secondary rounded-pill ml-2">NO</a>	
	</div>
</div><?php }
}

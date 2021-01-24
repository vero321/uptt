<?php
/* Smarty version 3.1.30, created on 2021-01-22 19:54:10
  from "/home/palencia/public_html/proyecto4/uptt/modulos/documentos/templates/documento_enviar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600b65a2b57760_81296631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcefde2346dfbdc2c1f124adec97eb5f07392a21' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/documentos/templates/documento_enviar.html',
      1 => 1611359640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600b65a2b57760_81296631 (Smarty_Internal_Template $_smarty_tpl) {
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

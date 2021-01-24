<?php
/* Smarty version 3.1.30, created on 2021-01-24 00:13:57
  from "/home/palencia/public_html/proyecto4/uptt/modulos/documentos/templates/documento_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600cf4057da050_67349931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2601ee99e1acc4cab4a896b68838fab7baeb8e51' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/documentos/templates/documento_eliminar.html',
      1 => 1611358611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600cf4057da050_67349931 (Smarty_Internal_Template $_smarty_tpl) {
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

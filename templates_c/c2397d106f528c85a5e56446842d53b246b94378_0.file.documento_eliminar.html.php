<?php
/* Smarty version 3.1.30, created on 2021-01-22 17:34:57
  from "/home/palencia/public_html/proyecto4/uptt/modulos/mi_trabajo/templates/documento_eliminar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600b45012d8d73_63059555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2397d106f528c85a5e56446842d53b246b94378' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/mi_trabajo/templates/documento_eliminar.html',
      1 => 1611351292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600b45012d8d73_63059555 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-2 py-3">
	<div class="d-flex justify-content-center">
		<h3 class="font-weight-bold text-gray-900">¿Dese eliminar el documento?</h3>	
	</div>
	<div class="d-flex justify-content-center">
		 	<a  href="proc_documento_emiminar.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  class="btn btn-primary rounded-pill">SI</a>
			<a  href="#" data-dismiss="modal" class="btn btn-secondary rounded-pill ml-2">NO</a>	
	</div>
</div><?php }
}

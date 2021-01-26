<?php
/* Smarty version 3.1.30, created on 2021-01-26 11:49:49
  from "/home/veronica/public_html/uptt/modulos/documentos/templates/documento_evaluar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60103a1d30b072_52228082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c0eb31ebbd449ff5a1d39b87fb26b0e7760c41e' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/documentos/templates/documento_evaluar.html',
      1 => 1611664959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60103a1d30b072_52228082 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-2 py-3">
	<div class="d-flex justify-content-center">
		<h3 class="font-weight-bold text-gray-900">Evaluar documento</h3>	
	</div>
	<div class="d-flex justify-content-center">
		<form action="proc_documento_evaluar.php"  method="POST">
			<div class="form-group">
		      <label for="inputState">Status</label>
		      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		      <select name="status" class="form-control" required="">
		        <option selected>Seleccione status</option>
		        <option value="APROBADO">Aprobado</option>
		        <option value="RECHAZADO">Rechazado</option>
		        <option value="CORRECCIONES">Correcciones </option>
		      </select>
			</div>

		      <div class="form-group">
			    <label >Observaciones</label>
			    <textarea class="form-control" name="Observacion" rows="3"></textarea>
			  </div>

			  <div class="form-group">
			  	<input type="submit" class="btn btn-primary rounded-pill">
			  </div>
			
		</form>
	</div>
</div><?php }
}

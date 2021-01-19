<?php
/* Smarty version 3.1.30, created on 2021-01-18 12:22:05
  from "/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/observaciones_editar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6005b5adc03d50_85078472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b213371e7d8253f3116b550ecbf3b5a4d56db9c8' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/observaciones_editar.html',
      1 => 1610986917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6005b5adc03d50_85078472 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-5">
	<h3 class="font-weight-bold text-gray-900">Editar observacion</h3>
	<form method="POST" action="../observaciones/proc_observaciones_editar.php">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">
    		<label for="descripcion">Obsrvacón</label>
    		<textarea class="form-control" id="descripcion" name="descripcion" rows="3" required="" value=><?php echo $_smarty_tpl->tpl_vars['datos']->value['descripcion'];?>
</textarea>
  		</div>
  		<button type="subtmi" class="btn btn-primary rounded-pill">Guardar</button>
  	</form>
</div><?php }
}

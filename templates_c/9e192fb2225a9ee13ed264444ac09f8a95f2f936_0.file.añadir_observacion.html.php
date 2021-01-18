<?php
/* Smarty version 3.1.30, created on 2021-01-14 10:21:54
  from "/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/añadir_observacion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6000538210e303_83356408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e192fb2225a9ee13ed264444ac09f8a95f2f936' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/añadir_observacion.html',
      1 => 1609607450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6000538210e303_83356408 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<h3>Añadir observación</h3>
	<form method="POST" action="../observaciones/proc_añadir_observacion.php">
		<div class="form-group">
			<input type="hidden" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['tipo'];?>
">
			<input type="hidden" name="fila" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['fila'];?>
">
    		<label for="descripcion">Observación</label>
    		<textarea class="form-control" id="descripcion" name="descripcion" rows="3" required=""></textarea>
  		</div>
  		<button type="subtmi" class="btn btn-primary">Añadir</button>
  	</form>
</div><?php }
}

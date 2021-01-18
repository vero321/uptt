<?php
/* Smarty version 3.1.30, created on 2021-01-15 18:10:08
  from "/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/añadir_observacion_comite.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600212c0b103d6_34983515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edd5c6450ca473e37c22a2a4c7623b16081a52a7' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/añadir_observacion_comite.html',
      1 => 1610740372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600212c0b103d6_34983515 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container m-3">
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
  		<div class="form-check">
		  <label class="form-check-label">
		    <input class="form-check-input" type="radio" name="comite" id="comite1" value="1" checked>
		    Visible solo para el comité técnico 
		  </label>
		</div>
		<div class="form-check">
		  <label class="form-check-label">
		    <input class="form-check-input" type="radio" name="comite" id="comite2" value="0">
		    Publica
		  </label>
		</div>
		
  		<button type="subtmi" class="btn btn-primary m-3">Añadir</button>
  	</form>
</div><?php }
}

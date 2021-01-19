<?php
/* Smarty version 3.1.30, created on 2021-01-18 12:25:17
  from "/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/añadir_observacion_comite.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6005b66d596884_95185844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edd5c6450ca473e37c22a2a4c7623b16081a52a7' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/observaciones/templates/añadir_observacion_comite.html',
      1 => 1610986770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6005b66d596884_95185844 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container my-4">
	<h3 class="font-weight-bold text-gray-900">Añadir observación</h3>
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
		
  		<button type="subtmi" class="btn btn-primary rounded-pill m-3">Añadir</button>
  	</form>
</div><?php }
}

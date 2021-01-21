<?php
/* Smarty version 3.1.30, created on 2021-01-20 13:53:49
  from "/home/palencia/public_html/proyecto4/uptt/modulos/entregables/templates/entregables_agregar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60086e2de40169_30748005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a23198da82e6d141c76c8f73619d36b9a848c78' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/entregables/templates/entregables_agregar.html',
      1 => 1611164897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60086e2de40169_30748005 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="m-2 p-3">
			
			<h3 class="font-weight-bold text-gray-900 my-3">Solicitar entregable</h3>
				<form action="proc_entregables_agregar.php" method="POST">
					<input type="hidden" name="nucleo" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nucleo'];?>
">
					<input type="hidden" name="pnf" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['pnf'];?>
">
					<input type="hidden" name="seccion" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['seccion'];?>
">
					<div class="form-group">
						<label>Fecha de inicio</label>
						<input type="date" name="fecha_inicio" class="form-control">
					</div>
					<div class="form-group">
						<label>Fecha de entrega</label>
						<input type="date" name="fecha_entrega" class="form-control">
					</div>

					<div class="form-group">
						<label>Obsevaciones</label>
						<textarea name="observaciones" class="form-control"></textarea>
					</div>
					<div class="form-group p-2">
						<label>Estructura</label>
					
					<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['estructura']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<div class="custom-control custom-switch">
					  <input type="checkbox" class="custom-control-input" id="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" name="estructura[]" value="<?php echo $_smarty_tpl->tpl_vars['estructura']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
					  <label class="custom-control-label" for="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['estructura']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
</label>
					</div>
					
					<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
				</div>
					<div class="form-group p-2">
						<input class="btn-enviar btn btn-sm btn-primary rounded-pill" type="submit" value="Registrar">
					</div>
				</form>
		</div>
	</div>
	<div class="col-md-2"></div>
</div><?php }
}

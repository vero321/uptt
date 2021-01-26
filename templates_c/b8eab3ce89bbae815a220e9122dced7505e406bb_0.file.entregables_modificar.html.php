<?php
/* Smarty version 3.1.30, created on 2021-01-26 10:19:21
  from "/home/veronica/public_html/uptt/modulos/entregables/templates/entregables_modificar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_601024e96d81f4_15905488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8eab3ce89bbae815a220e9122dced7505e406bb' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/entregables/templates/entregables_modificar.html',
      1 => 1611255560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601024e96d81f4_15905488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="m-2 p-3">
			
			<h3 class="font-weight-bold text-gray-900 my-3">Solicitar entregable</h3>
				<form action="proc_entregables_modificar.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['entregable']->value['id'];?>
">
					
					<div class="form-group">
						<label>Fecha de inicio</label>
						<input type="date" name="fecha_inicio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['entregable']->value['fecha_inicio'];?>
">
					</div>
					<div class="form-group">
						<label>Fecha de entrega</label>
						<input type="date" name="fecha_entrega" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['entregable']->value['fecha_entrega'];?>
">
					</div>

					<div class="form-group">
						<label>Obsevaciones</label>
						<textarea name="observaciones" class="form-control"><?php echo $_smarty_tpl->tpl_vars['entregable']->value['observaciones'];?>
</textarea>
					</div>
					<div class="form-group p-2">
						<div class="alert alert-info">
							<i class="fas fa-info-circle mr-2"></i>
							<small> Para evitar confictos seleccione nuevamente la estrutura</small>
						</div>
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
						<input class="btn-enviar btn btn-sm btn-primary rounded-pill" type="submit" value="Modificar">
					</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div><?php }
}

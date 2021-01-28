<?php
/* Smarty version 3.1.30, created on 2021-01-27 09:32:43
  from "/home/veronica/public_html/uptt/modulos/entregables/templates/entregables_detalle.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60116b7bbd9118_01091935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c4029f920ac7c6bb4d15b53df86fd4a0926e9e3' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/entregables/templates/entregables_detalle.html',
      1 => 1611255560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60116b7bbd9118_01091935 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-12">
		<div class="p-3 m-3">
			
			<h4 class="font-weight-bold text-gray-900 text-center">Entregable</h4>
				<div class="row">
				
					<div class=" col-md-4">
						<h6 class="font-weight-bold text-gray-900 my-2">Fecha de inicio</h6>
						<p class="card-text pl-2"><?php echo $_smarty_tpl->tpl_vars['entregable']->value['fecha_inicio'];?>
</p>
					</div>
				
					<div class=" col-md-4">
						<h6 class="font-weight-bold text-gray-900 my-2">Fecha de entrega</h6>
						<p class="card-text pl-2"><?php echo $_smarty_tpl->tpl_vars['entregable']->value['fecha_entrega'];?>
</p>
					</div>
					
					<div class=" col-md-4">
						<h6 class="font-weight-bold text-gray-900 my-2">Obsevaciones</h6>
						<p class="card-text pl-2"><?php echo $_smarty_tpl->tpl_vars['entregable']->value['observaciones'];?>
</p>
					</div>

					<div class="container my-3">
						<h6 class="font-weight-bold text-gray-900 my-2">Estructura</h6> 
						<div class="row">
					  		<div class="col-4">
					  			<div class="list-group" id="list-tab" role="tablist">
					   			<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['estructura']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					      			<a class="list-group-item list-group-item-action " id="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" data-toggle="list" href="#list-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" role="tab" aria-controls="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['estructura']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
</a>
								<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

					    
					    </div>
					  </div>
					  <div class="col-8">
					  	<div class="alert alert-info alert-dismissible fade show"  aria-atomic="true" data-delay="5000">
							<p>
							<i class="fas fa-info-circle mr-2"></i>
							Para ver la descripción has click sobre uno de los elementos de la lista
							</p>
							
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					    <div class="tab-content" id="nav-tabContent">
					    	<?php
$__section_ii_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_ii']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii'] : false;
$__section_ii_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['estructura']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ii_1_total = $__section_ii_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ii'] = new Smarty_Variable(array());
if ($__section_ii_1_total != 0) {
for ($__section_ii_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] = 0; $__section_ii_1_iteration <= $__section_ii_1_total; $__section_ii_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']++){
?>
					     		<div class="tab-pane fade show " id="list-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] : null);?>
" role="tabpanel" aria-labelledby="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['estructura']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] : null)]['descripcion'];?>
</div>
							<?php
}
}
if ($__section_ii_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_ii'] = $__section_ii_1_saved;
}
?>
					      
					    </div>
					  </div>
					</div>
				</div>
					
				</div>	
		</div>
	</div>
</div>
<?php }
}

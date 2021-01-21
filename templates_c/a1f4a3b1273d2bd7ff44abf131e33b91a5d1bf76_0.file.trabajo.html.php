<?php
/* Smarty version 3.1.30, created on 2021-01-20 20:10:41
  from "/home/palencia/public_html/proyecto4/uptt/modulos/mi_trabajo/templates/trabajo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008c68113a618_84902372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f4a3b1273d2bd7ff44abf131e33b91a5d1bf76' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/mi_trabajo/templates/trabajo.html',
      1 => 1611187836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../navegacion/barra_nucleo_pnf.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_6008c68113a618_84902372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="card mb-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <i class="far fa-file-word fa-6x text-center m-3 p-4 text-primary"></i>
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['trabajo']->value['titulo'];?>
</h5>
			       
			        <p class="card-text"><small class="text-muted">Fecha de Inicio <?php echo $_smarty_tpl->tpl_vars['trabajo']->value['fecha_inicio'];?>
</small></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-md-6">
			<?php if (count($_smarty_tpl->tpl_vars['entregables']->value) > 0) {?>
				<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['entregables']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<div class="alert alert-info">
	                    	
		        	<div class="media">
						<i class="fas fa-info-circle fa-2x mr-3 my-3"></i>
						<div class="media-body my-2">
							<p class="notificaiton-title mb-2"><strong>HEYYY!</strong> Parece que tienes un entregable pendiente</p>
							<p>Para ver los detalles preciona el botón <strong>Detalles</strong></p>
						<a class="btn btn-info rounded-pill mimodal mb-2" data-href="../entregables/entregables_detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['entregables']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Detalles</a>
							<p><strong>Feche Limite para la entrega</strong> <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['entregables']->value[0]['fecha_entrega'];?>
</span> </p>
						</div>
					</div>
				<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
			<?php }?>
		</div>
	</div>
</div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Tipos de trabajo"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

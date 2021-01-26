<?php
/* Smarty version 3.1.30, created on 2021-01-26 12:11:32
  from "/home/veronica/public_html/uptt/modulos/mi_trabajo/templates/trabajo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60103f34ac8243_38005980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88bcd01267b7d0c4bf37d2ec05a8ca7ec97080e1' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/mi_trabajo/templates/trabajo.html',
      1 => 1611677305,
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
function content_60103f34ac8243_38005980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
	<h3 class="font-weight-bold text-gray-900">Hola de nuevo!</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="card mb-2" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-3">
			      <i class="far fa-file-alt fa-6x text-center m-2 p-2 text-primary"></i>
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Tu trabajo</h5>
			        <h6><?php echo $_smarty_tpl->tpl_vars['trabajo']->value['titulo'];?>
</h6>
			       
			        <p class="card-text"><small class="text-muted">Fecha de Inicio <?php echo $_smarty_tpl->tpl_vars['trabajo']->value['fecha_inicio'];?>
</small></p>
			      </div>
			    </div>
			    <div class="col-md-1">
			    	<div class="dropdown no-arrow  bg-gray-200 p-2">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-800"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                      <div class="dropdown-header">Opciones Trabajo:</div>
                      <a class="dropdown-item" href="#">Entregas</a>
                      <a class="dropdown-item" href="#">Documentos</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Extructura del documento</a>
                    </div>
                  </div>
			    </div>
			  </div>
			  
			</div>
			<?php if (count($_smarty_tpl->tpl_vars['documentos']->value) > 0) {?>
			<div class="container">
				<h4 class="font-weight-bold text-gray-800 mt-2">Documentos nuevos</h4>
				<div class="card-columns">
				<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['documentos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 'NUEVO') {?>
					<div class="card">
					<i class="card-img-top far fa-file-pdf fa-6x text-center m-1 p-2 text-danger"></i>
						<div class="card-body">
						<h5 class="card-title">Documento nuevo</h5>
						<p class="text-muted">Subido el día <?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha_subida'];?>
 </p>
						</div>
						<div class="card-footer">
							<a data-href="../documentos/documento_enviar.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
&t=0" class="btn btn-sm btn-circle mimodal btn-primary" title="Enviar al profesor documento"><i class="text-white far fa-paper-plane"></i></a>  
							<a data-href="../documentos/documento_ver.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
" class="btn btn-sm btn-circle mimodal btn-success" title="Ver el documento"><i class="text-white far fa-eye"></i></a>  
							<a data-href="../documentos/documento_eliminar.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
" class="btn btn-sm btn-circle mimodal btn-danger" title="Eliminar documento"><i class="text-white far fa-trash-alt"></i></a>  
						</div>
					</div>
					<?php }?>
					<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
				</div>
			</div>
			<div class="container">
				<h4 class="font-weight-bold text-gray-800 mt-2">Documentos para corregir</h4>
				<div class="card-columns">
				<?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['documentos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 'CORRECCIONES') {?>
					<div class="card">
					<i class="card-img-top far fa-file-pdf fa-6x text-center m-1 p-2 text-danger"></i>
						<div class="card-body">
						<h5 class="card-title">Documento</h5>
						<p class="text-muted">Subido el día <?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha_subida'];?>
 </p>
						</div>
						<div class="card-footer">
							<a class="btn btn-warning btn-sm btn-circle mimodal" data-href="../documentos/documentos_agregar_correcciones.php?t=<?php echo $_smarty_tpl->tpl_vars['trabajo']->value['id'];?>
&id_documento=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
" title="Subir correciones"><i class="fas fa-file-import mx-2 text-gray-900	"></i></a>
							<a data-href="../documentos/documento_ver.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
" class="btn btn-sm btn-circle mimodal btn-success" title="Ver el documento"><i class="text-white fas fa-eye"></i></a>  
							<a data-href="../observaciones/observaciones_ver.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
" class="btn btn-sm btn-circle mimodal btn-dark" title="Ver observaciones del documento"><i class="text-white far fa-eye"></i></a>  

						</div>
					</div>
					<?php }?>
					
					<?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
				</div>
			</div>
			<div class="container">
				<h4 class="font-weight-bold text-gray-800 mt-2">Documentos aprobados</h4>
				<div class="card-columns">
				<?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['documentos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 'APROBADO') {?>
					<div class="card">
					<i class="card-img-top far fa-file-pdf fa-6x text-center m-1 p-2 text-danger"></i>
						<div class="card-body">
						<h5 class="card-title">Documento</h5>
						<p class="text-muted">Subido el día <?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha_subida'];?>
 </p>
						</div>
						<div class="card-footer">
							<a data-href="../documentos/documento_ver.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
" class="btn btn-sm btn-circle mimodal btn-success" title="Ver el documento"><i class="text-white fas fa-eye"></i></a>  
							<a data-href="../observaciones/observaciones_ver.php?i=<?php echo $_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_documento'];?>
" class="btn btn-sm btn-circle mimodal btn-dark" title="Ver observaciones del documento"><i class="text-white far fa-eye"></i></a>  

						</div>
					</div>
					<?php }?>
					
					<?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
				</div>
			</div>
			<?php }?>
		</div>

		<div class="col-md-4">

			<?php if (count($_smarty_tpl->tpl_vars['entregables']->value) > 0) {?>
				<?php
$__section_i_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['entregables']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total != 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<div class="alert alert-primary">
	                    	
		        	<div class="media">
						<i class="fas fa-primary-circle fa-2x mr-3 my-3"></i>
						<div class="media-body my-2">
							<p class="notificaiton-title mb-2"><strong>HEYYY!</strong></p><p> Parece que tienes un entregable pendiente.</p>
							
						<a class="btn btn-primary rounded-pill mimodal mb-2 text-white" data-href="../entregables/entregables_detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['entregables']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Detalles</a>
						<a class="btn btn-light rounded-pill mimodal mb-2" data-href="../documentos/documento_agregar.php?t=<?php echo $_smarty_tpl->tpl_vars['trabajo']->value['id'];?>
&e=<?php echo $_smarty_tpl->tpl_vars['entregables']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><i class="fas fa-file-import mx-2"></i> Subir</a>
							<p><strong>Feche Limite para la entrega</strong> <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['entregables']->value[0]['fecha_entrega'];?>
</span> </p>
						</div>
					</div>
				<?php
}
}
if ($__section_i_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_3_saved;
}
?>
			<?php }?>

		</div>
		<?php if (count($_smarty_tpl->tpl_vars['documentos']->value) > 0) {?>
			<?php
$__section_i_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['documentos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total != 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php if ($_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 'NUEVO') {?>

				<div class="alert alert-info">
					<div class="media">
						<i class="fas fa-info-circle fa-2x mr-3 my-3"></i>
						<div class="media-body my-2">
							<p class="notificaiton-title mb-2"><strong>Importante!</strong></p><p> Aun no has enviado el documento al profesor.</p>
							
							<p>Para enviar haga click en botón enviar del documento que desea enviar.</p>
							<a href="#" class="btn btn-sm btn-circle btn-primary "><i class="text-white far fa-paper-plane"></i></a>  
						</div>
					</div>
				</div> 
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 'CORRECCIONES') {?>

				<div class="alert alert-danger">
					<div class="media">
						<i class="fas fa-info-circle fa-2x mr-3 my-3"></i>
						<div class="media-body my-2">
							<p class="notificaiton-title mb-2"><strong>Importante!</strong></p><p> Tines un documento para realizarle correcciones.</p>
							
							<p>Para ver las observaciones del profesor haga click en el boton observaciones correspondiente al documento.</p>
							<a href="#" class="btn btn-sm btn-circle mimodal btn-dark" title="Ver observaciones del documento"><i class="text-white far fa-eye"></i></a>  
							
						</div>
					</div>
				</div> 

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['documentos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 'APROBADO') {?>

				<div class="alert alert-success">
					<div class="media">
						<i class="fas fa-check-circle fa-2x mr-3 my-3"></i>
						<div class="media-body my-2">
							<p class="notificaiton-title mb-2"><strong>Exelente!</strong></p><p> Uno de tus documentos a sido aprovado.</p>
							
							<p>Puede que tengaobservaciones del profesor haga click en el boton observaciones correspondiente al documento.</p>
							<a href="#" class="btn btn-sm btn-circle mimodal btn-dark" title="Ver observaciones del documento"><i class="text-white far fa-eye"></i></a>  
							
						</div>
					</div>
				</div> 

				<?php }?>				
			<?php
}
}
if ($__section_i_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_4_saved;
}
?>
		<?php }?>
			 
	

		
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Trabajo"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

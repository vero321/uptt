<?php
/* Smarty version 3.1.30, created on 2021-01-18 11:02:01
  from "/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/verificar_equipo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6005a2e9295535_94439248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '645749739045c6ae8774d8c92eef2ad85c13070d' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/verificar_equipo.html',
      1 => 1610982116,
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
function content_6005a2e9295535_94439248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




	<div class="container-fluid">


		<div class="col-md-12">
		  <div class="card shadow">
		  	<div class="card-header">
		  		<h4>Lider de equipo</h4>
		  	</div>
		  	<div class="card-body">
		  			<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lider']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		  		<div class="row">
		  			
		  			<div  style="border: solid 1px #DFDFDF; border-radius: 5px;" class="col-md-4">

		  				<h5 style="margin-top: 10px;">
							<a href="equipo.php?id=<?php echo $_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" class="text-decoration-none">
							<span class="badge lg badge-pill badge-secondary" title="Equipo"><i class="fas fa-user">&nbsp;&nbsp;</i>
							<?php if (isset($_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_equipo'])) {?>
								<?php echo $_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_equipo'];?>

							<?php } else { ?>
								El equipo aun no tiene nombre
							<?php }?>
							</a></span> 
						</h5>
					</div>


		  			<div style="border: solid 1px #DFDFDF; border-radius: 5px;" class="col-md-4">
		  				
						<h5 style="margin-top: 10px;"><a href="../propuesta/propuesta.php?equipo_id=<?php echo $_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><span class="badge lg badge-pill badge-secondary" title="Propuesta"><i class="fa fa-list-alt">&nbsp;&nbsp;</i>Propuesta</span></a></h5>

		  			</div>	
		  			<div style="border: solid 1px #DFDFDF; border-radius: 5px;" class="col-md-4">
		  				
						<h5 style="margin-top: 10px;"><a href="../mi_trabajo/mi_trabajo.php?equipo_id=<?php echo $_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><span class="badge lg badge-pill badge-secondary" title="Mi trabajo"><i class="fa fa-file-word">&nbsp;&nbsp;</i>Mi trabajo</span></a></h5>

		  			</div>		
		  		</div>
					<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

			  	
			</div>
		</div>
	  </div>
	</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

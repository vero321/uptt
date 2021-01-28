<?php
/* Smarty version 3.1.30, created on 2021-01-27 15:26:22
  from "/home/veronica/public_html/uptt/modulos/mi_trabajo/templates/iniciar_trabajo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6011be5ec91e47_31313660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b60a970af32f8e97ee2c4ce85343fd2b86e5fbdd' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/mi_trabajo/templates/iniciar_trabajo.html',
      1 => 1611255560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../navegacion/barra_nucleo_pnf.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_6011be5ec91e47_31313660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	 <div class="container-fluid">

		<div class="card">
			<div class="card-header">
				<h4 class="card-title text-primary">Popuesta Aprobada</h4>
			</div>
			<div class="card-body">
				<h5 class="text-gray-900">Propuesta</h5>
				<p class="card-text pl-2"><?php echo $_smarty_tpl->tpl_vars['datos']->value['descripcion'];?>
</p>
				<h5 class="text-gray-900">Objetivo</h5>
				<p class="card-text pl-2"><?php echo $_smarty_tpl->tpl_vars['datos']->value['objetivo'];?>
</p>
				<div class="p-3 m-2">
				
                    <div class="alert alert-success">
                    	
                    	<div class="media">
							<i class="far fa-check-circle fa-2x mr-3 my-3"></i>
							<div class="media-body my-2">
								<p class="notificaiton-title mb-2"><strong>Exelente!</strong> Tu propuesta ha sido aprobada ahora puesdes iniciar tu trabajo.</p>
								<p>Para inciar tu trabajo preciona el botón <strong>Iniciar</strong></p>
							<a class="btn btn-success rounded-pill" href="proc_iniciar.php?i=<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
&e=<?php echo $_smarty_tpl->tpl_vars['equipo_id']->value;?>
&l=<?php echo $_smarty_tpl->tpl_vars['id_lider']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['id_propuesta']->value;?>
">Iniciar</a>
							</div>
						</div>
                    	
                    </div>
				</div>

			</div>
		</div>	

	</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

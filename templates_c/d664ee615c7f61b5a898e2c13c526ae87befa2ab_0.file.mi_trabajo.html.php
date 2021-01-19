<?php
/* Smarty version 3.1.30, created on 2021-01-18 19:02:05
  from "/home/palencia/public_html/proyecto4/uptt/modulos/mi_trabajo/templates/mi_trabajo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6006136de16fc4_56561270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd664ee615c7f61b5a898e2c13c526ae87befa2ab' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/mi_trabajo/templates/mi_trabajo.html',
      1 => 1611010924,
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
function content_6006136de16fc4_56561270 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h5>Descripción</h5>
				<p class="card-text"><?php echo $_smarty_tpl->tpl_vars['datos']->value['descripcion'];?>
</p>
				<h5>Objetivo</h5>
				<p class="card-text"><?php echo $_smarty_tpl->tpl_vars['datos']->value['objetivo'];?>
</p>
				<div class="p-3 m-2">
				
                    <div class="alert alert-success">
                    	
                    	<div class="media">
						  <i class="far fa-check-circle fa-2x mr-3 my-3"></i>
						  <div class="media-body my-2">
						   <p class="notificaiton-title mb-2"><strong>Exelente!</strong> Tu propuesta ha sido aprovada ahora puesdesiniciar tu trabajo.</p>
                        	<p>Para iniar tu trabajo preciona el boton <strong>Iniciar</strong></p>
                        	<button class="btn btn-success rounded-pill">Iniciar</button>
						  </div>
						</div>
                    	
                    </div>
				</div>

			</div>
		</div>	

	</div>


<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Tipos de trabajo"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

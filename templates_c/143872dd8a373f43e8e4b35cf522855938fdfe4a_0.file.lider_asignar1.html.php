<?php
/* Smarty version 3.1.30, created on 2020-11-04 13:17:44
  from "/home/palencia/public_html/proyecto4/uptt/modulos/lider_seccion/templates/lider_asignar1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fa2e238dd5f07_81879648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '143872dd8a373f43e8e4b35cf522855938fdfe4a' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/lider_seccion/templates/lider_asignar1.html',
      1 => 1602280341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../usuario/templates/modal_agregar_ajax.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5fa2e238dd5f07_81879648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
	<div class="alert alert-info alert-dismissible fade show" role="alert">
	  <strong>Para asignar un lider</strong> Escriba el numero de CI o correo electronico si la persona esta registrada agreguela.
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<div class="card shadow">
	    <div class="card-header ">
			<h2 class="text-center">Asinar un Líder de Equipo</h2>
		</div>
	<div class="card-body">
	    <?php if (isset($_smarty_tpl->tpl_vars['respuesta']->value)) {?>
	      	<div class="alert alert-danger" role="alert">
	            No se encuentra un rol con los permisos para ser Líder de Equipo comuniquese con el administrador para que asigne un rol con los privilegios necesarios
	        </div>
	   	<?php } else { ?>
	   	<div class="row">
	   		<div class="col-md-10">
	       		<form id="from_busqueda_asignar" method="POST" action="lider_asignar.php">
	       			<input type="hidden" id="id_rol" value="<?php echo $_smarty_tpl->tpl_vars['id_rol']->value;?>
">
	           		<label>Escriba el numero de CI o el correo electronico</label>
	           		<div class="input-group">
	               		<input id="busqueda_asignar" type="text" class="form-control" placeholder="12345678 o coreo@correo.com" aria-describedby="basic-addon1">
	               		<div class="input-group-append">
			                <button class="btn btn-primary" type="button">
				                <i class="fa fa-search fa-sm"></i>
				            </button>
		        		</div>
	           		</div>
	           		<div id="agregar" class="mt-3 p-4">
                	
                	</div>
	           		<div id="usuarios" class="">
	               	
	           		</div>
	           		<div id="btn_asignar">
	               	
	           		</div>
	           	</form>
	   		</div>
	   		<div class="col-md-2">
	   			<a class="btn btn-sm btn-outline-primary" type="button"
                	href="#" title="Agregar Usuario"
                	id="btn-agregar-usuario">
                	<span class="fa fa-plus"></span>
                </a>
	   		</div>
	   	</div>
	</div>
</div>
<?php }?>
</div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:../../usuario/templates/modal_agregar_ajax.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2021-01-27 20:58:13
  from "/home/veronica/public_html/uptt/modulos/entregables/templates/secciones_entregables.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60120c25cf7672_68972847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be827edb239c43c445a243b837387009fcfb8d6f' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/entregables/templates/secciones_entregables.html',
      1 => 1611795492,
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
function content_60120c25cf7672_68972847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../inicio/inicio_interno.php">Repo</a></li>
    <li class="breadcrumb-item"><a href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][$_SESSION['numero']]['id_rol'];?>
&n=<?php echo $_SESSION['numero'];?>
">Panel <?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</a></li>
    <li class="breadcrumb-item active" aria-current="page">Secciones</li>
  </ol>
</nav>
  <h2><?php echo $_smarty_tpl->tpl_vars['pnf']->value;?>
</h2>
  <div class="row">
  	<div class="col-md-6 col-sm-4">
    
  		<div class="card">
  			<div class="card-body m-2">
			   <h3 class="text-primary m-2 p-2">Secciones</h3>
  				<table class="table">
  					<thead>
  						<tr>
	  						<th>Seccion</th>
	  						<th>Tipo de trabajo</th>
  						</tr>
  					</thead>
  					<tbody>
						<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['secciones_profesor']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
  						<tr>
  							<td> <a href="entregables.php?s=<?php echo $_smarty_tpl->tpl_vars['secciones_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" class=""><?php echo $_smarty_tpl->tpl_vars['secciones_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
</a></td>
  							<td><?php if ($_smarty_tpl->tpl_vars['secciones_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_tipo_de_documento'] == NULL) {?>
							    <a class="btn btn-primary btn-circle btn-sm mimodal" data-href="entregables_tipo_trabajo.php?id=<?php echo $_smarty_tpl->tpl_vars['secciones_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" title="Añadir tipo de trabajo"><i class="fa fa-plus text-white"></i></a>
							    <?php } else { ?>
							    <?php $_smarty_tpl->_assignInScope('tipo', bd_tipos_documento_datos($_smarty_tpl->tpl_vars['secciones_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_tipo_de_documento']));
?>
							    <?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>

							    <br>
							    <a data-href="entregables_tipo_trabajo.php?id=<?php echo $_smarty_tpl->tpl_vars['secciones_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" title="Cambiar tipo de trabajo" class="mimodal text-primary">Cambiar</a>
							    <?php }?>
							</li></td>
					  	</tr>
						<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
  					</tbody>
  				</table>
  			</div>
  		</div>
  	</div>
    <div class="col-md-6 col-sm-4">
      <div class="alert alert-info">
                      
        <div class="media">
          <i class="fas fa-info-circle fa-2x mr-3 my-3"></i>
          <div class="media-body my-2">
            <p class="notificaiton-title mb-2"><strong>Importante!</strong>Debes asignar un tipo de trabajo a la sección</p>
            <p>Para asignar un tipo trabajo preciona el botón <strong>[+]</strong></p>
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

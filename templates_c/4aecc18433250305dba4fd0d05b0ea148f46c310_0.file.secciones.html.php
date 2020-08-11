<?php
/* Smarty version 3.1.30, created on 2020-08-10 23:27:01
  from "/home/palencia/public_html/proyecto4/uptt/modulos/secciones/templates/secciones.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3210058825c9_50326768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aecc18433250305dba4fd0d05b0ea148f46c310' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/secciones/templates/secciones.html',
      1 => 1597090127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f3210058825c9_50326768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['secciones']->value)) {?>
<div class="container-fluid">
  <h2><?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_corto'];?>
</h2>
  <div class="card shadow">
      <div class="card-header ">
        <h3 class="text-primary"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_secciones']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['trayecto']->value['trayecto'];?>

            <?php if (in_array("SECC_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
             <a class="btn btn-sm btn-outline-primary mimodal" type="button" 
            data-href="seccion_agregar.php?t=<?php echo $_smarty_tpl->tpl_vars['trayecto']->value['id'];?>
" title="Agregar seccion a <?php echo $_smarty_tpl->tpl_vars['trayecto']->value['trayecto'];?>
"><span class="fa fa-plus"></span></a>
          </h3>
        <?php }?>
      </div>
      <div class="card-body">
        <div class="table-responsive">

              <table class="display table" id="tabla_repo" style="width:100%">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Funciones</th>
                    <?php if (in_array("SECC_AP",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <th>Profesor de proyecto</th>
                    <?php }?>
                  </tr>
                </thead>
                <tbody class="buscar" id="personas">

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['secciones']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
</td>
                    <?php if (in_array("SECC_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <td class="text-center" style="white-space: nowrap;">
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Modificar seccion" 
                      data-href="seccion_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&t=<?php echo $_smarty_tpl->tpl_vars['trayecto']->value['id'];?>
">
                      <i class="fa fa-edit"></i>
                    </a>
                    <?php }?>
                    <?php if (in_array("SECC_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Eliminar seccion" 
                      data-href="seccion_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&t=<?php echo $_smarty_tpl->tpl_vars['trayecto']->value['id'];?>
">
                      <i class="fa fa-trash"></i>
                    </a>
                    <?php }?>
                  </td>
                  <td>
                    <?php if (in_array("SECC_AP",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                        <?php if ($_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profesor_proyecto'] == NULL) {?>
                          <a class="btn btn-sm btn-outline-primary mimodal" type="button" href="seccion_profesor.php?id=<?php echo $_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&t=<?php echo $_smarty_tpl->tpl_vars['trayecto']->value['id'];?>
" title="Asignar profesor de proyecto <?php echo $_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
"><span class="fa fa-plus"></span></a>
                        <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profesor_proyecto']));
?>
                          <span><b>Nombre:</b></span>
                          <?php if (isset($_smarty_tpl->tpl_vars['persona']->value[0]['nombre'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['persona']->value[0]['nombre'];?>

                          <?php } else { ?>
                          El usuarip aun no actualiza sus datos
                          <?php }?>
                        <br>
                        <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profesor_proyecto']));
?>
                        <span><b>Usuario:</b></span>
                        <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                        <a href="seccion_profesor.php?id=<?php echo $_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&t=<?php echo $_smarty_tpl->tpl_vars['trayecto']->value['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['secciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['profesor_proyecto'];?>
">Cambiar</a>
                        <?php }?>
                    <?php }?>
                      </td>
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
</div>
<?php } else { ?>
	<div class="container-fluid">
		<div class="col-md-4">
		  <div class="card shadow">
		  	<div class="card-header">
		  		<h4><?php echo $_smarty_tpl->tpl_vars['pnf']->value['nombre_corto'];?>
</h4>
		  	</div>
		  	<div class="card-body">
			  	<div class="list-group">
				        <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayecto_pnf']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
							<a href="secciones.php?t=<?php echo $_smarty_tpl->tpl_vars['trayecto_pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_trayecto'];?>
" class="list-group-item list-group-item">
							<?php echo $_smarty_tpl->tpl_vars['trayecto_pnf']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['trayecto'];?>

							</a>
						<?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
			  	</div>
			</div>
		</div>
	  </div>
	</div>
<?php }?>



<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

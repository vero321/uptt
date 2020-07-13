<?php
/* Smarty version 3.1.30, created on 2020-07-09 21:25:03
  from "/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_roles.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f07c36f8ee6f2_87842673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5009ba5f200323cef445129ce5da447b0c47b19' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_roles.html',
      1 => 1594172266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera_interna.html' => 1,
    'file:../../menu/menu_lateral.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f07c36f8ee6f2_87842673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container" >
            <?php $_smarty_tpl->_subTemplateRender("file:../../menu/menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row" id="central">
        
        <div class="col-sm-9" style="margin-top: 50px;" >


<!--finaliza-->

              <h2 class="subtitulo" align="center"><span class="badge badge-secondary badge-pill"></span>Roles del usuario</h2>
           
              <table style="margin-top: 30px;" class="table table-responsive-xl">
                <thead class="thead-dark">
                  <tr>
                    <th>Cedula</th>
                    <th>Correo</th>
                    <th>Roles
                    <?php if (in_array("USUA_AR",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?> 
						          <a class="btn btn-sm btn-outline-primary mimodal" type="button" href="usuarios_rol_asignar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" title="Asignar un Rol a el Usuario"><span class="fa fa-plus"></span></a>
                    <?php }?>
                  </th>
                  <th>Nucleo</th>
                  <th>PNF</th>
                  </tr>

                </thead>
                <tbody class="buscar" id="usuarios">
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>
</td>
                    <td>
                    	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    	<div class="list-group">
                        <?php if (isset($_smarty_tpl->tpl_vars['rol']->value)) {?>
                          <?php if ($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'] == $_smarty_tpl->tpl_vars['rol']->value) {?>
                    		    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>

                          <?php }?>
                        <?php } else { ?>
                         <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>

                        <?php }?>
                          <?php if (in_array("USUA_ER",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
  			                    <a 
  			                      style="margin-bottom:3px; color:blue;" 
  			                      class="btn btn-default"
  			                      title="Eliminar Rol a el Usuario" 
  			                      href="proc_usuarios_rol_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
&rol=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'];?>
">
  			                      <i class="fa fa-trash"></i>
  			                    </a>
                          <?php }?>
                    		 </li>
                    	</div>

                    	<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                    </td>
                    <td>
                      <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <div class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                          <?php if ($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo'] != NULL) {?>
                            <?php $_smarty_tpl->_assignInScope('nucleos', bd_nucleos_datos($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo']));
?>
                            <?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_corto'];?>

                          <?php } else { ?>
                            <a class="btn btn-sm btn-outline-primary mimodal" type="button" href="usuarios_rol_asignar_nucleo.php?id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" title="Asignar un Nucleo a el Rol"><span class="fa fa-plus"></span></a>
                            </a>
                          <?php }?>
                           </li>
                        </div>
                      <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                  <td>
                      <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <div class="list-group">
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                          <?php if ($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pnf'] != NULL) {?>
                            <?php $_smarty_tpl->_assignInScope('nucleos', bd_pnf_datos($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pnf']));
?>
                            <?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_corto'];?>

                          <?php } else { ?>
                            <a class="btn btn-sm btn-outline-primary mimodal" type="button" href="usuarios_rol_asignar_pnf_a_rol.php?id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
&nucleo=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo'];?>
" title="Asignar un PNF a el Rol"><span class="fa fa-plus"></span></a>
                            </a>
                          <?php }?>
                           </li>
                        </div>
                      <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                    </td>
                    
                  </tr>
                </tbody>
              </table>
          
           
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

<?php
/* Smarty version 3.1.30, created on 2021-01-20 22:10:09
  from "/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_roles.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6008e2815a7c54_08130818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5009ba5f200323cef445129ce5da447b0c47b19' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios_roles.html',
      1 => 1611073925,
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
function content_6008e2815a7c54_08130818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container-fluid">
      <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../inicio/inicio_interno.php">Repo</a></li>
            <li class="breadcrumb-item"><a href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][$_SESSION['numero']]['id_rol'];?>
&n=<?php echo $_SESSION['numero'];?>
">Panel <?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</a></li>
            <li class="breadcrumb-item"><a href="usuarios.php">Usuarios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Roles usuarios</li>
          </ol>
      <div class="card shadow">
          <div class="card-header ">
              <h2 class="text-primary"><span class="badge badge-secondary badge-pill"></span>Roles del usuario
              </h2>
          </div>
            <div class="card-body">
              <h3>
                <small>CI:</small> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>

                <small>Correo</small> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>


             </h3>
              <div class="table-responsive">
                    
              <table class="display table" >
                <thead>
                  <tr>
                    <th>Roles
                    <?php if (in_array("USUA_AR",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?> 
						          <a class="btn btn-primary btn-circle mimodal" type="button" data-href="usuarios_rol_asignar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" title="Asignar un Rol a el Usuario"><span class="fa fa-plus text-white"></span></a>
                    <?php }?>
                  </th>
                  <th></th>
                  <th>Nucleo</th>
                  <th>PNF</th>
                  </tr>

                </thead>
                <tbody class="buscar" id="usuarios">
                  <tr>
                    	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <td>
                    	
                        <?php if (isset($_smarty_tpl->tpl_vars['rol']->value)) {?>
                          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['roles']) ? $_smarty_tpl->tpl_vars['roles']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'] = $_smarty_tpl->tpl_vars['rol']->value;
$_smarty_tpl->_assignInScope('roles', $_tmp_array);
if ($_smarty_tpl->tpl_vars['rol']->value) {?>
                    		    <?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>

                          <?php }?>
                        <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>

                        <?php }?>
                    </td>
                    <td>
                      <?php if (in_array("USUA_ER",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                            <a 
                              class="btn btn-danger btn-circle btn-sm"
                              title="Eliminar Rol a el Usuario" 
                              href="proc_usuarios_rol_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">
                              <i class="fa fa-trash text-white"></i>
                            </a>
                          <?php }?>
                    </td>
                    <td >
                          <?php if ($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo'] != NULL) {?>
                            <?php $_smarty_tpl->_assignInScope('nucleos', bd_nucleos_datos($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo']));
?>
                            <?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_corto'];?>

                          <?php } elseif ($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'] != "5e7ec3342d4ee") {?>
                            <a class="btn btn-sm btn-outline-primary btn-circle mimodal" type="button" data-href="usuarios_rol_asignar_nucleo.php?id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" title="Asignar un Nucleo a el Rol"><span class="fa fa-plus"></span></a>
                            </a>
                          <?php }?>

                  <td>
                          <?php if ($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pnf'] != NULL) {?>
                            <?php $_smarty_tpl->_assignInScope('nucleos', bd_pnf_datos($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pnf']));
?>
                            <?php echo $_smarty_tpl->tpl_vars['nucleos']->value['nombre_corto'];?>

                          <?php } elseif ($_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'] != "5e7ec3342d4ee") {?>
                            <a class="btn btn-sm btn-outline-primary btn-circle mimodal" type="button" data-href="usuarios_rol_asignar_pnf_a_rol.php?id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_usuario=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
&nucleo=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo'];?>
" title="Asignar un PNF a el Rol"><span class="fa fa-plus"></span></a>
                            </a>
                          <?php }?>
                      </td>
                    </td>
                  </li>
                </tr>
                      <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                  </td>
                    
                  </tr>
                </tbody>
              </table>
        		</div>
        	</div>
        </div>
      </div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

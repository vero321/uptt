<?php
/* Smarty version 3.1.30, created on 2020-09-02 13:54:18
  from "/home/palencia/public_html/proyecto4/uptt/modulos/lider_seccion/templates/lider_seccion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f4fdc4af2a134_02773320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1282b904032d9664b19ee67b686e4250b957f696' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/lider_seccion/templates/lider_seccion.html',
      1 => 1599058719,
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
function content_5f4fdc4af2a134_02773320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   
  <div class="container-fluid">
   <!--h2><?php echo $_smarty_tpl->tpl_vars['seccion']->value['nombre'];?>
</h2-->
    <div class="card shadow">
        <div class="card-header">
          <h3 class="text-primary"><span class="badge badge-secondary badge-pill"></span>Líderes de Equipo
              
            </h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
             <table class="table" id="<tabla_repo></tabla_repo>">
                <thead>
                  <tr>
                    <?php if (in_array("PROF_AL",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <th>Líder de Equipo</th>
                    <?php }?>
                    <th>Funciones</th>
                    <th>Equipo</th>
                  </tr>
                  
                </thead>
                <tbody>

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lider']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <td>

                    <?php if (in_array("PROF_AL",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                        <?php if ($_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider_equipo'] == NULL) {?>
                          <a class="btn btn-sm btn-outline-primary mimodal" type="button" href="lider_seccion.php?id=<?php echo $_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" title="Asignar Liíder de Equipo <?php echo $_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
"><span class="fa fa-plus"></span></a>
                        <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider_equipo']));
?>
                        <div class="row">
                            <div class="col-md-4">
                           <?php if ($_smarty_tpl->tpl_vars['persona']->value['foto_perfil'] == NULL) {?>
                              <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/user.png">
                            <?php } else { ?>
                            <a class=" mimodal" type="button" href="#">
                              <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
" alt="User profile picture">
                              </a>
                          <?php }?>
                            </div>
                          <div class="col-md-6">
                          <span><b>Nombre:</b></span>
                          <?php if (isset($_smarty_tpl->tpl_vars['persona']->value['nombre'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>

                          <?php } else { ?>
                          El usuario aun no actualiza sus datos
                          <?php }?>
                        <br>
                        <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comite_tecnico']));
?>
                        <span><b>Usuario:</b></span>
                        <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                        <a href="lider_seccion.php?id=<?php echo $_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['lider']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider_equipo'];?>
">Cambiar</a>
                        <?php }?>
                        </div>
                    <?php }?>
                  </div>
                      </td>
                  <tr>
                  <td> <?php if (in_array("LIDE_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        style="margin-bottom:3px; color:blue;" 
                        class="btn btn-default mimodal"
                        title="Eliminar Líder de Equipo" 
                        data-href="lider_equipo_eliminar.php">
                        <i class="fa fa-trash"></i>
                      </a>
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
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2020-07-30 11:21:50
  from "/home/veronica/public_html/uptt/modulos/nucleo/templates/nucleos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f22e58e4e5d03_90202257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4164b76279183e6475f49c5c0bfeb9576c0d8024' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/nucleo/templates/nucleos.html',
      1 => 1596122303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar.html' => 1,
    'file:../../navegacion/cabecera.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f22e58e4e5d03_90202257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



        <div class="container-fluid claro">
          <h2 class="subtitulo" align="center"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_nucleos']->value;?>
</span>Nucleos y Extensiones
            <?php if (in_array("NUCL_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
             <a class="btn btn-sm btn-outline-primary mimodal mimodal" type="button" 
            data-href="nucleos_agregar.php" title="Agregar nucleo o extensión"><span class="fa fa-plus"></span></a>
            <?php }?>
          </h2>
            <div class="table-responsive">
              <table class="table " id="tabla_repo" style="width:100%">
                <thead class="text-dark">
                  <tr>
                    <th>Nombre Largo</th>
                    <th>Nombre Corto</th>
                    <th>Funciones</th>
                    <?php if (in_array("NUCL_R",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <th>Responsable</th>
                    <?php }?>
                  </tr>
                </thead>
                <tbody class="text-dark">

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nucleos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                  <tr class="text-dark">
                    <td><?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_largo'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto'];?>
</td>
                    <td class="text-center" style="white-space: nowrap;">
                    <?php if (in_array("NUCL_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal" 
                      title="Modificar Nucleo o Extensión" 
                      data-href="nucleos_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <?php }?>
                    <?php if (in_array("NUCL_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Eliminar Nucleo o Extensión" 
                      data-href="nucleos_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-trash"></i>
                    </a>
                    <?php }?>

                    </td>
                    <?php if (in_array("NUCL_R",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <td>
                        <?php if ($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable'] == NULL) {?>
                          <a class="btn btn-sm btn-outline-primary mimodal" type="button" href="nucleo_responsable.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" title="Asignar responsable Nucleo o Extensión"><span class="fa fa-plus"></span></a>
                        <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable']));
?>
                          <span><b>Nombre:</b></span>
                        <?php echo $_smarty_tpl->tpl_vars['persona']->value[0]['nombre'];?>

                        <br>
                        <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable']));
?>
                        <span><b>Usuario:</b></span>
                        <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                        <a href="nucleo_responsable.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable'];?>
">Cambiar</a>
                        <?php }?>
                      </td>
                    <?php }?>
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
  

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

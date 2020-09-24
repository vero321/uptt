<?php
/* Smarty version 3.1.30, created on 2020-09-19 12:59:09
  from "/home/veronica/public_html/uptt/modulos/lider_seccion/templates/lideres.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f6638dd3cdf78_95901508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e42fd0594698ca3d53beec52c0f10591e7d99aa' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/lider_seccion/templates/lideres.html',
      1 => 1600534616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../modal/modal_galeria.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f6638dd3cdf78_95901508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
 
  <div class="card shadow">
    <div class="card-header ">
      <h2 class="text-primary"> Líderes
        <?php if (in_array('LIDE_A',$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
          <a class="btn btn-sm btn-outline-primary mimodal" type="button" 
            href="lider_asignar.php?seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
" title="Agregar un nuevo Líder de equipo"><span class="fa fa-plus"></span></a>
            <?php }?>
          </h2>

      <table class="table " id="tabla_repo" style="width:100%">
        <thead class="text-dark">
            <th>Nombre de Equipo</th>
            <?php if (in_array("PROF_AL",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
            <th>Responsable</th>
            <?php }?>
            <th>Funciones</th>
          </tr>
        </thead>
        <tbody class="text-dark">

        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lider_seccion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

            <td>
              <?php if ($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_equipo'] == NULL) {?>
              El equipo aun no tiene nombre
              <?php } else { ?>
              <?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_equipo'];?>

              <?php }?>
            </td>


            <?php if (in_array("PROF_AL",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'] == NULL) {?>
                  <a class="btn btn-sm btn-outline-primary" type="button" href="lider_asignar.php?id=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
" title="Asignar Líder de Equipo"><span class="fa fa-plus"></span></a>
                <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona']));
?>
                  <div class="row">
                    <div class="col-md-4">
                   <?php if ($_smarty_tpl->tpl_vars['persona']->value['foto_perfil'] == NULL) {?>
                      <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/user.png">
                    <?php } else { ?>
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
"
                   data-target="#image-gallery">
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
                  <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona']));
?>
                  <span><b>Usuario:</b></span>
                  <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                  <a href="lider_asignar.php?id=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'];?>
&seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
">Cambiar</a>
                <?php }?>
                  </div>
              </div>
              </td>
            <?php }?>
            <td>
            
              <?php if (in_array("LIDE_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
              <a 
                style="margin-bottom:3px; color:blue;" 
                class="btn btn-default mimodal"
                title="Eliminar Equipo" 
                data-href="lider_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
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
    

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

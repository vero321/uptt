<?php
/* Smarty version 3.1.30, created on 2021-01-26 10:15:38
  from "/home/veronica/public_html/uptt/modulos/lider_seccion/templates/lideres.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6010240aedb3e7_84231424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e42fd0594698ca3d53beec52c0f10591e7d99aa' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/lider_seccion/templates/lideres.html',
      1 => 1610626348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../navegacion/barra_nucleo_pnf.html' => 1,
    'file:../../modal/modal_galeria.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_6010240aedb3e7_84231424 (Smarty_Internal_Template $_smarty_tpl) {
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
    <li class="breadcrumb-item"><a href="lider_seccion.php">Secciones</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sección <?php echo $_smarty_tpl->tpl_vars['seccion']->value['nombre'];?>
</li>
  </ol>
</nav>

  <div class="card shadow">
    <div class="card-header ">
      <h2 class="text-primary"> Equipos
        <?php if (in_array('LIDE_A',$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
          <a class="btn btn-sm btn-outline-primary mimodal" type="button" 
            data-href="agregar_equipo.php?seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
" title="Agregar un nuevo equipo"><span class="fa fa-plus"></span>
          </a>
            <?php }?>
      </h2>
    </div>
    
    <div class="card-body">
      <div class="card-title"><?php echo $_smarty_tpl->tpl_vars['trayecto']->value['trayecto'];?>
</div>
     <div class="table-responsive">
      <table class="table " id="tabla_repo" style="width:100%">
        <thead class="text-dark">
            <th width="2%">Nombre de Equipo</th>
            <?php if (in_array("PROF_AL",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
            <th>Líder</th>
            <?php }?>

            <?php if (in_array("TUTO_AAC",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
            <th>Tutor Académico</th>
            <?php }?>

            <?php if (in_array("TUTO_ACO",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
            <th>Tutor Comunitario</th>
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
                  <a class="btn btn-sm btn-outline-primary" type="button" href="lider_asignar.php?seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
&equipo=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"title="Agregar equipo"><span class="fa fa-plus"></span></a>
                <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona']));
?>
                    
                   <?php if ($_smarty_tpl->tpl_vars['persona']->value['foto_perfil'] == NULL) {?>
                      <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                    <?php } else { ?>
                    <a class="thumbnail" href="#" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['persona']->value['id'];?>
"
                   data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
"
                   data-target="#image-gallery">
                      <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
" alt="User profile picture">
                      </a>
                  <?php }?>
                  <br>
                  <?php if (isset($_smarty_tpl->tpl_vars['persona']->value['nombre'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>

                  <?php } else { ?>
                  El usuario aun no actualiza sus datos
                  <?php }?>
                  <br>
                  <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona']));
?>
                  <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                  <br>
                  <a href="lider_asignar.php?equipo=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'];?>
&seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
">Cambiar</a>
                <?php }?>

              </td>
            <?php }?>

             <?php if (in_array("TUTO_AAC",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tutor_academico'] == NULL) {?>
                  <a class="btn btn-sm btn-outline-primary" type="button" href="tutor_academico_asignar.php?seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
&equipo=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" title="Asignar Tutor Académico"><span class="fa fa-plus"></span></a>
                <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tutor_academico']));
?>
                 
                   <?php if ($_smarty_tpl->tpl_vars['persona']->value['foto_perfil'] == NULL) {?>
                      <i class="fas fa-user fa-2x img-profile rounded-circle p-2 bg-gray-200"></i>
                    <?php } else { ?>
                    <a class="thumbnail" href="#" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['persona']->value['id'];?>
"
                   data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
"
                   data-target="#image-gallery">
                      <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
" alt="User profile picture">
                      </a>
                  <?php }?>
                    
                    <br>
                  <?php if (isset($_smarty_tpl->tpl_vars['persona']->value['nombre'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>

                  <?php } else { ?>
                  El usuario aun no actualiza sus datos
                  <?php }?>
                  <br>
                  <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tutor_academico']));
?>
                  <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                  <a href="tutor_academico_asignar.php?id=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tutor_academico'];?>
&seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
">Cambiar</a>
                <?php }?>
                  
              
              </td>
            <?php }?>


            <?php if (in_array("TUTO_ACO",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tutor_comunitario'] == NULL) {?>
                  <a class="btn btn-sm btn-outline-primary" type="button" href="tutor_comunitario_asignar.php?seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
&equipo=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" title="Asignar Tutor Comunitario"><span class="fa fa-plus"></span></a>
                <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tutor_comunitario']));
?>
                  
                   <?php if ($_smarty_tpl->tpl_vars['persona']->value['foto_perfil'] == NULL) {?>
                      <i class="fas fa-user fa-2x img-profile rounded-circle p-2 bg-gray-200"></i>
                    <?php } else { ?>
                    <a class="thumbnail" href="#" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['persona']->value['id'];?>
"
                   data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
"
                   data-target="#image-gallery">
                      <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
" alt="User profile picture">
                      </a>
                  <?php }?>
                    <br>
                  <?php if (isset($_smarty_tpl->tpl_vars['persona']->value['nombre'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>

                  <?php } else { ?>
                  El usuario aun no actualiza sus datos
                  <?php }?>
                  <br>
                  <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tutor_comunitario']));
?>
                  <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                  <a href="tutor_comunitario_asignar.php?id=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tutor_comunitario'];?>
&seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
&equipo=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Cambiar</a>
                <?php }?>
  
              </td>
            <?php }?>
            

            <td>
              <a href="../equipo/equipo_profesor.php?id_l=<?php if ($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'] != NULL) {
echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'];
}?>&id_e=<?php if ($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] != NULL) {
echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];
}?>" class="p-1" title="Ver detalles integrantes del equipo"><i class="fa fa-info-circle"></i></a>
              <a href="../propuesta/propuesta_profesor.php?id_s=<?php echo $_smarty_tpl->tpl_vars['seccion_profesor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_l=<?php if ($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'] != NULL) {
echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'];
}?>&id_e=<?php if ($_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] != NULL) {
echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];
}?>
              " class="-1" title="Ver Propuestas del equipo"><i class="fas fa-clipboard-list"></i></a>
              <?php if (in_array("LIDE_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
              <a 
                style="color:blue;" 
                class="btn btn-default mimodal p-1"
                title="Eliminar Equipo" 
                data-href="lider_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['lider_seccion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&seccion=<?php echo $_smarty_tpl->tpl_vars['seccion']->value['id'];?>
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
  </div>
</div>
    

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

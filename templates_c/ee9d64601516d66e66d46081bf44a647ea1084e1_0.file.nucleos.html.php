<?php
/* Smarty version 3.1.30, created on 2021-01-28 22:40:36
  from "/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_601375a453dd66_52186941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee9d64601516d66e66d46081bf44a647ea1084e1' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/nucleo/templates/nucleos.html',
      1 => 1611850487,
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
function content_601375a453dd66_52186941 (Smarty_Internal_Template $_smarty_tpl) {
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
    <li class="breadcrumb-item active" aria-current="page">Núcleos y Extenciones</li>
  </ol>
    <h2 class="text-primary my-3"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_nucleos']->value;?>
</span> Núcleos y Extensiones
    </h2>
      <div class="card">
        <div class="card-header pb-0 d-flex justify-content-between">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="nucleos-tab" data-toggle="tab" href="#nucleos" role="tab" aria-controls="nucleos" aria-selected="true">Núcleos</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" id="extesiones-tab" data-toggle="tab" href="#extesiones" role="tab" aria-controls="extesiones" aria-selected="false">Extenciones</a>
            </li>
          </ul>
             <?php if (in_array("NUCL_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
             <a class="btn  btn-primary btn-circle mimodal mimodal float-right" type="button" 
            data-href="nucleos_agregar.php" title="Agregar núcleo o extensión"><span class="fa fa-plus text-white"></span></a>
          <?php }?>
        
        </div>
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="nucleos" role="tabpanel" aria-labelledby="nucleos-tab">
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
                  <?php if ($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo'] == NULL) {?>
                    <tr class="text-dark">
                      <td><?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_largo'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto'];?>
</td>
                      <td class="text-center" style="white-space: nowrap;">
                      <?php if (in_array("NUCL_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        class="btn btn-info btn-circle btn-sm mimodal"
                        title="Modificar Núcleo o Extensión" 
                        data-href="nucleos_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-edit text-white"></i>
                      </a>
                      <?php }?>
                      <?php if (in_array("NUCL_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        class="btn btn-danger btn-circle btn-sm mimodal"
                        title="Eliminar Núcleo o Extensión" 
                        data-href="nucleos_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-trash text-white"></i>
                      </a>
                      <?php }?>

                      </td>
                      <?php if (in_array("NUCL_R",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                        <td>
                          <?php if ($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable'] == NULL) {?>
                            <a class="btn btn-sm btn-circle btn-outline-primary" type="button" href="nucleo_responsable.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" title="Asignar responsable Núcleo o Extensión"><span class="fa fa-plus"></span></a>
                          <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable']));
?>
                            <div class="row">
                              <div class="col-md-12">
                             <?php if ($_smarty_tpl->tpl_vars['persona']->value['foto_perfil'] == NULL) {?>
                   <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>

                              <?php } else { ?>
                              <a class="thumbnail" href="#"  data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['persona']->value['id'];?>
"
                             data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
"
                             data-target="#image-gallery">
                                <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
" alt="User profile picture">
                                </a>
                            <?php }?>
                              </div>
                            <div class="col-md-12">
                            <?php if (isset($_smarty_tpl->tpl_vars['persona']->value['nombre'])) {?>
                              <?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>

                            <?php } else { ?>
                            El usuario aun no actualiza sus datos
                            <?php }?>
                            <br>
                            <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable']));
?>
                            <span><b>Usuario:</b></span>
                            <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                            <a href="nucleo_responsable.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable'];?>
">Cambiar</a>
                          <?php }?>
                            </div>
                        </div>
                        </td>
                      <?php }?>
                    </tr>
                      <?php }?>
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
            <div class="tab-pane fade" id="extesiones" role="tabpanel" aria-labelledby="extesiones-tab">
              <div class="table-responsive">
                <table class="table " id="tabla_repo1" style="width:100%">
                  <thead class="text-dark">
                    <tr>
                      <th>Nombre Largo</th>
                      <th>Nombre Corto</th>
                      <th>Nucleo</th>
                      <th>Funciones</th>
                      <?php if (in_array("NUCL_R",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <th>Responsable</th>
                      <?php }?>
                    </tr>
                  </thead>
                  <tbody class="text-dark">

                  <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nucleos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php if ($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo'] != NULL) {?>
                    <tr class="text-dark">
                      <td><?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_largo'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_corto'];?>
</td>
                      <?php $_smarty_tpl->_assignInScope('extesion', bd_nucleos_datos($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo']));
?>
                      <td><?php echo $_smarty_tpl->tpl_vars['extesion']->value['nombre_corto'];?>
</td>
                      <td class="text-center" style="white-space: nowrap;">
                      <?php if (in_array("NUCL_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        style="margin-bottom:3px; color:blue;" 
                        class="btn btn-info btn-circle btn-sm mimodal" 
                        title="Modificar Núcleo o Extensión" 
                        data-href="nucleos_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-edit text-white"></i>
                      </a>
                      <?php }?>
                      <?php if (in_array("NUCL_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        class="btn btn-danger btn-circle btn-sm mimodal"
                        title="Eliminar Núcleo o Extensión" 
                        data-href="nucleos_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-trash text-white"></i>
                      </a>
                      <?php }?>

                      </td>
                      <?php if (in_array("NUCL_R",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                        <td>
                          <?php if ($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable'] == NULL) {?>
                            <a class="btn btn-sm btn-circle btn-outline-primary" type="button" href="nucleo_responsable.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" title="Asignar responsable Núcleo o Extensión"><span class="fa fa-plus"></span></a>
                          <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('persona', bd_personas_datos($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable']));
?>
                            <div class="row">
                              <div class="col-md-12">
                             <?php if ($_smarty_tpl->tpl_vars['persona']->value['foto_perfil'] == NULL) {?>
                   <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                              <?php } else { ?>
                              <a class="thumbnail" href="#"  data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['persona']->value['id'];?>
"
                             data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
"
                             data-target="#image-gallery">
                                <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto_perfil'];?>
" alt="User profile picture">
                                </a>
                            <?php }?>
                              </div>
                            <div class="col-md-12">
                              <span><b>Nombre:</b></span>
                            <?php if (isset($_smarty_tpl->tpl_vars['persona']->value['nombre'])) {?>
                              <?php echo $_smarty_tpl->tpl_vars['persona']->value['nombre'];?>

                            <?php } else { ?>
                            El usuario aun no actualiza sus datos
                            <?php }?>
                            <br>
                            <?php $_smarty_tpl->_assignInScope('usuario', bd_usuarios_datos($_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable']));
?>
                            <span><b>Usuario:</b></span>
                            <?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>

                            <a href="nucleo_responsable.php?id=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&cambiar=<?php echo $_smarty_tpl->tpl_vars['nucleos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['responsable'];?>
">Cambiar</a>
                          <?php }?>
                            </div>
                        </div>
                        </td>
                      <?php }?>
                    </tr>
                    <?php }?>
                  <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>




  

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

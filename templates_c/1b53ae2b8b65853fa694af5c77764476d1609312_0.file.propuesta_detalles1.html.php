<?php
/* Smarty version 3.1.30, created on 2021-01-19 00:44:36
  from "/home/veronica/public_html/uptt/modulos/propuesta/templates/propuesta_detalles1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_600663b4e6dc74_36522914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b53ae2b8b65853fa694af5c77764476d1609312' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/propuesta/templates/propuesta_detalles1.html',
      1 => 1610987319,
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
function content_600663b4e6dc74_36522914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
	<div class="card">
		        <!--car-header menu  -->        
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h5 class="m-0 font-weight-bold text-primary">Propuesta
             <span class="badge badge-pill badge-success ml-2 p-2"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</span>
              <?php if (isset($_smarty_tpl->tpl_vars['propuesta']->value['fecha_evaluacion'])) {?>
                <?php echo $_smarty_tpl->tpl_vars['propuesta']->value['fecha_evaluacion'];?>

              <?php }?>
              </h5>
            <?php if ($_smarty_tpl->tpl_vars['opciones']->value == 'TRUE') {?>
            <!--dropdwn -->        
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-900"></i>
                </a>
                
              <!--cotenido dropdwn -->        
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                  <div class="dropdown-header">Opciones propuesta:</div>
                  <a class="dropdown-item mimodal" data-href="propuesta_cambio.php?id=<?php echo $_smarty_tpl->tpl_vars['propuesta']->value['id'];?>
&trayecto=<?php echo $_smarty_tpl->tpl_vars['datos']->value['id_trayecto'];?>
">
                    <i class="fa fa-edit fa-sm fa-fw mr-2 text-gray-800"></i>
                    Evaluar
                  </a>
                  <div class="dropdown-divider"></div>
                   <a class="dropdown-item mimodal" data-href="../observaciones/añadir_observacion.php?tipo=PROPUESTAS&fila=<?php echo $_smarty_tpl->tpl_vars['propuesta']->value['id'];?>
">
                    <i class="fa fa-eye fa-sm fa-fw mr-2 text-gray-800"></i>
                    Añadir Observación
                  </a>
                  <a class="dropdown-item mimodal" data-href="propuesta_enviar.php?id=<?php echo $_smarty_tpl->tpl_vars['propuesta']->value['id'];?>
&e=1">
                    <i class="fa fa-paper-plane fa-sm fa-fw mr-2 text-gray-800"></i>
                    Enviar a profesor
                  </a>
                </div>
              <!--/cotenido dropdwn -->        
              </div>
            <!--/dropdwn -->  
            <?php }?>      
            </div>
            <!-- Card Body propuesta-->
            <div class="card-body">
              <div class="row">
                <!--Inicio card Datos-->
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h6 class="m-0 font-weight-bold text-primary">Datos del PNF</h6>                    
                    </div>
                    <div class="card">
                      <div class="row">
                        <div class="col-md-3 p-2">
                          <div class="card-body">
                            <h6 class=" font-weight-bold text-gray-800">Docente Asesor</h6>                    
                            <div class="row">
                              <div class="col-md-12 m-3">
                                <?php if ($_smarty_tpl->tpl_vars['datos']->value['docente']['foto_perfil'] == NULL) {?>
                                  <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                                <?php } else { ?>
                                  <a class="thumbnail" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['datos']->value['docente']['id'];?>
" data-toggle="modal"  data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['datos']->value['docente']['foto_perfil'];?>
" data-target="#image-gallery">
                                  <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['datos']->value['docente']['foto_perfil'];?>
" alt="User profile picture">
                                  </a>
                                <?php }?>
                              </div>
                              <div class="col-md-12">
                                <span class="text-gray-700"><?php echo $_smarty_tpl->tpl_vars['datos']->value['docente']['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value['docente']['apellido'];?>
</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 p.2">
                          <div class="card-body">
                            <h6 class="m-2 font-weight-bold text-gray-800">PNF</h6> 
                              <span class="text-gray-700"><?php echo $_smarty_tpl->tpl_vars['datos']->value['pnf'];?>
</span>
                            <h6 class="m-2 font-weight-bold text-gray-800">Trayecto</h6> 
                              <span class="text-gray-700"><?php echo $_smarty_tpl->tpl_vars['datos']->value['trayecto'];?>
</span>
                          </div>
                        </div> 
                        <div class="col-md-3 p-2">
                          <div class="card-body">
                            <h6 class="m-2 font-weight-bold text-gray-800">Linea de investigacion</h6> 
                            <span class="text-gray-700"><?php echo $_smarty_tpl->tpl_vars['datos']->value['linea'];?>
</span>
                          </div>
                        </div>
                        <div class="col-md-3 p-2">
                          <div class="card-body">
                            <h6 class="m-2 font-weight-bold text-gray-800">Fecha de creación</h6> 
                            <span class="text-gray-700"><?php echo $_smarty_tpl->tpl_vars['datos']->value['fecha'];?>
</span>
                          </div>
                        </div> 
                      </div>
                      <!--row-->
                    </div>
                  </div>
                </div>
                <!-- fin card Datos-->
                <div class="col-md-6">
                 <!-- Card - Autores -->
                  <div class="card  mb-4">
                    <div class="card-header">
                      <h6 class="m-0 font-weight-bold text-primary">Autores</h6>
                    </div>
                      <!-- Card Content  -->
                    <div class="card-body ">
                      <div class="row mb-3">
                        <div class="col-md-5">
                          <?php if ($_smarty_tpl->tpl_vars['datos_lider']->value['foto_perfil'] == NULL) {?>
                                <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                              <?php } else { ?>
                                <a class="thumbnail" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['datos_lider']->value['id'];?>
" data-toggle="modal" 
                                 data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['datos_lider']->value['foto_perfil'];?>
" data-target="#image-gallery">
                                  <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['datos_lider']->value['foto_perfil'];?>
" alt="User profile picture">
                                </a>
                              <?php }?>
                          </div>
                          <div class="col-md-7">
                            <span><?php echo $_smarty_tpl->tpl_vars['datos_lider']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['datos_lider']->value['apellido'];?>
</span>
                            <br>
                            <small>Lider de equipo</small>
                          </div>
                      </div>
                      <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['equipo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] + 1;
?>
                        <div class="row my-3">
                          <div class="col-md-5">
                          <?php if ($_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'] == NULL) {?>
                            <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                          <?php } else { ?>
                            <a class="thumbnail" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" data-toggle="modal"  data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
" data-target="#image-gallery">
                              <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
" alt="User profile picture">
                            </a>
                          <?php }?>
                        </div>
                        <div class="col-md-7">
                          <span><?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['apellido'];?>
</span>
                          <br>
                          <small>Estudiante</small>
                        </div>
                      </div>
                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?> 
                  </div>
                </div>
              <!-- CARD-->
            </div>
              <!-- Col-->
              <div class="col-md-6">
                <!-- Card Header - Localidad -->
                  <div class="card  mb-4">
                    <div class="card-header">
                      <h6 class="m-0 font-weight-bold text-primary">Comunidad</h6>
                    </div>
                      <div class="card-body">
                       <h6 class="font-weight-bold text-gray-800">Organismo, Institución o Comunidad a quien va dirigido el Proyecto:</h6>
                       <?php echo $_smarty_tpl->tpl_vars['comunidad']->value['nombre_comunidad'];?>
 
                        <br>
                        <h6 class="font-weight-bold text-gray-800">Dirección:</h6>
                       <?php echo $_smarty_tpl->tpl_vars['comunidad']->value['direccion'];?>

                        <h6 class="font-weight-bold text-gray-800">Estado</h6>
                       <?php echo $_smarty_tpl->tpl_vars['comunidad']->value['estado'];?>

                        <h6 class="font-weight-bold text-gray-800">Municipio</h6>
                       <?php echo $_smarty_tpl->tpl_vars['comunidad']->value['municipio'];?>

                        <h6 class="font-weight-bold text-gray-800">Parroquia</h6>  
                       <?php echo $_smarty_tpl->tpl_vars['comunidad']->value['parroquia'];?>

                       <br>
                       <?php if ($_smarty_tpl->tpl_vars['comunidad']->value['url'] != 'NULL') {?>
                        <h6 class="font-weight-bold text-gray-800">Web</h6>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['comunidad']->value['url'];?>
" class="btn-link" target="_blank"><?php echo $_smarty_tpl->tpl_vars['comunidad']->value['url'];?>
</a>
                        <br>
                       <?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['comunidad']->value['correo'] != 'NULL') {?>
                        <h6 class="font-weight-bold text-gray-800">Correo</h6>
                        <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['comunidad']->value['correo'];?>
" class="btn-link"><?php echo $_smarty_tpl->tpl_vars['comunidad']->value['correo'];?>
</a>
                        <br>
                       <?php }?>

                       <?php if ($_smarty_tpl->tpl_vars['comunidad']->value['telefono'] != 'NULL') {?>
                        <h6 class="font-weight-bold text-gray-800">Telefono</h6>
                        <a href="tel:<?php echo $_smarty_tpl->tpl_vars['comunidad']->value['telefono'];?>
" class="btn-link"><?php echo $_smarty_tpl->tpl_vars['comunidad']->value['telefono'];?>
</a>
                        <br>
                       <?php }?>
                      </div>
                  </div>
              </div>

            <!--card propociones -->
              <div class="col-md-6">
                <div class="card  mb-4">
                  <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Proposiciones</h6>
                  </div>
                <!-- Card Content  -->
                  <div class="card-body p-1">
                    <nav class="nav nav-tabs" id="myTab" role="tablist">
                    <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['proposiciones']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] + 1;
?>
                      <a class="nav-item nav-link <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null) == 1) {?>active<?php }?> " id="propuesta_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null);?>
-tab" data-toggle="tab" href="#nav_propuesta_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null);?>
" role="tab" aria-controls="nav_propuesta_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null);?>
" aria-selected="true">Propuesta <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null);?>
</a>
                        <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>  
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                      <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['proposiciones']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] + 1;
?>
                       <div class="tab-pane fade <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null) == 1) {?>show active<?php }?>" id="nav_propuesta_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null);?>
" role="tabpanel" aria-labelledby="propuesta_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null);?>
-tab">
                          <h6>Estado: <span class="badge badge-pill badge-success ml-2 p-2"><?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'];?>
</span></h6>
                          <h6 class="font-weight-bold">Descripción:</h6>
                          <p class="p-1"><?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descripcion'];?>
</p>
                          <h6 class="font-weight-bold">Objetvo:</h6>
                          <p class="p-1"><?php echo $_smarty_tpl->tpl_vars['proposiciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['objetivo'];?>
</p>
                        </div>
                      <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                    </div>
                  </div>
                <!--/Card Content  -->
                </div>
              </div>
            <!--/card propociones -->

              <?php if (count($_smarty_tpl->tpl_vars['observaciones']->value) > 0) {?>

              <!-- Card - Obserbaciones -->
              <div class="col-md-6">
                <div class="card  mb-4">
                  <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Observaciones</h6>
                  </div>
                  <div class="card-body p-1">
                    <div class="row">
                      <?php
$__section_i_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['observaciones']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total != 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] + 1;
?>
                      <div class="col-md-12">
                        <div class="media p-3">
                          <?php if ($_smarty_tpl->tpl_vars['observaciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'] != NULL) {?>
                            <?php $_smarty_tpl->_assignInScope('usuario', bd_personas_datos($_smarty_tpl->tpl_vars['observaciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona']));
?>
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value['foto_perfil'] == NULL) {?>
                            <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200 mr-3"></i>
                            <?php } else { ?>
                            <a class="thumbnail mr-3" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" data-toggle="modal" data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['foto_perfil'];?>
"
                            data-target="#image-gallery">
                            <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['foto_perfil'];?>
" alt="User profile picture">
                            </a>
                            <?php }?>
                          <?php }?>
                          <div class="media-body card">
                            <div class="card-body bg-gray-200">
                              <?php if ($_smarty_tpl->tpl_vars['observaciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'] != NULL) {?>
                                <?php $_smarty_tpl->_assignInScope('usuario', bd_personas_datos($_smarty_tpl->tpl_vars['observaciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona']));
?>
                              <?php }?>
                              
                              <h6 class=" text-gray-900 font-weight-bold"><?php if ($_smarty_tpl->tpl_vars['usuario']->value['nombre'] != NULL && $_smarty_tpl->tpl_vars['usuario']->value['apellido'] != NULL) {
echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellido'];
}?> 
                                <small><?php echo $_smarty_tpl->tpl_vars['observaciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha'];?>
</small>
                              </h6>
                                 
                              <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['observaciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descripcion'];?>

                              </p>
                              <?php if ($_SESSION["u"]["id"] == $_smarty_tpl->tpl_vars['observaciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_persona'] && $_smarty_tpl->tpl_vars['opciones']->value == 'TRUE') {?>
                              <!--dropdwn -->        
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-900"></i>
                                  </a>
                                  
                                <!--cotenido dropdwn -->        
                                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Opciones Obsevación:</div>
                                    <a class="dropdown-item mimodal" data-href="../observaciones/observaciones_editar.php?id=<?php echo $_smarty_tpl->tpl_vars['observaciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                                      <i class="fa fa-edit fa-sm fa-fw mr-2 text-gray-800"></i>
                                      Editar
                                    </a>
                                    <a class="dropdown-item mimodal" data-href="../observaciones/observaciones_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['observaciones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                                      <i class="fa fa-trash fa-sm fa-fw mr-2 text-gray-800"></i>
                                      Eliminar
                                    </a>
                                <!--/cotenido dropdwn -->        
                                  </div>
                                </div>
                              <!--/dropdwn -->
                              <?php }?> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
}
}
if ($__section_i_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_3_saved;
}
?>
                    </div>
                  </div>
                </div>
               
              </div>
              <!--/ Card - Obserbaciones -->
            </div>
            <?php }?>
          </div>
	</div>
</div>
</di>


<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>''), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

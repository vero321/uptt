<?php
/* Smarty version 3.1.30, created on 2020-11-02 20:09:01
  from "/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuestas_profesor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fa09f9df0ad80_25753965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9612252e6fb3580bfec4d147bbdd5357a4930556' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuestas_profesor.html',
      1 => 1604362125,
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
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5fa09f9df0ad80_25753965 (Smarty_Internal_Template $_smarty_tpl) {
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
    <li class="breadcrumb-item"><a href="../lider_seccion/lideres.php?id=<?php echo $_smarty_tpl->tpl_vars['id_seccion']->value;?>
">Secciones</a></li>
    <li class="breadcrumb-item active" aria-current="page">Propuesta</li>
  </ol>
</nav>
  <div class="row">

    <div class="col-md-6">
     <!-- Card Header - Autores -->
      <div class="card shadow mb-4">
        <a href="#collapseCard_autores" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard_autores">
          <h5 class="m-0 font-weight-bold text-primary">Autores</h5>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapseCard_autores">
           <div class="card-body p-0">
             <table class="table">
                <thead>
                  <tr>
                    <th>Autor</th>
                    <th>Rol</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>
                    <?php if ($_smarty_tpl->tpl_vars['lider']->value['foto_perfil'] == NULL) {?>
                      <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/user.png">
                    <?php } else { ?>
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['lider']->value['foto_perfil'];?>
"
                   data-target="#image-gallery">
                      <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['lider']->value['foto_perfil'];?>
" alt="User profile picture">
                      </a>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['lider']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['lider']->value['apellido'];?>

                    </td>
                    <td>LIDER</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      </div>
                    </td>
                  <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['equipo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] + 1;
?>
                  <tr>
                    <td>
                   <?php if ($_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'] == NULL) {?>
                      <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/user.png">
                    <?php } else { ?>
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
"
                   data-target="#image-gallery">
                      <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
" alt="User profile picture">
                      </a>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['apellido'];?>

                  </td>
                    <td>ESTUDIANTE</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info" title="Ver detalles"><i class="fas fa-eye"></i></a>
                      </div>
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
      <!-- CARD-->

    </div>
    <!-- Col-->

    <div class="col-md-6">
      <!-- Card Header - Localidad -->
        <div class="card shadow mb-4">
          <a href="#collapseCard_localidad" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard_localidad">
            <h5 class="m-0 font-weight-bold text-primary">Localidad</h5>
          </a>
          <!-- Card Content - Collapse -->
          <div class="collapse" id="collapseCard_localidad">
            <div class="card-body">
             <h6>Organismo, Institución o Comunidad a quien va dirigido el Proyecto:</h6>
              <strong><?php echo $_smarty_tpl->tpl_vars['datos_propuesta']->value['comunidad_objeto'];?>
</strong> 
              <br>
              <h6>Dirección:</h6>
              <strong><?php echo $_smarty_tpl->tpl_vars['datos_propuesta']->value['direccion'];?>
</strong>
              <h6>Estado</h6>
              <strong>-_-</strong>
              <h6>Municipio</h6>
              <strong>-_-</strong>
              <h6>Parroquia</h6>  
              <strong><?php echo $_smarty_tpl->tpl_vars['datos_propuesta']->value['id_parroquia'];?>
</strong>
            </div>
        </div>
      </div>
    </div>

  <!--card localidad -->
  <div class="col-md-7">
    <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCard_propuestas" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard_propuestas">
        <h5 class="m-0 font-weight-bold text-primary">Propuestas</h5>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse" id="collapseCard_propuestas">
        <div class="card-body p-0">
           <nav class="nav nav-tabs" id="myTab" role="tablist">
            <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['propuestas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] + 1;
?>
              <a class="nav-item nav-link " id="propuesta_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null);?>
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

          <div class="tab-content
          p-2" id="nav-tabContent">
            <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['propuestas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] + 1;
?>
            <div class="tab-pane fade" id="nav_propuesta_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null);?>
" role="tabpanel" aria-labelledby="propuesta_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index_next'] : null);?>
-tab">
                <h6>Descripción de la Propuesta:</h6>
                <p><?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['propuesta'];?>
</p>
                <h6>Objetvo:</h6>
                <p><?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['objetivo'];?>
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
    </div>
  </div>

  </div>
  <!--card -->

    <div class="col-md-5">
        <!-- Card Header - Obserbaciones -->
        <div class="card shadow mb-4">
        <a href="#collapseCard_observaciones" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard_observaciones">
          <h6 class="m-0 font-weight-bold text-primary">Observaciones</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapseCard_observaciones">
          <div class="card-body">
            <form id="observaciones" name="observaciones" method="POST" action="proc_propuesta_enviar.php">
              <input type="text" name="a">
               <div class="form-group">
              <div class="form-group">
            <label for="observaciones">Example textarea</label>
            <textarea class="form-control" id="observacio" form="observaciones" rows="3"></textarea>
          </div>
              <input type="submit" value="Save Changes" class="btn btn-success float-right">

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
        <div class="col-12">
          <a href="../lider_seccion/lideres.php?id=<?php echo $_smarty_tpl->tpl_vars['id_seccion']->value;?>
" class="btn btn-secondary">Cancelar</a>
          
        </div>
      </div>
  <!--row -->
</div>
<!-- Container-->

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

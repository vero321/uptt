<?php
/* Smarty version 3.1.30, created on 2021-01-16 23:01:12
  from "/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_profesor_sin_propuesta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6003a878404944_25848641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39b15f4d1fd632aeb6e0a8ed55e71b7132818c2e' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/propuesta/templates/propuesta_profesor_sin_propuesta.html',
      1 => 1609890798,
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
function content_6003a878404944_25848641 (Smarty_Internal_Template $_smarty_tpl) {
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

	<div class="card-body">
              <div class="row">
                <div class="col-md-6">
                 <!-- Card - Autores -->
                  <div class="card  mb-4">
                    <div class="card-header">
                      <h6 class="m-0 font-weight-bold text-primary">Autores</h6>
                    </div>
                      <!-- Card Content  -->
                    <div class="card-body ">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Autor</th>
                            <th>Rol</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
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
                            <?php echo $_smarty_tpl->tpl_vars['datos_lider']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['datos_lider']->value['apellido'];?>

                            </td>
                              <td>LIDER</td>
                              
                            </tr>
                            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['equipo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <tr>
                              <td>
                              <?php if ($_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'] == NULL) {?>
                                <i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                              <?php } else { ?>
                                <a class="thumbnail" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" data-toggle="modal" data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
" data-target="#image-gallery">
                                <img class="img-thumbnail img-user4 rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
" alt="User profile picture">
                                </a>
                              <?php }?>
                              <?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['equipo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['apellido'];?>

                              </td>
                              <td>ESTUDIANTE</td>
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
                  <!-- CARD-->
                </div>
              <!-- Col-->
              <div class="col-md-6">
              	<div class="alert alert-success" role="alert">
				  <h4 class="alert-heading">Atención importante!</h4>
				  <p>El equipo an no ha enviado una propuesta</p>
				</div>
              </div>
            </div>
        </div>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

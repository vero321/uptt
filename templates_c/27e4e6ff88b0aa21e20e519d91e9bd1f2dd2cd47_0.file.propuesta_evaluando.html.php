<?php
/* Smarty version 3.1.30, created on 2021-01-27 20:57:10
  from "/home/veronica/public_html/uptt/modulos/propuesta/templates/propuesta_evaluando.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60120be64d1a36_24930242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27e4e6ff88b0aa21e20e519d91e9bd1f2dd2cd47' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/propuesta/templates/propuesta_evaluando.html',
      1 => 1611795425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../modal/modal_galeria.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_60120be64d1a36_24930242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
	<ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../inicio/inicio_interno.php">Repo</a></li>
	    <li class="breadcrumb-item"><a href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][$_SESSION['numero']]['id_rol'];?>
&n=<?php echo $_SESSION['numero'];?>
">Panel <?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</a></li>
	    <li class="breadcrumb-item"><a href="propuesta_evaluando.php?id=NULL">Seciones</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Propuestas evaluar</li>
	</ol>
	<div class="card">
		<div class="card-header">
			<h2>Propuestas Equipos</h2>
		</div>
		<div class="card-body">
			<div class="table-responsive">
                <table class="table " id="tabla_repo" style="width:100%">
                	<thead class="text-dark">
                		<tr>
                			<th>Codigo</th>
                			<th>Docente</th>
                			<th>Equipo</th>
                			<th>Lider de equipo</th>
                			<th>Funciones</th>
                		</tr>
                  	</thead>
                  	<tbody>
                  		<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['propuestas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  		<tr>
                  			<td><?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
                  			<td>
                  				<div class="col-md-12">
                            <?php if ($_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['docente']['foto_perfil'] == NULL) {?>
                   				<i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                            <?php } else { ?>
                              <a class="thumbnail" href="#"  data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['docente']['id'];?>
"
                             data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['docente']['foto_perfil'];?>
"
                             data-target="#image-gallery">
                                <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['docente']['foto_perfil'];?>
" alt="User profile picture">
                                </a>
                            <?php }?>
                              </div>
                            <div class="col-md-12">
                            <?php if (isset($_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['docente']['nombre']) || isset($_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['docente']['apellido'])) {?>
                              <?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['docente']['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['docente']['apellido'];?>

                            <?php } else { ?>
                            El usuario aun no actualiza sus datos
                            <?php }?>
                  			</td>
                  			<td>
                  				<?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['equipo']['nombre_equipo'];?>

                  			</td>
                  			<td>
                            <div class="row">
                              <div class="col-md-12">
                            <?php if ($_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['foto_perfil'] == NULL) {?>
                   				<i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                            <?php } else { ?>
                              <a class="thumbnail" href="#"  data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['id'];?>
"
                             data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['foto_perfil'];?>
"
                             data-target="#image-gallery">
                                <img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['foto_perfil'];?>
" alt="User profile picture">
                                </a>
                            <?php }?>
                              </div>
                            <div class="col-md-12">
                            <?php if (isset($_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['nombre']) || isset($_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['apellido'])) {?>
                              <?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lider']['apellido'];?>

                            <?php } else { ?>
                            El usuario aun no actualiza sus datos
                            <?php }?>
                            
                            </div>
                        </div>
                      </td>
                      <td>
                        <a style="margin-bottom:3px; color:blue;" class="btn btn-default" title="Ver Propuesta" href="propuesta_detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['propuestas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-info-circle"></i>
                      </a>
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
   
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.30, created on 2021-01-16 23:48:12
  from "/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/equipo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6003b37d004d82_86328407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54d978e18bef10ff0fb47c5f7a8f3a7b67bf917f' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/equipo/templates/equipo.html',
      1 => 1610855290,
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
    'file:../../modal/modal_galeria.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_6003b37d004d82_86328407 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
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
        <li class="breadcrumb-item active" aria-current="page">Equipo 
        <?php if (isset($_smarty_tpl->tpl_vars['lider']->value['nombre_equipo'])) {?>
          <?php echo $_smarty_tpl->tpl_vars['lider']->value['nombre_equipo'];?>

        <?php }?>
    </li>
      </ol>
    </nav>
	<div class="m-3 d-flex justify-content-between">
		
  	<h4>  Equipo: <a class="btn btn-link mimodal text-primary" data-href="cambiar_nombre.php?id=<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
" title="Cambiar nombre">
  		<?php if (isset($_smarty_tpl->tpl_vars['lider']->value['nombre_equipo'])) {?>
  			<?php echo $_smarty_tpl->tpl_vars['lider']->value['nombre_equipo'];?>

  		<?php } else { ?>
  			El equipo aun no tiene nombre
  		<?php }?>
  		<i class="fa fa-edit fa-sm"></i>
  		</a>

    <h5><a href="../propuesta/propuesta.php?equipo_id=<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
"><span class="badge lg badge-pill badge-primary" title="Propuesta"><i class="fa fa-list-alt">&nbsp;&nbsp;</i>Propuesta</span></a></h5>
	</h4>
	</div>
	<div class="card">
		<div class="card-header">
    <div class="row">
      <div class="col-md-6">
        
  		<h5 class="font-weight-bold"><span class="badge badge-success badge-pill"><?php echo $_smarty_tpl->tpl_vars['lider']->value['numero_integrantes'];?>
</span> Integrantes 
  			<?php if (in_array('EQUI_A',$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
    			<a class="btn btn-sm btn-outline-primary mimodal 
          <?php if ($_smarty_tpl->tpl_vars['lider']->value['numero_integrantes'] >= $_smarty_tpl->tpl_vars['lider']->value['limite_integrantes']) {?>
          disabled
          <?php }?>
          " type="button" 
            href="agregar_integrante.php?id=<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
" title="Agregar un nuevo integrante"><span class="fa fa-plus"></span>
          </a>
       <?php }?>
  		</h5>
      </div>
      <div class="col-md-6 text-right">
      Limite de integrantes:
      <span class="badge badge-info badge-pill"><?php echo $_smarty_tpl->tpl_vars['lider']->value['limite_integrantes'];?>
</div>
      </div>
    </div>

		<div class="card-body">
			<div class="table-responsive">
				<table class="table" id="tabla_repo" style="width:100%">
                <thead>
                  <tr>
                    <th>CI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Foto de perfl</th>
                    <th>Funciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                <tr>
                <?php if (isset($_smarty_tpl->tpl_vars['integrantes']->value) == true) {?>
                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['integrantes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                	<td><?php echo $_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
                	<td>
                		<?php if ($_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'] == NULL) {?>
                		La persona aun no ha actualizado su nombre
                		<?php } else { ?>
                		<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre']);?>

                		<?php }?>
                	</td>
                	<td>
                		<?php if ($_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'] == NULL) {?>
                		La persona aun no ha actualizado su apellido
                		<?php } else { ?>
                		<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['apellido']);?>

                		<?php }?>
                	</td>
                	<td>
                	<?php if ($_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'] == NULL) {?>
                		<i class="fas fa-user fa-4x img-profile rounded-circle p-2 bg-gray-200"></i>
                    <?php } else { ?>
                    <a class="thumbnail" href="#" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"
                   data-image="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
"
                   data-target="#image-gallery">
                      <img class="img-thumbnail img-user rounded-circle myimage" src="../../imagenes/perfil/<?php echo $_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'];?>
" alt="User profile picture">
                    </a>
                  <?php }?>
              </td>
              <td>
                  <?php if (in_array('EQUI_E',$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                  	<a 
                      class="btn btn-danger btn-circle btn-sm  mimodal"
                      title="Eliminar integrante del equipo" 
                      data-href="equipo_eliminar_integrante.php?id=<?php echo $_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_equipo=<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
">
                      <i class="fa fa-trash text-white"></i>
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
                <?php }?>
                </tbody>
				</table>
			
			</div>
		</div>
		
	</div>
	
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_galeria.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 


<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

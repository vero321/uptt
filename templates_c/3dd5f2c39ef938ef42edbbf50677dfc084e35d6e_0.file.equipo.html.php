<?php
/* Smarty version 3.1.30, created on 2020-09-19 13:00:22
  from "/home/veronica/public_html/uptt/modulos/equipo/templates/equipo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f663926dc3970_95440542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd5f2c39ef938ef42edbbf50677dfc084e35d6e' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/equipo/templates/equipo.html',
      1 => 1600356298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../modal/modal_galeria.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f663926dc3970_95440542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid">
	<div class="m-3">
		
	<h4> Equipo: <a class="btn btn-link mimodal text-primary" data-href="cambiar_nombre.php?id=<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
" title="Cambiar nombre">
		<?php if (isset($_smarty_tpl->tpl_vars['lider']->value['nombre_equipo'])) {?>
			<?php echo $_smarty_tpl->tpl_vars['lider']->value['nombre_equipo'];?>

		<?php } else { ?>
			El equipo aun no tiene nombre
		<?php }?>
		<i class="fa fa-edit fa-sm"></i>
		</a>
	</h4>
	</div>
	<div class="card">
		<div class="card-header">
		<h5>Integrantes 
			<?php if (in_array('EQUI_A',$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
			<a class="btn btn-sm btn-outline-primary mimodal" type="button" 
            href="agregar_integrante.php?id=<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
" title="Agregar un nuevo integrante"><span class="fa fa-plus"></span></a>
            <?php }?>
		</h5>

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
                    <th>Funcones</th>
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
                		<?php if (isset($_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'])) {?>
                		<?php echo $_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>

                		<?php } else { ?>
                		La persona aun no a actualizado su nombre
                		<?php }?>
                	</td>
                	<td>
                		<?php if (isset($_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'])) {?>
                		<?php echo $_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['apellido'];?>

                		<?php } else { ?>
                		La persona aun no a actualizado su apellido
                		<?php }?>
                	</td>
                	<td>
                	<?php if ($_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['foto_perfil'] == NULL) {?>
                		<img class="img-thumbnail img-user rounded-circle" src="../../imagenes/perfil/user.png">
                    <?php } else { ?>
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
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
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Eliminar integrante del equipo" 
                      data-href="equipo_eliminar_integrante.php?id=<?php echo $_smarty_tpl->tpl_vars['integrantes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_equipo_persona'];?>
&id_equipo=<?php echo $_smarty_tpl->tpl_vars['lider']->value['id'];?>
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

<?php
/* Smarty version 3.1.30, created on 2020-04-23 17:32:58
  from "/home/palencia/public_html/proyecto4/uptt/templates/usuarios_datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ea2098a4d2389_10898350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f388f389f4b38f9a6268c01701af8c311d96757a' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/usuarios_datos.html',
      1 => 1586641863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera_interna.html' => 1,
    'file:menu_lateral.html' => 1,
    'file:modal/modal_box.html' => 1,
    'file:pie_interno.html' => 1,
  ),
),false)) {
function content_5ea2098a4d2389_10898350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container" >
            <?php $_smarty_tpl->_subTemplateRender("file:menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row" id="central">
        
        <div class="col-sm-9 offset-3"  >


<!--finaliza-->

              <h2 class="subtitulo" align="center"><span class="badge badge-secondary badge-pill"></span>Roles del usuario</h2>
           
              <table style="margin-top: 30px;" class="table table-responsive-xl">
                <thead class="thead-dark">
                  <tr>
                    <th>Cedula</th>
                    <th>Correo</th>
                    <th>Roles  
						<a class="btn btn-sm btn-outline-primary mimodal" type="button" data-href="usuarios_rol_agregar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" title="Agregar Rol"><span class="fa fa-plus"></span></a>
                  </th>
                  </tr>

                </thead>
                <tbody class="buscar" id="usuarios">
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['correo'];?>
</td>
                    <td>
                    	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    	<div class="list-group">
                    		 <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>

			                    <a 
			                      style="margin-bottom:3px; color:blue;" 
			                      class="btn btn-default"
			                      title="Eliminar Permiso" 
			                      href="proc_usuarios_rol_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
&rol=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'];?>
">
			                      <i class="fa fa-trash"></i>
			                    </a>
                    		 </li>
                    		
                    	</div>
                    	
                    	<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                    </td>
                  </tr>
                </tbody>
              </table>
          
           
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

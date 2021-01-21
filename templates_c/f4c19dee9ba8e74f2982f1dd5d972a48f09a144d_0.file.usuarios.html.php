<?php
/* Smarty version 3.1.30, created on 2021-01-19 12:54:47
  from "/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60070ed72d9798_28035869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4c19dee9ba8e74f2982f1dd5d972a48f09a144d' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/usuario/templates/usuarios.html',
      1 => 1611073924,
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
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_60070ed72d9798_28035869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/barra_nucleo_pnf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--finaliza-->
        <div class="container-fluid">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../inicio/inicio_interno.php">Repo</a></li>
            <li class="breadcrumb-item"><a href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][$_SESSION['numero']]['id_rol'];?>
&n=<?php echo $_SESSION['numero'];?>
">Panel <?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</a></li>
            <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
          </ol>
            <div class="card shadow">
              <div class="card-header d-flex justify-content-between">
                <h2 class="text-primary"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_usuarios']->value;?>
</span> Usuarios
                </h2>
                <?php if (in_array("USUA_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>

                  <a class="btn  btn-primary btn-circle mimodal" type="button"
                data-href="agregar_admin.php?5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
" title="Agregar Usuario"><span class="fa fa-plus text-white"></span></a>
                <?php }?>
              </div>
              <div class="card-body">
              <div class="table-responsive">
                
              <table class="table" id="tabla_repo" style="width: 100%;">
                <thead>
                  <tr>
                    <th>Cedula</th>
                    <th>Correo</th>
                    <th> Funciones</th>
                  </tr>
                </thead>
                <tbody class="buscar" id="usuarios">
                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['usuarios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['correo'];?>
</td>
                    <td class="text-center" style="white-space: nowrap;">
                    <?php if (in_array("USUA_VR",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      class="btn btn-success btn-circle btn-sm"
                      title="Gestionar rol del usuario" 
                      href="usuarios_roles.php?id=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];
if (isset($_smarty_tpl->tpl_vars['asignar']->value)) {?>&r=<?php echo $_smarty_tpl->tpl_vars['asignar']->value;
}?>">
                      <i class="fa fa-folder-open text-whithe"></i>
                    </a>
                    <?php }?>
                    <?php if (in_array("USUA_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      class="btn btn-info btn-circle btn-sm mimodal" 
                      title="Modificar Usuario" 
                      data-href="usuarios_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
">
                      <i class="fa fa-edit text-white"></i>
                    </a>
                    <?php }?>
                    <?php if (in_array("USUA_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      class="btn btn-danger btn-circle btn-sm mimodal"
                      title="Eliminar Usuario" 
                      data-href="usuarios_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
&rol_a=<?php echo $_smarty_tpl->tpl_vars['rol']->value;
if (array_key_exists('id_rol',$_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])) {?>&r=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'];
}?>">
                      <!-- en el if anterior verificamos si existe la key id_rol dentro del array para elminar este rol en espesifico se debe enviar el valor de esta variable como parametro -->
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
                </tbody>
              </table>
              </div> 

       </div>
   </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

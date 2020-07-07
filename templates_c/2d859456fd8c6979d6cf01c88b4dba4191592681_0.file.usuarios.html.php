<?php
/* Smarty version 3.1.30, created on 2020-07-07 13:43:06
  from "/home/veronica/public_html/uptt/modulos/usuario/templates/usuarios.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f04b42a2b6799_64602632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d859456fd8c6979d6cf01c88b4dba4191592681' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/usuario/templates/usuarios.html',
      1 => 1594140146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera_interna.html' => 1,
    'file:../../menu/menu_lateral.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f04b42a2b6799_64602632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container" >
            <?php $_smarty_tpl->_subTemplateRender("file:../../menu/menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row" id="central">
        
        <div class="col-sm-9" style="margin-top: 50px;" >



<!--finaliza-->


            <h2 class="subtitulo" align="center"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_usuarios']->value;?>
</span>Usuarios
            <?php if (in_array("USUA_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>

              <a class="btn btn-sm btn-outline-primary mimodal" type="button"
            data-href="agregar_admin.php?5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
" title="Agregar Usuario"><span class="fa fa-plus"></span></a>
            <?php }?>
            </h2>

            
          
           
              <table style="margin-top: 30px;" class="table table-responsive-xl" id="tabla_repo">
                <thead class="thead-dark">
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
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default"
                      title="Gestionar rol del usuario" 
                      href="usuarios_roles.php?id=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];
if (isset($_smarty_tpl->tpl_vars['asignar']->value)) {?>&r=<?php echo $_smarty_tpl->tpl_vars['asignar']->value;
}?>">
                      <i class="fa fa-archive"></i>
                    </a>
                    <?php }?>
                    <?php if (in_array("USUA_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal" 
                      title="Modificar Usuario" 
                      data-href="usuarios_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
">
                      <i class="fa fa-pencil-square-o"></i>
                    </a>
                    <?php }?>
                    <?php if (in_array("USUA_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Eliminar Usuario" 
                      data-href="usuarios_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
&rol_a=<?php echo $_smarty_tpl->tpl_vars['rol']->value;
if (array_key_exists('id_rol',$_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)])) {?>&r=<?php echo $_smarty_tpl->tpl_vars['usuarios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'];
}?>">
                      <!-- en el if anterior verificamos si existe la key id_rol dentro del array para elminar este rol en espesifico se debe enviar el valor de esta variable como parametro -->
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
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <?php if ($_smarty_tpl->tpl_vars['pagina_actual']->value != 1) {?>
              <li class="page-item"><a class="page-link" href="usuarios.php?pag=<?php echo $_smarty_tpl->tpl_vars['pagina_actual']->value-1;?>
&i=<?php echo $_smarty_tpl->tpl_vars['i']->value-$_smarty_tpl->tpl_vars['b']->value;?>
&5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
" >Anterior</a>
              </li>
              <?php }?>
              <?php
$__section_ii_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_ii']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii'] : false;
$__section_ii_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['paginas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ii_1_total = $__section_ii_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ii'] = new Smarty_Variable(array());
if ($__section_ii_1_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] <= $__section_ii_1_total; $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']++){
?>
              <li class="page-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['pagina_actual']->value) {?> active <?php }?>"><a class="page-link" href="usuarios.php?pag=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] : null);?>
&i=<?php echo $_smarty_tpl->tpl_vars['paginas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['index'] : null)];?>
&5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_ii']->value['iteration'] : null);?>
 <span class="sr-only">(current)</span></a>
              </li>
              <?php
}
}
if ($__section_ii_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_ii'] = $__section_ii_1_saved;
}
?>
              <?php if ($_smarty_tpl->tpl_vars['pagina_actual']->value != $_smarty_tpl->tpl_vars['n_paginas']->value) {?> 
              <li class="page-item"><a class="page-link" href="usuarios.php?pag=<?php echo $_smarty_tpl->tpl_vars['pagina_actual']->value+1;?>
&i=<?php echo $_smarty_tpl->tpl_vars['i']->value+$_smarty_tpl->tpl_vars['b']->value;?>
&5ea6fd8de7329=<?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
">Siguiente</a>
              </li>
              <?php }?>
            </ul>
          </nav>

       </div>
   </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

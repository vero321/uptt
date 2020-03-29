<?php
/* Smarty version 3.1.30, created on 2020-03-29 00:38:53
  from "/home/palencia/public_html/proyecto4/uptt/templates/roles.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e80265d967965_29305314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb5f153f22a6e8b9ca55913e53f6ebb7db5377d1' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/roles.html',
      1 => 1585456731,
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
function content_5e80265d967965_29305314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espasio de trbajo-->
<div class="container" >
            <?php $_smarty_tpl->_subTemplateRender("file:menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row" id="central">
        
        <div class="col-sm-9 offset-3"  style="margin-top: 30px;">



<!--finaliza-->


            <h2  align="center"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_roles']->value;?>
</span>Roles
            <?php if (in_array("ROLE_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
              <a class="btn btn-sm btn-outline-primary mimodal" type="button"
            data-href="roles_agregar.php" title="Agregar Rol"><span class="fa fa-plus"></span></a>
            <?php }?>
          </h2>

            <div class="collapse" id="collapseExample">
              <div class="jumbotron jumbo_buscar">
                <div class="container">  
                  <form action="usuarios.php" method="POST">
                      <div class="input-group">
                        <input id="p" name="p" type="text" class="form-control" placeholder="Escriba aquí y pulse INTRO" aria-describedby="basic-addon1">
                        <span class="input-group-addon" id="basic-addon1" style="padding:0 12px;"><i class="fa fa-search"></i></span>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          
           
              <table style="margin-top: 30px;" class="table table-responsive-xl">
                <thead class="thead-dark">
                  <tr>
                    <th>Rol</th>
                    <th> Nivel</th>
                    <th> FUNCIONES</th>
                    <th><div class="btn-group">
                          
                    <button class="btn btn-sm btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" title="Buscar">
                    <samp class="fa fa-search"></samp>
                    </button>
                    </div>
                   </th>
                  </tr>
                </thead>
                <tbody class="buscar" id="Roles">
<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nivel'];?>
</td>
                    <td class="text-center" style="white-space: nowrap;">
                    <?php if (in_array("ROLE_V",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default"
                      title="Ver detalles de ROL" 
                      href="roles_datos.php?id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-archive"></i>
                    </a>
                    <?php }?>
                    <?php if (in_array("ROLE_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Eliminar Rol" 
                      data-href="roles_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
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
                </tbody>
              </table>
     

       </div>
   </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
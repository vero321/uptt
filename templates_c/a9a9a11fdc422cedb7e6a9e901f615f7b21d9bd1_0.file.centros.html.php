<?php
/* Smarty version 3.1.30, created on 2020-08-20 19:40:46
  from "/home/veronica/public_html/uptt/modulos/centro_de_investigacion/templates/centros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3f09fecb9335_69999560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9a9a11fdc422cedb7e6a9e901f615f7b21d9bd1' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/centro_de_investigacion/templates/centros.html',
      1 => 1596470767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../modal/modal_box.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f3f09fecb9335_69999560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   


<!--finaliza-->
			 <div class="container-fluid">
        <div class="card">
            
          <div class="card-header">
            <h2 class="text-primary" ><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_centros']->value;?>
</span> Centros de Investigación
            <?php if (in_array("CENT_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
             <a class="btn btn-sm btn-outline-primary mimodal" type="button"
            data-href="centros_agregar.php" title="Agregar Centro de Investigación"><span class="fa fa-plus"></span></a>
            <?php }?>
            </h2>
          </div>
            
            
          <div class="card-body">
            <div class="table-responsibe">
              <table  class="table" id="tabla_repo">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Funciones</th>
                  </tr>
                </thead>
                <tbody class="buscar" id="personas">

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['centros']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['centros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['centros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre'];?>
</td>

                    <td class="text-center" style="white-space: nowrap;">
                    <?php if (in_array("CENT_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal" 
                      title="Modificar Centro de Investigación" 
                      data-href="centros_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['centros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                      <i class="fa fa-edit"></i>
                    </a>
                    <?php }?>
                    <?php if (in_array("CENT_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <a 
                      style="margin-bottom:3px; color:blue;" 
                      class="btn btn-default mimodal"
                      title="Eliminar Centro de Investigación" 
                      data-href="centros_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['centros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
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
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
<?php
/* Smarty version 3.1.30, created on 2020-08-24 17:07:51
  from "/home/veronica/public_html/uptt/modulos/rol/templates/roles_datos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f442c27b5db60_81583563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c4c111c32c9bd5398dc7b9ab4c6182140f89b64' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/rol/templates/roles_datos.html',
      1 => 1596456106,
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
function content_5f442c27b5db60_81583563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <div class="container-fluid">
    <div class="card shadow">
        <div class="card-header ">
            <h2 class="text-primary"><span class="badge badge-secondary badge-pill"></span> Privilegios del rol
            </h2>
        </div>
        <div class="card-body">
        <div class="table-responsive">
          
           <h3><?php echo $_smarty_tpl->tpl_vars['rol']->value['rol'];?>
 
                <a class="btn btn-sm btn-outline-primary mimodal" type="button" data-href="rol_privilegio_agregar.php?id=<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
" title="Agregar Rol"><span class="fa fa-plus"></span>
                </a>
            </h3>
        	<div class="list-group col-md-4">
            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['privilegios']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
 
        		 <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['privilegio'];?>

              <a 
                style="margin-bottom:3px; color:blue;" 
                class="btn btn-default"
                title="Eliminar privilegio" 
                href="proc_rol_privilegio_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
&privilegio=<?php echo $_smarty_tpl->tpl_vars['privilegios']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_privilegio'];?>
">
                <i class="fa fa-trash"></i>
              </a>
        		 </li>
            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:../../modal/modal_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prueba'=>"Usuario"), 0, false);
?>
 

<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

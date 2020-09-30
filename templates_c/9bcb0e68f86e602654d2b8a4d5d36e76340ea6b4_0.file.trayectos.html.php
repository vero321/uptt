<?php
/* Smarty version 3.1.30, created on 2020-09-28 12:39:34
  from "/home/veronica/public_html/uptt/modulos/trayectos/templates/trayectos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f7211c61d37f7_41843453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bcb0e68f86e602654d2b8a4d5d36e76340ea6b4' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/trayectos/templates/trayectos.html',
      1 => 1597682938,
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
function content_5f7211c61d37f7_41843453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   
  <div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">
	        <h2 class="text-primary"><span class="badge badge-secondary badge-pill"><?php echo $_smarty_tpl->tpl_vars['n_trayectos']->value;?>
</span>Trayetos
	            <?php if (in_array("TRAY_A",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
	             <a class="btn btn-sm btn-outline-primary mimodal" type="button" 
	            data-href="trayecto_agregar.php" title="Agregar trayecto"><span class="fa fa-plus"></span></a>
	            <?php }?>
	          </h2>
        </div>
        <div class="card-body">
          <div class="table-responsive">
	           <table class="table" id="tabla_repo">
                <thead>
                  <tr>
                    <th>Trayecto</th>
                    <th>Funciones</th>
                  </tr>
                </thead>
                <tbody>

                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['trayectos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['trayecto'];?>
</td>
                    <?php if (in_array("TRAY_M",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                    <td>
                      <a 
                        style="margin-bottom:3px; color:blue;" 
                        class="btn btn-default mimodal"
                        title="Modificar trayectos" 
                        data-href="trayecto_modificar.php?id=<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-edit"></i>
                      </a>
                      <?php }?>
                      <?php if (in_array("TRAY_E",$_smarty_tpl->tpl_vars['verificar']->value) == TRUE) {?>
                      <a 
                        style="margin-bottom:3px; color:blue;" 
                        class="btn btn-default mimodal"
                        title="Eliminar trayectos" 
                        data-href="trayecto_eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['trayectos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                        <i class="fa fa-trash"></i>
                      </a>
                      <?php }?>
                    <td>
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

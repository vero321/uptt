<?php
/* Smarty version 3.1.30, created on 2020-07-30 16:58:33
  from "/home/veronica/public_html/uptt/modulos/navegacion/sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f233479cedff0_03180042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '205e6abea16f38a4031d2ffefa3d655807631b91' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/navegacion/sidebar.html',
      1 => 1596142226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f233479cedff0_03180042 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../inicio/inicio_interno.php">
        <img src="../../imagenes/logo_interno.png">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Entorno
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php
$__section_rol_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rol']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol'] : false;
$__section_rol_1_loop = (is_array(@$_loop=$_SESSION["r"]) ? count($_loop) : max(0, (int) $_loop));
$__section_rol_1_total = $__section_rol_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rol'] = new Smarty_Variable(array());
if ($__section_rol_1_total != 0) {
for ($__section_rol_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] = 0; $__section_rol_1_iteration <= $__section_rol_1_total; $__section_rol_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']++){
?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null);?>
" aria-expanded="true" aria-controls="collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null);?>
">
            <i class="fa fa-fw fa-circle"></i>
            <span><?php echo $_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null)]['rol'];?>
</span>
          </a>
          <div id="collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null);?>
" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header"><?php echo $_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null)]['rol'];?>
</h6>
              <a class="collapse-item" href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][(isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null)]['id_rol'];?>
&n=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null);?>
">Resumen</a>
              <?php
$__section_p_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_p']) ? $_smarty_tpl->tpl_vars['__smarty_section_p'] : false;
$__section_p_2_loop = (is_array(@$_loop=$_SESSION[$_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null)]['id_rol']]) ? count($_loop) : max(0, (int) $_loop));
$__section_p_2_total = $__section_p_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_2_total != 0) {
for ($__section_p_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_2_iteration <= $__section_p_2_total; $__section_p_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
                <?php ob_start();
echo $_SESSION[$_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null)]['id_rol']][(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['direccion'] != NULL;
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1) {?>
                  <a class="collapse-item" href="../<?php echo $_SESSION[$_SESSION['r'][(isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null)]['id_rol']][(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['direccion'];?>
"><i class="<?php echo $_SESSION[$_SESSION['r'][(isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null)]['id_rol']][(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['icono'];?>
 fa-fw"></i> <?php echo $_SESSION[$_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rol']->value['index'] : null)]['id_rol']][(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['nombre'];?>
</a>
                <?php } else { ?>
                <?php }?>
              <?php
}
}
if ($__section_p_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_p'] = $__section_p_2_saved;
}
?>
            </div>
          </div>
        </li>
      <?php
}
}
if ($__section_rol_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rol'] = $__section_rol_1_saved;
}
?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar --><?php }
}

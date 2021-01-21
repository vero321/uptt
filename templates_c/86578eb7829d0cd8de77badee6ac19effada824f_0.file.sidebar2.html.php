<?php
/* Smarty version 3.1.30, created on 2021-01-19 14:00:16
  from "/home/palencia/public_html/proyecto4/uptt/modulos/navegacion/sidebar2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60071e30b603b1_82552680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86578eb7829d0cd8de77badee6ac19effada824f' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/navegacion/sidebar2.html',
      1 => 1611073924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60071e30b603b1_82552680 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
?>


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../inicio/inicio_interno.php">
        <img src="../../imagenes/logo_interno.png">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <!--li class="nav-item active">
        <a class="nav-link active" href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][$_SESSION['numero']]['id_rol'];?>
&n=<?php echo $_SESSION['numero'];?>
">
          <i class="fa fa-fw fa-desktop"></i>
          <span><?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</span></a>
      </li-->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable1=ob_get_clean();
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_SESSION[$_prefixVariable1]) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable2=ob_get_clean();
ob_start();
echo $_SESSION[$_prefixVariable2][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['direccion'];
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 != NULL) {?>
        <li class="nav-item active">
          <a class="nav-link" href="../<?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable4=ob_get_clean();
echo $_SESSION[$_prefixVariable4][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['direccion'];?>
">
            <i class="fa fa-fw <?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable5=ob_get_clean();
echo $_SESSION[$_prefixVariable5][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icono'];?>
"></i>
            <span><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable6=ob_get_clean();
echo smarty_modifier_capitalize($_SESSION[$_prefixVariable6][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre']);?>
</span></a>
        </li>
        <?php } else { ?>
        <?php }?>
      <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
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

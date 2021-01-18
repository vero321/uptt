<?php
/* Smarty version 3.1.30, created on 2021-01-14 16:12:15
  from "/home/palencia/public_html/proyecto4/uptt/modulos/navegacion/cabecera2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6000a59f2d9ab0_57666735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '228e9d4547748e59e8cab66cac119c9f0e7c8c74' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/navegacion/cabecera2.html',
      1 => 1609879033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6000a59f2d9ab0_57666735 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow  border-bottom-gray">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" id="repo-fullscreen" class="nav-link"><i class="fa fa-expand text-gray-900 bg-gray-300 p-2"></i></a>
            </li>
    
            <!-- Nav Item - Alerts -->
            
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle text-gray-800" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php if (isset($_SESSION["numero"]) == true) {?>
                <span><?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</span>
              <?php } else { ?>
              <span class="mr-2">Roles</span>
              <?php }?>
                <i class="fa fa-desktop fa-fw"></i>
                <!--Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?php echo count($_SESSION["r"]);?>
+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  roles
                </h6>
                <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_SESSION["r"]) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <a class="dropdown-item d-flex align-items-center" href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_rol'];?>
&n=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
">
                  <div class="mr-3">

                    <div class="icon-circle bg-gray-500">

                      <i class="fa fa-desktop fa-fw text-white"></i>
                    </div>
                  </div>
                  <div>
                    <span class="font-weight-bold text-gray-800"><?php echo smarty_modifier_capitalize($_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rol']);?>

                    <?php if ($_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_nucleo'] != NULL) {?>
                      <?php echo $_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nucleo'];?>

                    <?php }?>
                    <?php if ($_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_pnf'] != NULL) {?>
                      <?php echo $_SESSION["r"][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pnf'];?>

                    <?php }?>
                    </span>
                  </div>
                </a>
                <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small text-gray-800"><?php echo $_SESSION["u"]["correo"];?>
</span>
                <?php if ($_SESSION['u']['foto_perfil'] == NULL) {?>
                <i class="fas fa-user fa-2x img-profile rounded-circle p-2 bg-gray-200"></i>

                 <?php } else { ?>
                    <img class="img-profile rounded-circle"
                         src="../../imagenes/perfil/<?php echo $_SESSION['u']['foto_perfil'];?>
"
                         alt="User profile picture"
                         >
                <?php }?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../personas/personas_datos.php?id=<?php echo $_SESSION['u']['id'];?>
">
                  <i class="fa fa-user fa-sm fa-fw mr-2  text-gray-800"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-800"></i>
                  Cerrar sesión
                </a>
              </div>
            </li>

          </ul>

        </nav>

        <!-- End of Topbar -->

<?php }
}

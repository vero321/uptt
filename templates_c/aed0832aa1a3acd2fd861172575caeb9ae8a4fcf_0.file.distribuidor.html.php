<?php
/* Smarty version 3.1.30, created on 2020-09-02 13:30:49
  from "/home/palencia/public_html/proyecto4/uptt/modulos/distribuidor/templates/distribuidor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f4fd6c9246689_34136372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed0832aa1a3acd2fd861172575caeb9ae8a4fcf' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/distribuidor/templates/distribuidor.html',
      1 => 1597094992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar2.html' => 1,
    'file:../../navegacion/cabecera2.html' => 1,
    'file:../../pie/pie_interno2.html' => 1,
  ),
),false)) {
function content_5f4fd6c9246689_34136372 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Tablero 
            <?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>

            <?php if ($_SESSION["r"][$_SESSION["numero"]]['id_nucleo'] != NULL) {?>
              <?php echo $_SESSION["r"][$_SESSION["numero"]]['nucleo'];?>

            <?php }?>
            <?php if ($_SESSION["r"][$_SESSION["numero"]]['id_pnf'] != NULL) {?>
              <?php echo $_SESSION["r"][$_SESSION["numero"]]['pnf'];?>

            <?php }?>
          </h2>
            <!-- a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-download fa-sm text-white-50"></i> Generate Report</a-->
          </div>
           
          <div class="row">
        <?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable1=ob_get_clean();
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_SESSION[$_prefixVariable1]) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable2=ob_get_clean();
ob_start();
echo $_SESSION[$_prefixVariable2][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['direccion'];
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 != NULL) {?>

          <!-- Content Row -->

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable4=ob_get_clean();
echo smarty_modifier_capitalize($_SESSION[$_prefixVariable4][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre']);?>
</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable5=ob_get_clean();
echo $_SESSION[$_prefixVariable5][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cant'];?>
</div>
                    </div>
                    <div class="col-auto">
                      <i class="<?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable6=ob_get_clean();
echo $_SESSION[$_prefixVariable6][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icono'];?>
 fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <?php } else { ?>
        <?php }?>
        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
   </div>
 </div>



<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
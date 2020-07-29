<?php
/* Smarty version 3.1.30, created on 2020-07-29 12:29:57
  from "/home/palencia/public_html/proyecto4/uptt/modulos/distribuidor/templates/distribuidor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f21a40539fa88_12922489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed0832aa1a3acd2fd861172575caeb9ae8a4fcf' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/distribuidor/templates/distribuidor.html',
      1 => 1596037572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../navegacion/cab.html' => 1,
    'file:../../navegacion/sidebar.html' => 1,
    'file:../../navegacion/cabecera.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f21a40539fa88_12922489 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->_subTemplateRender("file:../../navegacion/cab.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../navegacion/cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Resumen</h1>
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

<!--prueba del nuevo card>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front body">
            <h3 class="card-title">
            <i class="<?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable7=ob_get_clean();
echo $_SESSION[$_prefixVariable7][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icono'];?>
 fa-2x" >
            </i>
            <small><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable8=ob_get_clean();
echo smarty_modifier_capitalize($_SESSION[$_prefixVariable8][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre']);?>
</small></h3>
          </div>
          <div class="flip-card-back body ">
            <div id="ejm2">
            <h4 style="margin-bottom: 0px;"><span class="badge_pill"><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable9=ob_get_clean();
echo $_SESSION[$_prefixVariable9][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cant'];?>
</span></h4>
            </div>
          </div>
        </div>
      </div>
<finaliza el nuevo card>

<comienzo del card viejo>

    <div class="card card-central mb-3 shadow"
     style="width: 17rem; margin-top: 80px;">
      <div class="body">
      	<h3 class="card-title">
      	<i class="<?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable10=ob_get_clean();
echo $_SESSION[$_prefixVariable10][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icono'];?>
"></i>
      	<small><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable11=ob_get_clean();
echo smarty_modifier_capitalize($_SESSION[$_prefixVariable11][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre']);?>

      	</small></h3>
      <h4>
      <div id="ejm">
      	<span class="badge-pill"><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable12=ob_get_clean();
echo $_SESSION[$_prefixVariable12][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cant'];?>
</span>
  	  </div></h4>
      </div>
    </div>

<!--finaliza el card viejo-->

          <?php } else { ?>
        <?php }?>
        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
   



<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

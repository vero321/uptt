<?php
/* Smarty version 3.1.30, created on 2020-07-13 22:02:10
  from "/home/palencia/public_html/proyecto4/uptt/modulos/distribuidor/templates/distribuidor.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0d1222e615c1_22524156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed0832aa1a3acd2fd861172575caeb9ae8a4fcf' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/distribuidor/templates/distribuidor.html',
      1 => 1594692128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../cabecera/cabecera_interna.html' => 1,
    'file:../../menu/menu_lateral.html' => 1,
    'file:../../pie/pie_interno.html' => 1,
  ),
),false)) {
function content_5f0d1222e615c1_22524156 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->_subTemplateRender("file:../../cabecera/cabecera_interna.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- incluye menu y agrega el espacio de trabajo -->
<div class="container" >
            <?php $_smarty_tpl->_subTemplateRender("file:../../menu/menu_lateral.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row" id="central">
        
<!--finaliza-->

           
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

          <div class="card card-central mb-3 shadow" style="width: 17rem; margin-top: 80px;">
            <div class="body">
            <h3 class="card-title"><i class="<?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable4=ob_get_clean();
echo $_SESSION[$_prefixVariable4][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icono'];?>
"></i>
            <small><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable5=ob_get_clean();
echo smarty_modifier_capitalize($_SESSION[$_prefixVariable5][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre']);?>
</small></h3><h4>
            <div id="ejm">
            <span class="badge-pill"><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable6=ob_get_clean();
echo $_SESSION[$_prefixVariable6][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cant'];?>
</span></div></h4>
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


<?php $_smarty_tpl->_subTemplateRender("file:../../pie/pie_interno.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
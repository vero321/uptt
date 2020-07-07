<?php
/* Smarty version 3.1.30, created on 2020-07-07 13:35:03
  from "/home/veronica/public_html/uptt/modulos/menu/menu_lateral.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f04b247c0dec4_75529116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '147420023d6bcf24a7870e29c3a4cee8aa002bad' => 
    array (
      0 => '/home/veronica/public_html/uptt/modulos/menu/menu_lateral.html',
      1 => 1594137294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f04b247c0dec4_75529116 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/veronica/public_html/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
?>
<!--inicio menu lateral-->
<div id="wrapper" style="margin-top: -40px; padding-right: 50px;">
  <div id="sidebar-wrapper">
    <aside id="sidebar">
      <ul id="sidemenu" class="sidebar-nav">
        <li><a href="#"><span class="sidebar-icon"></span><span class="sidebar-title"><b><?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</b></span></a></li>
        <?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable7=ob_get_clean();
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_SESSION[$_prefixVariable7]) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable8=ob_get_clean();
ob_start();
echo $_SESSION[$_prefixVariable8][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['direccion'];
$_prefixVariable9=ob_get_clean();
if ($_prefixVariable9 != NULL) {?>
                <li>
                    <a href="../<?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable10=ob_get_clean();
echo $_SESSION[$_prefixVariable10][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['direccion'];?>
">
                        <span class="sidebar-icon"><i class="<?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable11=ob_get_clean();
echo $_SESSION[$_prefixVariable11][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icono'];?>
"></i></span>
                        <span class="sidebar-title"><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable12=ob_get_clean();
echo smarty_modifier_capitalize($_SESSION[$_prefixVariable12][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre']);?>
</span>
                    </a>
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


        <!--<li>

            <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                <span class="sidebar-icon"><i class="fa fa-folder-open"></i></span>
                <span class="sidebar-title">Submenu</span>
                <b class="caret"></b>
            </a>
            <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                <li><a href="#"><i class="fa fa-caret-right"></i>Users</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i>Roles</a></li>
            </ul>
        </li>-->
      </ul>
    </aside>            
  </div>
  <main id="page-content-wrapper" role="main">
  </main>
</div>

<!--fin menu lateral-->
<?php }
}

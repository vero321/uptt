<?php
/* Smarty version 3.1.30, created on 2020-07-15 12:57:25
  from "/home/palencia/public_html/proyecto4/uptt/modulos/menu/menu_lateral.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0f3575c5b6e6_66668349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eabf7f7bbbba24771098cfb87079fec383a349ed' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/modulos/menu/menu_lateral.html',
      1 => 1594831828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0f3575c5b6e6_66668349 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/palencia/public_html/proyecto4/uptt/vendor/smarty/libs/plugins/modifier.capitalize.php';
?>
<!--inicio menu lateral-->
<div id="wrapper" style="margin-top: -40px; padding-right: 50px;">
  <div id="sidebar-wrapper">
    <aside id="sidebar">
      <ul id="sidemenu" class="sidebar-nav">
        <li><a href="../distribuidor/distribuidor.php?r=<?php echo $_SESSION['r'][$_SESSION['numero']]['id_rol'];?>
&n=<?php echo $_SESSION['numero'];?>
"><span class="sidebar-icon"></span><span class="sidebar-title"><b><?php echo $_SESSION["r"][$_SESSION["numero"]]['rol'];?>
</b></span></a></li>
        <?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable1=ob_get_clean();
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_SESSION[$_prefixVariable1]) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable2=ob_get_clean();
ob_start();
echo $_SESSION[$_prefixVariable2][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['direccion'];
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 != NULL) {?>
                <li>
                    <a href="../<?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable4=ob_get_clean();
echo $_SESSION[$_prefixVariable4][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['direccion'];?>
">
                        <span class="sidebar-icon"><i style="color:#f1f1f1;" class="<?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable5=ob_get_clean();
echo $_SESSION[$_prefixVariable5][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['icono'];?>
"></i></span>
                        <span class="sidebar-title"><?php ob_start();
echo $_SESSION['actual'];
$_prefixVariable6=ob_get_clean();
echo smarty_modifier_capitalize($_SESSION[$_prefixVariable6][(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre']);?>
</span>
                    </a>
                </li>
        <?php } else { ?>
        <?php }?>
            <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
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

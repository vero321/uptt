<?php
/* Smarty version 3.1.30, created on 2020-03-04 20:16:36
  from "/home/jose/public_html/proyecto_iv/uptt/templates/menu_lateral.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6044e4d7cfd3_10073981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d98fb9cd35b1af0e1bfad1fffd0edf6bcd1e8b9' => 
    array (
      0 => '/home/jose/public_html/proyecto_iv/uptt/templates/menu_lateral.html',
      1 => 1583367395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6044e4d7cfd3_10073981 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--inicio menu lateral-->
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="usuarios.php">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Nucleos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-terminal"></i></span>
                            <span class="sidebar-title">Carreras</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Submenu</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#"><i class="fa fa-caret-right"></i>Users</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Roles</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>            
        </div>
        <main id="page-content-wrapper" role="main">
      </main>
    </div>
<!--fin menu lateral-->
<?php }
}

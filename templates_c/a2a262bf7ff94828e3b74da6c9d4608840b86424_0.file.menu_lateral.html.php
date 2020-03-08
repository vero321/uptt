<?php
/* Smarty version 3.1.30, created on 2020-03-06 23:29:34
  from "/home/palencia/public_html/proyecto4/uptt/templates/menu_lateral.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e63151ebcec22_95119027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2a262bf7ff94828e3b74da6c9d4608840b86424' => 
    array (
      0 => '/home/palencia/public_html/proyecto4/uptt/templates/menu_lateral.html',
      1 => 1583551773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e63151ebcec22_95119027 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <a href="sedes.php">
                            <span class="sidebar-icon"><i class="fa fa-university"></i></span>
                            <span class="sidebar-title">Nucleos</span>
                        </a>
                    </li>
                    <li>
                        <a href="carreras.php">
                            <span class="sidebar-icon"><i class="fa fa-leanpub"></i></span>
                            <span class="sidebar-title">Carreras</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-folder-open"></i></span>
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

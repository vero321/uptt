<?php
include_once "./inicializacion.php";
verificar();

#$roles=bd_roles_datos();
$id = $_GET['id'];
$a=bd_usuarios_datos($id);
#$smarty->assign('roles',$roles);
$smarty->assign('usuario', bd_usuarios_datos($id));
$smarty->display('usuarios_modificar.html');

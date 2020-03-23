<?php 
include_once "./inicializacion.php";

$id = $_GET['id'];
$usuario=bd_usuarios_datos($id);
$roles=bd_usuarios_roles_datos($id);
$smarty->assign('roles', $roles);
$smarty->assign('usuario', $usuario);
$smarty->assign('pie', file_get_contents('pie/usuarios.html'));
$smarty->display('usuarios_datos.html');
<?php 
define('MOD', 'usuarios'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar= verificar();
$smarty->assign('verificar',$verificar);

$id = $_GET['id'];
if (isset($_GET['r'])) {
	# resivimos el rol que se va a mostrar y a agregar si esa variable no esta definida se ven todos los roles y se puede agregar cualquier rol
	$rol = $_GET['r'];
	$smarty->assign('rol', $rol);
}


$usuario=bd_usuarios_datos($id);
$roles=bd_usuarios_roles_datos($id);

$smarty->assign('roles', $roles);
$smarty->assign('usuario', $usuario);
$smarty->assign('pie', file_get_contents(APP.'/modulos/pie/usuarios.html'));
$smarty->display('usuarios_roles.html');
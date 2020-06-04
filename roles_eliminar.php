<?php 
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$id = $_GET['id'];
if ($id  = "5e7ec3342d4ee") {
	# code...
	$m="Este Rol no se puede eliminar";
	ir("mensaje.php?m=$m&d=roles.php");
}

$rol=bd_roles_datos($id);
$smarty->assign('datos', $rol);
$smarty->display('roles_eliminar.html');
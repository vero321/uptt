<?php 
include_once "./inicializacion.php";
$id = $_GET['id'];
$roles_actuales=bd_usuarios_roles_datos($id);
$roles=bd_roles_datos();
 
$n=count($roles_actuales);
for ($i=0; $i < $n; $i++) { 
	# code...
	$k=$roles_actuales[$i]['id_rol']-1;
	unset($roles[$k]);
}
$roles=array_reverse($roles);

$smarty->assign('id',$id);
$smarty->assign('roles',$roles);
$smarty->display('usuarios_rol_agregar.html');
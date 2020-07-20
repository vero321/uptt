<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

verificar();
$id = $_GET['id'];
$roles_actuales=bd_usuarios_roles_datos($id);
$roles=bd_roles_datos();
/*$n=count($roles_actuales);
$n2=count($roles);
#Eate for elimina los roles que el usuario ya posee de la lista de roles
for ($i=0; $i < $n; $i++) { 
	#  busco la id del del rol para eliminarlo si el usario ya lo tiene
	$k=$roles_actuales[$i]['id_rol']; #k diminutivo de key
	for ($a=0; $a < $n2; $a++) { 
		# code...
		if ($roles[$a]['id'] == $k) {
			# code...
			unset($roles[$a]);
			$roles=array_values($roles);
			break;
		}else{
			
		}
	}
	
}*/
$roles=array_reverse($roles);

$smarty->assign('id',$id);
$smarty->assign('roles',$roles);
$smarty->display('usuarios_rol_asignar.html');
<?php 
include_once "./inicializacion.php";

$id=$_GET['id'];
$privilegios_actuales=bd_roles__privilegios($id);
$privilegios=bd_privilegios_datos();

$n=count($privilegios_actuales);
$n2=count($privilegios);
for ($i=0; $i < $n; $i++) { 
	# busco la id del privilegio para eliminarlo si el Rol ya lo tiene
	$k=$privilegios_actuales[$i]['id_privilegio']; #k diminutivo de key
	for ($a=0; $a < $n2 ; $a++){
		#...
		if ($privilegios[$a]['id'] == $k) {
			# code...
			unset($privilegios[$a]);#elimina el privilegio de la lista de roles
		}else{

		}
	}
}
$privilegios=array_reverse($privilegios);
$privilegios=array_reverse($privilegios);

$smarty->assign('id',$id);
$smarty->assign('privilegios',$privilegios);
$smarty->display('rol_privilegio_agregar.html');
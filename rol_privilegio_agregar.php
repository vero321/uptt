<?php 
include_once "./inicializacion.php";
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$id=$_GET['id'];
$privilegios_actuales=bd_roles__privilegios($id);
$privilegios=bd_privilegios_datos();

$n=count($privilegios_actuales);
$n2=count($privilegios);
#elimina los previligios que el rol ya tiene para mostrar una lista con lo prvilegios que no tiene
for ($i=0; $i < $n; $i++) { 
	# busco la id del privilegio para eliminarlo si el Rol ya lo tiene
	$k=$privilegios_actuales[$i]['id_privilegio']; #k diminutivo de key
	for ($a=0; $a < $n2 ; $a++){
		#...
		if ($privilegios[$a]['id'] == $k){
			# code...
			unset($privilegios[$a]);#elimina el privilegio de la lista de privegios
			$privilegios=array_values($privilegios);
			break;
		}else{

		}
	}
}
#$privilegios=array_reverse($privilegios);

$smarty->assign('id',$id);
$smarty->assign('privilegios',$privilegios);
$smarty->display('rol_privilegio_agregar.html');
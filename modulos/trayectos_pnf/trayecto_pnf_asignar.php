<?php 
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf

$trayectos=bd_trayectos_datos();
$actuales=bd_trayectos_pnf_datos($id_pnf, $id_nucleo);

#validacion para no mostrar un pnf ya existeente en la sede
 foreach ($actuales as $key) {
 	# code...
	$i=0;
 	foreach ($trayectos as $key1) {
 		# code...
	 	if ($key['id_trayecto'] == $key1['id'] ) {
	 		# code...
	 		unset($trayectos[$i]);
	 		$trayectos=array_values($trayectos);
	 	}
 	}
 	$i=$i+1;
 }
$smarty->assign('id_pnf',$id_pnf);
$smarty->assign('trayectos',$trayectos);
$smarty->display('trayecto_pnf_asignar.html');
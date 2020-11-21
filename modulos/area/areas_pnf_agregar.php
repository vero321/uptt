<?php 
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf

$areas=bd_areas_datos();

$area_actual=bd_areas_pnf_datos($id_pnf, $id_nucleo);

#validacion para no mostrar un pnf ya existeente en la sede
 foreach ($area_actual as $key) {
 	# code...
	$i=0;
 	foreach ($areas as $key1) {
 		# code...
	 	if ($key['id'] == $key1['id'] ) {
	 		# code...
	 		unset($areas[$i]);
	 		$areas=array_values($areas);
	 	}
 	}
 	$i=$i+1;
 }
 
$smarty->assign('id_pnf',$id_pnf);
$smarty->assign('areas',$areas);
$smarty->display('areas_pnf_agregar.html');
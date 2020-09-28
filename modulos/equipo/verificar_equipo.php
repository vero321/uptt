<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';

include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$lider=bd_equipo_lider();
$confmar_lider=count($lider);

if ($confmar_lider >1){
	$smarty->assign('lider',$lider);
	$smarty->display('verificar_equipo.html');
}else{
	$lider=$lider[0];
	$personas=bd_equipo_personas_datos($lider['id']);
	$i=0;
	foreach ($personas as $persona ) {
		#Buscamos lo nombres de las personas pertenecientes al equipo
		$datos_persona= bd_personas_datos($persona['id_persona']);
		$integrantes[$i]= $datos_persona;
		$i=$i+1;
	}

	if (isset($integrantes) == true) {
	# code...
	$smarty->assign('integrantes',$integrantes);
	}
	$smarty->assign('lider',$lider);
	$smarty->display('equipo.html');

}

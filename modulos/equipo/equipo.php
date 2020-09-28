<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();
$smarty->assign('verificar',$verificar);

$id=$_GET['id'];
$lider=bd_equipo_lider($id);

$personas=bd_equipo_personas_datos($id);
$i=0;
foreach ($personas as $persona ) {
	#Buscamos lo nombres de las personas pertenecientes al equipo
	$datos_persona= bd_personas_datos($persona['id_persona']);
	$integrantes[$i]= $datos_persona;
	$integrantes[$i]['id_equipo_persona']=$persona['id'];
	$i=$i+1;
}

if (isset($integrantes) == true) {
	# code...
	$smarty->assign('integrantes',$integrantes);
}

$smarty->assign('lider',$lider);
$smarty->display('equipo.html');
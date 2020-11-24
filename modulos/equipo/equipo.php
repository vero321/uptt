<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();
$smarty->assign('verificar',$verificar);

$id=$_GET['id'];

$lider=bd_equipo_lider($id);


$seccion=bd_equipo_seccion_profesor($id);

$personas=bd_equipo_personas_datos($id);
#vq($personas);
$i=0;
foreach ($personas as $persona ) {
	#Buscamos lo nombres de las personas pertenecientes al equipo
	$datos_persona= bd_personas_datos($persona['id']);
	$integrantes[$i]= $datos_persona;
	$i=$i+1;
}

if (isset($integrantes) == true) {
	$smarty->assign('integrantes',$integrantes);
}
$smarty->assign('lider',$lider);
$smarty->display('equipo.html');
<?php 
define('MOD', 'mi_trabajo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$r = '../mi_trabajo/mi_trabajo.php';
$_SESSION['retorno']=$r;

if (isset($_GET['equipo_id'])) {
	# si equipo
	$equipo_id=$_GET['equipo_id'];
}else{
	$lider=bd_equipo_lider();
	$confmar_lider=count($lider);
	if ($confmar_lider >1){
	#si el lider tiene mas de un equipo asignado lo envia a una pagina par seleccionar el equipo
	ir('../equipo/verificar_equipo.php');
	}else{
		$equipo_id = $lider[0]['id'];
		$lider=bd_equipo_lider($equipo_id);
	}
}

if (!isset($lider)) {
	# code...
	$lider=bd_equipo_lider($equipo_id);
}

#$tipos_documento=bd_tipos_documento_datos();
#$smarty->assign('tipos_documento',$tipos_documento);
$smarty->display('mi_trabajo.html');
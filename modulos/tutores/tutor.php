<?php 
define('MOD', 'tutores'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$r = '../tutores/tutor.php';
$_SESSION['retorno']=$r;



if (!isset($_GET['i'])) {
	
	#vq($equipos);
	ir('tutor_equipos.php');
}else{
	$trabajo = bd_trabajos_equipos($_GET['i']);
	
	if (empty($trabajo)) {
		# code...
		$m="El equipo asignado aún no a subido ninguna entrega";
		ir("../mensaje/mensaje_retorno.php?m=$m");

	}else{
		$documentos = bd_documentos_datos($campo="id_trabajo", $trabajo['id'], $status = NULL);
		#vq($documentos);
		$equipo = bd_tutor_comunitario($_GET['i']);
		$smarty->assign('documentos',$documentos);
		$smarty->assign('equipo',$equipo);
		$smarty->display('tutor.html');
			
	}
}
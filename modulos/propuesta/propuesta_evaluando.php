<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$id_pnf = $_SESSION['r'][$_SESSION['numero']]['id_pnf'];
$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
$id_trayecto = $_GET['id'];

if ($id_trayecto == 'NULL') {
	# si id trayecto no esta definida redigira a una pagina con una lista de trayectos
	$trayectos = bd_trayectos_pnf_datos($id_pnf, $id_nucleo);
	foreach ($trayectos as $trayecto) {
		# code...
	    $trayectos_secciones[]=$secciones = bd_secciones_trayectos_pnf_nucleo($trayecto['id_trayecto'], $id_pnf, $id_nucleo);
	}
	$smarty->assign('trayectos',$trayectos);
	$smarty->assign('trayectos_secciones',$trayectos_secciones);
	$smarty->display('../trayectos_secciones/templates/trayectos_secciones.html');
	#ver($trayectos);
	#vq($trayectos_secciones);
}else{

	$datos=bd_propuestas_trayectos($id_trayecto, 'EVALUANDO', $id_pnf);
	if (count($datos) > 0) {
			#
		foreach ($datos as $dato) {
		# code...
		$docente = bd_personas_datos($dato['id_docente']);
		$equipo = bd_equipo_lider($dato['id_equipo']);
		$lider = bd_personas_datos($dato['id_lider']);
		
		$dato['docente'] = $docente;
		$dato['equipo'] = $equipo;
		$dato['lider'] = $lider;
		
		$propuestas[]= $dato;
	}
	#vq($datos);
	$smarty->assign('propuestas',$propuestas);
	}	
	
	$smarty->display('propuesta_evaluando.html');
}

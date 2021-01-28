<?php 
define('MOD', 'mi_trabajo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar = verificar();
$smarty->assign('verificar',$verificar);
$propuesta = bd_propuestas_datos($_GET['p']);
$proposicion = bd_proposiciones_datos($_GET['i']);
$lider=bd_equipo_lider();
$seccion = bd_secciones_datos($lider[0]['id_seccion']);
if ($seccion['id_tipo_de_documento'] != NULL) {
	# code...
	$datos = array(
		'titulo' => $proposicion['descripcion'],
		'fecha_inicio' => date('Y-m-d'), 
		'responsable' => $_GET['l'],
		'id_docente' => $propuesta['id_docente'],
	    'id_equipo' => $_GET['e'],
	    'id_linea_investigacion' => $propuesta['id_linea_investigacion'],
	    'id_nucleo' => $propuesta['id_nucleo'],
	    'id_pnf' => $propuesta['id_pnf'],
	    'id_tipo_de_documento' => $seccion['id_tipo_de_documento'],
	    'seccion' => $lider[0]['id_seccion'],
	    'id_trayecto' => $propuesta['id_trayecto'] 
	);
	bd_trabajos_iniciar($datos);
	$m="El trabajo se inico correctamente.";
	ir("../mensaje/mensaje_retorno.php?m=$m");
}
$m="Aún no puedes iniciar un trabajo, esto se debe a que el docente asesor aún no ha asignado un tipo de documento a tu sección";
ir("../mensaje/mensaje_retorno.php?m=$m");

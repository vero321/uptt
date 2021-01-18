<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$trayecto=bd_equipo_seccion_trayecto($_POST['equipo']);
$pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$data=bd_proposicion_disponible($trayecto, $pnf);
foreach ($data as $dato) {
	# code...
	$r['codigo'] = $dato['id_proposicion'];
	$r['codigo_propuesta'] = $dato['id_propuesta'];
	$r['descripcion'] = $dato['descripcion'];
	$r['objetivo'] = $dato['objetivo'];
	$respuesta[] = $r;
}
if (isset($respuesta)) {
	# code...
	print json_encode($respuesta, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
}
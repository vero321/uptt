<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$trayecto=bd_equipo_seccion_trayecto($_POST['equipo']);
$pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$data=bd_proposicion_disponible($trayecto, $pnf);
foreach ($data as $dato) {
	# code...
	$comunidad = bd_comunidades_datos($dato['id_comunidad']);
	$r['codigo'] = $dato['id'];
	$r['descripcion'] = $dato['descripcion'];
	$r['objetivo'] = $dato['objetivo'];
	$r['comunidad'] = $comunidad['nombre_comunidad'];
	$respuesta[] = $r;
}
if (isset($respuesta)) {
	# code...
	print json_encode($respuesta, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
}
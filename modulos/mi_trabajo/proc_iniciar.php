<?php 
define('MOD', 'mi_trabajo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar = verificar();
$smarty->assign('verificar',$verificar);

$propuesta = bd_propuestas_datos($_GET['p']);
$proposicion = bd_proposiciones_datos($_GET['i']);
$datos = array(
	'titulo' => $proposicion['objetivo'],
	'fecha_inicio' => date('Y-m-d'), 
	'responsable' => $_GET['l'],
	'id_docente' => $propuesta['id_docente'],
    'id_equipo' => $_GET['e'],
    'id_linea_investigacion' => $propuesta['id_linea_investigacion'],
    'id_nucleo' => $propuesta['id_nucleo'],
    'id_pnf' => $propuesta['id_pnf'],
    'id_trayecto' => $propuesta['id_trayecto'] 
);
bd_trabajos_iniciar($datos);
$m="El trabajo se inico correctamente.";
ir("../mensaje/mensaje_retorno.php?m=$m");
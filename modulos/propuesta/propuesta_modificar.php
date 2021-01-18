<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$id = $_GET['id'];
$propuesta = bd_propuestas_datos($id);

# detalles de los autores
	$datos_lider = bd_personas_datos($propuesta['id_lider']);
	$equipo = bd_equipo_personas_datos($propuesta['id_equipo']);
# /detalles delos autores

#Datos del PNF
	$trayecto = bd_trayectos_datos($propuesta['id_trayecto']);
	$pnf = bd_pnf_datos($propuesta['id_pnf']);
	$linea = bd_lineas_datos($propuesta['id_linea_investigacion']);

	$datos['docente'] = bd_personas_datos($propuesta['id_docente']);
	$datos['trayecto'] = $trayecto;
	$datos['pnf'] = $pnf;
	$datos['linea'] = $linea;
	$datos['fecha'] = $propuesta['fecha'];

#/Datos del PNF

# propociones
	$proposiciones = proposiones($propuesta);
# /propociones

# comunidad
	$comunidad = bd_comunidad($propuesta['id_comunidad']);
# /comunidad


$smarty->assign('estados',bd_ubicaciones('estado'));
$smarty->assign('lineas', bd_lineas_datos());

$smarty->assign('proposiciones', $proposiciones);
$smarty->assign('comunidad',$comunidad);
$smarty->assign('datos_lider',$datos_lider);
$smarty->assign('equipo',$equipo);
$smarty->assign('datos',$datos);
$smarty->assign('propuesta', $propuesta);

$smarty->display('propuesta_modificar.html');
<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$id = $_GET['id'];
$propuesta = bd_propuestas_datos($id);

# $r esta varabe se usara para retornar a esta pagina despues de ejecutar alguna accion
$r = '../propuesta/propuesta_detalle.php?id='.$id;
$_SESSION['retorno']=$r;
# detalles de los autores
	$datos_lider = bd_personas_datos($propuesta['id_lider']);
	$equipo = bd_equipo_personas_datos($propuesta['id_equipo']);
# /detalles delos autores

#Datos del PNF
	$trayecto = bd_trayectos_datos($propuesta['id_trayecto']);
	$pnf = bd_pnf_datos($propuesta['id_pnf']);
	$linea = bd_lineas_datos($propuesta['id_linea_investigacion']);

	$datos['docente'] = bd_personas_datos($propuesta['id_docente']);
	$datos['trayecto'] = $trayecto['trayecto'];
	$datos['id_trayecto'] = $trayecto['id'];
	$datos['pnf'] = $pnf['nombre_corto'];
	$datos['linea'] = $linea['nombre'];
	$datos['fecha'] = $propuesta['fecha'];
#/Datos del PNF

# propociones
	$proposiciones = proposiones($propuesta);
# /propociones

# comunidad
	$comunidad = bd_comunidad($propuesta['id_comunidad']);
# /comunidad

# observaciones
	$observaciones = bd_observaciones_datos($tabla='PROPUESTAS', $fila=$propuesta['id'],$id=NULL);
# /observaciones

#verificamos el status de la propuesta 
	$status = $propuesta['status'];

switch ($status) {
		case 'NUEVA':
			# Mostramos las opciones de la propuesta 
			$smarty->assign('opciones', 'FALSE');
			break;
		case 'ENVIADA':
			# No mostramos las opciones de la propuesta
			#se le informa al usuario que la propuesta fue enviada
			$smarty->assign('opciones', 'FALSE');
			break;
		case 'EVALUANDO':
			# No mostramos las opciones de la propuesta
			#se le informa al usuario que la propuesta fue enviada
			$smarty->assign('opciones', 'TRUE');
			break;
		case 'EVALUADA':
			# No mostramos las opciones de la propuesta
			#se le informa al usuario que la propuesta fue enviada
			$smarty->assign('opciones', 'TRUE');
			break;
		default:
			#
			break;
	}

$smarty->assign('observaciones', $observaciones );
$smarty->assign('status', $status );
$smarty->assign('proposiciones', $proposiciones);
$smarty->assign('comunidad',$comunidad);
$smarty->assign('datos_lider',$datos_lider);
$smarty->assign('equipo',$equipo);
$smarty->assign('datos',$datos);
$smarty->assign('propuesta', $propuesta);

$smarty->display('propuesta_detalles1.html');
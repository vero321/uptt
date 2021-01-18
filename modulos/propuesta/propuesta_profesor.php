<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$smarty->assign('verificar',$verificar);

$id_seccion = $_GET['id_s'];
$id_lider = $_GET['id_l'];
$id_equipo = $_GET['id_e'];


$r= '../propuesta/propuesta_profesor.php?id_s='.$id_seccion.'&id_l='.$id_lider.'&id_e='.$id_equipo;
$_SESSION['retorno']=$r;

# detalles de los autores
$datos_lider = bd_personas_datos($id_lider);
$equipo = bd_equipo_personas_datos($id_equipo);
# /detalles de los autores

# Verificamos si equipo ya tiene una propuesta
$propuesta = bd_propuestas_equipo($id_equipo);
$n_propuestas = count($propuesta);

$smarty->assign('r',$r);
$smarty->assign('id_seccion',$id_seccion);
$smarty->assign('datos_lider',$datos_lider);
$smarty->assign('equipo',$equipo);
$smarty->assign('equipo_id',$id_equipo);

if ($n_propuestas > 0) {
	# si tiene una propuesta solicitamos los datos de esta misma
	$status =$propuesta['status'];
	
	if ($status == 'ENVIADA' or $status == 'EVALUANDO' or  $status == 'EVALUADA') {

		#Datos del PNF
		$trayecto = bd_trayectos_datos($propuesta['id_trayecto']);
		$pnf = bd_pnf_datos($propuesta['id_pnf']);
		$linea = bd_lineas_datos($propuesta['id_linea_investigacion']);

		$datos['docente'] = bd_personas_datos($propuesta['id_docente']);
		$datos['trayecto'] = $trayecto['trayecto'];
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
	
		switch ($status) {
			case 'ENVIADA':
				# Mostramos las opciones de la propuesta 
				$smarty->assign('opciones', 'TRUE');
				break;
			case 'EVALUANDO':
				# No mostramos las opciones de la propuesta
				#se le informa al usuario que la propuesta fue enviada
				$smarty->assign('opciones', 'FALSE');
				break;
			case 'EVALUADA':
				# No mostramos las opciones de la propuesta
				#se le informa al usuario que la propuesta fue enviada
				$smarty->assign('opciones', 'FALSE');
				break;
			default:
				# code...
				break;
		}
		$smarty->assign('status',$status);
		$smarty->assign('datos',$datos);
		$smarty->assign('propuesta',$propuesta);
		$smarty->assign('proposiciones', $proposiciones);
		$smarty->assign('comunidad',$comunidad);
		$smarty->assign('observaciones',$observaciones);	
		$smarty->display('propuesta_profesor.html');

	}elseif ($status == 'NUEVA') {
		# code...
	$smarty->display('propuesta_profesor_sin_propuesta.html');
	}	
}else{
	$smarty->display('propuesta_profesor_sin_propuesta.html');
}
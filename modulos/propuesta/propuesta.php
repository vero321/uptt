<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#El siguiente script gestiona la propuesta de un lider de equipo se puede acceder a el desde el menu lateral y desde equipo_verificar.php desde esta ubicacion neceta el parametro equipo_id

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

# $r esta varabe se usara para retornar a esta pagina despues de ejecutar alguna accion
$r = '../propuesta/propuesta.php?equipo_id='.$equipo_id;
$_SESSION['retorno']=$r;


# Verificamos si equipo ya tiene una propuesta
$propuesta=bd_propuestas_equipo($equipo_id);
$n_propuestas=count($propuesta);

if ($n_propuestas > 0) {
	# si tiene una propuesta solicitamos los datos de esta misma
	
	# detalles de los autores
	$datos_lider = bd_personas_datos($lider['id_persona']);
	$equipo = bd_equipo_personas_datos($equipo_id);
	# /detalles delos autores

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

	#verificamos el status de la propuesta 
	$status = $propuesta['status'];

	//opciones de la propuesta: editar, eliminar, enviar a profesor añadir observaciones editar y eliminar obciones propias.
	switch ($status) {
		case 'NUEVA':
			# Mostramos las opciones de la propuesta 
			$smarty->assign('opciones', 'TRUE');
			break;
		case 'ENVIADA':
			# No mostramos las opciones de la propuesta
			#se le informa al usuario que la propuesta fue enviada
			$smarty->assign('opciones', 'FALSE');
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
			#
			break;
	}
# asignamos estos datos a smarty
	$smarty->assign('observaciones',$observaciones);	
	$smarty->assign('proposiciones', $proposiciones);
	$smarty->assign('comunidad',$comunidad);
	$smarty->assign('datos_lider',$datos_lider);
	$smarty->assign('equipo',$equipo);
	$smarty->assign('datos',$datos);
	$smarty->assign('propuesta', $propuesta);
	$smarty->assign('n_propuestas',$n_propuestas);
	$smarty->assign('status',$status);
	$smarty->display('propuesta_detalles.html');
# /asignamos datos a smarty


}elseif ($n_propuestas == 0) {
	# si el equipo no tien propuesta carga una interfaz donde puede agregar una propuesta
	$smarty->assign('equipo_id',$equipo_id);
	$smarty->display('propuesta.html');
}


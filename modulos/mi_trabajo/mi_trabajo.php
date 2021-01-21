<?php 
define('MOD', 'mi_trabajo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$r = '../mi_trabajo/mi_trabajo.php';
$_SESSION['retorno']=$r;

/* este archivo verifica 
 - si el usuario ya tiene un trabajo
 - si no verifica que el usuario tenga almenos una propuesta 
 - si el usuario tiene una propuesta verifica que tenga un propuesta aprovada

 */

$lider=bd_equipo_lider();

if (isset($_GET['equipo_id'])) {
	# si equipo
	$equipo_id=$_GET['equipo_id'];
}else{
	#vq($lider);
	$confmar_lider=count($lider);
	if ($confmar_lider >1){
	#si el lider tiene mas de un equipo asignado lo envia a una pagina par seleccionar el trabajo segun el equipo
	ir('../equipo/verificar_equipo.php');
	}else{
		$equipo_id = $lider[0]['id'];
		# $r esta varabe se usara para retornar a esta pagina despues de ejecutar alguna accion
		$r = '../mi_trabajo/mi_trabajo.php?equipo_id='.$equipo_id;
		$_SESSION['retorno']=$r;
	}
}

$propuesta=bd_propuestas_equipo($equipo_id);
$verificar = array(
	'responsable' => $_SESSION['u']['id'],
	'nucleo' => $_SESSION['r'][$_SESSION['numero']]['id_nucleo'],
	'pnf' => $_SESSION['r'][$_SESSION['numero']]['id_pnf'],
	'seccion' => $lider[0]['id_seccion'],
	'caso' => 'lider'
);

$trabajo = bd_trabajos_datos($id=NULL, $verificar );
if (count($trabajo) > 0) {
	$entregables = bd_entregables_caso($verificar);
	$smarty->assign('entregables',$entregables);
	$smarty->assign('trabajo',$trabajo);
	$smarty->display('trabajo.html');
}else{
	# Verificamos si equipo ya tiene una propuesta
	$n_propuestas=count($propuesta);

	if ($n_propuestas > 0) {
		#verificamos si el equipo tiene una propuesta
		
		# proposiciones
		$proposiciones = proposiones($propuesta);
		# /proposiciones

		foreach ($proposiciones as $proposicion) {
			#verificamos si el equipo tiene una Proposicion  APROBADA para que inicie un trabajo
			 if ($proposicion['status'] === 'APROBADA' ) {
			 	# Guardamos los datos de la proposicion APROBADA y detemos 
			 	$datos = $proposicion;
			 }
		}
		if (empty($datos)) {
			# code...
			$m="Tu equipo aun no puede iniciar un trabajo esto se debe a que aun no tienes una propuesta aprobada";
		ir("../mensaje/mensaje.php?m=$m&d=../propuesta/propuesta.php");
		}else{
			# si existe esta variable quiere decir que si hay una proposicion APROBADA
			$smarty->assign('id_propuesta',$propuesta['id']);
			$smarty->assign('id_lider',$propuesta['id_lider']);
			$smarty->assign('equipo_id',$equipo_id);
			$smarty->assign('datos',$datos);
			$smarty->display('iniciar_trabajo.html');
		}
	}else{
		$m="Tu equipo aun no puede iniciar un trabajo esto se debe a que aun no has realizado una propuesta";
		ir("../mensaje/mensaje.php?m=$m&d=../propuesta/propuesta.php");
	}
}
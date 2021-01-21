<?php 
define('MOD', 'entregables'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar = verificar();
$smarty->assign('verificar',$verificar);

#s = id_seccion
if ($_GET['s'] == 'NULL') {
	#este parte muestra la lista de secciones que corresponden al Profesor de Proyecto 
	ir('secciones_entregables.php');
}else{
	$r = '../entregables/entregables.php?s='.$_GET['s'];
	$_SESSION['retorno']=$r;
	$datos = array(
		'nucleo' => $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'],
		'pnf' => $id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'],
		'seccion' => $_GET['s'],
		'id_docente' => $_SESSION['u']['id'],
		'caso' => 'docente'
 	);

	$entregables = bd_entregables_caso($datos);
	$smarty->assign('entregables',$entregables);
	$smarty->assign('id',$_GET['s']);
	$smarty->display('entregables.html');
}

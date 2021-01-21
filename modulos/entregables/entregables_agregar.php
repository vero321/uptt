<?php 
define('MOD', 'entregables'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar = verificar();
$smarty->assign('verificar',$verificar);

$datos = array(
	'nucleo' => $id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'],
	'pnf' => $id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'],
	'seccion' => $_GET['s']
 );
$seccion = bd_secciones_datos($_GET['s']);
$estructura = bd_estructuras_datos($id=NULL, $seccion['id_tipo_de_documento']);


$smarty->assign('datos',$datos);
$smarty->assign('estructura',$estructura);
$smarty->display('entregables_agregar.html');
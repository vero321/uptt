<?php 
define('MOD', 'documentos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


#s = id_seccion
if ($_GET['s'] == 'NULL') {
	#este parte muestra la lista de secciones que corresponden al Profesor de Proyecto 
	ir('secciones_documento.php');
}else{
	$r = '../documentos/documentos_recibidos.php?s='.$_GET['s'];
	$_SESSION['retorno']=$r;
	
	$trabajos = bd_trabajos_seccion($_GET['s']);
	$smarty->assign('trabajos',$trabajos);
	$smarty->display('documentos_recibidos.html');
}
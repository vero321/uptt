<?php 
define('MOD', 'observaciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$smarty->assign('datos',$_GET);
if (in_array('COMI_T', $verificar)){
	$smarty->display('añadir_observacion_comite.html');
}else{
	$smarty->display('añadir_observacion.html');
}
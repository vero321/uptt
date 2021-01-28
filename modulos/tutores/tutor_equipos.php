<?php 
define('MOD', 'tutores'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$r = '../tutores/tutor.php';
$_SESSION['retorno']=$r;

if (in_array('TUTO_CO', $verificar)==TRUE) {
	$tutor='tutor_comunitario';
}elseif (in_array('TUTO_AC', $verificar)==TRUE) {
	$tutor='tutor_academico';
}
$equipos = bd_tutor_comunitario($id=NULL, $tutor);
$smarty->assign('equipos',$equipos);
$smarty->display('tutor_equipos.html');
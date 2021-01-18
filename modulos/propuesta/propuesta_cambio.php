<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$id = $_GET['id'];
$trayecto = $_GET['trayecto'];
$propuesta = bd_propuestas_datos($id);
# propociones
	$proposiciones = proposiones($propuesta);
# /propociones
$smarty->assign('trayecto', $trayecto);
$smarty->assign('id', $id);
$smarty->assign('proposiciones', $proposiciones);
$smarty->display('propuesta_cambio.html');
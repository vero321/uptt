<?php 
define('MOD', 'secciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id_seccion=$_GET['id'];
$id_trayecto=$_GET['t'];

$seccion=bd_secciones_datos($id_seccion);

$smarty->assign('id_seccion',$id_seccion);
$smarty->assign('id_trayecto',$id_trayecto);
$smarty->assign('seccion',$seccion);
$smarty->display('seccion_modificar.html');
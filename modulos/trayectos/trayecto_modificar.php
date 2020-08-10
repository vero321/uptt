<?php 
define('MOD', 'trayectos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id=$_GET['id'];
$trayecto=bd_trayectos_datos($id);

$smarty->assign('trayecto',$trayecto);
$smarty->display('trayecto_modificar.html');
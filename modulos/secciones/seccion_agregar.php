<?php 
define('MOD', 'secciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id_trayecto=$_GET['t'];


$smarty->assign('id_trayecto', $id_trayecto);
$smarty->display('seccion_agregar.html');
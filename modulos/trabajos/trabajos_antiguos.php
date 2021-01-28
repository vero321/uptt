<?php 
define('MOD', 'trabajos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$smarty->display('trabajos_antiguos.html');
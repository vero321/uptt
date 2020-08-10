<?php 
define('MOD', 'trayectos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$smarty->assign('verificar',$verificar);

$smarty->display('trayecto_agregar.html');
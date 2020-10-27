<?php 
define('MOD', 'trayectos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$trayectos=bd_trayectos_datos();
$n_trayectos=bd_trayectos_contar();
$smarty->assign('n_trayectos',$n_trayectos);
$smarty->assign('trayectos',$trayectos);
$smarty->display('trayectos.html');
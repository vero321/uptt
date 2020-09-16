<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';

include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$lider=bd_equipo_lider();
$confmar_lider=count($lider);
if (confmar_lider <1){
	
}

$smarty->display('equipo.html');
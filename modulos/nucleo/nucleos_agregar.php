<?php
define('MOD', 'nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$nucleos = bd_nucleos_datos();
$smarty->assign('nucleos',$nucleos);
$smarty->display('nucleos_agregar.html');
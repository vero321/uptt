<?php 
define('MOD', 'linea_de_investigacion'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();
$smarty->assign('verificar',$verificar);


$n_lineas=bd_lineas_contar();



$smarty->assign('lineas', bd_lineas_datos());
$smarty->assign('n_lineas',$n_lineas);


$smarty->display('lineas.html');
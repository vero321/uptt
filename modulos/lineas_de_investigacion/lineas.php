<?php 
define('MOD', 'lineas_de_investigacion'); 
require_once '../../app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$n_lineas=bd_lineas_contar();



$smarty->assign('lineas', bd_lineas_datos());
$smarty->assign('n_lineas',$n_lineas);

$smarty->assign('pie', file_get_contents(APP.'/pie/usuarios.html'));

$smarty->display('lineas.html');
<?php
define('MOD', 'rol'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();
$smarty->assign('verificar',$verificar);

$n_roles=bd_roles_contar();
$roles=bd_roles_datos();


$smarty->assign('lineas', bd_lineas_datos());
#$smarty->assign('n_lineas',$n_lineas);
$smarty->assign('roles',$roles);
$smarty->assign('n_roles',$n_roles);
$smarty->display('roles.html');
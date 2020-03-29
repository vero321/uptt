<?php
include_once "./inicializacion.php";
verificar();

$n_roles=bd_roles_contar();
$roles=bd_roles_datos();

$verificar=privilegios();
$smarty->assign('verificar',$verificar);

$smarty->assign('lineas', bd_lineas_datos());
$smarty->assign('n_lineas',$n_lineas);
$smarty->assign('roles',$roles);
$smarty->assign('n_roles',$n_roles);
$smarty->assign('pie', file_get_contents('pie/usuarios.html'));
$smarty->display('roles.html');
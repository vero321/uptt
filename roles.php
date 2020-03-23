<?php
include_once "./inicializacion.php";
$n_roles=bd_roles_contar();
$roles=bd_roles_datos();

$smarty->assign('roles',$roles);
$smarty->assign('n_roles',$n_roles);
$smarty->assign('pie', file_get_contents('pie/usuarios.html'));
$smarty->display('roles.html');
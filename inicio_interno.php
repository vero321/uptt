<?php
include_once "./inicializacion.php";

$nucleos=bd_nucleos_contar();
$pnf=bd_pnf_contar();
$roles=bd_roles_contar();
$usuarios=bd_usuarios_contar();
#vq($_SESSION['p']);



$smarty->assign('nucleos',$nucleos);
$smarty->assign('pnf',$pnf);
$smarty->assign('usuarios',$usuarios);
$smarty->assign('roles',$roles);
$smarty->display('inicio_interno.html');


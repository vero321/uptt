<?php
include_once "./inicializacion.php";

verificar();

$roles=bd_roles_datos();
$nucleos=bd_nucleos_datos();
$pnf=bd_pnf_datos();
$numero=$_SESSION['numero'];
$datos=$_SESSION['r'][$numero];
$nivel=$_GET['5ea6fd8de7329'];

$smarty->assign('nivel',$nivel);
$smarty->assign('roles',$roles);
$smarty->assign('nucleos',$nucleos);
$smarty->assign('pnf',$pnf);
$smarty->assign('datos',$datos);
$smarty->display('agregar_admin.html');
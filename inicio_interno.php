<?php
include_once "./inicializacion.php";

$usuarios=bd_usuarios_contar();
$nucleos=bd_nucleos_contar();
$pnf=bd_pnf_contar();
#vq($_SESSION['p']);

$smarty->assign('usuarios',$usuarios);
$smarty->assign('nucleos',$nucleos);
$smarty->assign('pnf',$pnf);
$smarty->display('inicio_interno.html');


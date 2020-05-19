<?php 
include_once "./inicializacion.php";
verificar();

$id = $_GET['id'];
$id_usuario = $_GET['id_usuario'];
$nucleo = $_GET['nucleo'];
$pnf=bd_nucleos_pnf_datos($nucleo);


$smarty->assign('nucleo',$nucleo);
$smarty->assign('id_usuario',$id_usuario);
$smarty->assign('id',$id);
$smarty->assign('pnf',$pnf);
$smarty->display('usuarios_rol_asignar_pnf_a_rol.html');
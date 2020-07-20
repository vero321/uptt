<?php 
define('MOD', 'pnf_nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];
$pnf=bd_pnf_datos();#guarda la lista de PNF
$pnf_nucleo=bd_nucleos_pnf_datos($id_nucleo);#Guarda la lista de pnf en un nucleo



$smarty->assign('id_nucleo',$id_nucleo);
$smarty->assign('pnf',$pnf);
$smarty->display('pnf_nucleo_asignar.html');
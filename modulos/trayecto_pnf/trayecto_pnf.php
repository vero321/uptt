<?php 
define('MOD', 'trayecto_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 
$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$pnf=bd_pnf_datos($id_nucleo);#Guarda los Datos del pnf
$trayecto=bd_trayectos_datos();
$trayecto_pnf=bd_trayectos_pnf_datos($id_pnf);


$smarty->assign('pnf',$pnf);
$smarty->assign('trayecto',$trayecto);
$smarty->assign('trayecto_pnf',$trayecto_pnf);
$smarty->display('trayecto_pnf.html');
<?php 
define('MOD', 'pnf_nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#Esta pagina muesta la lista de pnf pertenecientes a un núcleo
#Esta lista es estraida de la tabla NUCLEO__PNF
#para funcionar necesita la id del nucleo 
$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del nucleo 
$nucleo=bd_nucleos_datos($id_nucleo);#Guarda los Datos del nucleo
$pnf_nucleo=bd_nucleos_pnf_datos($id_nucleo);#Guarda la lista de pnf en un nucleo
$n_nucleos_pnf=count($pnf_nucleo);

$smarty->assign('n_nucleos_pnf',$n_nucleos_pnf);
$smarty->assign('nucleo',$nucleo);
$smarty->assign('pnf_nucleo',$pnf_nucleo);
$smarty->display('pnf_nucleo.html');
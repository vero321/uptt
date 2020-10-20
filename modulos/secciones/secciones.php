<?php 
define('MOD', 'secciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#este archivo mustra la lista de secciones en un trayecto
#para ello requier la id del trayecto por defecto desde la bd viene como NULL en ese caso mostrara la lista de trayectos en el pnf 

$id_trayecto=$_GET['t'];

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 
$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF

$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf
$smarty->assign('pnf',$pnf);

if ($id_trayecto == 'NULL') {
	# code...
	$trayectos=bd_trayectos_datos();
	$trayecto_pnf=bd_trayectos_pnf_datos($id_pnf, $id_nucleo);

	$smarty->assign('trayecto_pnf',$trayecto_pnf);
	$smarty->display('secciones.html');

}else{

	$trayecto=bd_trayectos_datos($id_trayecto);
	$secciones=bd_secciones_trayectos_pnf_nucleo($id_trayecto, $id_pnf, $id_nucleo);

	$n_secciones=count($secciones);
	$smarty->assign('trayecto', $trayecto);
	$smarty->assign('n_secciones', $n_secciones);
	$smarty->assign('secciones', $secciones);
	$smarty->display('secciones.html');
}

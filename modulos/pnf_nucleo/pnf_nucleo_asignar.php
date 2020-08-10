<?php 
define('MOD', 'pnf_nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];

$pnf=bd_pnf_datos();#guarda la lista de PNF
$actuales=bd_nucleos_pnf_datos($id_nucleo);#Guarda la lista de pnf en un nucleo

$i=0;
#validacion para no mostrar un trayecto que ya existe en el pnf
foreach ($actuales as $actual) {
 	# code...
 	foreach ($pnf as $key) {
 		# code...
	 	if ($actual['id_pnf'] == $key['id'] ) {
	 		# code...
	 		unset($pnf[$i]);
	 		$pnf=array_values($pnf);
	 	}
 	}
 	$i=$i+1;
 }

$smarty->assign('id_nucleo',$id_nucleo);
$smarty->assign('pnf',$pnf);
$smarty->display('pnf_nucleo_asignar.html');
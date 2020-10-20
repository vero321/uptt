<?php
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf

# Muestra los trayectos pertecientes al nucleo y pnf correspondientes
$trayectos=bd_trayectos_pnf_datos($id_pnf, $id_nucleo);




#vq($_SESSION);


$smarty->assign('pnf',$pnf);
$smarty->assign('trayectos',$trayectos);
$smarty->display('propuesta_agregar.html');

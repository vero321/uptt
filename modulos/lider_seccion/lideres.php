<?php 
define('MOD', 'lider'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$id_seccion= $_GET['id'];
$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 
$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF

$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf

$id_profesor=$_SESSION['u']['id'];#Guarda el id de la persona

$seccion= bd_secciones_datos($id_seccion);

$seccion_profesor=bd_secciones_profesor($id_profesor, $id_pnf, $id_nucleo);

$trayecto = bd_trayectos_datos($seccion['id_trayecto']);

$smarty->assign('trayecto', $trayecto);
$smarty->assign('seccion', $seccion);
$smarty->assign('seccion_profesor', bd_secciones_profesor($id_profesor, $id_pnf, $id_nucleo));
$smarty->assign('lider_seccion', bd_lider_seccion($id_seccion));
$smarty->assign('lider', bd_lider_datos());
$smarty->display('lideres.html');
#vq($seccion);

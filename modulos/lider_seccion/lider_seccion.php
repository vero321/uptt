<?php 
define('MOD', 'lider'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#este archivo muestra la lista de secciones que corresponden al Profesor de Proyecto 

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 
$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf

$id_profesor=$_SESSION['u']['id'];#Guarda el id de la persona

$secciones=bd_secciones_datos();
$seccion_profesor=bd_secciones_profesor($id_profesor, $id_pnf, $id_nucleo);



$smarty->assign('secciones', bd_secciones_datos());
$smarty->assign('seccion_profesor', bd_secciones_profesor($id_profesor, $id_pnf, $id_nucleo));
$smarty->assign('pnf',$pnf);
$smarty->display('lider_seccion.html');
<?php 
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#Este archivo mustra la tabla AREAS
#usa del rol para filtrar los datos correctamente

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF

$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf

$areas=bd_areas_datos();

$areas_pnf=bd_areas_pnf_datos($id_pnf, $id_nucleo);

#vq($areas_pnf);

$smarty->assign('pnf',$pnf);
$smarty->assign('areas',$areas);

$smarty->assign('areas_pnf',$areas_pnf);

$smarty->display('areas_pnf.html');
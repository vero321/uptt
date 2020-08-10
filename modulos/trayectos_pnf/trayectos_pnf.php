<?php 
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#Este archivo mustra la tabla TAYECTOS__PNF
#usa del rol para filtrar los datos correctamente

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf

$trayectos=bd_trayectos_datos();
$trayecto_pnf=bd_trayectos_pnf_datos($id_pnf, $id_nucleo);

#vq($trayecto_pnf);

$smarty->assign('pnf',$pnf);
$smarty->assign('trayectos',$trayectos);
$smarty->assign('trayecto_pnf',$trayecto_pnf);

$smarty->assign('pie', file_get_contents(APP.'/modulos/pie/usuarios.html'));
$smarty->display('trayectos_pnf.html');
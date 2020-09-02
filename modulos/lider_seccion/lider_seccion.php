<?php 
define('MOD', 'lider'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

#Este archivo mustra la tabla AREAS
#usa del rol para filtrar los datos correctamente

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF

$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf


$lider=bd_lider_seccion_datos($id_seccion);

#vq($trayecto_pnf);


$smarty->assign('lider',$lider);

$smarty->assign('pie', file_get_contents(APP.'/modulos/pie/usuarios.html'));
$smarty->display('lider_seccion.html');
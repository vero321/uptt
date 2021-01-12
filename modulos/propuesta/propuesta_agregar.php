<?php
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf


$docente=bd_equipo_seccion_profesor($_GET['equipo_id']);#Guarda el docente asesor encargado de la seccion

$lider=bd_personas_datos($_SESSION['u']['id']);#Guarda el lider de equipo

$equipo=bd_equipo_personas_datos($_GET['equipo_id']);#Guarada el los datos del equipo asignados por el lider

$fecha=date('Y-m-d');

$trayecto=bd_equipo_seccion_trayecto($_GET['equipo_id']);#Guarda el trayecto perteneciente al equipo

#vq($trayecto);


$smarty->assign('estados',bd_ubicaciones('estado'));
$smarty->assign('lineas', bd_lineas_datos());
$smarty->assign('fecha',$fecha);
$smarty->assign('pnf',$pnf);
$smarty->assign('docente',$docente);
$smarty->assign('lider',$lider);
$smarty->assign('equipo',$equipo);
$smarty->assign('equipo_id',$_GET['equipo_id']);
$smarty->assign('trayecto',$trayecto);
$smarty->display('propuesta_agregar.html');

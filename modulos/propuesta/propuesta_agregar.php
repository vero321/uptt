<?php
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$id_nucleo=$_SESSION['r'][$_SESSION['numero']]['id_nucleo'];#Guarda la id del núcleo 

$id_pnf=$_SESSION['r'][$_SESSION['numero']]['id_pnf'];#Guarda la id del PNF
$pnf=bd_pnf_datos($id_pnf);#Guarda los Datos del pnf


<<<<<<< HEAD
$docente=bd_equipo_seccion_profesor($_GET['equipo_id']);#Guarda el docente asesor encargado de la seccion

$equipo=bd_equipo_personas_datos($_GET['equipo_id']);#Guarada el los datos del equipo asignados por el lider
=======
$fecha=date('Y-m-d');
>>>>>>> a99b93a86a4d77285429320f989f242e67c7fdf2

$trayecto=bd_equipo_seccion_trayecto($_GET['equipo_id']);#Guarda el trayecto perteneciente al equipo

#vq($trayecto);


<<<<<<< HEAD



$smarty->assign('estados',bd_ubicaciones('estado'));
$smarty->assign('municipios',bd_ubicaciones('municipio',20));
$smarty->assign('parroquias',bd_ubicaciones('parroquia',300));

=======
$smarty->assign('fecha',$fecha);
>>>>>>> a99b93a86a4d77285429320f989f242e67c7fdf2
$smarty->assign('pnf',$pnf);
$smarty->assign('docente',$docente);
$smarty->assign('equipo',$equipo);
$smarty->assign('equipo_id',$_GET['equipo_id']);
$smarty->assign('trayecto',$trayecto);
$smarty->display('propuesta_agregar.html');

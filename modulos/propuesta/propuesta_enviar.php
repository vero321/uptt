<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$smarty->assign('verificar',$verificar);

$id_seccion = $_GET['id_s'];
$id_lider = $_GET['id_l'];
$id_equipo = $_GET['id_e'];

$lider = bd_personas_datos($id_lider);
$equipo = bd_equipo_personas_datos($id_equipo);
$datos_propuesta = bd_propuestas_datos_equipo($id_equipo);

$propuestas = bd_propuestas_datos_id_datos_propuestas($datos_propuesta['id'], 'ENVIAR');

#vq($propuestas);

$smarty->assign('id_seccion',$id_seccion);
$smarty->assign('lider',$lider);
$smarty->assign('equipo',$equipo);
$smarty->assign('datos_propuesta',$datos_propuesta);
$smarty->assign('propuestas',$propuestas);

#$smarty->assign('propuestas',$propuestas);
$smarty->display('propuesta_enviar.html');
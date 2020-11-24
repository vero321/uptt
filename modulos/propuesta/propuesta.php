<?php 
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);


$equipo_id=$_GET['equipo_id'];



$lider=bd_equipo_lider($equipo_id);



$propuesta=bd_propuestas_datos($equipo_id);




$n_propuesta=bd_propuesta_contar_lider();
$smarty->assign('equipo_id',$equipo_id);
$smarty->assign('lider',$lider);
$smarty->assign('propuestas', bd_propuestas_datos_lider($id_datos_propuestas=NULL,'NUEVA'));
$smarty->assign('propuesta', $propuesta);
$smarty->assign('n_propuesta',$n_propuesta);
$smarty->display('propuesta.html');


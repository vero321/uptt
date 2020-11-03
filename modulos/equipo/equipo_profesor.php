<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$id_lider = $_GET['id_l'];
$id_equipo = $_GET['id_e'];

$lider = bd_personas_datos($id_lider);
$equipo = bd_equipo_personas_datos($id_equipo);


$smarty->assign('lider',$lider);
$smarty->assign('equipo',$equipo);

$smarty->display('equipo_profesor.html');
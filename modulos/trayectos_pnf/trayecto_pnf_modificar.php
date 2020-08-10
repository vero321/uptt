<?php 
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id = $_GET['id'];
$id_trayecto = $_GET['id_trayecto'];

$trayecto=bd_trayectos_datos($id_trayecto);
$trayectos=bd_trayectos_datos();

$smarty->assign('id',$id);
$smarty->assign('trayecto',$trayecto);
$smarty->assign('trayectos',$trayectos);
$smarty->display('trayecto_pnf_modificar.html');
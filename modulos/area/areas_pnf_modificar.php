<?php 
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$id = $_GET['id'];
$id_area= $_GET['id'];

$area=bd_areas_datos($id_area);
$areas=bd_areas_datos();

$smarty->assign('id',$id);
$smarty->assign('area',$area);
$smarty->assign('areas',$areas);
$smarty->display('areas_pnf_modificar.html');
<?php 
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

#este archivo elimina un registro de la tabla AREAS_PNF

$id = $_GET['id'];

$areas=bd_areas_datos($id);

$smarty->assign('id',$id);
$smarty->assign('areas',$areas);

$smarty->display('areas_pnf_eliminar.html');
<?php
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();



$id = $_GET['id'];

$smarty->assign('areas', bd_areas_datos($id));
$smarty->display('areas_pnf_eliminar.html');

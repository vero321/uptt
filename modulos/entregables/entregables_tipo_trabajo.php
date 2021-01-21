<?php 
define('MOD', 'entregables'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar = verificar();
$smarty->assign('verificar',$verificar);


$tipos=bd_tipos_documento_datos();

$smarty->assign('id',$_GET['id']);
$smarty->assign('tipos',$tipos);
$smarty->display('entregables_tipo_trabajo.html');
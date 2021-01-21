<?php 
define('MOD', 'entregables'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar = verificar();

$entregable = bd_entregales_datos($_GET['id']);
$estructura = bd_entrgables_estructura($_GET['id']);

$smarty->assign('estructura',$estructura);
$smarty->assign('entregable',$entregable);
$smarty->display('entregables_eliminar.html');
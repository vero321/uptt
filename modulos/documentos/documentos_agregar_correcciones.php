<?php 
define('MOD', 'documentos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$smarty->assign('datos',$_GET);
$smarty->display('documentos_agregar_correcciones.html');
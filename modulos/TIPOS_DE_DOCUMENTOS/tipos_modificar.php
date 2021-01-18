<?php 
define('MOD', 'TIPOS_DE_DOCUMENTOS'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$tipo =  bd_tipos_documento_datos($_GET['id']);
$smarty->assign('tipo',$tipo);
$smarty->display('tipos_modificar.html');
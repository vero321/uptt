<?php 
define('MOD', 'documentos'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);

$documentos = bd_documentos("id_trabajo",$_GET['id']);
$smarty->assign('documentos',$documentos);
$smarty->display('documentos_trabajo.html');
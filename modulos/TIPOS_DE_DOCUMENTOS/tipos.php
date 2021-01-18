<?php 
define('MOD', 'TIPOS_DE_DOCUMENTOS'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$r = '../TIPOS_DE_DOCUMENTOS/tipos.php';
$_SESSION['retorno']=$r;

$tipos_documento=bd_tipos_documento_datos();
$smarty->assign('tipos_documento',$tipos_documento);
$smarty->display('tipos.html');
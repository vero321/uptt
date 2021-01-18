<?php 
define('MOD', 'TIPOS_DE_DOCUMENTOS'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$smarty->assign('verificar',$verificar);
$r = '../TIPOS_DE_DOCUMENTOS/tipos_estructura.php?id='.$_GET['id'];
$_SESSION['retorno']=$r;

$tipo=bd_tipos_documento_datos($_GET['id']);
$estructura=bd_estructuras_datos($id=NULL, $_GET['id']);


$smarty->assign('estructura',$estructura);
$smarty->assign('tipo',$tipo);
$smarty->display('tipos_estructura.html');
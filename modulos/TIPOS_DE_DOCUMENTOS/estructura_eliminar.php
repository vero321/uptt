<?php 
define('MOD', 'TIPOS_DE_DOCUMENTOS'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();
$estructura =  bd_estructuras_datos($_GET['id']);
$smarty->assign('estructura',$estructura);
$smarty->display('tipos_eliminar.html');
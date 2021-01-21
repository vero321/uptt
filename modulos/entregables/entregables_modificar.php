<?php 
define('MOD', 'entregables'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar = verificar();


$entregable = bd_entregales_datos($_GET['id']);
$estructura = bd_estructuras_datos($id=NULL, $entregable['id_tipo_de_documento']);

$smarty->assign('estructura',$estructura);
$smarty->assign('entregable',$entregable);
$smarty->display('entregables_modificar.html');
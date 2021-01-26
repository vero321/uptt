<?php 
define('MOD', 'observaciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';


$datos = bd_observaciones_datos($tabla= "TRABAJOS__DOCUMENTOS", $fila = $_GET['i'], $id = NULL);
$smarty->assign('datos',$datos);
$smarty->display('observaciones_ver.html');
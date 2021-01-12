<?php 
define('MOD', 'observaciones'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$datos = bd_observaciones_datos($tabla= NULL, $fila =NULL, $id=$_GET['id']);
$smarty->assign('datos',$datos);
$smarty->display('observaciones_editar.html');

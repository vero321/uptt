<?php
define('MOD', 'nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$id = $_GET['id'];

$smarty->assign('nucleos', bd_nucleos_datos($id));
$smarty->display('nucleos_eliminar.html');

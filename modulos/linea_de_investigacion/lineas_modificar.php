<?php
define('MOD', 'linea_de_investigacion'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();


$id = $_GET['id'];


$smarty->assign('lineas', bd_lineas_datos($id));

$smarty->display('lineas_modificar.html');

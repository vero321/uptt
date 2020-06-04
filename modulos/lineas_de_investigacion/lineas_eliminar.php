<?php
define('MOD', 'lineas_de_investigacion'); 
require_once '../../app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();



$id = $_GET['id'];

$smarty->assign('lineas', bd_lineas_datos($id));
$smarty->display('lineas_eliminar.html');

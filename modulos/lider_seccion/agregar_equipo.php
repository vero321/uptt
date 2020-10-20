<?php 
define('MOD', 'lider'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
$verificar=verificar();

$seccion = $_GET['seccion'];

$smarty->assign('seccion',$seccion);
$smarty->display('agregar_equipo.html');
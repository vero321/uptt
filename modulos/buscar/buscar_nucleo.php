<?php 
define('MOD', 'buscar'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$id = $_GET['id'];

$smarty->assign('nucleo', bd_nucleos_datos($id));
$smarty->assign('pnf', bd_nucleos_pnf_datos($id));
$smarty->display('buscar_nucleo.html');
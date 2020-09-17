<?php
define('MOD', 'lider'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$id = $_GET['id'];

$smarty->assign('lider', bd_lider_datos($id));
$smarty->display('lider_eliminar.html');

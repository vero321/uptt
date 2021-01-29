<?php 
define('MOD', 'buscar'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$id = $_GET['id'];

$datos = bd_documentos_ficha($id);
$smarty->assign('d', $datos);
$smarty->display('modal_busqueda.html');
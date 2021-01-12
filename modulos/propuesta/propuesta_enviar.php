<?php
define('MOD', 'propuesta'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$datos = $_GET;

$smarty->assign('datos',$datos);
$smarty->display('propuesta_enviar.html');
<?php
define('MOD', 'mensaje'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';




$smarty->assign('m',$_GET['m']);
$smarty->assign('d',$_GET['d']);
$smarty->display('mensaje_ingreso.html');


<?php 
define('MOD', 'buscar'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$smarty->display('buscar_avanzada.html');
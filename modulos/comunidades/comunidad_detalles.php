<?php 
define('MOD', 'comunidad'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
bd_comunidades_datos($_GET);
$smarty->display('comunidad_detalles.html');
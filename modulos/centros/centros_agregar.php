<?php 
define('MOD', 'centros'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

verificar();


$smarty->display('centros_agregar.html');

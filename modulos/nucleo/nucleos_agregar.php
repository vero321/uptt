<?php
define('MOD', 'nucleo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$smarty->display('nucleos_agregar.html');
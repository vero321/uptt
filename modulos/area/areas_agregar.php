<?php
define('MOD', 'area'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$smarty->display('areas_agregar.html');

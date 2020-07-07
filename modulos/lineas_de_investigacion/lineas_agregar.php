<?php
define('MOD', 'lineas_de_investigacion'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$smarty->display('lineas_agregar.html');

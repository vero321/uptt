<?php
define('MOD', 'lineas_de_investigacion'); 
require_once '../../app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$smarty->display('lineas_agregar.html');

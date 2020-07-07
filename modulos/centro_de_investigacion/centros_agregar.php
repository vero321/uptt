<?php 
define('MOD', 'centro_de_investigacion'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

verificar();


$smarty->display('centros_agregar.html');

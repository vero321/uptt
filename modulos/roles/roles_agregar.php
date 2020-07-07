<?php
define('MOD', 'roles'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$privilegios=bd_privilegios_datos();
$smarty->assign('privilegios',$privilegios);
$smarty->display('roles_agregar.html');

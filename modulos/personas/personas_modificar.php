<?php
define('MOD', 'personas'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

verificar();


$id = $_SESSION['u']['id'];

$personas= bd_personas_datos($id);

#vq($personas);

$smarty->assign ('personas', $personas);

$smarty->display('personas_modificar.html');

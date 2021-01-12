<?php
define('MOD', 'personas'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

verificar();


$id = $_SESSION['u']['id'];

#vq($id);

$personas= bd_personas_datos($id);

$smarty->assign('usuarios', bd_usuarios_datos($id));
$smarty->assign ('personas', $personas);
$smarty->display('personas_modificar.html');

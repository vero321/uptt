<?php
define('MOD', 'rol'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$id=$_GET['id'];
$rol=bd_roles_datos($id);
$privilegios=bd_roles__privilegios($id);



$smarty->assign('rol', $rol);
$smarty->assign('privilegios', $privilegios);
$smarty->display('roles_datos.html');
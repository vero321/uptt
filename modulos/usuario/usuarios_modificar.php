<?php
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

verificar();
$rol_listar=$_GET['5ea6fd8de7329'];
$id = $_GET['id'];
$usuario=bd_usuarios_datos($id);

$smarty->assign('usuario', $usuario);
$smarty->assign('rol_listar', $rol_listar);
$smarty->display('usuarios_modificar.html');

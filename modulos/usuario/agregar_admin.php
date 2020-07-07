<?php 
define('MOD', 'usuario'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

verificar();

$numero=$_SESSION['numero'];
$datos=$_SESSION['r'][$numero];
$rol_listar=$_GET['5ea6fd8de7329'];

$smarty->assign('rol_listar',$rol_listar);
$smarty->assign('datos',$datos);
$smarty->display('agregar_admin.html');
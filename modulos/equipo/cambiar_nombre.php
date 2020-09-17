<?php 
define('MOD', 'equipo'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

$verificar=verificar();
$id = $_GET['id'];

$smarty->assign('id',$id);
$smarty->display('cambiar_nombre.html');
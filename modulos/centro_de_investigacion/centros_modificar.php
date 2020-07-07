<?php 
define('MOD', 'centro_de_investigacion'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';

verificar();


$id = $_GET['id'];


$smarty->assign('centros', bd_centros_datos($id));

$smarty->display('centros_modificar.html');

<?php
define('MOD', 'pnf'); 
require_once '../../app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$id = $_GET['id'];


$smarty->assign('pnf', bd_pnf_datos($id));

$smarty->display('pnf_modificar.html');

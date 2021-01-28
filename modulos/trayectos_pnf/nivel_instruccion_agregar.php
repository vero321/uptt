<?php
define('MOD', 'trayectos_pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();


$id = $_GET['id'];


$smarty->assign('nivel_instruccion', bd_trayectos_pnf_datos($id));


$smarty->display('nivel_instruccion_agregar.html');	
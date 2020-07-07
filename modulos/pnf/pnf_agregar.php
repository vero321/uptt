<?php
define('MOD', 'pnf'); 
require_once '../config/app.php';
include_once APP.'/modulos/config/inicializacion.php';
verificar();

$smarty->display('pnf_agregar.html');

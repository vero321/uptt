<?php

define('MOD', 'inicio');
require_once '../config/app.php';
include_once APP."/modulos/config/inicializacion.php";

$_SESSION=[];

$smarty->assign('nucleos', bd_nucleos_datos());

$smarty->display('inicio.html');


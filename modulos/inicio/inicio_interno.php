<?php

define('MOD', 'inicio');
require_once '../config/app.php';
include_once APP."/modulos/config/inicializacion.php";

verificar();



$smarty->display('inicio_interno.html');

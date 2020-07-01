<?php
define('MOD', '');
require_once './app.php';

include_once APP.'/modulos/config/inicializacion.php';
verificar();



$smarty->display('inicio_interno.html');


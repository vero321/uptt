<?php
include_once APP . "/modulos/config/init.php";
setlocale(LC_ALL,'es_ES');
date_default_timezone_set('America/Caracas');
session_name('uptt');
session_start();

$config = parse_ini_file(APP.'/modulos/config/config.inc', true);

define("SMARTY",APP."/vendor/smarty/libs");

require_once APP.'/modulos/config/bd.php';
require_once APP.'/modulos/config/funciones.php';
require_once APP.'/vendor/smarty/libs/Smarty.class.php';
require_once APP.'/vendor/dBug/dBug.php';


$smarty= new smarty;
$smarty->assign('app',APP);
$smarty->compile_dir = APP.'/templates_c/';
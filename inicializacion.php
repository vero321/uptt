<?php
include_once 'init.php';
setlocale(LC_ALL,'es_ES');
date_default_timezone_set('America/Caracas');
session_name('uptt');
session_start();
$config = parse_ini_file('config/config.inc', true);


require_once 'bd.php';
require_once './funciones.php';
require_once ('vendor/smarty/libs/Smarty.class.php');
$smarty= new smarty;

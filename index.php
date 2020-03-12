<?php
include_once "./inicializacion.php";

$_SESSION=[];


$smarty->assign('nucleos', bd_nucleos_datos());
$smarty->display('inicio.html');

